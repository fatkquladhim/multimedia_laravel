@extends('ex.master')
@section('content')  
            <main class="flex-1 p-4 md:p-6">
                <!-- Welcome Section -->
                 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-8">
                      <!-- Card Total Anggota -->
            <a href="{{ route('anggota.index') }}" class="block">
                <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Total Anggota</p>
                            <p class="text-2xl font-bold text-light-blue-600 dark:text-light-blue-400">{{ $anggota_count }}</p>
                        </div>
                        <div class="w-12 h-12 bg-light-blue-100 dark:bg-light-blue-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-light-blue-600 dark:text-light-blue-400"></i>
                        </div>
                    </div>
                </div>
            </a>
            @php
            $divisi_icons = [
                'Cyber' => 'fas fa-laptop-code',
                'Designgrafis' => 'fas fa-paint-brush',
                'Audiografi' => 'fas fa-headphones',
                'Videografi' => 'fas fa-video',
                'Fotografi' => 'fas fa-camera',
                'Jurnalis' => 'fas fa-newspaper'
            ];
            $divisi_colors = [
                'Cyber' => 'blue',
                'Designgrafis' => 'purple',
                'Audiografi' => 'green',
                'Videografi' => 'red',
                'Fotografi' => 'yellow',
                'Jurnalis' => 'indigo'
            ];
            @endphp
            @foreach ($divisi_list as $divisi)
                @php
                    $count = $anggota_per_divisi[$divisi] ?? 0;
                    $icon = $divisi_icons[$divisi] ?? 'fas fa-users';
                    $color = $divisi_colors[$divisi] ?? 'gray';
                    $divisi_param = strtolower($divisi);
                @endphp
                <a href="{{ route('anggota.index', ['divisi' => $divisi_param]) }}" class="block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Anggota {{ $divisi }}</p>
                                <p class="text-2xl font-bold text-{{ $color }}-600 dark:text-{{ $color }}-400">{{ $count }}</p>
                            </div>
                            <div class="w-12 h-12 bg-{{ $color }}-100 dark:bg-{{ $color }}-900 rounded-lg flex items-center justify-center">
                                <i class="{{ $icon }} text-{{ $color }}-600 dark:text-{{ $color }}-400"></i>
                            </div>
                        </div>
                    </div>
                </a>
            <div id="mainContentArea" class="flex-1 flex flex-col main-content-area">        
                <main class="flex-1 p-4 md:p-6">
                    <!-- Welcome Section -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-8">
                        <!-- Card Total Anggota -->
                        <a href="#" class="block">
                            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Total Anggota</p>
                                        <p class="text-2xl font-bold text-light-blue-600 dark:text-light-blue-400">120</p>
                                    </div>
                                    <div class="w-12 h-12 bg-light-blue-100 dark:bg-light-blue-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-users text-light-blue-600 dark:text-light-blue-400"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Cyber</p>
                                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">30</p>
                                    </div>
                                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-laptop-code text-blue-600 dark:text-blue-400"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Designgrafis</p>
                                        <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">20</p>
                                    </div>
                                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-paint-brush text-purple-600 dark:text-purple-400"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Audiografi</p>
                                        <p class="text-2xl font-bold text-green-600 dark:text-green-400">15</p>
                                    </div>
                                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-headphones text-green-600 dark:text-green-400"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- Tambah card divisi lain sesuai kebutuhan -->
                    </div>
                </main>

        <!-- Bagian Anggota yang Izin Malam dan User yang Online -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
            <!-- Anggota yang Izin Malam -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 md:p-6 shadow-sm animate-fade-in">
                <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white mb-6">Anggota yang Izin Malam</h3>
                <div class="space-y-4">
                    <?php if ($izin_malam_anggota->num_rows > 0): ?>
                        <?php while ($row = $izin_malam_anggota->fetch_assoc()): ?>
                            <?php
                                $jam_izin = !empty($row['jam_izin']) ? $row['jam_izin'] : '-';
                                $jam_selesai_izin = !empty($row['jam_selesai_izin']) ? $row['jam_selesai_izin'] : '-';
                            ?>
                            <div class="flex items-start justify-between p-4 bg-light-blue-50 dark:bg-light-blue-900 rounded-xl hover-scale anggota-izin-btn"
                                data-nama="<?php echo htmlspecialchars($row['nama']); ?>"
                                data-tanggal="<?php echo date('d M Y', strtotime($row['tanggal'])); ?>"
                                data-jam_izin="<?php echo $jam_izin; ?>"
                                data-jam_selesai_izin="<?php echo $jam_selesai_izin; ?>"
                                data-alasan="<?php echo htmlspecialchars($row['alasan']); ?>"
                            >
                                <div class="flex items-start space-x-3">
                                    <div class="flex gap-10">
                                        <h4 class="font-semibold text-gray-800 dark:text-white text-xs"> Nama:<br><span class="text-xs"><?php echo htmlspecialchars($row['nama']); ?></span></h4>
                                        <div class="flex gap-4 flex-wrap">
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Tanggal: <br><span class="text-xs"><?php echo date('d M Y', strtotime($row['tanggal'])); ?></span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Jam: <br><span class="text-xs"><?php echo $jam_izin; ?> - <?php echo $jam_selesai_izin; ?></span>
                                            </h4>
                                            <h4 class="font-semibold text-gray-800 dark:text-white text-xs">
                                                Alasan: <br><span class="text-xs"><?php echo htmlspecialchars($row['alasan']); ?></span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="text-center py-8">
                            <i class="fas fa-moon text-4xl text-gray-300 dark:text-gray-600 mb-4"></i>
                            <p class="text-gray-600 dark:text-gray-400">Tidak ada anggota yang sedang izin malam.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

              <!-- Bagian User Online -->
   <div class="bg-white dark:bg-slate-800 rounded-xl p-4 md:p-6 shadow-sm animate-fade-in">
       <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white mb-6">User yang Online</h3>
       <div class="space-y-2">
           <?php if ($users_online->num_rows > 0): ?>
               <?php while ($row = $users_online->fetch_assoc()): ?>
                   <?php if (strtolower($row['role']) === 'user'): ?>
                   <div class="flex items-center p-3 bg-green-50 dark:bg-green-900 rounded-xl hover-scale cursor-pointer user-info-btn"
                        data-nama="<?= htmlspecialchars($row['username']) ?>"
                        data-email="<?= htmlspecialchars($row['email']) ?>"
                        data-role="<?= strtoupper($row['role']) ?>"
                        data-nama_lengkap="<?= htmlspecialchars($row['nama_lengkap'] ?? '') ?>"
                        data-foto="<?= htmlspecialchars($row['foto'] ?? '') ?>"
                   >
                       <i class="fas fa-circle text-green-500 text-xs mr-2"></i>
                       <span class="font-medium text-gray-800 dark:text-white">
                           <?= htmlspecialchars($row['username']) ?> 
                           (<?= strtoupper($row['role']) ?>)
                       </span>
                   </div>
                   <?php endif; ?>
               <?php endwhile; ?>
           <?php else: ?>
               <div class="text-center py-4">
                   <i class="fas fa-users-slash text-4xl text-gray-300 dark:text-gray-600 mb-4"></i>
                   <p class="text-gray-600 dark:text-gray-400">Tidak ada user yang online saat ini.</p>
               </div>
           <?php endif; ?>
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

<main class="flex-1 p-4 md:p-6">
    <!-- Welcome Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-8">
        <!-- Card Total Anggota -->
        <a href="#" class="block">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Total Anggota</p>
                        <p class="text-2xl font-bold text-light-blue-600 dark:text-light-blue-400">120</p>
                    </div>
                    <div class="w-12 h-12 bg-light-blue-100 dark:bg-light-blue-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-users text-light-blue-600 dark:text-light-blue-400"></i>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="block">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Cyber</p>
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">30</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-laptop-code text-blue-600 dark:text-blue-400"></i>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="block">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Designgrafis</p>
                        <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">20</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-paint-brush text-purple-600 dark:text-purple-400"></i>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="block">
            <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-sm hover-scale animate-fade-in cursor-pointer">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Anggota Audiografi</p>
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400">15</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-headphones text-green-600 dark:text-green-400"></i>
                    </div>
                </div>
            </div>
        </a>
        <!-- Tambah card divisi lain sesuai kebutuhan -->
    </div>
</main>