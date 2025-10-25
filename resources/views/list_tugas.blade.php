<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tugas</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="flex items-center justify-center bg-gray-100">
            <div class="mb-10 text-center">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h1 class="text-4xl font-bold text-gray-800 mb-2">Daftar Tugas</h1>
                        <p class="text-gray-600">Tugas Praktikum Pemrograman Framework Laravel</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tasks Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($listTugas as $tugas)
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <!-- Card Header with Gradient -->
                    <div class="h-2 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>

                    <div class="p-6">
                        <!-- Title with Icon -->
                        <div class="flex items-start justify-between mb-3">
                            <h2
                                class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors duration-200 flex-1">
                                {{ $tugas->judul }}
                            </h2>
                            <span class="bg-indigo-100 text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full">
                                Selesai
                            </span>
                        </div>

                        <!-- Description -->
                        <p class="text-gray-600 mb-6 line-clamp-3 min-h-[4.5rem]">
                            {{ $tugas->deskripsi }}
                        </p>

                        <!-- Divider -->
                        <div class="border-t border-gray-100 mb-4"></div>

                        <!-- Actions -->
                        <div class="flex justify-between items-center">
                            <a href="{{ $tugas->link }}"
                                class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-medium transition-colors duration-200 group/link"
                                target="_blank">
                                <span>Lihat Tugas</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 group-hover/link:translate-x-1 transition-transform duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State (shown when no tasks) -->
        @if (count($listTugas) == 0)
            <div class="text-center py-16">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-gray-300 mb-4" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Belum Ada Tugas</h3>
                <p class="text-gray-600 mb-6">Mulai tambahkan tugas pertama Anda sekarang!</p>
                <button
                    class="bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    Tambah Tugas Pertama
                </button>
            </div>
        @endif
    </div>
</body>

</html>
