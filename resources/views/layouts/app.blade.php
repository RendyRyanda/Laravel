<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Helper')</title>
    
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tambahkan custom CSS jika diperlukan -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">\
    <a href="{{ route('categories.pdf') }}" class="btn btn-secondary mb-4">Export to PDF</a>

</head>
<body>
    <div class="container-fluid">
    <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-sticky">
            <h4>HELPER</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Semua Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trakteer</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main class="col-md-10 ms-sm-auto px-4">
        @yield('content')
    </main>
</div>


    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
