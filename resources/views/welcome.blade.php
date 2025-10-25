<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Praktikum Pemrograman Framework - Data Diri</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/three@0.152.2/build/three.min.js"></script>
    <style>
        /* Pastikan canvas BG tidak mengganggu konten utama */
        #bgThree {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: -10;
            display: block;
        }
    </style>
</head>

<body class="min-h-screen font-sans antialiased relative overflow-hidden">
    <!-- Background Three.js -->
    <canvas id="bgThree"></canvas>
    <div class="min-h-screen flex items-center justify-center p-6 relative">
        <div
            class="bg-white p-10 rounded-2xl shadow-2xl w-full max-w-md border-t-8 border-indigo-600 relative overflow-hidden">
            <div class="absolute top-0 right-0 mt-3 mr-3"><span
                    class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 font-semibold text-xs"><i
                        class="fas fa-laptop-code mr-1"></i> Pemrograman Laravel</span></div>
            <div class="flex flex-col items-center mb-7">
                <div
                    class="bg-gradient-to-br from-indigo-200 to-purple-200 rounded-full w-28 h-28 flex items-center justify-center shadow-lg mb-4">
                    <i class="fas fa-user-graduate text-4xl text-indigo-600"></i>
                </div>
                <h1 class="text-3xl md:text-4xl font-black text-gray-800 text-center mb-3 tracking-tight">Selamat Datang
                    👋</h1>
                <h2 class="text-lg text-gray-500 text-center font-medium mb-1">Tugas Praktikum Pemrograman Framework
                </h2>
                <p class="text-xs text-gray-400 text-center">Universitas Muhammadiyah Purworejo</p>
            </div>
            <div class="space-y-4 mb-7">
                <div class="flex flex-col gap-1">
                    <span class="text-xs font-medium text-gray-500">Nama</span>
                    <span class="text-lg font-bold text-gray-800">Muhammad Iqbal Fatchurrohman</span>
                </div>
                <div class="flex flex-col md:flex-row gap-3 items-center justify-between">
                    <div>
                        <span class="text-xs font-medium text-gray-500">NIM</span>
                        <span
                            class="ml-2 inline-block bg-indigo-100 text-indigo-800 text-[0.95rem] font-mono px-3 py-1 rounded-full shadow">232520043</span>
                    </div>
                    <div>
                        <span class="text-xs font-medium text-gray-500">Kelas</span>
                        <span
                            class="ml-2 inline-block bg-purple-100 text-purple-800 text-[0.95rem] font-semibold px-3 py-1 rounded-full shadow">TI
                            A</span>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <span class="text-xs font-medium text-gray-500">Semester</span>
                    <span class="text-base font-semibold text-gray-700">5</span>
                </div>
            </div>
            <a href="/list-tugas"
                class="block w-full text-center mt-7 py-3 px-4 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-500 text-white font-bold shadow-lg text-lg tracking-wider hover:from-indigo-700 hover:to-purple-600 transition duration-150">
                <i class="fas fa-tasks mr-2"></i> Lihat Penugasan
            </a>
            <div class="mt-9 pt-5 border-t text-center">
                <p class="text-xs text-gray-400">Tugas ini dibuat untuk memenuhi penilaian praktikum <span
                        class="font-semibold text-indigo-500">Pemrograman Framework</span>.<br> &copy; 2025 - Muhammad
                    Iqbal Fatchurrohman</p>
            </div>
        </div>
    </div>
    <script>
        // Three.js particles background
        let scene, camera, renderer, particles;
        let w = window.innerWidth,
            h = window.innerHeight;

        function initThreeBG() {
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(75, w / h, 0.1, 1000);
            camera.position.z = 160;
            renderer = new THREE.WebGLRenderer({
                canvas: document.getElementById('bgThree'),
                alpha: true,
                antialias: true
            });
            renderer.setClearColor(0x000000, 0);
            renderer.setSize(w, h, false);
            // PARTICLES
            const geometry = new THREE.BufferGeometry();
            const numParticles = 200;
            const positions = new Float32Array(numParticles * 3);
            for (let i = 0; i < numParticles; i++) {
                positions[i * 3] = (Math.random() - 0.5) * 320;
                positions[i * 3 + 1] = (Math.random() - 0.5) * 180;
                positions[i * 3 + 2] = (Math.random() - 0.5) * 180;
            }
            geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            const material = new THREE.PointsMaterial({
                color: 0x7c3aed,
                size: 3,
                transparent: true,
                opacity: .65
            });
            particles = new THREE.Points(geometry, material);
            scene.add(particles);
            animateParticles();
        }

        function animateParticles() {
            requestAnimationFrame(animateParticles);
            // animate - rotate cluster
            particles.rotation.y += 0.0019;
            particles.rotation.x += 0.0009;
            renderer.render(scene, camera);
        }
        window.addEventListener('resize', () => {
            w = window.innerWidth;
            h = window.innerHeight;
            camera.aspect = w / h;
            camera.updateProjectionMatrix();
            renderer.setSize(w, h, false);
        });
        window.setTimeout(initThreeBG, 100); // after DOM load
    </script>
</body>

</html>
