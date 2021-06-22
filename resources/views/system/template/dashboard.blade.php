<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('img/favicon-admin.png') }}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">
    <!-- Components -->
    <!-- Create Categories -->
    <link rel="stylesheet" href="{{ asset('css/components/search-list.css') }}">
    <title>Student Portal | Admin Panel</title>
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/xit_website/">Student Portal</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active">
                            <a href="{{route('view-physical-store')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Physical Store</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('view-social-media-store')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Social Media</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('view-ecommerce-store')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Ecommerce</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>        
            <div class="page-heading">
                <h3>@yield('heading')</h3>
            </div>
            <div class="page-content"> 
                @yield('content')
            </div>
        </div>

    
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    {{-- <p>2021 &copy; Mazer</p> --}}
                </div>
                <div class="float-end">
                    {{-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <ahref="http://ahmadsaugi.com">A. Saugi</a></p> --}}
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>

<!-- Components -->
<!-- Search List -->
<script src="{{ asset('js/components/search-list.js') }}"></script>
</body>
</html>