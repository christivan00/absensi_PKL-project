<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PKL Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #0b0e1e;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background-color: #12162d;
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .form-control {
            background-color: #1a1f3d;
            border: 1px solid #2d3250;
            color: white;
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus {
            background-color: #1a1f3d;
            border-color: #d63384;
            color: white;
            box-shadow: none;
        }

        .btn-magenta {
            background: linear-gradient(90deg, #9c27b0, #e91e63);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 10px;
            font-weight: bold;
            width: 100%;
            transition: transform 0.2s;
        }

        .btn-magenta:hover {
            transform: translateY(-2px);
            color: white;
            opacity: 0.9;
        }

        .text-magenta {
            color: #d63384;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Welcome Back</h2>
            <p class="text-muted">Login to your PKL account</p>
        </div>

        <form>
            <div class="mb-3">
                <label for="username" class="form-label text-muted">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-muted">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
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