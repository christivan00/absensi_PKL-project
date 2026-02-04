<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PKL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #0b0e1e;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #12162d;
            min-height: 100vh;
            padding: 20px;
        }

        .nav-link {
            color: #a0a0a0;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .nav-link.active {
            background-color: #1a1f3d;
            color: #d63384;
            border-left: 4px solid #d63384;
        }

        /* Card Styling */
        .stat-card {
            background-color: #12162d;
            border: none;
            border-radius: 15px;
            padding: 20px;
        }

        .table-container {
            background-color: #12162d;
            border-radius: 20px;
            padding: 25px;
        }

        /* Buttons */
        .btn-magenta {
            background: linear-gradient(90deg, #9c27b0, #e91e63);
            border: none;
            color: white;
        }

        .btn-outline-custom {
            border: 1px solid #2d3250;
            color: white;
        }

        /* Table custom */
        .table {
            color: white;
            border-color: #2d3250;
            background-color: transparent !important;
        }

        .table> :not(caption)>*>* {
            background-color: transparent !important;
            color: white !important;
        }

        .status-dot {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <h4 class="mb-5">LOGO</h4>
                <div class="mb-4">
                    <input type="text" class="form-control bg-dark border-secondary text-white"
                        placeholder="Search for...">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-house-door me-2"></i>
                            Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#"><i
                                class="bi bi-file-earmark-bar-graph me-2"></i> Reports</a></li>
                    <li class="nav-item mt-4"><a class="nav-link" href="#"><i class="bi bi-gear me-2"></i> Settings</a>
                    </li>
                </ul>

                <div class="mt-5 p-2 d-flex align-items-center">
                    <img src="https://scholar.googleusercontent.com/citations?view_op=view_photo&user=2dLbUYoAAAAJ&citpid=2"
                        class="rounded-circle me-2" width="50px" height="50px">
                    <small>Rony Heri Irawan, M.Kom. <br> <span class="text-muted">Account settings</span></small>
                </div>
                <button class="btn btn-magenta w-100 mt-4">LOG OUT <i class="bi bi-arrow-right"></i></button>
            </nav>

            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h5">DasboartProject PKL</h1>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="d-flex justify-content-between"><small class="text-muted">Karyawan hadir</small>
                                <i class="bi bi-three-dots"></i>
                            </div>
                            <h2 class="mt-2">50.8K</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="d-flex justify-content-between"><small class="text-muted">Jumlah
                                    karyawan</small> <i class="bi bi-three-dots"></i></div>
                            <h2 class="mt-2">23.6K</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="d-flex justify-content-between"><small class="text-muted">Karyawan tidak
                                    hadir</small> <i class="bi bi-three-dots"></i></div>
                            <h2 class="mt-2">756</h2>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mb-4">
                    <button class="btn btn-outline-custom">Eksport data <i class="bi bi-download"></i></button>
                    <button class="btn btn-magenta px-4">Create report</button>
                </div>

                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3>Recent</h3>
                        <button class="btn btn-outline-custom btn-sm"><i class="bi bi-calendar3"></i> Jan 2026</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-muted">
                                    <th>Nama</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rony Heri Irawan, M.Kom.</td>
                                    <td>Dec 30, 10:06 AM</td>
                                    <td>
                                        <select name="bt_status" id="bt_status"
                                            class="form-select form-select-sm bg-dark text-white" style="width: 140px;">
                                            <option value="hadir" style="color: #2ecc71; background-color: #12162dff;">
                                                Hadir</option>
                                            <option value="tidak_hadir"
                                                style="color: #e74c3c; background-color: #12162dff;">Tidak Hadir
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>