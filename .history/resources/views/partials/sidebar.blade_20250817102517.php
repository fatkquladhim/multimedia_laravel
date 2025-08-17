<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{ url('/') }}" class="logo">
              <img
                src="{{ asset('img/kaiadmin/logo_light.svg') }}"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              @auth
                @if(auth()->user()->role == 'admin')
                  <li class="nav-item active">
                    <a href="{{ route('dashboard.admin') }}">
                      <i class="fas fa-home"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                @else
                  <li class="nav-item active">
                    <a href="{{ route('dashboard.user') }}">
                      <i class="fas fa-home"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                @endif
              @endauth
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Fitur-Fitur</h4>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas fa-layer-group"></i>
                  <p>Manajemen</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('anggota.index') }}">
                        <span class="sub-item">Manajemen Anggota</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('alat.index') }}">
                        <span class="sub-item">Manajemen Alat</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('users.index') }}">
                        <span class="sub-item">Hak Akses Anggota</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('legalisasi-laptop.index') }}">
                        <span class="sub-item">Manajemen Laptop</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-th-list"></i>
                  <p>Barang</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('peminjaman-barang.index') }}">
                        <span class="sub-item">Peminjaman Barang</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('penyewaan-barang.index') }}">
                        <span class="sub-item">Penyewaan Barang</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Tugas Anggota</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('tugas.index') }}">
                        <span class="sub-item">Tugas</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('tugas-jawaban.index') }}">
                        <span class="sub-item">Tugas User</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Portfolio</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('profile.index') }}">
                        <span class="sub-item">Portfolio Saya</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Izin Anggota</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('izin-malam.index') }}">
                        <span class="sub-item">Izin Malam</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('izin-nugas.index') }}">
                        <span class="sub-item">Izin Nugas</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Keuangan</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('keuangan.index') }}">
                        <span class="sub-item">Keuangan Multimedia</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Akun</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('profile.index') }}">
                        <span class="sub-item">pengaturan Akun</span>
                      </a>
                    </li>
                    <li class="flex align-items-center">
                      <form action="{{ route('logout') }}" method="POST" class="sub-item"  style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-link sub-item">logout</button>
                      </form>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>