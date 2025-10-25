<?php

namespace App\Http\Controllers;

use App\Models\ListTugas;
use Illuminate\Http\Request;

class ListTugasController extends Controller
{
    public function index()
    {
        $listTugas = ListTugas::all();
        return view('list_tugas', compact('listTugas'));
    }
}
