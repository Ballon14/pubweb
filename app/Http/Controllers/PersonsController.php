<?php

namespace App\Http\Controllers;


class PersonsController extends Controller
{

    public function person(){
        $data= [
            [
                "nik" => "1234567890",
                "nama" => "Budi Santoso",
                "usia" => 20,
                "no_hp" => "081234567890",
            ],
            [
                "nik" => "0987654321",
                "nama" => "Siti Aminah",
                "usia" => 22,
                "no_hp" => "089876543210",
            ]
        ];
        return view('person', ['data' => $data]);
    }
}
