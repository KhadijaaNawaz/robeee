<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        /* Custom styles for different screen sizes */
        @media (max-width: 780px) {
            #sidebar, #sidebar2 {
                display: none; /* Hide sidebars by default */
            }
            #sidebar {
                position: absolute;
                top: 60px; /* Adjust as per your navbar height */
                left: 0;
                width: 100%;
                z-index: 1000;
                background-color: #fff;
                display: none; /* Sidebar hidden initially */
            }
            #main-content {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-2-5 col-md-12 col-sm-12 sidebar" id="sidebar">
                @include('partials.sidebar')
            </div>
            <!-- Secondary Sidebar (initially hidden) -->
            <div class="col-auto sidebar d-none" id="sidebar2">
                @include('partials.sidebar2')
            </div>
            <!-- Main Content -->
            <div class="col-9-5 col-xxl-11 col-md-12" id="main-content">
                <!-- Top Navbar -->
                <nav class="navbar navbar1 p-3 navbar-light bg-grey shadow rounded-bottom">
                    <div class="d-flex w-100">
                        <button class="btn btn-outline-secondary" id="menu-toggle">
                            <i class="fas fa-bars fs-4"></i>
                        </button>
                        <span class="mx-auto h1 text-dark">@yield('title', 'Dashboard')</span>
                        <div>
                            <img src="{{ asset('img/dummy-logo-5b2.png') }}" alt="" class="w-75">
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            var sidebar = document.getElementById("sidebar");

            // On small screens, toggle sidebar display
            if (window.innerWidth <= 780) {
                sidebar.classList.toggle("d-none");
                sidebar.style.display = sidebar.classList.contains("d-none") ? "none" : "block";
            } else {
                // For larger screens, toggle sidebar normally
                var sidebar2 = document.getElementById("sidebar2");
                var content = document.getElementById("main-content");

                sidebar.classList.toggle("d-none");
                sidebar2.classList.toggle("d-none");

                if (sidebar.classList.contains("d-none") && sidebar2.classList.contains("d-none")) {
                    content.classList.remove("col-9-5");
                    content.classList.add("col-12");
                } else {
                    content.classList.remove("col-12");
                    content.classList.add("col-9-5");
                }
            }
        });
    </script>
</body>
</html>
