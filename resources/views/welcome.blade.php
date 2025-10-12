<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Praktikum Pemrograman Framework - Data Diri</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center p-6">

        <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-sm border-t-4 border-indigo-500">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Data Diri Mahasiswa
            </h2>

            <div class="space-y-4">
                <div class="border-b pb-2">
                    <p class="text-sm font-medium text-gray-500">Nama</p>
                    <p class="text-lg font-semibold text-gray-900">Muhammad Iqbal Fatchurrohman</p>
                </div>

                <div class="border-b pb-2">
                    <p class="text-sm font-medium text-gray-500">NIM</p>
                    <p class="text-lg font-semibold text-gray-900">232520043</p>
                </div>

                <div>
                    <p class="text-sm font-medium text-gray-500">Kelas</p>
                    <p class="text-lg font-semibold text-gray-900">TI A</p>
                </div>

            </div>

            <a href="/list-tugas" class="block w-full text-center mt-6 py-2 px-4 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition duration-150 shadow-md">
                Lihat Penugasan
            </a>

            <div class="mt-8 pt-4 border-t text-center">
                <p class="text-xs text-gray-400">Tugas Praktikum Pemrograman Framework</p>
            </div>

        </div>
    </div>
</body>
</html>
