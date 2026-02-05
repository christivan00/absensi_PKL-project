<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Absensi Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #fdfdff;
            color: rgb(0, 0, 0);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background-color: #fcfcff;
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .form-control {
            background-color: #fefeff;
            border: 1px solid #afafaf;
            color: white;
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus {
            background-color: #c7c7c7;
            color: rgb(44, 44, 44);
            box-shadow: none;
        }

        .btn-magenta {
            background: #c7c7c7;
            border: none;
            color: rgb(0, 0, 0);
            padding: 12px;
            border-radius: 10px;
            font-weight: bold;
            width: 100%;
            transition: transform 0.2s;
        }

        .btn-magenta:hover {
            background-color: #5a5a5a;
            transform: translateY(-2px);
            color: rgb(190, 190, 190);
            opacity: 0.9;
        }

        .text-magenta {
            color: #002cf0;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="text-center mb-4">
            <h2 class="fw-bold">WEB ABSENSI</h2>
            <p class="text-muted">Login to your absensi account</p>
        </div>

        <form>
            <div class="mb-3">
                <label for="username" class="form-label text-muted">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-muted">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label text-muted" for="remember">Remember me</label>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-magenta text-center d-block">LOGIN</a>
        </form>

        <div class="text-center mt-4">
            <small class="text-muted">Don't have an account? <a href="#" class="text-magenta text-decoration-none">Sign
                    Up</a></small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>