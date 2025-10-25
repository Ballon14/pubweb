<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">
                        <i class="fas fa-user-graduate text-indigo-600 mr-3"></i>
                        Daftar Mahasiswa
                    </h1>
                </div>
                <a href=""
                    class="group flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300">
                    <i class="fas fa-plus-circle group-hover:rotate-90 transition duration-300"></i>
                    Tambah Mahasiswa
                </a>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Search and Filter -->
            <div class="p-6 bg-gradient-to-r from-indigo-500 to-purple-600">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <h2 class="text-2xl font-bold text-white">
                        <i class="fas fa-table mr-2"></i>
                        Data Mahasiswa
                    </h2>
                    <div class="flex gap-3">
                        <div class="relative">
                            <input type="text" placeholder="Cari mahasiswa..."
                                class="pl-10 pr-4 py-2 rounded-lg border-2 border-white/30 bg-white/20 text-white placeholder-white/70 focus:outline-none focus:border-white focus:bg-white/30 transition">
                            <i class="fas fa-search absolute left-3 top-3 text-white/70"></i>
                        </div>
                        <button class="px-4 py-2 bg-white/20 text-white rounded-lg hover:bg-white/30 transition">
                            <i class="fas fa-filter mr-2"></i>Filter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 border-b-2 border-gray-200">
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-hashtag text-gray-400"></i>
                                    No
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-user text-gray-400"></i>
                                    Nama Lengkap
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-id-card text-gray-400"></i>
                                    NIM
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                                    Alamat
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-phone text-gray-400"></i>
                                    No. HP
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                    Email
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-info-circle text-gray-400"></i>
                                    Status
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">
                                <div class="flex items-center justify-center gap-2">
                                    <i class="fas fa-cogs text-gray-400"></i>
                                    Aksi
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php $no = 1; ?>
                        @foreach ($list as $mhs)
                            <tr class="hover:bg-indigo-50 transition duration-150 group">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-medium text-gray-900">{{ $no++ }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="flex-shrink-0 h-10 w-10 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full flex items-center justify-center text-white font-bold">
                                            {{ strtoupper(substr($mhs->nama_lengkap, 0, 1)) }}
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-gray-900">{{ $mhs->nama_lengkap }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="/mahasiswa/{{ $mhs->nim }}"
                                        class="text-sm text-gray-900 font-mono bg-gray-100 px-3 py-1 rounded-lg">{{ $mhs->nim }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm text-gray-700">{{ $mhs->alamat }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-700">{{ $mhs->no_hp }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-700">{{ $mhs->email }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($mhs->status == 'aktif')
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                            <i class="fas fa-circle text-green-500 mr-1 text-xs"></i>
                                            Aktif
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                            <i class="fas fa-circle text-red-500 mr-1 text-xs"></i>
                                            Tidak Aktif
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <a href=""
                                            class="group/edit inline-flex items-center gap-1 px-3 py-2 bg-blue-500 text-white text-xs font-semibold rounded-lg hover:bg-blue-600 hover:shadow-md transform hover:scale-105 transition duration-200">
                                            <i class="fas fa-edit"></i>
                                            <span>Edit</span>
                                        </a>
                                        <a href=""
                                            class="group/delete inline-flex items-center gap-1 px-3 py-2 bg-red-500 text-white text-xs font-semibold rounded-lg hover:bg-red-600 hover:shadow-md transform hover:scale-105 transition duration-200">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Hapus</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-600">
                        Menampilkan <span class="font-semibold">1-{{ count($list) }}</span> dari <span
                            class="font-semibold">{{ count($list) }}</span> data
                    </p>
                    <div class="flex gap-2">
                        <button
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                            <i class="fas fa-chevron-left mr-1"></i> Previous
                        </button>
                        <button
                            class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700 transition">
                            1
                        </button>
                        <button
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                            Next <i class="fas fa-chevron-right ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-8">
            <a href="/list-tugas"
                class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>
</body>

</html>
