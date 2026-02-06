<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard absensi
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #000000;
        }

        .sidebar {
            background-color: rgb(197, 204, 219);
            height: 100vh;
            padding: 20px;
            box-shadow: 1px 0px 30px rgba(0, 0, 0, 0.432);
        }

        .sidebar .logo img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .color-2 {
            background-color: rgb(197, 204, 219);
        }

        .color-3 {
            background-color: rgb(169, 181, 207);
        }

        .table-container {
            border-radius: 10px;
        }

        .table.color-2 {
            background-color: rgb(197, 204, 219) !important;
        }

        .table.color-2 tr,
        .table.color-2 td,
        .table.color-2 th {
            background-color: transparent !important;
        }

        .stat-card {
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div>
        <div class="row">
            <div class="col-md-2 d-none d-md-block sidebar">
                <div class="mt-1 p-2 logo">
                    <img
                        src="https://scholar.googleusercontent.com/citations?view_op=view_photo&user=2dLbUYoAAAAJ&citpid=2">
                </div>

                <div class="mb-4 cari ">
                    <input type="text" class="form-control border-secondary" placeholder="Search">
                </div>

                <nav class="d-flex flex-column gap-2">
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-custom color-3">Dashboard</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-custom color-3">Dashboard</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-custom color-3">Dashboard</a>
                </nav>

                <!-- akun user-->
                <div class="mt-5 p-2 d-flex align-items-center">
                    <div id="icon-prof">
                        <img src="https://scholar.googleusercontent.com/citations?view_op=view_photo&user=2dLbUYoAAAAJ&citpid=2"
                            class="rounded-circle me-2" width="50px" height="50px">
                    </div>
                    <h6>Rony Heri Irawan, M.Kom. <br> <span class="text-muted">Account settings</span></h6>
                </div>
                <a href="{{ route('login') }}" class="btn btn-magenta w-100 mt-4 color-3">LOG OUT <i
                        class="bi bi-arrow-right"></i></a>
            </div>

            <!-- main boarddd -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <!---box detail karyawan-->
                <div class="row g-3 mb-4  ">
                    <!--karyawan hadir-->
                    <div class="col-md-4 ">
                        <div class="stat-card color-2 ">
                            <div class="d-flex justify-content-between"><small>Karyawan hadir</small>
                                <i class="bi bi-three-dots"></i>
                            </div>
                            <h2 class="mt-2 text-center">1</h2>
                        </div>
                    </div>
                    <!--jumlah karyawan-->
                    <div class="col-md-4">
                        <div class="stat-card color-2 ">
                            <div class="d-flex justify-content-between"><small>Jumlah
                                    karyawan</small> <i class="bi bi-three-dots"></i></div>
                            <h2 class="mt-2 text-center">10</h2>
                        </div>
                    </div>
                    <!--karyawan tidak hadir-->
                    <div class="col-md-4">
                        <div class="stat-card color-2 ">
                            <div class="d-flex justify-content-between"><small>Karyawan
                                    tidak
                                    hadir</small> <i class="bi bi-three-dots"></i></div>
                            <h2 class="mt-2 text-center">9</h2>
                        </div>
                    </div>
                </div>
                <!--button eksport data dan create report-->
                <div class="d-flex justify-content-end gap-2 mb-4">
                    <button class="btn btn-outline-custom color-2">Eksport data <i class="bi bi-download"></i></button>
                    <button class="btn btn-magenta px-4 color-2">scan QR <i class="bi bi-qr-code"></i></button>
                </div>
                <!--tabel-->
                <div class="table-container color-2">
                    <div class="d-flex justify-content-between align-items-center mb-2 p-2">
                        <h3>Recent</h3>
                        <div class="p-2">
                            <input type="date" id="calendarInput"
                                style="position: absolute; opacity: 0; width: 0; height: 0;"
                                onchange="updateCalendarText(this.value)">
                            <button class="btn btn-outline-custom btn-sm color-3"
                                onclick="document.getElementById('calendarInput').showPicker()">
                                <i class="bi bi-calendar3"></i> <span id="calendarText"></span>
                            </button>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table color-2">
                            <thead class="">
                                <tr class="">
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
                                            class="form-select form-select-sm color-3" style="width: 140px;">
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
    <script>
        function updateCalendarText(val) {
            if (!val) return;
            const date = new Date(val);
            const options = { month: 'short', year: 'numeric' };
            document.getElementById('calendarText').innerText = date.toLocaleDateString('en-US', options);
        }
    </script>
</body>

</html>