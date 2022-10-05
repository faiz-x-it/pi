<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">

    <meta charset="utf-8">
    <title>PT Kuantum Buku Sejahtera | Penerbit dengan Pelayanan Terbaik dan Terpercaya!</title>
    <meta name="description" content="Quantum Book hadir di tengah-tengah masyarakat untuk melengkapi dan memenuhi permasalahan kebutuhan buku-buku khususnya buku SMK, Serta menjadi media untuk memenuhi kebutuhan ilmu bagi dunia pendidikan kejuruan yang lebih baik.">
    <meta name="keywords" content="quantum, book, quantum book, buku, sejahtera, malang, jawa timur, indonesia">
    <meta name="author" content="Vokanesia">
    <!-- Stylesheets -->
    <link href="http://127.0.0.1/quantumbook-main/themes/css/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/quantumbook-main/themes/css/style.css" rel="stylesheet">
    <link href="http://127.0.0.1/quantumbook-main/themes/css/responsive.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/2a563a7704.js"></script>


    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="http://127.0.0.1/quantumbook-main/themes/css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="http://127.0.0.1/quantumbook-main/themes/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://127.0.0.1/quantumbook-main/themes/images/ico-quantum-book.png" type="image/x-icon">
    <link rel="icon" href="http://127.0.0.1/quantumbook-main/themes/images/ico-quantum-book.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
        <!-- NAVBAR -->
        @include('layouts.includes.navbar')
        <!-- NAVBAR END -->
        
<!-- NAVBAR -->
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-1 border-bottom" id="nav-top">
    <div class="container">
        <a href="{{route('bookshop.home')}}" class="logo-img"><img src="{{asset('/')}}assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="{{route('bookshop.home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('all-books')}}" class="nav-link">Books</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('discount-books')}}" class="nav-link">Discount's Books</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown">
                        <span class="image-circle"><img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="30" alt=""></span>
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('user.home')}}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-muted"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{url('logout')}}">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<!-- NAVBAR END -->
<!-- HEADER -->
{{-- <section class="header py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="headings">
                    <h3><a href="{{route('bookshop.home')}}" class="text-secondary"><b class="text-danger">Book</b> Shop</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-user">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-danger" href="#" data-toggle="dropdown"><i class="fas fa-cog"></i> Your
                                activities</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('user.reviews')}}">Reviews</a>
                                <a class="dropdown-item" href="{{route('user.orders')}}">Orders</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shopping-cart text-right">
                    <a href="{{route('cart')}}" class="text-danger"><i class="fas fa-shopping-cart fa-2x m-1"></i>
                        @if(Cart::content()->count())
                            <span class="count-cart">{{Cart::content()->count()}}</span>
                        @endif
                    </a>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- HEADER END -->

@yield('content')


<!-- jQuery -->
<script type="text/javascript" src="{{asset('/')}}assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('/')}}assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{asset('/')}}assets/js/script.js"></script>

</body>

</html>
