<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tugas</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">
                        <i class="fas fa-tasks text-indigo-600 mr-3"></i>
                        Daftar Tugas
                    </h1>
                    <p class="text-gray-600">Tugas Praktikum Pemrograman Framework Laravel</p>
                </div>
                <a href="/admin"
                    class="group flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300">
                    <i class="fas fa-plus-circle group-hover:rotate-90 transition duration-300"></i>
                    Tambah Tugas Baru
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500 hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Total Tugas</p>
                        <h3 class="text-3xl font-bold text-gray-800 mt-1" id="totalTugas">{{ count($listTugas) }}</h3>
                    </div>
                    <div class="bg-blue-100 rounded-full p-4">
                        <i class="fas fa-clipboard-list text-blue-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500 hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Semester</p>
                        <h3 class="text-3xl font-bold text-gray-800 mt-1">5</h3>
                    </div>
                    <div class="bg-purple-100 rounded-full p-4">
                        <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter and Search Section -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex-1 w-full md:w-auto">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Cari tugas..."
                            class="w-full pl-12 pr-4 py-3 rounded-lg border-2 border-gray-200 focus:border-indigo-500 focus:outline-none transition">
                        <i class="fas fa-search absolute left-4 top-4 text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Grid -->
        <div id="tasksGridContainer">
            @if (count($listTugas) > 0)
                <div id="tasksGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($listTugas as $index => $tugas)
                        <div
                            class="bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden group transform hover:-translate-y-2">
                            <!-- Card Header with Gradient and Number -->
                            <div class="relative h-32 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-600 p-6">
                                <div class="absolute top-4 right-4">
                                    <div
                                        class="bg-white/20 backdrop-blur-sm rounded-full w-12 h-12 flex items-center justify-center">
                                        <span class="text-white font-bold text-lg">#{{ $index + 1 }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-start gap-3 mb-4">
                                    <div class="bg-indigo-100 rounded-lg p-2 mt-1">
                                        <i class="fas fa-file-alt text-indigo-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h2
                                            class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors duration-200 line-clamp-2">
                                            {{ $tugas->judul }}
                                        </h2>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-6 line-clamp-3 min-h-[4.5rem] text-sm leading-relaxed">
                                    {{ $tugas->deskripsi }}
                                </p>
                                <div class="flex items-center gap-4 mb-4 text-sm text-gray-500">
                                    <div class="flex items-center gap-1">
                                        <i class="fas fa-calendar-alt text-indigo-500"></i>
                                        <span>{{ $tugas->created_at ? \Carbon\Carbon::parse($tugas->created_at)->format('d M Y') : '-' }}</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <i class="fas fa-code text-indigo-500"></i>
                                        <span>Laravel</span>
                                    </div>
                                </div>
                                <div class="border-t border-gray-100 mb-4"></div>
                                <div class="flex gap-3">
                                    <a href="{{ $tugas->link ?? '#' }}"
                                        class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 group/link transform hover:scale-105 shadow-md hover:shadow-lg">
                                        <i class="fas fa-eye"></i>
                                        <span>Lihat Tugas</span>
                                        <i
                                            class="fas fa-arrow-right text-xs group-hover/link:translate-x-1 transition-transform duration-200"></i>
                                    </a>
                                    <button
                                        class="px-4 py-3 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-2xl shadow-xl p-16 text-center">
                    <div class="max-w-md mx-auto">
                        <div
                            class="bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full w-32 h-32 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-clipboard-list text-indigo-600 text-5xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Belum Ada Tugas</h3>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Mulai tambahkan tugas pertama Anda dan kelola semua aktivitas praktikum dengan mudah!
                        </p>
                    </div>
                </div>
            @endif
        </div>
        <div id="paginationContainer">
            @if ($listTugas->total() > 6 && $listTugas->hasPages())
                {!! $listTugas->links() !!}
            @endif
        </div>
        <script>
            // AJAX Search Handler
            document.addEventListener('DOMContentLoaded', function() {
                const input = document.getElementById('searchInput');
                const gridContainer = document.getElementById('tasksGridContainer');
                const paginationContainer = document.getElementById('paginationContainer');
                const totalTugas = document.getElementById('totalTugas');
                let timer;
                let q = '';
                input.addEventListener('input', function(e) {
                    q = input.value;
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        fetchTugas(q, 1);
                    }, 300);
                });
                paginationContainer.addEventListener('click', function(e) {
                    if (e.target.tagName === 'A' || (e.target.parentElement && e.target.parentElement
                            .tagName === 'A')) {
                        e.preventDefault();
                        let el = e.target;
                        if (el.tagName !== 'A') el = el.closest('a');
                        if (!el) return;
                        const url = new URL(el.href);
                        const page = url.searchParams.get('page') || 1;
                        fetchTugas(q, page);
                    }
                });

                function fetchTugas(search, page) {
                    let url = `/list-tugas?q=${encodeURIComponent(search||'')}&page=${page}`;
                    fetch(url, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            renderTasks(data.listTugas);
                            renderPagination(data.pagination);
                            if (totalTugas) totalTugas.textContent = data.total;
                        });
                }

                function renderTasks(listTugas) {
                    let html = '';
                    if (listTugas.length > 0) {
                        html += '<div id="tasksGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';
                        listTugas.forEach((tugas, idx) => {
                            html +=
                                `<div class=\"bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden group transform hover:-translate-y-2\">` +
                                `<div class=\"relative h-32 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-600 p-6\">` +
                                `<div class=\"absolute top-4 right-4\">` +
                                `<div class=\"bg-white/20 backdrop-blur-sm rounded-full w-12 h-12 flex items-center justify-center\">` +
                                `<span class=\"text-white font-bold text-lg\">#${idx+1}</span>` +
                                `</div>` +
                                `</div>` +
                                `</div>` +
                                `<div class=\"p-6\">` +
                                `<div class=\"flex items-start gap-3 mb-4\">` +
                                `<div class=\"bg-indigo-100 rounded-lg p-2 mt-1\">` +
                                `<i class=\"fas fa-file-alt text-indigo-600\"></i>` +
                                `</div>` +
                                `<div class=\"flex-1\">` +
                                `<h2 class=\"text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors duration-200 line-clamp-2\">${tugas.judul}</h2>` +
                                `</div>` +
                                `</div>` +
                                `<p class=\"text-gray-600 mb-6 line-clamp-3 min-h-[4.5rem] text-sm leading-relaxed\">${tugas.deskripsi||''}</p>` +
                                `<div class=\"flex items-center gap-4 mb-4 text-sm text-gray-500\">` +
                                `<div class=\"flex items-center gap-1\">` +
                                `<i class=\"fas fa-calendar-alt text-indigo-500\"></i>` +
                                `<span>${tugas.created_at ? (new Date(tugas.created_at)).toLocaleDateString('id-ID', {day:'2-digit', month:'short', year:'numeric'}) : '-'}</span>` +
                                `</div>` +
                                `<div class=\"flex items-center gap-1\">` +
                                `<i class=\"fas fa-code text-indigo-500\"></i>` +
                                `<span>Laravel</span>` +
                                `</div>` +
                                `</div>` +
                                `<div class=\"border-t border-gray-100 mb-4\"></div>` +
                                `<div class=\"flex gap-3\">` +
                                `<a href=\"${tugas.link||'#'}\" class=\"flex-1 inline-flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 group/link transform hover:scale-105 shadow-md hover:shadow-lg\">` +
                                `<i class=\"fas fa-eye\"></i>` +
                                `<span>Lihat Tugas</span>` +
                                `<i class=\"fas fa-arrow-right text-xs group-hover/link:translate-x-1 transition-transform duration-200\"></i>` +
                                `</a>` +
                                `<button class=\"px-4 py-3 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition-colors duration-200\">` +
                                `<i class=\"fas fa-ellipsis-v\"></i>` +
                                `</button>` +
                                `</div>` +
                                `</div>` +
                                `</div>`;
                        });
                        html += '</div>';
                    } else {
                        html =
                            `<div class=\"bg-white rounded-2xl shadow-xl p-16 text-center\"><div class=\"max-w-md mx-auto\"><div class=\"bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full w-32 h-32 flex items-center justify-center mx-auto mb-6\"><i class=\"fas fa-clipboard-list text-indigo-600 text-5xl\"></i></div><h3 class=\"text-2xl font-bold text-gray-800 mb-3\">Belum Ada Tugas</h3><p class=\"text-gray-600 mb-8 leading-relaxed\">Mulai tambahkan tugas pertama Anda dan kelola semua aktivitas praktikum dengan mudah!</p></div></div>`;
                    }
                    gridContainer.innerHTML = html;
                }

                function renderPagination(paginationHtml) {
                    paginationContainer.innerHTML = paginationHtml || '';
                }
            });
        </script>

        <!-- Back Button -->
        <div class="mt-8 text-center">
            <a href="/"
                class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</body>

</html>
