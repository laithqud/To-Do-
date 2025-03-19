<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @section('title') ordderss @endsection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Header -->
    @include('admin.layout.header')
    
    <div class="d-flex flex-grow-1">
        @include('admin.layout.sideBar')
        <div class="d-flex flex-column flex-grow-1 p-3">
            <h2 class="mb-4">Orders</h2>
            
            <div class="d-flex justify-content-between mb-3">
                <input type="text" class="form-control w-25" placeholder="Search orders...">
            </div>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>John Doe</td>
                        <td>$150.00</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>2025-03-10</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">View</a>
                            <a href="#" class="btn btn-sm btn-danger">Cancel</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Jane Smith</td>
                        <td>$250.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>2025-03-11</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">View</a>
                            <a href="#" class="btn btn-sm btn-danger">Cancel</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            
            <!-- Footer -->
            <footer class="bg-white text-center py-3 mt-auto w-100">
                @include('admin.layout.footer')
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>