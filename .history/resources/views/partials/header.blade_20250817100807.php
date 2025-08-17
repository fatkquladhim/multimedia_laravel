    <nav
    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
    >
    <div class="container-fluid">
        <nav
        class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
        >
        <div class="input-group">
            <div class="input-group-prepend">
            <button type="submit" class="btn btn-search pe-1">
                <i class="fa fa-search search-icon"></i>
            </button>
            </div>
            <input
            type="text"
            placeholder="Search ..."
            class="form-control"
            />
        </div>
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
        <li
            class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
        >
            <a
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-expanded="false"
            aria-haspopup="true"
            >
            <i class="fa fa-search"></i>
            </a>
            <ul class="dropdown-menu dropdown-search animated fadeIn">
            <form class="navbar-left navbar-form nav-search">
                <div class="input-group">
                <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                />
                </div>
            </form>
            </ul>
        </li>
        <!-- <!-- <li class="nav-item topbar-icon dropdown hidden-caret">
            <a
            class="nav-link dropdown-toggle"
            href="#"
            id="messageDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >
            <i class="fa fa-envelope"></i>
            </a>
            <ul
            class="dropdown-menu messages-notif-box animated fadeIn"
            aria-labelledby="messageDropdown"
            >
            <li>
                <div
                class="dropdown-title d-flex justify-content-between align-items-center"
                >
                Messages
                <a href="#" class="small">Mark all as read</a>
                </div>
            </li>
            <li>
                <div class="message-notif-scroll scrollbar-outer">
                <div class="notif-center">
                    <a href="#">
                    <div class="notif-img">
                        <img
                        src="assets/img/jm_denis.jpg"
                        alt="Img Profile"
                        />
                    </div>
                    <div class="notif-content">
                        <span class="subject">Jimmy Denis</span>
                        <span class="block"> How are you ? </span>
                        <span class="time">5 minutes ago</span>
                    </div>
                    </a>
                    <a href="#">
                    <div class="notif-img">
                        <img
                        src="assets/img/chadengle.jpg"
                        alt="Img Profile"
                        />
                    </div>
                    <div class="notif-content">
                        <span class="subject">Chad</span>
                        <span class="block"> Ok, Thanks ! </span>
                        <span class="time">12 minutes ago</span>
                    </div>
                    </a>
                    <a href="#">
                    <div class="notif-img">
                        <img
                        src="assets/img/mlane.jpg"
                        alt="Img Profile"
                        />
                    </div>
                    <div class="notif-content">
                        <span class="subject">Jhon Doe</span>
                        <span class="block">
                        Ready for the meeting today...
                        </span>
                        <span class="time">12 minutes ago</span>
                    </div>
                    </a>
                    <a href="#">
                    <div class="notif-img">
                        <img
                        src="assets/img/talha.jpg"
                        alt="Img Profile"
                        />
                    </div>
                    <div class="notif-content">
                        <span class="subject">Talha</span>
                        <span class="block"> Hi, Apa Kabar ? </span>
                        <span class="time">17 minutes ago</span>
                    </div>
                    </a>
                </div>
                </div>
            </li> -->
            <!-- <li>
                <a class="see-all" href="javascript:void(0);"
                >See all messages<i class="fa fa-angle-right"></i>
                </a>
            </li>
            </ul>
        </li> -->
        @php
            $user = Auth::user();
            $profile = null;
            if ($user) {
                $profile = \App\Models\Profile::where('id_user', $user->id)->first();
            }
            $profilePhoto = $profile && $profile->foto ? asset('uploads/profiles/' . $profile->foto) : asset('img/profile.jpg');
            $fullName = $profile && $profile->nama_lengkap ? $profile->nama_lengkap : ($user && $user->name ? $user->name : 'Hizrian');
            $shortName = Str::limit($fullName, 10, '');
            $email = $profile && $profile->email ? $profile->email : ($user && $user->email ? $user->email : 'hello@example.com');
        @endphp
        <li class="nav-item topbar-user dropdown hidden-caret">
            <a
                class="dropdown-toggle profile-pic"
                data-bs-toggle="dropdown"
                href="#"
                aria-expanded="false"
            >
                <div class="avatar-sm">
                    <img
                        src="{{ $profilePhoto }}"
                        alt="..."
                        class="avatar-img rounded-circle"
                    />
                </div>
                <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold">{{ $shortName }}</span>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                        <div class="user-box">
                            <div class="avatar-lg">
                                <img
                                    src="{{ $profilePhoto }}"
                                    alt="image profile"
                                    class="avatar-img rounded"
                                />
                            </div>
                            <div class="u-text">
                                <h4>{{ $fullName }}</h4>
                                <p class="text-muted">{{ $email }}</p>
                                <a
                                    href="{{ url('/profile') }}"
                                    class="btn btn-xs btn-secondary btn-sm"
                                >View Profile</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/profile') }}">My Profile</a>
                        <p class="dropdown-item">{{ $profile && $profile->divisi ? $profile->divisi : '-' }}</p>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/akun') }}">pengaturan akun</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                              <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="sub-item" style="background:none;border:none;padding:0;margin:0;cursor:pointer;">logout</button>
                      </form>
                    </li>
                </div>
            </ul>
        </li>    </ul>
    </div>
</nav>