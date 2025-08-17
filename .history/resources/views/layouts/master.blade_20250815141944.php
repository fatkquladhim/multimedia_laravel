   <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MULTIMEDIA</title> <!-- Sesuaikan judul per halaman -->
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
                function togglePeminjam() {
            const tipe = document.getElementById('tipe_peminjam').value;
            const formUmum = document.getElementById('form_umum');
            const formAnggota = document.getElementById('form_anggota');
            const namaUmum = document.getElementById('nama_peminjam');
            const kontakUmum = document.getElementById('kontak_peminjam');
            const idAnggota = document.getElementById('id_anggota');
            
            if (tipe === 'anggota') {
                formUmum.style.display = 'none';
                formAnggota.style.display = 'block';
                namaUmum.required = false;
                kontakUmum.required = false;
                idAnggota.required = true;
            } else {
                formUmum.style.display = 'block';
                formAnggota.style.display = 'none';
                namaUmum.required = true;
                kontakUmum.required = true;
                idAnggota.required = false;
            }
        }
        </script>
        <style>
            
            /* Styles from dashboard.php */
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

            /* Specific styles for forms/tables if needed */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                padding: 8px;
                border: 1px solid #ddd;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            .alert {
                padding: 10px;
                margin-bottom: 15px;
                border-radius: 4px;
            }

            .alert-success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
            }

            .alert-error,
            .alert-danger {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
            }

            .form-group {
                margin-bottom: 10px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="number"],
            input[type="date"],
            input[type="time"],
            select,
            textarea {
                width: 100%;
                max-width: 300px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            button {
                padding: 10px 15px;
                background-color: #0ea5e9;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0284c7;
            }

            a {
                text-decoration: none;
                color: #007bff;
            }

            a:hover {
                text-decoration: underline;
            }
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
                    <img src="../../public/assets/imgs/rev-removebg-preview.png">
                </div>
                <h1 class="text-xl font-bold text-gray-800 dark:text-white">Multimedia</h1>
            </div>
            <button id="closeSidebar" class="md:hidden p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <nav class="mt-6 px-4">
            <div class="space-y-2">
                <a href="../dashboard.php" class="flex items-center px-4 py-3 text-light-blue-600 bg-light-blue-50 dark:bg-light-blue-900 dark:text-light-blue-300 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="../anggota/anggota.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-users w-5 h-5 mr-3"></i>
                    <span class="font-medium">Manajemen Anggota</span>
                </a>

                <a href="../daftar alat/daftar-alat.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-tools w-5 h-5 mr-3"></i>
                    <span class="font-medium">Manajemen Alat</span>
                </a>

                <a href="../peminjaman/peminjaman-barang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-handshake w-5 h-5 mr-3"></i>
                    <span class="font-medium">Peminjaman Barang</span>
                </a>

                <a href="../penyewaan/penyewaan-barang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-cash-register w-5 h-5 mr-3"></i>
                    <span class="font-medium">Penyewaan Barang</span>
                </a>

                <a href="../anggota/anggota-wewenang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-user-shield w-5 h-5 mr-4"></i>
                    <span class="font-medium sidebar-text">Hak Akses Anggota</span>
                </a>
                <a href="../legalisasi laptop/legalisasi_list.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
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
                <a href="../beri tugas/beri_tugas_form.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-clipboard-list w-5 h-5 mr-3"></i>
                    <span class="font-medium">Beri Tugas</span>
                </a>

                <a href="../beri tugas/tugas_selesai_riwayat.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-check-double w-5 h-5 mr-3"></i>
                    <span class="font-medium">Riwayat Tugas</span>
                </a>

                <a href="../izin_malam/izin-malam.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-moon w-5 h-5 mr-3"></i>
                    <span class="font-medium">Izin Malam</span>
                </a>

                <a href="../izin_nugas/izin-nugas.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-book-open w-5 h-5 mr-3"></i>
                    <span class="font-medium">Izin Nugas</span>
                </a>
 
                <a href="../keuangan/manage_uang.php" class="flex items-center px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-light-blue-600 dark:hover:text-light-blue-400 hover:bg-light-blue-50 dark:hover:bg-slate-700 rounded-lg sidebar-nav-item hover-scale">
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
                <a href="../../auth/logout.php" class="flex items-center px-4 py-3 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900 rounded-lg sidebar-nav-item hover-scale">
                    <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                    <span class="font-medium">Logout</span>
                </a>
            </div>
        </nav>
    </div>
        <!-- Sidebar Overlay for Mobile -->
        <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black bg-opacity-40 hidden"></div>>
            <!-- Header -->
               @include('partials.header')
            <main class="flex-1 p-4 md:p-6">
               @yield('content')
            </main>
            @
        </body>
        <script>
            // Dark Mode Toggle
            const darkModeToggle = document.getElementById('darkModeToggle');
            const html = document.documentElement;

    // Check for saved theme preference or default to light mode
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        html.classList.add('dark');
    }

    darkModeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
    });

    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const closeSidebar = document.getElementById('closeSidebar');

    function toggleMobileSidebar() {
        sidebar.classList.toggle('active');
        sidebarOverlay.classList.toggle('active');
    }

    mobileMenuToggle.addEventListener('click', toggleMobileSidebar);
    closeSidebar.addEventListener('click', toggleMobileSidebar);
    sidebarOverlay.addEventListener('click', toggleMobileSidebar);

    // Desktop Sidebar Toggle
    const sidebarToggle = document.getElementById('sidebarToggle');
    const mainContentArea = document.getElementById('mainContentArea');
    let isSidebarOpen = true;

    sidebarToggle.addEventListener('click', () => {
        if (isSidebarOpen) {
            // Close sidebar
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-20');

            // Hide text content
            sidebar.querySelectorAll('span.font-medium, h3')
                .forEach(el => el.classList.add('hidden'));

            // Show only icons
            sidebar.querySelectorAll('i')
                .forEach(el => el.classList.add('mx-auto'));

            sidebarToggle.querySelector('i').classList.replace('fa-bars', 'fa-arrow-right');
        } else {
            // Open sidebar
            sidebar.classList.remove('w-20');
            sidebar.classList.add('w-64');

            // Show text content
            sidebar.querySelectorAll('span.font-medium, h3')
                .forEach(el => el.classList.remove('hidden'));

            // Reset icon alignment
            sidebar.querySelectorAll('i')
                .forEach(el => el.classList.remove('mx-auto'));

            sidebarToggle.querySelector('i').classList.replace('fa-arrow-right', 'fa-bars');
        }
        isSidebarOpen = !isSidebarOpen;
    });

    // Responsive behavior
    function handleResize() {
        if (window.innerWidth < 768) {
            // Mobile: Hide desktop sidebar toggle, show mobile menu
            sidebarToggle.classList.add('hidden');
            mobileMenuToggle.classList.remove('hidden');

            // Reset sidebar state for mobile
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        } else {
            // Desktop: Show desktop sidebar toggle, hide mobile menu
            sidebarToggle.classList.remove('hidden');
            mobileMenuToggle.classList.add('hidden');

            // Ensure sidebar is properly positioned for desktop
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        }
    }

    // Initial check
    handleResize();

    // Listen for resize events
    window.addEventListener('resize', handleResize);

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add loading animation to buttons
    document.querySelectorAll('button, a').forEach(element => {
        element.addEventListener('click', function() {
            if (!this.classList.contains('no-loading')) {
                this.style.opacity = '0.8';
                setTimeout(() => {
                    this.style.opacity = '1';
                }, 200);
            }
        });
    });
    
