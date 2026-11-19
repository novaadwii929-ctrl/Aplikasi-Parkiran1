<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - ParkirKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --navy: #102b50;
            --blue: #2563eb;
            --background: #f4f7fc;
            --text: #26364b;
            --muted: #8492a6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--text);
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--navy);
            color: white;
            padding: 25px 18px;
            overflow-y: auto;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 24px;
            font-weight: 800;
            padding: 5px 12px;
            margin-bottom: 35px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: var(--blue);
            font-size: 23px;
        }

        .menu-title {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            color: #91a8c6;
            margin: 25px 12px 12px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #c7d6e9;
            text-decoration: none;
            padding: 13px 14px;
            border-radius: 10px;
            margin-bottom: 6px;
            font-size: 14px;
            transition: .2s;
        }

        .sidebar a i {
            font-size: 18px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--blue);
            color: white;
        }

        .logout-form {
            margin-top: 35px;
        }

        .logout-form button {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid rgba(255,255,255,.12);
            background: rgba(239,68,68,.13);
            color: #ffb5b5;
            padding: 13px 14px;
            border-radius: 10px;
            text-align: left;
        }

        .logout-form button:hover {
            background: #dc3545;
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 260px;
            padding: 28px 32px;
            min-height: 100vh;
        }

        /* TOPBAR */
        .topbar {
            background: white;
            border: 1px solid #edf0f5;
            border-radius: 15px;
            padding: 17px 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(16,43,80,.035);
        }

        .topbar h5 {
            font-weight: 750;
            color: var(--navy);
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile-icon {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: #e8f1ff;
            color: var(--blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        /* WELCOME */
        .welcome {
            position: relative;
            overflow: hidden;
            background: linear-gradient(120deg, #123b75, #2563eb, #3995e8);
            color: white;
            padding: 30px;
            border-radius: 17px;
            margin-bottom: 27px;
            box-shadow: 0 8px 22px rgba(37,99,235,.15);
        }

        .welcome h3 {
            font-weight: 750;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #e0edff;
            font-size: 14px;
        }

        .welcome-icon {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 105px;
            color: rgba(255,255,255,.13);
        }

        /* STATISTICS */
        .stat-card {
            background: white;
            border: 1px solid #edf0f5;
            border-radius: 15px;
            padding: 21px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(16,43,80,.035);
            transition: .25s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 9px 23px rgba(16,43,80,.08);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 19px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 13px;
            font-size: 23px;
        }

        .icon-blue {
            color: #2563eb;
            background: #eaf2ff;
        }

        .icon-green {
            color: #16a36a;
            background: #e8f8f0;
        }

        .icon-orange {
            color: #e58a22;
            background: #fff4e5;
        }

        .icon-purple {
            color: #805ad5;
            background: #f2ecff;
        }

        .stat-label {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 6px;
        }

        .stat-card h3 {
            font-size: 28px;
            font-weight: 800;
            color: var(--navy);
            margin: 0;
        }

        /* CONTENT */
        .section-card {
            background: white;
            border: 1px solid #edf0f5;
            border-radius: 15px;
            padding: 23px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(16,43,80,.035);
        }

        .section-heading {
            font-size: 17px;
            font-weight: 750;
            color: var(--navy);
            margin-bottom: 20px;
        }

        .quick-menu {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px;
            border: 1px solid #edf0f5;
            border-radius: 12px;
            color: var(--text);
            text-decoration: none;
            margin-bottom: 11px;
            transition: .2s;
        }

        .quick-menu:hover {
            background: #f3f7ff;
            border-color: #b7d1ff;
            transform: translateX(3px);
        }

        .quick-icon {
            width: 43px;
            height: 43px;
            min-width: 43px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: #edf4ff;
            color: var(--blue);
            font-size: 20px;
        }

        .quick-menu strong {
            font-size: 14px;
        }

        .quick-menu small {
            color: var(--muted);
            font-size: 12px;
        }

        .arrow-icon {
            margin-left: auto;
            color: #9aabc0;
        }

        /* ADMIN INFORMATION */
        .info-row {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 15px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #edf4ff;
            color: var(--blue);
            font-size: 18px;
        }

        .info-label {
            color: var(--muted);
            font-size: 11px;
            margin-bottom: 3px;
        }

        .info-value {
            font-size: 13px;
            font-weight: 650;
            color: var(--navy);
            word-break: break-word;
        }

        /* FOOTER */
        footer {
            color: #94a3b8;
            font-size: 12px;
            padding: 28px 0 5px;
        }

        /* RESPONSIVE */
        @media(max-width: 992px) {
            .sidebar {
                width: 225px;
            }

            .main {
                margin-left: 225px;
                padding: 22px;
            }
        }

        @media(max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 17px;
            }

            .brand {
                margin-bottom: 15px;
            }

            .main {
                margin-left: 0;
                padding: 15px;
            }

            .topbar {
                flex-wrap: wrap;
                gap: 15px;
            }

            .welcome {
                padding: 24px;
            }

            .welcome-icon {
                right: 15px;
                font-size: 75px;
            }
        }

        @media(max-width: 480px) {
            .topbar {
                padding: 15px;
            }

            .welcome-icon {
                display: none;
            }

            .stat-card {
                padding: 15px;
            }

            .stat-card h3 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">

    <div class="brand">
        <div class="brand-icon">
            <i class="bi bi-p-square-fill"></i>
        </div>
        ParkirKu
    </div>

    <div class="menu-title">MENU UTAMA</div>

    <a href="{{ url('/admin/dashboard') }}" class="active">
        <i class="bi bi-grid-fill"></i>
        Dashboard
    </a>

    <a href="{{ url('/admin/users') }}">
        <i class="bi bi-people-fill"></i>
        Data User
    </a>

    <a href="{{ url('/admin/tarifs') }}">
        <i class="bi bi-cash-stack"></i>
        Tarif Parkir
    </a>

    <a href="{{ url('/admin/areas') }}">
        <i class="bi bi-geo-alt-fill"></i>
        Area Parkir
    </a>

    <a href="{{ url('/transaksi') }}">
        <i class="bi bi-receipt"></i>
        Transaksi Parkir
    </a>

    <a href="{{ url('/admin/log-aktivitas') }}">
        <i class="bi bi-clock-history"></i>
        Log Aktivitas
    </a>

    <div class="menu-title">AKUN</div>

    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </button>
    </form>

</aside>

<!-- MAIN CONTENT -->
<main class="main">

    <!-- TOPBAR -->
    <div class="topbar">

        <div>
            <h5 class="mb-1">Dashboard Admin</h5>
            <small class="text-secondary">
                <i class="bi bi-house-door me-1"></i>
                Sistem Informasi Pengelolaan Parkir
            </small>
        </div>

        <div class="profile">
            <div class="text-end">
                <div class="fw-bold">{{ auth()->user()->name }}</div>
                <small class="text-primary">Administrator</small>
            </div>

            <div class="profile-icon">
                <i class="bi bi-person-fill"></i>
            </div>
        </div>

    </div>

    <!-- WELCOME -->
    <div class="welcome">

        <h3>
            Selamat Datang, {{ auth()->user()->name }}!
        </h3>

        <p class="mb-0">
            Selamat bekerja! Kelola data dan pantau aktivitas sistem parkir
            dengan mudah melalui dashboard admin.
        </p>

        <i class="bi bi-buildings welcome-icon"></i>

    </div>

    <!-- STATISTICS -->
    <div class="row g-3 mb-4">

        <div class="col-xl-3 col-md-6 col-6">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon icon-blue">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <i class="bi bi-three-dots text-secondary"></i>
                </div>

                <p class="stat-label">Total User</p>
                <h3>{{ $totalUser ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-6">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon icon-green">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                    <i class="bi bi-three-dots text-secondary"></i>
                </div>

                <p class="stat-label">Jenis Tarif</p>
                <h3>{{ $totalTarif ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-6">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon icon-orange">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <i class="bi bi-three-dots text-secondary"></i>
                </div>

                <p class="stat-label">Area Parkir</p>
                <h3>{{ $totalArea ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-6">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon icon-purple">
                        <i class="bi bi-receipt"></i>
                    </div>
                    <i class="bi bi-three-dots text-secondary"></i>
                </div>

                <p class="stat-label">Total Transaksi</p>
                <h3>{{ $totalTransaksi ?? 0 }}</h3>
            </div>
        </div>

    </div>

    <!-- MANAGEMENT AND ADMIN INFORMATION -->
    <div class="row g-3">

        <!-- MANAGEMENT MENU -->
        <div class="col-lg-7">

            <div class="section-card">

                <h5 class="section-heading">
                    <i class="bi bi-grid-1x2-fill text-primary me-2"></i>
                    Pengelolaan Data
                </h5>

                <a href="{{ url('/admin/users') }}" class="quick-menu">
                    <div class="quick-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div>
                        <strong>Kelola User</strong><br>
                        <small>Tambah, ubah, dan hapus pengguna</small>
                    </div>

                    <i class="bi bi-chevron-right arrow-icon"></i>
                </a>

                <a href="{{ url('/admin/tarifs') }}" class="quick-menu">
                    <div class="quick-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>

                    <div>
                        <strong>Kelola Tarif</strong><br>
                        <small>Atur tarif setiap jenis kendaraan</small>
                    </div>

                    <i class="bi bi-chevron-right arrow-icon"></i>
                </a>

                <a href="{{ url('/admin/areas') }}" class="quick-menu">
                    <div class="quick-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <div>
                        <strong>Kelola Area Parkir</strong><br>
                        <small>Atur area dan kapasitas parkir</small>
                    </div>

                    <i class="bi bi-chevron-right arrow-icon"></i>
                </a>

                <a href="{{ url('/transaksi') }}" class="quick-menu">
                    <div class="quick-icon">
                        <i class="bi bi-receipt"></i>
                    </div>

                    <div>
                        <strong>Transaksi Parkir</strong><br>
                        <small>Kelola transaksi parkir masuk dan keluar</small>
                    </div>

                    <i class="bi bi-chevron-right arrow-icon"></i>
                </a>

                <a href="{{ url('/admin/log-aktivitas') }}" class="quick-menu mb-0">
                    <div class="quick-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <div>
                        <strong>Log Aktivitas</strong><br>
                        <small>Lihat aktivitas pengguna sistem</small>
                    </div>

                    <i class="bi bi-chevron-right arrow-icon"></i>
                </a>

            </div>

        </div>

        <!-- ADMIN INFORMATION -->
        <div class="col-lg-5">

            <div class="section-card">

                <h5 class="section-heading">
                    <i class="bi bi-person-badge-fill text-primary me-2"></i>
                    Informasi Admin
                </h5>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>

                    <div>
                        <div class="info-label">Nama Admin</div>
                        <div class="info-value">
                            {{ auth()->user()->name }}
                        </div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <div>
                        <div class="info-label">Email</div>
                        <div class="info-value">
                            {{ auth()->user()->email }}
                        </div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>

                    <div>
                        <div class="info-label">Hak Akses</div>
                        <div class="info-value">Administrator</div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>

                    <div>
                        <div class="info-label">Tanggal</div>
                        <div class="info-value">
                            {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="text-center">
        © {{ date('Y') }} ParkirKu. All Rights Reserved.
        <br>
        <span>Sistem Informasi Pengelolaan Parkir</span>
    </footer>

</main>

</body>
</html>