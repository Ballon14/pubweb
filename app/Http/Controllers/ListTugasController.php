<?php

namespace App\Http\Controllers;

use App\Models\ListTugas;
use Illuminate\Http\Request;

class ListTugasController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('q');
        $query = ListTugas::query();
        if ($q) {
            $query->where(function($sub) use ($q) {
                $sub->where('judul', 'like', "%$q%")
                    ->orWhere('deskripsi', 'like', "%$q%")
                    ->orWhere('link', 'like', "%$q%");
            });
        }
        $listTugas = $query->orderByDesc('created_at')->paginate(6)->appends($request->except('page'));
        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'listTugas' => $listTugas->items(),
                'pagination' => $listTugas->total() > 6 ? $listTugas->links()->render() : '',
                'total' => $listTugas->total(),
            ]);
        }
        return view('list_tugas', compact('listTugas'));
    }
}
