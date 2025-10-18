<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>List Tugas</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">
    <main class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl sm:text-3xl font-semibold text-center mb-6">Daftar Tugas yang Telah Dikerjakan</h1>

        <p class="text-sm text-gray-600 mb-4 text-center">Klik "Buka" untuk menuju halaman tugas terkait.</p>

        <div class="grid gap-6 md:grid-cols-2">
            <!-- Card: Video -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold">Video</h2>
                            <p class="text-sm text-gray-500">Halaman daftar video tugas</p>
                        </div>
                        <div class="text-sm text-gray-700 font-medium">
                            {{ isset($videos) ? count($videos) : '-' }}
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <a href="{{ url('/videos') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Buka Halaman Video</a>

                    @if(!empty($videos))
                        <div class="mt-4 space-y-2">
                            @foreach($videos as $i => $video)
                                @php
                                    $vTitle = $video['judul'] ?? (isset($video->judul) ? $video->judul : 'Video '.$loop->iteration);
                                    $vId = $video['id'] ?? (isset($video->id) ? $video->id : $i);
                                @endphp
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded">
                                    <div class="text-sm text-gray-800">{{ $vTitle }}</div>
                                    <a href="{{ url('/videos/'.$vId) }}" class="text-sm text-blue-600 hover:underline">Lihat</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <!-- Card: Person -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold">Person</h2>
                            <p class="text-sm text-gray-500">Halaman daftar person</p>
                        </div>
                        <div class="text-sm text-gray-700 font-medium">
                            {{ isset($persons) ? count($persons) : '-' }}
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <a href="{{ url('/biodata') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Buka Halaman Person</a>

                    @if(!empty($persons))
                        <div class="mt-4 space-y-2">
                            @foreach($persons as $person)
                                @php
                                    $pName = $person['nama'] ?? (isset($person->nama) ? $person->nama : 'Person');
                                    $pKey = $person['nik'] ?? (isset($person->nik) ? $person->nik : null);
                                @endphp
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded">
                                    <div class="text-sm text-gray-800">{{ $pName }}</div>
                                    @if($pKey)
                                        <a href="{{ url('/persons/'.$pKey) }}" class="text-sm text-green-600 hover:underline">Lihat</a>
                                    @else
                                        <span class="text-sm text-gray-400">Tidak ada ID</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold">Video</h2>
                            <p class="text-sm text-gray-500">Halaman daftar video tugas</p>
                        </div>
                        <div class="text-sm text-gray-700 font-medium">
                            {{ isset($videos) ? count($videos) : '-' }}
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <a href="{{ url('/analisis') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Buka Halaman Analisis</a>
                </div>
            </div>

        @if(empty($videos) && empty($persons))
            <div class="mt-6 text-center text-sm text-gray-500">Belum ada tugas yang di-list. Pastikan Anda mengirim data ke view.</div>
        @endif
    </main>
    <div class="mt-10 mx-auto text-center">
            <a href="/"
                class="w-20 text-center mt-6 py-2 px-4 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition duration-150 shadow-md">
                Kembalix
            </a>
        </div>
</body>

</html>
