<div class="sidebar">
    <div class="logo-details">
        <i class="fa-brands fa-keycdn icon"></i>
        <div class="logo-name">Lunatika</div>
        <i class="fa-solid fa-bars" id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class="fa-solid fa-magnifying-glass"></i>
            <input class="form-control" type="text" placeholder="Cari apa?">
            <span class="tooltip">Pencarian</span>
        </li>
        <li>
            <a href="{{ url('home/dashboard/items') }}">
                <i class="fa-solid fa-rocket"></i>
                <span class="link-name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('messages') }}">
                <i class="fa-solid fa-bell"></i>
                <span class="link-name">Pesan</span>
            </a>
            <span class="tooltip">Perpesanan</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-chart-simple"></i>
                <span class="link-name">Analitik</span>
            </a>
            <span class="tooltip">Monitor data</span>
        </li>
        <li>
            <a href="{{ route('file_manager') }}">
                <i class="fa-solid fa-folder"></i>
                <span class="link-name">Kelola File</span>
            </a>
            <span class="tooltip">Pengelola berkas</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <span class="link-name">Peralatan</span>
            </a>
            <span class="tooltip">Peralatan</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-gear"></i>
                <span class="link-name">Pengaturan</span>
            </a>
            <span class="tooltip">Pengaturan</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-user"></i>
                <span class="link-name">Pengguna</span>
            </a>
            <span class="tooltip">Detail pengguna</span>
        </li>
        <li class="profile">
            <div class="profile-details">
                <img src="{{ asset('assets/photos/man1.jpg') }}" alt="profile image">
                <div class="profile-content">
                    <div class="name">{{ Auth::user()->name }}</div>
                    <div class="designation">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <a href="{{ route('logout.account') }}" class="a-logout" id="logoutLink" data-id="{{ Auth::user()->id }}">
                <i class="fa-solid fa-right-from-bracket" id="logout"></i>
            </a>
            {{-- <i class="fa-solid fa-right-from-bracket" id="logout"></i> --}}
        </li>
    </ul>
</div>