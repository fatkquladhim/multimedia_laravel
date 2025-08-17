<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Multimedia App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('alat.index') }}">Alat</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('anggota.index') }}">Anggota</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('izin-malam.index') }}">Izin Malam</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('izin-nugas.index') }}">Izin Nugas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('keuangan.index') }}">Keuangan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('legalisasi-laptop.index') }}">Legalisasi Laptop</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('peminjaman-barang.index') }}">Peminjaman</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('penyewaan-barang.index') }}">Penyewaan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('profile.index') }}">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('tugas.index') }}">Tugas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('tugas-jawaban.index') }}">Tugas Jawaban</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
      </ul>
    </div>
  </div>
</nav>
