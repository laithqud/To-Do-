<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @stack('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Header -->
    @include('admin.layout.header')
    
    <div class="d-flex flex-grow-1">
        @include('admin.layout.sideBar')
        <div class="d-flex flex-column flex-grow-1">
            <!-- Main Content -->
            <div class="flex-grow-1 p-3">
                @yield('content')
            </div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, perferendis!
            <!-- Footer -->
            <footer class="bg-white text-center py-3 mt-auto w-100">
                @include('admin.layout.footer')
            </footer>
        </div>
    </div>

    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>