<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Header -->
    @include('admin.layout.header')
    
    <div class="d-flex flex-grow-1">
        @include('admin.layout.sideBar')
        <div class="d-flex flex-column flex-grow-1 p-3">
            <h2 class="mb-4">Welcome, Admin</h2>
            
            <div class="d-flex justify-content-center mb-4">
                <i class="fas fa-user-circle fa-3x"></i>
            </div>
            
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <div class="card p-3 text-center">
                        <h4>Total Sales</h4>
                        <p class="fs-3">$12,345</p>
                        <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3 text-center">
                        <h4>Users</h4>
                        <p class="fs-3">1,234</p>
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-3">
                        <h5>Sales Statistics</h5>
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3">
                        <h5>User Growth</h5>
                        <canvas id="usersChart"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="bg-white text-center py-3 mt-auto w-100">
                @include('admin.layout.footer')
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const usersCtx = document.getElementById('usersChart').getContext('2d');

        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [500, 800, 1200, 1500, 2000, 2500],
                    borderColor: 'blue',
                    fill: false
                }]
            }
        });

        new Chart(usersCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Users',
                    data: [50, 80, 120, 150, 200, 250],
                    backgroundColor: 'green'
                }]
            }
        });
    </script>
</body>
</html>
