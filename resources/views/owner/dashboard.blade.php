<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Owner - ParkirKu</title>

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
            z-index: 100;
            overflow-y: auto;
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
            min-height: 100vh;
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
            margin-bottom: 0;
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

        .icon-green {
            background: #e5f8ee;
            color: #16a34a;
        }

        .icon-orange {
            background: #fff2df;
            color: #ea8a16;
        }

        .stat-label {
            color: #7b8798;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .stat-value {
            color: #173b69;
            font-size: 27px;
            font-weight: bold;
            margin: 0;
        }

        /* REPORT */
        .section-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(15, 40, 80, .04);
        }

        .report-icon {
            width: 75px;
            height: 75px;
            border-radius: 18px;
            background: var(--light-blue);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            margin: auto;
        }

        .btn-report {
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 9px;
            padding: 11px 18px;
            text-decoration: none;
            display: inline-block;
            transition: .2s;
        }

        .btn-report:hover {
            background: #174bb5;
            color: white;
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

        @media (max-width: 480px) {
            .welcome-icon {
                display: none;
            }

            .stat-card {
                padding: 16px;
            }

            .stat-value {
                font-size: 22px;
            }
        }

        /* PRINT */
        @media print {
            .sidebar,
            .no-print {
                display: none !important;
            }

            .main {
                margin: 0;
                padding: 0;
            }

            body {
                background: white;
            }

            .stat-card,
            .section-card,
            .topbar {
                box-shadow: none;
                border: 1px solid #ddd;
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

    <div class="menu-title">Menu Owner</div>

    <a href="{{ url('/owner/dashboard') }}" class="active">
        <i class="bi bi-grid-fill"></i>
        Dashboard
    </a>

    <a href="{{ url('/owner/laporan') }}">
        <i class="bi bi-file-earmark-bar-graph"></i>
        Laporan Transaksi
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
            <h5 class="fw-bold mb-1">Dashboard Owner</h5>
            <small class="text-secondary">
                Ringkasan Pengelolaan Parkir
            </small>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="text-end">
                <strong>{{ auth()->user()->name }}</strong>
                <br>
                <small class="text-primary">Owner</small>
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

        <p>
            Pantau transaksi dan pendapatan parkir melalui dashboard Owner.
        </p>

        <small class="d-block mt-3">
            <i class="bi bi-calendar3 me-2"></i>
            {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
        </small>

    </div>

    <!-- STATISTICS -->
    <div class="row g-3 mb-4">

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-blue">
                    <i class="bi bi-car-front-fill"></i>
                </div>

                <p class="stat-label">
                    Kendaraan Selesai Hari Ini
                </p>

                <h3 class="stat-value">
                    {{ $totalKendaraanHariIni ?? 0 }}
                </h3>

            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-green">
                    <i class="bi bi-cash-stack"></i>
                </div>

                <p class="stat-label">
                    Pendapatan Hari Ini
                </p>

                <h3 class="stat-value fs-4">
                    Rp {{ number_format($pendapatanHariIni ?? 0, 0, ',', '.') }}
                </h3>

            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-icon icon-orange">
                    <i class="bi bi-clock-history"></i>
                </div>

                <p class="stat-label">
                    Kendaraan Sedang Parkir
                </p>

                <h3 class="stat-value">
                    {{ $sedangParkir ?? 0 }}
                </h3>

            </div>
        </div>

    </div>

    <!-- REPORT SECTION -->
    <div class="section-card">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-file-earmark-bar-graph text-primary me-2"></i>
                    Laporan Transaksi
                </h5>

                <small class="text-secondary">
                    Informasi transaksi dan pendapatan parkir.
                </small>
            </div>

            <a href="{{ url('/owner/laporan') }}" class="btn-report">
                <i class="bi bi-file-earmark-text me-1"></i>
                Buka Laporan
            </a>

        </div>

        <hr>

        <div class="row align-items-center">

            <div class="col-md-8">

                <h6 class="fw-bold mb-2">
                    Pantau Laporan Parkir
                </h6>

                <p class="text-secondary mb-0">
                    Gunakan halaman laporan untuk memilih tanggal mulai
                    dan tanggal akhir, melihat jumlah transaksi,
                    total pendapatan, serta mencetak laporan.
                </p>

            </div>

            <div class="col-md-4 text-center mt-3 mt-md-0">
                <div class="report-icon">
                    <i class="bi bi-bar-chart-line-fill"></i>
                </div>
            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        © {{ date('Y') }} ParkirKu - Sistem Informasi Parkir
    </div>

</main>

</body>
</html>