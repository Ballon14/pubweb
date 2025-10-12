<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Video Praktikum</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white-100 text-gray-800">
    <div class="m-6">
        <h1 class="text-4xl font-bold mb-4 text-blue-600">Data Video Praktikum</h1>
        <p class="mb-6">Data berikut berasal dari array yang dibuat dan dikirimkan dari VideosController.</p>

        <table class="table-auto border-collapse border border-gray-400 w-full text-sm text-left">
            <thead class="bg-white hover:bg-slate-200">
                <tr>
                    <th class="border border-gray-400 px-2 py-1 text-center">ID Video</th>
                    <th class="border border-gray-400 px-2 py-1 text-center">ID Author</th>
                    <th class="border border-gray-400 px-2 py-1 text-center">Deskripsi</th>
                    <th class="border border-gray-400 px-2 py-1 text-center">Upload Date</th>
                    <th class="border border-gray-400 px-2 py-1 text-center">Views</th>
                    <th class="border border-gray-400 px-2 py-1 text-center">Likes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listvideo as $index => $video)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-400 px-2 py-1">{{ $video['id_video'] }}</td>
                        <td class="border border-gray-400 px-2 py-1">{{ $video['id_author'] }}</td>
                        <td class="border border-gray-400 px-2 py-1 truncate" title="{{ $video['deskripsi'] }}">
                            {{ $video['deskripsi'] }}
                        </td>
                        <td class="border border-gray-400 px-2 py-1">{{ $video['upload_date'] }}</td>
                        <td class="border border-gray-400 px-2 py-1">{{ $video['views'] }}</td>
                        <td class="border border-gray-400 px-2 py-1">{{ $video['likes'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-10 ">
            <a href="/list-tugas"
                class="w-20 text-center mt-6 py-2 px-4 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition duration-150 shadow-md">
                Kembali
            </a>
        </div>
    </div>
</body>

</html>
