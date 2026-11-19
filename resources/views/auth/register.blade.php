<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Sistem Parkir</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #eaf2ff, #f4f7fc);
        }

        .register-card {
            width: 100%;
            max-width: 440px;
            padding: 35px;
            background: white;
            border-radius: 18px;
            border: 1px solid #e5edf7;
            box-shadow: 0 15px 45px rgba(16, 43, 80, .10);
        }

        .logo {
            width: 65px;
            height: 65px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #174b91, #3188df);
            color: white;
            border-radius: 17px;
            font-size: 30px;
            box-shadow: 0 8px 18px rgba(37, 99, 235, .2);
        }

        h3 {
            color: #102b50;
        }

        .subtitle {
            color: #8793a3;
            font-size: 14px;
        }

        .form-label {
            color: #344563;
            font-weight: 600;
            font-size: 14px;
        }

        .form-control {
            padding: 12px 14px;
            border: 1px solid #dce5f0;
            border-radius: 9px;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .12);
            background: white;
        }

        .btn-register {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 9px;
            background: #2563eb;
            color: white;
            font-weight: 600;
            transition: .2s;
        }

        .btn-register:hover {
            background: #174bb5;
            color: white;
            transform: translateY(-1px);
        }

        .login-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        @media(max-width: 480px) {
            .register-card {
                padding: 27px 22px;
            }
        }
    </style>
</head>

<body>

<div class="register-card">

    <div class="logo">
        <i class="bi bi-car-front-fill"></i>
    </div>

    <h3 class="text-center mt-3 fw-bold">
        Daftar Sistem Parkir
    </h3>

    <p class="text-center subtitle mb-4">
        Buat akun baru untuk menggunakan sistem parkir
    </p>

    @if($errors->any())
        <div class="alert alert-danger">
            <i class="bi bi-exclamation-circle-fill me-2"></i>
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Masukkan nama lengkap"
                value="{{ old('name') }}"
                autocomplete="name"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Masukkan email"
                value="{{ old('email') }}"
                autocomplete="email"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                autocomplete="new-password"
                required
            >
        </div>

        <div class="mb-4">
            <label class="form-label">Konfirmasi Password</label>
            <input
                type="password"
                name="password_confirmation"
                class="form-control"
                placeholder="Ulangi password"
                autocomplete="new-password"
                required
            >
        </div>

        <button type="submit" class="btn btn-register">
            <i class="bi bi-person-plus-fill me-2"></i>
            Daftar Sekarang
        </button>
    </form>

    <p class="text-center mt-4 mb-0">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="login-link">
            Login
        </a>
    </p>

</div>

</body>
</html>