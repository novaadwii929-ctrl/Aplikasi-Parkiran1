<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - ParkirKu</title>

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

        .login-card {
            width: 100%;
            max-width: 430px;
            padding: 38px;
            background: white;
            border-radius: 18px;
            border: 1px solid #e5edf7;
            box-shadow: 0 15px 45px rgba(16, 43, 80, .10);
        }

        .logo {
            width: 70px;
            height: 70px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #174b91, #3188df);
            color: white;
            border-radius: 18px;
            font-size: 32px;
            box-shadow: 0 8px 18px rgba(37, 99, 235, .2);
        }

        h3 {
            color: #102b50;
            letter-spacing: 1px;
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

        .btn-login {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 9px;
            background: #2563eb;
            color: white;
            font-weight: 600;
            transition: .2s;
        }

        .btn-login:hover {
            background: #174bb5;
            color: white;
            transform: translateY(-1px);
        }

        .register-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        @media(max-width: 480px) {
            .login-card {
                padding: 27px 22px;
            }
        }
    </style>
</head>
<body>

<div class="login-card">

    <div class="logo">
        <i class="bi bi-car-front-fill"></i>
    </div>

    <h3 class="text-center mt-3 fw-bold">PARKIRKU</h3>

    <p class="text-center subtitle mb-4">
        Sistem Informasi Manajemen Parkir
    </p>

    @if(session('success'))
        <div class="alert alert-success">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <i class="bi bi-exclamation-circle-fill me-2"></i>
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

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

        <div class="mb-4">
            <label class="form-label">Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                autocomplete="current-password"
                required
            >
        </div>

        <button type="submit" class="btn btn-login">
            <i class="bi bi-box-arrow-in-right me-2"></i>
            Masuk
        </button>
    </form>

    <p class="text-center mt-4 mb-0">
        Belum punya akun?
        <a href="{{ route('register') }}" class="register-link">
            Daftar sekarang
        </a>
    </p>

</div>

</body>
</html>