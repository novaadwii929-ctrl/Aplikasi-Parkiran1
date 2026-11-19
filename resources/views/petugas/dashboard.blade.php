<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Petugas - ParkirKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary: #2563eb;
            --dark-blue: #102b50;
            --light-blue: #eaf2ff;
            --background: #f4f7fc;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            font-family: Arial, sans-serif;
            color: #26364b;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--dark-blue);
            color: white;
            padding: 25px 18px;
            overflow-y: auto;
            z-index: 100;
        }

        .brand {
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 40px;
            padding-left: 10px;
        }

        .brand i {
            color: #60a5fa;
            margin-right: 8px;
        }

        .menu-title {
            font-size: 11px;
            color: #91add0;
            margin: 22px 10px 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #dceaff;
            text-decoration: none;
            padding: 13px 14px;
            border-radius: 9px;
            margin-bottom: 7px;
            transition: .2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--primary);
            color: white;
        }

        .sidebar a i {
            margin-right: 12px;
            font-size: 18px;
        }

        .logout-form {
            margin-top: 25px;
        }

        .logout-form button {
            width: 100%;
            border: 0;
            background: rgba(220, 53, 69, .15);
            color: #ffb5bd;
            padding: 13px;
            border-radius: 9px;
            text-align: left;
            transition: .2s;
        }

        .logout-form button:hover {
            background: #dc3545;
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            padding: 28px;
        }

        .topbar {
            background: white;
            padding: 17px 23px;
            border-radius: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
        }

        .profile-icon {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: var(--light-blue);
            color: var(--primary);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        /* WELCOME */
        .welcome {
            background: linear-gradient(120deg, #174b91, #3188df);
            color: white;
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .welcome h3 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #e1edff;
        }

        .welcome-icon {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 100px;
            color: rgba(255,255,255,.13);
        }

        /* STATISTICS */
        .stat-card {
            background: white;
            padding: 23px;
            border-radius: 15px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 22px rgba(15, 40, 80, .09);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .icon-blue {
            background: #e8f1ff;
            color: #2563eb;
        }

        .icon-orange {
            background: #fff2df;
            color: #ea8a16;
        }

        .icon-green {
            background: #e5f8ee;
            color: #16a34a;
        }

        .stat-label {
            color: #7b8798;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .stat-value {
            color: #173b69;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        /* SECTION */
        .section-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
        }

        .quick-menu {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px;
            border: 1px solid #e5edf7;
            border-radius: 12px;
            color: #17477f;
            text-decoration: none;
            transition: .2s;
        }

        .quick-menu:hover {
            background: #edf6ff;
            border-color: #8bbdec;
            transform: translateY(-3px);
        }

        .quick-menu .menu-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--light-blue);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            flex-shrink: 0;
        }

        .quick-menu .arrow {
            margin-left: auto;
            color: var(--primary);
            font-size: 20px;
        }

        .info-item {
            padding: 13px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-item i {
            color: var(--primary);
            margin-right: 9px;
        }

        /* GUIDE */
        .guide-box {
            background: #edf5ff;
            border: 1px solid #dceaff;
            border-radius: 12px;
            padding: 17px;
            display: flex;
            align-items: flex-start;
            gap: 13px;
        }

        .guide-number {
            background: var(--primary);
            color: white;
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
            flex-shrink: 0;
        }

        .footer {
            color: #8793a3;
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 18px;
            }

            .brand {
                margin-bottom: 18px;
            }

            .menu-title {
                margin-top: 15px;
            }

            .main {
                margin-left: 0;
                padding: 15px;
            }

            .topbar {
                gap: 12px;
                flex-wrap: wrap;
            }

            .welcome {
                padding: 23px;
            }

            .welcome-icon {
                right: 15px;
                font-size: 75px;
            }
        }

        @media print {
            .sidebar,
            .no-print {
                display: none !important;
            }

            .main {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">

    <div class="brand">
        <i class="bi bi-p-square-fill"></i> ParkirKu
    </div>

    <div class="menu-title">Menu Utama</div>

    <a href="{{ url('/petugas/dashboard') }}" class="active">
        <i class="bi bi-grid-fill"></i>
        Dashboard
    </a>

    <a href="{{ url('/petugas/transaksi') }}">
        <i class="bi bi-receipt"></i>
        Transaksi Parkir
    </a>

    <div class="menu-title">Akun</div>

    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit">
            <i class="bi bi-box-arrow-right me-2"></i>
            Logout
        </button>
    </form>

</aside>

<!-- MAIN CONTENT -->
<main class="main">

    <!-- TOPBAR -->
    <div class="topbar">
        <div>
            <h5 class="fw-bold mb-1">Dashboard Petugas</h5>
            <small class="text-secondary">
                Sistem Informasi Pengelolaan Parkir
            </small>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="text-end">
                <strong>{{ auth()->user()->name }}</strong>
                <br>
                <small class="text-primary">Petugas Parkir</small>
            </div>

            <div class="profile-icon">
                <i class="bi bi-person-fill"></i>
            </div>
        </div>
    </div>

    <!-- WELCOME -->
    <div class="welcome">

        <div class="welcome-icon">
            <i class="bi bi-car-front-fill"></i>
        </div>

        <h3>
            Selamat Datang, {{ auth()->user()->name }}!
        </h3>

        <p class="mb-2">
            Kelola aktivitas dan transaksi parkir melalui satu menu
            Transaksi Parkir.
        </p>

        <small>
            <i class="bi bi-calendar3 me-2"></i>
            {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
        </small>

    </div>

    <!-- STATISTIK -->
    <div class="row g-3 mb-4">

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-blue">
                    <i class="bi bi-car-front-fill"></i>
                </div>

                <p class="stat-label">Transaksi Hari Ini</p>

                <h3 class="stat-value">
                    {{ $transaksiHariIni ?? 0 }}
                </h3>

                <small class="text-secondary">
                    Jumlah kendaraan tercatat
                </small>

            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-orange">
                    <i class="bi bi-clock-history"></i>
                </div>

                <p class="stat-label">Sedang Parkir</p>

                <h3 class="stat-value">
                    {{ $sedangParkir ?? 0 }}
                </h3>

                <small class="text-secondary">
                    Kendaraan belum keluar
                </small>

            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-green">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <p class="stat-label">Selesai Hari Ini</p>

                <h3 class="stat-value">
                    {{ $selesaiHariIni ?? 0 }}
                </h3>

                <small class="text-secondary">
                    Transaksi telah selesai
                </small>

            </div>
        </div>

    </div>

    <!-- MENU DAN INFORMASI PETUGAS -->
    <div class="row g-3 mb-4">

        <!-- MENU TRANSAKSI -->
        <div class="col-lg-6">
            <div class="section-card">

                <h5 class="fw-bold mb-4">
                    <i class="bi bi-grid-fill text-primary me-2"></i>
                    Menu Transaksi
                </h5>

                <a href="{{ url('/petugas/transaksi') }}" class="quick-menu">

                    <div class="menu-icon">
                        <i class="bi bi-receipt-cutoff"></i>
                    </div>

                    <div>
                        <strong>Transaksi Parkir</strong>

                        <div class="small text-secondary mt-1">
                            Kelola kendaraan masuk, kendaraan keluar,
                            dan cetak struk parkir.
                        </div>
                    </div>

                    <i class="bi bi-arrow-right arrow"></i>

                </a>

            </div>
        </div>

        <!-- INFORMASI PETUGAS -->
        <div class="col-lg-6">
            <div class="section-card">

                <h5 class="fw-bold mb-3">
                    <i class="bi bi-person-badge-fill text-primary me-2"></i>
                    Informasi Petugas
                </h5>

                <div class="info-item">
                    <i class="bi bi-person-circle"></i>
                    <strong>Nama:</strong>
                    {{ auth()->user()->name }}
                </div>

                <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <strong>Email:</strong>
                    {{ auth()->user()->email }}
                </div>

                <div class="info-item">
                    <i class="bi bi-shield-check"></i>
                    <strong>Hak Akses:</strong>
                    Petugas
                </div>

                <div class="info-item">
                    <i class="bi bi-calendar-check"></i>
                    <strong>Tanggal:</strong>
                    {{ \Carbon\Carbon::now()->format('d-m-Y') }}
                </div>

            </div>
        </div>

    </div>

    <!-- PANDUAN -->
    <div class="section-card">

        <h5 class="fw-bold mb-3">
            <i class="bi bi-info-circle-fill text-primary me-2"></i>
            Panduan Penggunaan Sistem
        </h5>

        <div class="guide-box">

            <span class="guide-number">1</span>

            <div>
                <strong>Transaksi Parkir</strong>

                <p class="text-secondary small mb-0 mt-1">
                    Kelola pencatatan kendaraan masuk, proses kendaraan keluar,
                    perhitungan biaya parkir, dan cetak struk melalui menu
                    Transaksi Parkir.
                </p>
            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        © {{ date('Y') }} ParkirKu - Sistem Informasi Pengelolaan Parkir
    </div>

</main>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Petugas - ParkirKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary: #2563eb;
            --dark-blue: #102b50;
            --light-blue: #eaf2ff;
            --background: #f4f7fc;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            font-family: Arial, sans-serif;
            color: #26364b;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--dark-blue);
            color: white;
            padding: 25px 18px;
            overflow-y: auto;
            z-index: 100;
        }

        .brand {
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 40px;
            padding-left: 10px;
        }

        .brand i {
            color: #60a5fa;
            margin-right: 8px;
        }

        .menu-title {
            font-size: 11px;
            color: #91add0;
            margin: 22px 10px 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #dceaff;
            text-decoration: none;
            padding: 13px 14px;
            border-radius: 9px;
            margin-bottom: 7px;
            transition: .2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--primary);
            color: white;
        }

        .sidebar a i {
            margin-right: 12px;
            font-size: 18px;
        }

        .logout-form {
            margin-top: 25px;
        }

        .logout-form button {
            width: 100%;
            border: 0;
            background: rgba(220, 53, 69, .15);
            color: #ffb5bd;
            padding: 13px;
            border-radius: 9px;
            text-align: left;
            transition: .2s;
        }

        .logout-form button:hover {
            background: #dc3545;
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            padding: 28px;
        }

        .topbar {
            background: white;
            padding: 17px 23px;
            border-radius: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
        }

        .profile-icon {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: var(--light-blue);
            color: var(--primary);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        /* WELCOME */
        .welcome {
            background: linear-gradient(120deg, #174b91, #3188df);
            color: white;
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .welcome h3 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #e1edff;
        }

        .welcome-icon {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 100px;
            color: rgba(255,255,255,.13);
        }

        /* STATISTICS */
        .stat-card {
            background: white;
            padding: 23px;
            border-radius: 15px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 22px rgba(15, 40, 80, .09);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .icon-blue {
            background: #e8f1ff;
            color: #2563eb;
        }

        .icon-orange {
            background: #fff2df;
            color: #ea8a16;
        }

        .icon-green {
            background: #e5f8ee;
            color: #16a34a;
        }

        .stat-label {
            color: #7b8798;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .stat-value {
            color: #173b69;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        /* SECTION */
        .section-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
        }

        .quick-menu {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px;
            border: 1px solid #e5edf7;
            border-radius: 12px;
            color: #17477f;
            text-decoration: none;
            transition: .2s;
        }

        .quick-menu:hover {
            background: #edf6ff;
            border-color: #8bbdec;
            transform: translateY(-3px);
        }

        .quick-menu .menu-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--light-blue);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            flex-shrink: 0;
        }

        .quick-menu .arrow {
            margin-left: auto;
            color: var(--primary);
            font-size: 20px;
        }

        .info-item {
            padding: 13px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-item i {
            color: var(--primary);
            margin-right: 9px;
        }

        /* GUIDE */
        .guide-box {
            background: #edf5ff;
            border: 1px solid #dceaff;
            border-radius: 12px;
            padding: 17px;
            display: flex;
            align-items: flex-start;
            gap: 13px;
        }

        .guide-number {
            background: var(--primary);
            color: white;
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
            flex-shrink: 0;
        }

        .footer {
            color: #8793a3;
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 18px;
            }

            .brand {
                margin-bottom: 18px;
            }

            .menu-title {
                margin-top: 15px;
            }

            .main {
                margin-left: 0;
                padding: 15px;
            }

            .topbar {
                gap: 12px;
                flex-wrap: wrap;
            }

            .welcome {
                padding: 23px;
            }

            .welcome-icon {
                right: 15px;
                font-size: 75px;
            }
        }

        @media print {
            .sidebar,
            .no-print {
                display: none !important;
            }

            .main {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">

    <div class="brand">
        <i class="bi bi-p-square-fill"></i> ParkirKu
    </div>

    <div class="menu-title">Menu Utama</div>

    <a href="{{ url('/petugas/dashboard') }}" class="active">
        <i class="bi bi-grid-fill"></i>
        Dashboard
    </a>

    <a href="{{ url('/petugas/transaksi') }}">
        <i class="bi bi-receipt"></i>
        Transaksi Parkir
    </a>

    <div class="menu-title">Akun</div>

    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit">
            <i class="bi bi-box-arrow-right me-2"></i>
            Logout
        </button>
    </form>

</aside>

<!-- MAIN CONTENT -->
<main class="main">

    <!-- TOPBAR -->
    <div class="topbar">
        <div>
            <h5 class="fw-bold mb-1">Dashboard Petugas</h5>
            <small class="text-secondary">
                Sistem Informasi Pengelolaan Parkir
            </small>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="text-end">
                <strong>{{ auth()->user()->name }}</strong>
                <br>
                <small class="text-primary">Petugas Parkir</small>
            </div>

            <div class="profile-icon">
                <i class="bi bi-person-fill"></i>
            </div>
        </div>
    </div>

    <!-- WELCOME -->
    <div class="welcome">

        <div class="welcome-icon">
            <i class="bi bi-car-front-fill"></i>
        </div>

        <h3>
            Selamat Datang, {{ auth()->user()->name }}!
        </h3>

        <p class="mb-2">
            Kelola aktivitas dan transaksi parkir melalui satu menu
            Transaksi Parkir.
        </p>

        <small>
            <i class="bi bi-calendar3 me-2"></i>
            {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
        </small>

    </div>

    <!-- STATISTIK -->
    <div class="row g-3 mb-4">

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-blue">
                    <i class="bi bi-car-front-fill"></i>
                </div>

                <p class="stat-label">Transaksi Hari Ini</p>

                <h3 class="stat-value">
                    {{ $transaksiHariIni ?? 0 }}
                </h3>

                <small class="text-secondary">
                    Jumlah kendaraan tercatat
                </small>

            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-orange">
                    <i class="bi bi-clock-history"></i>
                </div>

                <p class="stat-label">Sedang Parkir</p>

                <h3 class="stat-value">
                    {{ $sedangParkir ?? 0 }}
                </h3>

                <small class="text-secondary">
                    Kendaraan belum keluar
                </small>

            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-green">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <p class="stat-label">Selesai Hari Ini</p>

                <h3 class="stat-value">
                    {{ $selesaiHariIni ?? 0 }}
                </h3>

                <small class="text-secondary">
                    Transaksi telah selesai
                </small>

            </div>
        </div>

    </div>

    <!-- MENU DAN INFORMASI PETUGAS -->
    <div class="row g-3 mb-4">

        <!-- MENU TRANSAKSI -->
        <div class="col-lg-6">
            <div class="section-card">

                <h5 class="fw-bold mb-4">
                    <i class="bi bi-grid-fill text-primary me-2"></i>
                    Menu Transaksi
                </h5>

                <a href="{{ url('/petugas/transaksi') }}" class="quick-menu">

                    <div class="menu-icon">
                        <i class="bi bi-receipt-cutoff"></i>
                    </div>

                    <div>
                        <strong>Transaksi Parkir</strong>

                        <div class="small text-secondary mt-1">
                            Kelola kendaraan masuk, kendaraan keluar,
                            dan cetak struk parkir.
                        </div>
                    </div>

                    <i class="bi bi-arrow-right arrow"></i>

                </a>

            </div>
        </div>

        <!-- INFORMASI PETUGAS -->
        <div class="col-lg-6">
            <div class="section-card">

                <h5 class="fw-bold mb-3">
                    <i class="bi bi-person-badge-fill text-primary me-2"></i>
                    Informasi Petugas
                </h5>

                <div class="info-item">
                    <i class="bi bi-person-circle"></i>
                    <strong>Nama:</strong>
                    {{ auth()->user()->name }}
                </div>

                <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <strong>Email:</strong>
                    {{ auth()->user()->email }}
                </div>

                <div class="info-item">
                    <i class="bi bi-shield-check"></i>
                    <strong>Hak Akses:</strong>
                    Petugas
                </div>

                <div class="info-item">
                    <i class="bi bi-calendar-check"></i>
                    <strong>Tanggal:</strong>
                    {{ \Carbon\Carbon::now()->format('d-m-Y') }}
                </div>

            </div>
        </div>

    </div>

    <!-- PANDUAN -->
    <div class="section-card">

        <h5 class="fw-bold mb-3">
            <i class="bi bi-info-circle-fill text-primary me-2"></i>
            Panduan Penggunaan Sistem
        </h5>

        <div class="guide-box">

            <span class="guide-number">1</span>

            <div>
                <strong>Transaksi Parkir</strong>

                <p class="text-secondary small mb-0 mt-1">
                    Kelola pencatatan kendaraan masuk, proses kendaraan keluar,
                    perhitungan biaya parkir, dan cetak struk melalui menu
                    Transaksi Parkir.
                </p>
            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        © {{ date('Y') }} ParkirKu - Sistem Informasi Pengelolaan Parkir
    </div>

</main>

</body>
</html>