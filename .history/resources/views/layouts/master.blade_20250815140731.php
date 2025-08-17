<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'light-blue': {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .sidebar {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .main-content-area {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .sidebar-nav-item {
            transition: all 0.3s ease-in-out;
        }

        .dark-mode-transition {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
        }

        .dark .gradient-bg {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }

        <script>
            // Sidebar toggle logic
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const closeSidebar = document.getElementById('closeSidebar');
            const mainContentArea = document.getElementById('mainContentArea');

            function openSidebar() {
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.remove('hidden');
            }

            function closeSidebarFunc() {
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
            }
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    // Toggle hanya aktif di mobile
                    if (window.innerWidth < 768) {
                        if (sidebar.classList.contains('-translate-x-full')) {
                            openSidebar();
                        } else {
                            closeSidebarFunc();
                        }
                    }
                });
            }
            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', function() {
                    if (sidebar.classList.contains('-translate-x-full')) {
                        openSidebar();
                    }
                });
            }
            if (closeSidebar) {
                closeSidebar.addEventListener('click', closeSidebarFunc);
            }
            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', closeSidebarFunc);
            }
            // Atur tampilan awal dan saat resize
            function handleSidebarOnResize() {
                if (window.innerWidth < 768) {
                    sidebar.classList.add('-translate-x-full');
                    sidebarOverlay.classList.add('hidden');
                } else {
                    sidebar.classList.remove('-translate-x-full');
                    sidebarOverlay.classList.add('hidden');
                }
            }
            window.addEventListener('resize', handleSidebarOnResize);
            document.addEventListener('DOMContentLoaded', handleSidebarOnResize);
        </script>height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 40;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        }
    </style>
</head>

