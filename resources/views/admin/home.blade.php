<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-4L5PDDlXsoryaYB/B8fBiZkZQkFXbciQpPsVr3VtHl9U5VIWZFVcqILOAA6/nzF22QiXjduOdf2y/5bNI0R4kA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Dashboard - Clavia Photography</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand img {
            height: 40px;
            width: auto;
            margin-right: 200px;
        }

        .navbar-brand span {
            color: #ffffff;
            font-size: 20px;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ffffff;
            display: block;
            transition: 0.3s;
        }

        .sidebar a i {
            margin-right: 10px;
            /* Tambahkan warna ikon */
        }

        .sidebar a.active {
            background-color: #5a6268;
            color: #ffffff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        h2 {
            color: #343a40;
        }

        .card {
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            transition: color 0.3s ease;
        }

        .card:hover .card-title {
            color: #007bff;
        }

        /* Menyesuaikan ukuran dan posisi grafik */
        .salesChart {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('image/logoo.jpeg')}}" alt="CLAVIA STUDIO" class="logo-img">
                <span> Clavia Photography</span>
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            @include('partials.sidebar')
            
            <main role="main" class="col-md-10 content">
                <div class="col" style="margin-top: 20px;">
                    <h2 class="text-secondary" style="font-family: 'cambria', sans-serif;">Selamat Datang,
                        {{ Auth::user()->name }} !!!</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Grafik Penjualan Bulanan</h5>
                                <canvas id="salesChart" class="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan card lainnya sesuai kebutuhan -->
                </div>
            </main>
        </div>
    </div>

    <script>
        var salesData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Penjualan',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [65, 59, 80, 81, 56],
            }],
        };

        var ctx = document.getElementById('salesChart').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: salesData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>