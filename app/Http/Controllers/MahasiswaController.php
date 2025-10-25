<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $list = Mahasiswa::all();

        return view('list_mahasiswa', ['list' => $list]);
    }

    public function showByNim($nim){
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('detail_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
