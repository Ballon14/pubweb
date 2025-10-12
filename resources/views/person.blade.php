<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Data Person</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">
    <main class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl sm:text-3xl font-semibold text-center mb-6">Data Person</h1>

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">NIK</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Nama</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Usia</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">No. HP</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse ($data as $person)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $person['nik'] }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $person['nama'] }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $person['usia'] }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $person['no_hp'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-4 py-6 text-sm text-gray-500 text-center" colspan="4">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-10 ">
            <a href="/list-tugas"
                class="w-20 text-center mt-6 py-2 px-4 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition duration-150 shadow-md">
                Kembali
            </a>
        </div>
    </main>
</body>

</html>
