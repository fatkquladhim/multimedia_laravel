<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia</title>
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

        .dark .glass-effect {
            background: rgba(30, 41, 59, 0.9);
        }

        .hover-scale {
            transition: transform 0.2s ease;
        }

        .hover-scale:hover {
            transform: scale(1.02);
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                z-index: 50;
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
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
            <div id="sidebar" class="w-64 bg-white dark:bg-slate-800 shadow-xl flex-shrink-0 sidebar transition-all duration-300 overflow-hidden glass-effect">
            <div class="p-4 flex items-center justify-between border-b border-light-blue-100 dark:border-slate-700">
                <div class="flex items-center space-x-6">
                    <div class="w-12 h-12 bg-light-blue-100 rounded-full flex items-center justify-center">
                        <img src="../public/assets/imgs/rev-removebg-preview.png">
                    </div>
                    <h1 class="text-xl font-bold text-gray-800 dark:text-white">Multimedia</h1>
                </div>
                <button id="closeSidebar" class="md:hidden p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <nav class="mt-6 px-4">
                <div class="space-y-2">
                    <a href="dashboard.php" class="flex items-center px-4 py-3 text-light-blue-600 bg-light-blue-50 dark:bg-light-blue-900 dark:text-light-blue-300 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>

                    <a href="anggota/anggota.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-users w-5 h-5 mr-3"></i>
                        <span class="font-medium">Manajemen Anggota</span>
                    </a>

                    <a href="daftar alat/daftar-alat.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-tools w-5 h-5 mr-3"></i>
                        <span class="font-medium">Manajemen Alat</span>
                    </a>

                    <a href="peminjaman/peminjaman-barang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-handshake w-5 h-5 mr-3"></i>
                        <span class="font-medium">Peminjaman Barang</span>
                    </a>

                    <a href="penyewaan/penyewaan-barang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-cash-register w-5 h-5 mr-3"></i>
                        <span class="font-medium">Penyewaan Barang</span>
                    </a>

                    <a href="legalisasi laptop/legalisasi_list.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
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
                    <a href="beri tugas/beri_tugas_form.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-clipboard-list w-5 h-5 mr-3"></i>
                        <span class="font-medium">Beri Tugas</span>
                    </a>

                    <a href="beri tugas/tugas_selesai_riwayat.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-check-double w-5 h-5 mr-3"></i>
                        <span class="font-medium">Riwayat Tugas</span>
                    </a>

                    <a href="izin_malam/izin-malam.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-moon w-5 h-5 mr-3"></i>
                        <span class="font-medium">Izin Malam</span>
                    </a>

                    <a href="izin_nugas/izin-nugas.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-book-open w-5 h-5 mr-3"></i>
                        <span class="font-medium">Izin Nugas</span>
                    </a>

                    <a href="./keuangan/manage_uang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
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
                    <a href="../auth/logout.php" class="flex items-center px-4 py-3 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900 rounded-lg sidebar-nav-item hover-scale">
                        <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                        <span class="font-medium">Logout</span>
                    </a>
                </div>
            </nav>
        </div>


        <!-- Main Content -->
        <div id="mainContentArea" class="flex-1 flex flex-col main-content-area">
            <!-- Header -->
           <header class="bg-white dark:bg-slate-800 shadow-sm p-4 md:p-6 glass-effect">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <!-- Mobile Menu Button -->
                        <button id="mobileMenuToggle" class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>

                        <!-- Desktop Sidebar Toggle -->
                        <button id="sidebarToggle" class="hidden md:block p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>

                        <div>
                            <p class="text-gray-600 dark:text-gray-400">Monday, 01 January 2024</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2 md:space-x-4">
                        <!-- Dark Mode Toggle -->
                        <button id="darkModeToggle" class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white focus:outline-none">
                            <i class="fas fa-moon text-xl dark:hidden"></i>
                            <i class="fas fa-sun text-xl hidden dark:block"></i>
                        </button>

                        <!-- <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white">
                            <i class="fas fa-bell text-xl"></i>
                        </button> -->
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center overflow-hidden">
                                <img src="../uploads/profiles/default_profile.jpg" alt="Profile Photo" class="w-full h-full object-cover rounded-full">
                            </div>
                            <div class="flex items-center space-x-2">
                                <a href="./profile/profile_view.php" class="flex items-center space-x-1 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                    <span class="font-medium text-gray-800 dark:text-white">Admin</span>
                                    <i class="fas fa-chevron-down text-gray-600 dark:text-gray-400 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 p-4 md:p-6">
                <!-- Welcome Section -->
                 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-8">
                      <!-- Card Total Anggota -->
            <a href="anggota/anggota.php" class="block">
                <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Total Anggota</p>
                            <p class="text-2xl font-bold text-light-blue-600 dark:text-light-blue-400">100</p>
                        </div>
                        <div class="w-12 h-12 bg-light-blue-100 dark:bg-light-blue-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-light-blue-600 dark:text-light-blue-400"></i>
                        </div>
                    </div>
                </div>
            </a>
            
                <a href="anggota/anggota.php?divisi=cyber" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Cyber</p>
                                <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">20</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-laptop-code text-blue-600 dark:text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="anggota/anggota.php?divisi=designgrafis" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Designgrafis</p>
                                <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">15</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-paint-brush text-purple-600 dark:text-purple-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="anggota/anggota.php?divisi=audiografi" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Audiografi</p>
                                <p class="text-2xl font-bold text-green-600 dark:text-green-400">10</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-headphones text-green-600 dark:text-green-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="anggota/anggota.php?divisi=videografi" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Videografi</p>
                                <p class="text-2xl font-bold text-red-600 dark:text-red-400">25</p>
                            </div>
                            <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-video text-red-600 dark:text-red-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="anggota/anggota.php?divisi=fotografi" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Fotografi</p>
                                <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-400">18</p>
                            </div>
                            <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-camera text-yellow-600 dark:text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="anggota/anggota.php?divisi=jurnalis" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Jurnalis</p>
                                <p class="2xl font-bold text-indigo-600 dark:text-indigo-400">12</p>
                            </div>
                            <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-newspaper text-indigo-600 dark:text-indigo-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mb-4">
            <!-- Tugas yang Belum Dikerjakan -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm animate-fade-in flex flex-col h-full">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800 dark:text-white">Tugas yang Belum Dikerjakan</h2>
                    <a href="beri tugas/tugas_belum_dikerjakan.php" class="text-light-blue-500 hover:text-light-blue-600 dark:text-light-blue-400 dark:hover:text-light-blue-300 font-medium">View All</a>
                </div>
                <div class="flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        
                                <div class="flex items-center p-3 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale justify-between">
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Desain Poster Acara
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user1)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Buat desain poster untuk acara tahunan.
                                        </div>
                                    </div>
                                    <button class="ml-4 px-3 py-1 bg-light-blue-600 hover:bg-light-blue-700 text-white rounded text-xs font-medium transition-colors detail-tugas-btn"
                                        data-nama="Desain Poster Acara"
                                        data-deskripsi="Buat desain poster untuk acara tahunan."
                                        data-username="user1"
                                        data-status="Belum Dikerjakan"
                                        >Detail</button>
                                </div>
                            
                                <div class="flex items-center p-3 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale justify-between">
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Edit Video Promosi
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user2)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Edit footage video untuk promosi media sosial.
                                        </div>
                                    </div>
                                    <button class="ml-4 px-3 py-1 bg-light-blue-600 hover:bg-light-blue-700 text-white rounded text-xs font-medium transition-colors detail-tugas-btn"
                                        data-nama="Edit Video Promosi"
                                        data-deskripsi="Edit footage video untuk promosi media sosial."
                                        data-username="user2"
                                        data-status="Belum Dikerjakan"
                                        >Detail</button>
                                </div>
                            
                                <div class="flex items-center p-3 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale justify-between">
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Tulis Artikel Blog
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user3)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Tulis artikel tentang tips fotografi untuk blog.
                                        </div>
                                    </div>
                                    <button class="ml-4 px-3 py-1 bg-light-blue-600 hover:bg-light-blue-700 text-white rounded text-xs font-medium transition-colors detail-tugas-btn"
                                        data-nama="Tulis Artikel Blog"
                                        data-deskripsi="Tulis artikel tentang tips fotografi untuk blog."
                                        data-username="user3"
                                        data-status="Belum Dikerjakan"
                                        >Detail</button>
                                </div>
                    </div>
                </div>
            </div>

            <!-- Riwayat Tugas Selesai (5 Terbaru) -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm animate-fade-in flex flex-col h-full">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800 dark:text-white">Riwayat Tugas Selesai</h2>
                    <a href="beri tugas/tugas_selesai_riwayat.php" class="text-light-blue-500 hover:text-light-blue-600 dark:text-light-blue-400 dark:hover:text-light-blue-300 font-medium"> View All</a>
                </div>
                <div class="flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        
                                <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale justify-between detail-tugas-selesai-btn"
                                    tabindex="0"
                                    data-nama="Riset Tren Desain"
                                    data-deskripsi="Melakukan riset tren desain grafis terbaru."
                                    data-username="user4"
                                    data-status="Selesai"
                                    data-tanggal="01 Jan 2024 10:30"
                                >
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Riset Tren Desain
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user4)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Melakukan riset tren desain grafis terbaru.
                                        </div>
                                        <div class="text-xs text-gray-400 mt-1">
                                            Selesai: 01 Jan 2024 10:30
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale justify-between detail-tugas-selesai-btn"
                                    tabindex="0"
                                    data-nama="Setup Peralatan Audio"
                                    data-deskripsi="Menyiapkan peralatan audio untuk rekaman podcast."
                                    data-username="user5"
                                    data-status="Selesai"
                                    data-tanggal="31 Dec 2023 15:00"
                                >
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Setup Peralatan Audio
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user5)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Menyiapkan peralatan audio untuk rekaman podcast.
                                        </div>
                                        <div class="text-xs text-gray-400 mt-1">
                                            Selesai: 31 Dec 2023 15:00
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale justify-between detail-tugas-selesai-btn"
                                    tabindex="0"
                                    data-nama="Fotografi Acara Kampus"
                                    data-deskripsi="Mengambil foto-foto di acara kampus."
                                    data-username="user6"
                                    data-status="Selesai"
                                    data-tanggal="30 Dec 2023 18:45"
                                >
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Fotografi Acara Kampus
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user6)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Mengambil foto-foto di acara kampus.
                                        </div>
                                        <div class="text-xs text-gray-400 mt-1">
                                            Selesai: 30 Dec 2023 18:45
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale justify-between detail-tugas-selesai-btn"
                                    tabindex="0"
                                    data-nama="Review Artikel Jurnalistik"
                                    data-deskripsi="Review dan koreksi artikel jurnalistik sebelum publikasi."
                                    data-username="user7"
                                    data-status="Selesai"
                                    data-tanggal="29 Dec 2023 11:00"
                                >
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Review Artikel Jurnalistik
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user7)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Review dan koreksi artikel jurnalistik sebelum publikasi.
                                        </div>
                                        <div class="text-xs text-gray-400 mt-1">
                                            Selesai: 29 Dec 2023 11:00
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale justify-between detail-tugas-selesai-btn"
                                    tabindex="0"
                                    data-nama="Pengembangan Website Divisi"
                                    data-deskripsi="Melanjutkan pengembangan fitur baru untuk website divisi."
                                    data-username="user8"
                                    data-status="Selesai"
                                    data-tanggal="28 Dec 2023 09:15"
                                >
                                    <div>
                                        <span class="font-medium text-gray-800 dark:text-white">
                                            Pengembangan Website Divisi
                                        </span>
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">(user8)</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                            Melanjutkan pengembangan fitur baru untuk website divisi.
                                        </div>
                                        <div class="text-xs text-gray-400 mt-1">
                                            Selesai: 28 Dec 2023 09:15
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Anggota yang Izin Malam dan User yang Online -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
            <!-- Anggota yang Izin Malam -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 md:p-6 shadow-sm animate-fade-in">
                <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white mb-6">Anggota yang Izin Malam</h3>
                <div class="space-y-4">
                    
                            
                            <div class="flex items-start justify-between p-4 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale anggota-izin-btn"
                                data-nama="Budi Santoso"
                                data-tanggal="01 Jan 2024"
                                data-jam_izin="22:00"
                                data-jam_selesai_izin="05:00"
                                data-alasan="Acara keluarga"
                            >
                                <div class="flex items-start space-x-3">
                                    <div class="flex gap-10">
                                        <h4 class="font-semibold text-gray-800 dark:text-white text-xs"> Nama:<br><span class="text-xs">Budi Santoso</span></h4>
                                        <div class="flex gap-4 flex-wrap">
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Tanggal: <br><span class="text-xs">01 Jan 2024</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Jam: <br><span class="text-xs">22:00 - 05:00</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Alasan: <br><span class="text-xs">Acara keluarga</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="flex items-start justify-between p-4 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale anggota-izin-btn"
                                data-nama="Siti Aminah"
                                data-tanggal="02 Jan 2024"
                                data-jam_izin="23:00"
                                data-jam_selesai_izin="06:00"
                                data-alasan="Sakit"
                            >
                                <div class="flex items-start space-x-3">
                                    <div class="flex gap-10">
                                        <h4 class="font-semibold text-gray-800 dark:text-white text-xs"> Nama:<br><span class="text-xs">Siti Aminah</span></h4>
                                        <div class="flex gap-4 flex-wrap">
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Tanggal: <br><span class="text-xs">02 Jan 2024</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Jam: <br><span class="text-xs">23:00 - 06:00</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Alasan: <br><span class="text-xs">Sakit</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="flex items-start justify-between p-4 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale anggota-izin-btn"
                                data-nama="Joko Susilo"
                                data-tanggal="03 Jan 2024"
                                data-jam_izin="21:30"
                                data-jam_selesai_izin="04:30"
                                data-alasan="Ada keperluan mendadak"
                            >
                                <div class="flex items-start space-x-3">
                                    <div class="flex gap-10">
                                        <h4 class="font-semibold text-gray-800 dark:text-white text-xs"> Nama:<br><span class="text-xs">Joko Susilo</span></h4>
                                        <div class="flex gap-4 flex-wrap">
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Tanggal: <br><span class="text-xs">03 Jan 2024</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Jam: <br><span class="text-xs">21:30 - 04:30</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-gray-400 text-xs">
                                                Alasan: <br><span class="text-xs">Ada keperluan mendadak</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="flex items-start justify-between p-4 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale anggota-izin-btn"
                                data-nama="Dewi Lestari"
                                data-tanggal="04 Jan 2024"
                                data-jam_izin="22:45"
                                data-jam_selesai_izin="05:30"
                                data-alasan="Pulang kampung"
                            >
                                <div class="flex items-start space-x-3">
                                    <div class="flex gap-10">
                                        <h4 class="font-semibold text-gray-800 dark:text-white text-xs"> Nama:<br><span class="text-xs">Dewi Lestari</span></h4>
                                        <div class="flex gap-4 flex-wrap">
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Tanggal: <br><span class="text-xs">04 Jan 2024</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Jam: <br><span class="text-xs">22:45 - 05:30</span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Alasan: <br><span class="text-xs">Pulang kampung</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                </div>
            </div>

              <!-- Bagian User Online -->
   <div class="bg-white dark:bg-slate-800 rounded-xl p-4 md:p-6 shadow-sm animate-fade-in">
       <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white mb-6">User yang Online</h3>
       <div class="space-y-2">
           
                   <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale cursor-pointer user-info-btn"
                        data-nama="user1"
                        data-email="user1@example.com"
                        data-role="USER"
                        data-nama_lengkap="User Satu"
                        data-foto="user1.jpg"
                   >
                       <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                       <span class="font-medium text-gray-800 dark:text-white">
                           user1 
                           (USER)
                       </span>
                   </div>
                   <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale cursor-pointer user-info-btn"
                        data-nama="user2"
                        data-email="user2@example.com"
                        data-role="USER"
                        data-nama_lengkap="User Dua"
                        data-foto="user2.jpg"
                   >
                       <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                       <span class="font-medium text-gray-800 dark:text-white">
                           user2 
                           (USER)
                       </span>
                   </div>
                   <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale cursor-pointer user-info-btn"
                        data-nama="user3"
                        data-email="user3@example.com"
                        data-role="USER"
                        data-nama_lengkap="User Tiga"
                        data-foto="user3.jpg"
                   >
                       <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                       <span class="font-medium text-gray-800 dark:text-white">
                           user3 
                           (USER)
                       </span>
                   </div>
                   <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale cursor-pointer user-info-btn"
                        data-nama="user4"
                        data-email="user4@example.com"
                        data-role="USER"
                        data-nama_lengkap="User Empat"
                        data-foto="user4.jpg"
                   >
                       <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                       <span class="font-medium text-gray-800 dark:text-white">
                           user4 
                           (USER)
                       </span>
                   </div>
                   <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale cursor-pointer user-info-btn"
                        data-nama="user5"
                        data-email="user5@example.com"
                        data-role="USER"
                        data-nama_lengkap="User Lima"
                        data-foto="user5.jpg"
                   >
                       <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                       <span class="font-medium text-gray-800 dark:text-white">
                           user5 
                           (USER)
                       </span>
                   </div>
       </div>
   </div>
        </div>

        <!-- Daftar Semua Anggota dihapus sesuai permintaan -->
    </main>
    <!-- Modal Detail Tugas -->
    <!-- Modal Info User -->
    <div id="modalInfoUser" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg w-full max-w-md p-6 relative animate-fade-in">
            <button id="closeModalInfoUser" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-xl">&times;</button>
            <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Informasi User</h2>
            <div class="mb-2 flex items-center gap-3">
                <span class="font-semibold text-gray-700 dark:text-gray-200">Foto:</span>
                <span id="modalUserFotoBox">
                    <img id="modalUserFoto" src="" alt="Foto User" class="w-10 h-10 rounded-full object-cover" style="display:none;">
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
    <div id="modalDetailTugas" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg w-full max-w-md p-6 relative animate-fade-in">
            <button id="closeModalDetailTugas" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-xl">&times;</button>
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
    <div id="modalAnggotaIzinMalam" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg w-full max-w-md p-6 relative animate-fade-in">
            <button id="closeModalAnggotaIzinMalam" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-xl">&times;</button>
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
    </script>
    <script>
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
            const jamMulai = this.dataset.jam_izin && this.dataset.jam_izin !== 'undefined' ? this.dataset.jam_izin : '-';
            const jamSelesai = this.dataset.jam_selesai_izin && this.dataset.jam_selesai_izin !== 'undefined' ? this.dataset.jam_selesai_izin : '-';
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