// penambahan untuk peminjaman dan penyewaan
    function togglePeminjam() {
            var tipe = document.getElementById('tipe_peminjam').value;
            if (tipe === 'umum') {
                document.getElementById('form_umum').style.display = 'block';
                document.getElementById('form_anggota').style.display = 'none';
                document.getElementById('nama_peminjam').required = true;
                document.getElementById('kontak_peminjam').required = true;
                document.getElementById('id_anggota').required = false;
            } else {
                document.getElementById('form_umum').style.display = 'none';
                document.getElementById('form_anggota').style.display = 'block';
                document.getElementById('nama_peminjam').required = false;
                document.getElementById('kontak_peminjam').required = false;
                document.getElementById('id_anggota').required = true;
            }
        }
        function togglePenyewa() {
            var tipe = document.getElementById('tipe_penyewa').value;
            if (tipe === 'umum') {
                document.getElementById('form_umum').style.display = 'block';
                document.getElementById('form_anggota').style.display = 'none';
                document.getElementById('nama_penyewa').required = true;
                document.getElementById('kontak_penyewa').required = true;
                document.getElementById('id_anggota').required = false;
            } else {
                document.getElementById('form_umum').style.display = 'none';
                document.getElementById('form_anggota').style.display = 'block';
                document.getElementById('nama_penyewa').required = false;
                document.getElementById('kontak_penyewa').required = false;
                document.getElementById('id_anggota').required = true;
            }
        }
                document.getElementById('searchInput').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#tableBody tr');
            
            rows.forEach(row => {
                const name = row.cells[1].textContent.toLowerCase();
                const contact = row.cells[2].textContent.toLowerCase();
                const alat = row.cells[4].textContent.toLowerCase();
                
                if (name.includes(filter) || contact.includes(filter) || alat.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Add smooth scroll behavior
        document.documentElement.style.scrollBehavior = 'smooth';
  
        // Panggil saat halaman dimuat
        window.onload = togglePeminjam;
        
        </script>
</html>