<body class="gradient-bg dark-mode-transition">
    <div id="sidebarOverlay" class="sidebar-overlay md:hidden"></div>
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div id="sidebar"
            class="w-64 bg-white dark:bg-slate-800 shadow-xl flex-shrink-0 sidebar transition-all duration-300 overflow-hidden glass-effect">
            <div class="p-4 flex items-center justify-between border-b border-light-blue-100 dark:border-slate-700">
                <div class="flex items-center space-x-6">
                    <div class="w-12 h-12 bg-light-blue-100 rounded-full flex items-center justify-center">
                        <img src="../public/assets/imgs/rev-removebg-preview.png">
                    </div>
                    <h1 class="text-xl font-bold text-gray-800 dark:text-white">Multimedia</h1>
                </div>
                <button id="closeSidebar"
                    class="md:hidden p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <nav class="mt-6 px-4">
                <div class="space-y-2">
                    <a href="dashboard.php"
                        class="flex items-center px-4 py-3 text-light-blue-600 bg-light-blue-50 dark:bg-light-blue-900 dark:text-light-blue-300 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>

                    <a href="anggota/anggota.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-users w-5 h-5 mr-3"></i>
                        <span class="font-medium">Manajemen Anggota</span>
                    </a>

                    <a href="daftar alat/daftar-alat.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-tools w-5 h-5 mr-3"></i>
                        <span class="font-medium">Manajemen Alat</span>
                    </a>

                    <a href="peminjaman/peminjaman-barang.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-handshake w-5 h-5 mr-3"></i>
                        <span class="font-medium">Peminjaman Barang</span>
                    </a>

                    <a href="penyewaan/penyewaan-barang.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-cash-register w-5 h-5 mr-3"></i>
                        <span class="font-medium">Penyewaan Barang</span>
                    </a>

                    <a href="legalisasi laptop/legalisasi_list.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-laptop w-5 h-5 mr-3"></i>
                        <span class="font-medium">Legalisasi Laptop</span>
                    </a>
                </div>

                <div class="mt-8 mb-4">
                    <h3 class="px-4 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Tugas & Izin
                    </h3>
                </div>

                <div class="space-y-2">
                    <a href="beri tugas/beri_tugas_form.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-clipboard-list w-5 h-5 mr-3"></i>
                        <span class="font-medium">Beri Tugas</span>
                    </a>

                    <a href="beri tugas/tugas_selesai_riwayat.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-check-double w-5 h-5 mr-3"></i>
                        <span class="font-medium">Riwayat Tugas</span>
                    </a>

                    <a href="izin_malam/izin-malam.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-moon w-5 h-5 mr-3"></i>
                        <span class="font-medium">Izin Malam</span>
                    </a>

                    <a href="izin_nugas/izin-nugas.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-book-open w-5 h-5 mr-3"></i>
                        <span class="font-medium">Izin Nugas</span>
                    </a>

                    <a href="./keuangan/manage_uang.php"
                        class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-money-bill-alt w-5 h-5 mr-3"></i>
                        <span class="font-medium">Keuangan</span>
                    </a>
                </div>

                <div class="mt-8 mb-4">
                    <h3 class="px-4 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Akun
                    </h3>
                </div>

                <div class="space-y-2">
                    <a href="../auth/logout.php"
                        class="flex items-center px-4 py-3 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                        <span class="font-medium">Logout</span>
                    </a>
                </div>
            </nav>
        </div>


        <!-- Main Content -->
        <div id="mainContentArea" class="flex-1 flex flex-col main-content-area">
            <!-- Header -->
               @include('partials.header')
            <main class="flex-1 p-4 md:p-6">
               @yield('content')
            </main>
            <!-- Modal Detail Tugas -->
            <!-- Modal Info User -->
            <div id="modalInfoUser"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
                <div
                    class="bg-white dark:bg-slate-800 rounded-lg shadow-lg w-full max-w-md p-6 relative animate-fade-in">
                    <button id="closeModalInfoUser"
                        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-xl">&times;</button>
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Informasi User</h2>
                    <div class="mb-2 flex items-center gap-3">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Foto:</span>
                        <span id="modalUserFotoBox">
                            <img id="modalUserFoto" src="" alt="Foto User"
                                class="w-10 h-10 rounded-full object-cover" style="display:none;">
                        </span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Nama Lengkap:</span>
                        <span id="modalUserNamaLengkap" class="ml-2 text-gray-800 dark:text-white"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Username:</span>
                        <span id="modalUserNama" class="ml-2 text-gray-800 dark:text-white"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Email:</span>
                        <span id="modalUserEmail" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                    <div class="mb-2" id="modalUserRoleBox" style="display:none;">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Role:</span>
                        <span id="modalUserRole" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                </div>
            </div>
            <div id="modalDetailTugas"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
                <div
                    class="bg-white dark:bg-slate-800 rounded-lg shadow-lg w-full max-w-md p-6 relative animate-fade-in">
                    <button id="closeModalDetailTugas"
                        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-xl">&times;</button>
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Detail Tugas</h2>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Nama Tugas:</span>
                        <span id="modalTugasNama" class="ml-2 text-gray-800 dark:text-white"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Deskripsi:</span>
                        <span id="modalTugasDeskripsi" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">User:</span>
                        <span id="modalTugasUser" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Status:</span>
                        <span id="modalTugasStatus" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                    <div class="mb-2" id="modalTugasTanggalBox" style="display:none;">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Tanggal Selesai:</span>
                        <span id="modalTugasTanggal" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                </div>
            </div>

            <!-- Modal for Anggota yang Izin Malam -->
            <div id="modalAnggotaIzinMalam"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
                <div
                    class="bg-white dark:bg-slate-800 rounded-lg shadow-lg w-full max-w-md p-6 relative animate-fade-in">
                    <button id="closeModalAnggotaIzinMalam"
                        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-xl">&times;</button>
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Detail Izin Malam</h2>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Nama:</span>
                        <span id="modalAnggotaNama" class="ml-2 text-gray-800 dark:text-white"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Tanggal:</span>
                        <span id="modalAnggotaTanggal" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Jam:</span>
                        <span id="modalAnggotaJam" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700 dark:text-gray-200">Alasan:</span>
                        <span id="modalAnggotaAlasan" class="ml-2 text-gray-700 dark:text-gray-300"></span>
                    </div>
                </div>
            </div>

            <script>
                // Modal logic
                const modal = document.getElementById('modalDetailTugas');
                const closeModalBtn = document.getElementById('closeModalDetailTugas');
                const namaSpan = document.getElementById('modalTugasNama');
                const deskSpan = document.getElementById('modalTugasDeskripsi');
                const userSpan = document.getElementById('modalTugasUser');
                const statusSpan = document.getElementById('modalTugasStatus');
                const tanggalBox = document.getElementById('modalTugasTanggalBox');
                const tanggalSpan = document.getElementById('modalTugasTanggal');

                // Tugas belum dikerjakan
                document.querySelectorAll('.detail-tugas-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        namaSpan.textContent = this.dataset.nama;
                        deskSpan.textContent = this.dataset.deskripsi;
                        userSpan.textContent = this.dataset.username;
                        statusSpan.textContent = this.dataset.status;
                        tanggalBox.style.display = 'none';
                        modal.classList.remove('hidden');
                    });
                });
                // Tugas selesai
                document.querySelectorAll('.detail-tugas-selesai-btn').forEach(div => {
                    div.addEventListener('click', function() {
                        namaSpan.textContent = this.dataset.nama;
                        deskSpan.textContent = this.dataset.deskripsi;
                        userSpan.textContent = this.dataset.username;
                        statusSpan.textContent = this.dataset.status;
                        if (this.dataset.tanggal) {
                            tanggalSpan.textContent = this.dataset.tanggal;
                            tanggalBox.style.display = '';
                        } else {
                            tanggalBox.style.display = 'none';
                        }
                        modal.classList.remove('hidden');
                    });
                });
                closeModalBtn.addEventListener('click', function() {
                    modal.classList.add('hidden');
                });
                window.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') modal.classList.add('hidden');
                });
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) modal.classList.add('hidden');
                });
          
                // Modal Info User logic
                const modalUser = document.getElementById('modalInfoUser');
                const closeModalUserBtn = document.getElementById('closeModalInfoUser');
                const userNamaSpan = document.getElementById('modalUserNama');
                const userNamaLengkapSpan = document.getElementById('modalUserNamaLengkap');
                const userEmailSpan = document.getElementById('modalUserEmail');
                const userRoleBox = document.getElementById('modalUserRoleBox');
                const userRoleSpan = document.getElementById('modalUserRole');
                const userFotoImg = document.getElementById('modalUserFoto');

                // User online
                document.querySelectorAll('.user-info-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        userNamaSpan.textContent = this.dataset.nama;
                        userNamaLengkapSpan.textContent = this.dataset.nama_lengkap || '-';
                        userEmailSpan.textContent = this.dataset.email;
                        if (this.dataset.role) {
                            userRoleSpan.textContent = this.dataset.role;
                            userRoleBox.style.display = '';
                        } else {
                            userRoleBox.style.display = 'none';
                        }
                        if (this.dataset.foto && this.dataset.foto !== '') {
                            userFotoImg.src = '../uploads/profiles/' + this.dataset.foto;
                            userFotoImg.style.display = '';
                        } else {
                            userFotoImg.src = '';
                            userFotoImg.style.display = 'none';
                        }
                        modalUser.classList.remove('hidden');
                    });
                });
                // Semua anggota
                document.querySelectorAll('.anggota-info-btn').forEach(tr => {
                    tr.addEventListener('click', function() {
                        userNamaSpan.textContent = this.dataset.nama;
                        userNamaLengkapSpan.textContent = '-';
                        userEmailSpan.textContent = this.dataset.email;
                        userRoleBox.style.display = 'none';
                        userFotoImg.src = '';
                        userFotoImg.style.display = 'none';
                        modalUser.classList.remove('hidden');
                    });
                });
                closeModalUserBtn.addEventListener('click', function() {
                    modalUser.classList.add('hidden');
                });
                window.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') modalUser.classList.add('hidden');
                });
                modalUser.addEventListener('click', function(e) {
                    if (e.target === modalUser) modalUser.classList.add('hidden');
                });
            </script>
            <script>
                // Modal logic for Anggota yang Izin Malam
                const modalAnggota = document.getElementById('modalAnggotaIzinMalam');
                const closeModalAnggotaBtn = document.getElementById('closeModalAnggotaIzinMalam');
                const anggotaNamaSpan = document.getElementById('modalAnggotaNama');
                const anggotaTanggalSpan = document.getElementById('modalAnggotaTanggal');
                const anggotaJamSpan = document.getElementById('modalAnggotaJam');
                const anggotaAlasanSpan = document.getElementById('modalAnggotaAlasan');

                document.querySelectorAll('.anggota-izin-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        anggotaNamaSpan.textContent = this.dataset.nama;
                        anggotaTanggalSpan.textContent = this.dataset.tanggal;
                        // fallback jika kosong/null
                        const jamMulai = this.dataset.jam_izin && this.dataset.jam_izin !== 'undefined' ? this
                            .dataset.jam_izin : '-';
                        const jamSelesai = this.dataset.jam_selesai_izin && this.dataset.jam_selesai_izin !==
                            'undefined' ? this.dataset.jam_selesai_izin : '-';
                        anggotaJamSpan.textContent = `${jamMulai} - ${jamSelesai}`;
                        anggotaAlasanSpan.textContent = this.dataset.alasan;
                        modalAnggota.classList.remove('hidden');
                    });
                });

                closeModalAnggotaBtn.addEventListener('click', function() {
                    modalAnggota.classList.add('hidden');
                });

                window.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') modalAnggota.classList.add('hidden');
                });

                modalAnggota.addEventListener('click', function(e) {
                    if (e.target === modalAnggota) modalAnggota.classList.add('hidden');
                });
            </script>
</body>

</html>
