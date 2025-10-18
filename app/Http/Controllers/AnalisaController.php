<?php

namespace App\Http\Controllers;

class AnalisaController extends Controller
{
    public function tampilkanHasil()
    {
        $dataPegawai = [
            [
                'nama' => 'Drs. Bambang Setyo Budiarso',
                'nilai' => ['kinerja' => 65, 'disiplin' => 55, 'kreativitas' => 72, 'keahlian' => 90, 'kepedulian' => 75]
            ],
            [
                'nama' => 'Faisal Heryanto',
                'nilai' => ['kinerja' => 70, 'disiplin' => 90, 'kreativitas' => 50, 'keahlian' => 95, 'kepedulian' => 50]
            ],
            [
                'nama' => 'Iyan Ruspiansan',
                'nilai' => ['kinerja' => 100, 'disiplin' => 95, 'kreativitas' => 95, 'keahlian' => 95, 'kepedulian' => 95]
            ]
        ];

        $dataDiproses = collect($dataPegawai)->map(function ($pegawai) {
            $rataRata = collect($pegawai['nilai'])->avg();
            $pegawai['rata_rata'] = round($rataRata, 2);
            return $pegawai;
        });

        $hasilAnalisa = $dataDiproses
            ->sortByDesc('rata_rata')
            ->values()
            ->map(function ($pegawai, $key) {
                $pegawai['peringkat'] = $key + 1;
                return $pegawai;
            });

            return view('analisis', ['hasilAnalisa' => $hasilAnalisa]);
    }
}
