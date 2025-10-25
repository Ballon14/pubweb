<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Praktikum - Hasil Analisa</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-4xl mx-auto p-6 sm:p-8">
        <h1 class="text-center text-lg sm:text-xl font-semibold mb-6">Hasil Analisa</h1>

        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead>
                        <tr class="bg-indigo-600 text-white">
                            <th class="w-16 px-4 py-3 text-center">Peringkat</th>
                            <th class="px-4 py-3 text-left">Nama Pegawai</th>
                            <th class="w-28 px-4 py-3 text-center">Hasil Kinerja</th>
                            <th class="w-24 px-4 py-3 text-center">Kedisiplinan</th>
                            <th class="w-24 px-4 py-3 text-center">Kreativitas</th>
                            <th class="w-24 px-4 py-3 text-center">Keahlian</th>
                            <th class="w-24 px-4 py-3 text-center">Kepedulian</th>
                            <th class="w-32 px-4 py-3 text-center">Nilai Rata-rata</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($hasilAnalisa ?? [] as $data)
                            <tr>
                                <td class="px-4 py-3 text-center">
                                    @php
                                        $rankClass = 'bg-indigo-400 text-white';
                                        if (isset($data['peringkat'])) {
                                            if ($data['peringkat'] == 1) {
                                                $rankClass = 'bg-yellow-400 text-yellow-900';
                                            } elseif ($data['peringkat'] == 2) {
                                                $rankClass = 'bg-slate-300 text-slate-900';
                                            } elseif ($data['peringkat'] == 3) {
                                                $rankClass = 'bg-amber-300 text-amber-900';
                                            }
                                        }
                                    @endphp
                                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full font-bold {{ $rankClass }}">{{ $data['peringkat'] ?? '-' }}</span>
                                </td>
                                <td class="px-4 py-3 font-medium text-gray-900">{{ $data['nama'] ?? '-' }}</td>
                                <td class="px-4 py-3 text-center text-gray-600">{{ $data['nilai']['kinerja'] ?? '-' }}</td>
                                <td class="px-4 py-3 text-center text-gray-600">{{ $data['nilai']['disiplin'] ?? '-' }}</td>
                                <td class="px-4 py-3 text-center text-gray-600">{{ $data['nilai']['kreativitas'] ?? '-' }}</td>
                                <td class="px-4 py-3 text-center text-gray-600">{{ $data['nilai']['keahlian'] ?? '-' }}</td>
                                <td class="px-4 py-3 text-center text-gray-600">{{ $data['nilai']['kepedulian'] ?? '-' }}</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="inline-block px-2 py-1 bg-blue-50 text-blue-600 rounded-md font-semibold">
                                        {{ isset($data['rata_rata']) ? number_format($data['rata_rata'], 2) : '-' }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-4 py-10 text-center text-gray-500">Tidak ada data analisa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            <a href="/list-tugas" class="inline-block mt-4 px-4 py-2 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition">
                Kembali
            </a>
        </div>
    </div>
</body>

</html>2
