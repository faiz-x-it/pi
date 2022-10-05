<div class="main-header header-style-three">
    <!-- Header Top Two -->
    <div class="header-top-two">
        <div class="outer-container">
            <div class="clearfix">

                <!-- Top Left -->
                <div class="top-left clearfix">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li>Kami Penerbit yang memiliki Profesionalitas, Dedikasi, dan Kreativitas
                            Tinggi<strong><a href="http://127.0.0.1/quantumbook-main/contact">Hubungi Kami</a></strong></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="mailto:office@quantumbook.id"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </span> office@quantumbook.id</a></li>
                        <li><a href="tel:+62 822-9951-2221"><i class="fa fa-phone-square" aria-hidden="true"></i>
                        </span> +62 822-9951-2221</a>
                        </li>
                    </ul>
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="" class="fa fa-facebook-f"
                                target="_blank"></a></li>
                        <li><a href="https://www.instagram.com/quantumbook.id" class="fa fa-instagram"
                                target="_blank"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCUQDbcDgBskeDiJbcRGtAaA" class="fa fa-youtube" target="_blank"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">    
                    <div class="logo"><a href="{{route('bookshop.home')}}"><img
                                src="http://127.0.0.1/quantumbook-main/themes/images/logo-quantum-book.png" alt=""
                                title=""></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        <ul>
                            <li><strong>E-Mail</strong></li>
                            <li>office@quantumbook.id</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <!-- Quote Btn -->
                        <div class="btn-box">
                            <a href="http://127.0.0.1/quantumbook-main/contact" class="theme-btn btn-style-one"><span
                                    class="txt">KONSULTASI GRATIS</span></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container clearfix">
            <div class="nav-outer clearfix">

                <!-- Grid Box -->
                <div class="grid-box navSidebar-button">
                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                </div>
                <!-- End Grid Box -->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span></span></div>
                <!-- Main Menu -->
                <nav class="main-menu show navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li><a href="{{route('bookshop.home')}}">Beranda</a>
                            </li>
                            <li class="dropdown"><a href="#">Profil</a>
                                <ul>
                                    <li><a href="http://127.0.0.1/quantumbook-main/page/tentang-kami">Tentang Kami</a></li>
                                    <li><a href="http://127.0.0.1/quantumbook-main/page/visi-dan-misi">Visi dan Misi</a></li>
                                    <li><a href="http://127.0.0.1/quantumbook-main/page/struktur-organisasi">Struktur
                                            Organisasi</a></li>
                                </ul>
                            </li>
                            <li><a href="http://127.0.0.1/quantumbook-main/contact">Kontak</a></li>
                            <li><a href="http://127.0.0.1/quantumbook-main/blogs">Blog</a></li>
                            <li><a href="http://127.0.0.1/quantumbook-main/photos">Galeri</a></li>
                            <li><a href="{{route('all-books')}}">Produk</a></li>
                            <li><a href="{{route('cart')}}" class="text-primary"><i class="fas fa-shopping-cart"></i>
                                @if(Cart::content()->count())
                                    <span class="count-cart">{{Cart::content()->count()}}</span>
                                @endif
                            </a></li>
                        </ul>
                        
                    </div>
                    <!--Search Box-->
                    <div class="search-box-outer ml-4">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>

                </nav>
                <!-- Main Menu End-->

                <!-- Options Box -->
                <div class="options-box clearfix">
                    <div class="option-inner">
                        <span class="icon flaticon-24-hours-2"></span>
                        <div class="number"><span>Hubungi Kami 24 Jam</span><a
                                href="tel:+62 822-9951-2221">+62 822-9951-2221</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Lower -->
      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="http://127.0.0.1/quantumbook-main/themes/images/logo-quantum-book.png"
                        alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="http://127.0.0.1/quantumbook-main/"><img
                        src="http://127.0.0.1/quantumbook-main/themes/images/logo-quantum-book.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


</div>
<nav class="navbar navbar-expand-sm text-white navbar-white p-1 border-bottom" id="nav-top">
    <div class="container">
        <a href="{{route('bookshop.home')}}" class="logo-img"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav ">
                <li class="nav-item px-2 ">
                    <a href="{{route('bookshop.home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('all-books')}}" class="nav-link">Books</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('discount-books')}}" class="nav-link">Discount's Book</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Auth::check() == false)
                    <li class="nav-item px-2">
                        <a href="{{url('login')}}" class="nav-link text-danger"><i class="fas fa-user-lock"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('register')}}" class="nav-link"><i class="fas fa-user"></i> Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown">
                            <span class="image-circle"><img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="30" alt=""></span>
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu">
                            @if(Auth::user()->role->name == "Admin")
                                <a class="dropdown-item" href="{{route('admin.home')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                    Profile
                                </a>
                            @elseif(Auth::user()->role->name == "User")
                                <a class="dropdown-item" href="{{route('user.home')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                    Profile
                                </a>
                            @else
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                    Profile
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{url('logout')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
