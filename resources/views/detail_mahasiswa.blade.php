<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">
                    <i class="fas fa-user-circle text-indigo-600 mr-3"></i>
                    Detail Mahasiswa
                </h1>
                <p class="text-gray-600">Informasi lengkap data mahasiswa</p>
            </div>
        </div>

        <!-- Profile Card -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Header Card with Gradient -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-6 text-center">
                    <p class="text-2xl font-semibold text-white">Data Mahasiswa</p>
                </div>

                <!-- Information Section -->
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div
                            class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100 hover:shadow-lg transition duration-300">
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-500 rounded-lg p-3 mt-1">
                                    <i class="fas fa-user text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Nama
                                        Lengkap</p>
                                    <p class="text-lg font-bold text-gray-800">{{ $mahasiswa->nama_lengkap }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- NIM -->
                        <div
                            class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100 hover:shadow-lg transition duration-300">
                            <div class="flex items-start gap-4">
                                <div class="bg-purple-500 rounded-lg p-3 mt-1">
                                    <i class="fas fa-id-card text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">NIM</p>
                                    <p class="text-lg font-bold text-gray-800 font-mono">{{ $mahasiswa->nim }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 hover:shadow-lg transition duration-300">
                            <div class="flex items-start gap-4">
                                <div class="bg-green-500 rounded-lg p-3 mt-1">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Email
                                    </p>
                                    <p class="text-lg font-bold text-gray-800 break-all">{{ $mahasiswa->email }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- No. HP -->
                        <div
                            class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-6 border border-yellow-100 hover:shadow-lg transition duration-300">
                            <div class="flex items-start gap-4">
                                <div class="bg-orange-500 rounded-lg p-3 mt-1">
                                    <i class="fas fa-phone text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">No. HP
                                    </p>
                                    <p class="text-lg font-bold text-gray-800">{{ $mahasiswa->no_hp }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat (Full Width) -->
                        <div
                            class="md:col-span-2 bg-gradient-to-br from-cyan-50 to-blue-50 rounded-xl p-6 border border-cyan-100 hover:shadow-lg transition duration-300">
                            <div class="flex items-start gap-4">
                                <div class="bg-cyan-500 rounded-lg p-3 mt-1">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Alamat
                                    </p>
                                    <p class="text-lg font-bold text-gray-800">{{ $mahasiswa->alamat }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Status -->
                        <div
                            class="md:col-span-2 bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl p-6 border border-pink-100 hover:shadow-lg transition duration-300">
                            <div class="flex items-start gap-4">
                                <div class="bg-pink-500 rounded-lg p-3 mt-1">
                                    <i class="fas fa-info-circle text-white text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-2">Status
                                    </p>
                                    @if ($mahasiswa->status == 'aktif')
                                        <span
                                            class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-green-100 text-green-800">
                                            <i class="fas fa-circle text-green-500 mr-2 text-xs animate-pulse"></i>
                                            Aktif
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-red-100 text-red-800">
                                            <i class="fas fa-circle text-red-500 mr-2 text-xs"></i>
                                            Tidak Aktif
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex flex-wrap gap-4 justify-center">
                        <a href="/mahasiswa"
                            class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300">
                            <i class="fas fa-arrow-left"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
