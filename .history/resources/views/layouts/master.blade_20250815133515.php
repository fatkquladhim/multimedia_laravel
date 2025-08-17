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
     @include('partials.header')
    <main class="flex-1 p-4 md:p-6">
        
    </main>
    @include('partials.footer')
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
