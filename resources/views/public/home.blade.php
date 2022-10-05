@extends('layouts.master')

@section('content')
    <!-- Slider Area -->

    <section class="welcome-area">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-img slider-bg-1"></div>
                    <div class="carousel-caption">
                        <h2>Tim yang profesional dan kreatif</h2>
                        <p class="d-none d-md-block">Quantum Book memiliki penulis dan juga editor yang sangat berdedikasi di
                            bidangnya. Menerbitkan buku yang bermanfaat dan memiliki standar tinggi.</p>
                            <a href="http://127.0.0.1/quantumbook-main/page/tentang-kami" class="more-detail">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-2"></div>
                    <div class="carousel-caption">
                        <h2>Quality Control terjamin</h2>
                        <p class="d-none d-md-block">Quantum Book memberikan jaminan garansi terbaik terhadap produk buku yang
                            diterbitkan karena telah melewati Quality Control yang sangat ketat.</p>
                            <a href="http://127.0.0.1/quantumbook-main/page/tentang-kami" class="more-detail">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-3"></div>
                    <div class="carousel-caption">
                        <h2>Pelayanan terbaik kepada konsumen</h2>
                        <p class="d-none d-md-block">Quantum Book menerapkan sistem pelayanan profesionalitas dan kerjasama tim
                            yang tinggi untuk memberikan pelayanan terbaik kepada konsumen.</p>
                        <a href="http://127.0.0.1/quantumbook-main/page/tentang-kami" class="more-detail">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Sidebar Content -->
                @include('layouts.includes.side-bar')
                <!-- //Sidebar End -->
                <div class="col-md-8">
                    <div class="content-area">
                        <div class="card my-4">
                            <div class="card-header bg-primary">
                                <h4><a href="{{route('category', 'engineering')}}" class="text-white">Engineering Books</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if(! $engineering_books->count())
                                       <div class="alert alert-warning">No books availble</div>
                                    @else
                                        @foreach($engineering_books as $book)
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('book-details', $book->id)}}"><img src="{{$book->image_url}}" alt=""></a>
                                                        @if($book->discount_rate)
                                                            <h6><span class="badge badge-warning discount-tag">Discount {{$book->discount_rate}}%</span></h6>
                                                        @endif
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('book-details', $book->id)}}">{{str_limit($book->title, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <small>By <a href="{{route('author', $book->author->slug)}}">{{$book->author->name}}</a></small>
                                                    </div>
                                                    <div class="pbook-price mb-3">
                                                        @if($book->discount_rate)
                                                            <span class="line-through mr-3">Rp. {{$book->init_price}}</span>
                                                        @endif
                                                        <span class=""><strong>Rp. {{$book->price}}</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="{{route('category', 'engineering')}}" class="text-secondary">See More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <div class="card-header bg-primary">
                                <h4><a href="{{route('category', 'literature')}}" class="text-white">Literature Books</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if(! $literature_books->count())
                                        <div class="alert alert-warning">No books availble</div>
                                    @else
                                        @foreach($literature_books as $book)
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('book-details', $book->id)}}"><img src="{{$book->image_url}}" alt=""></a>
                                                        @if($book->discount_rate)
                                                            <h6><span class="badge badge-warning discount-tag">Discount {{$book->discount_rate}}%</span></h6>
                                                        @endif
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('book-details', $book->id)}}">{{str_limit($book->title, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <small>By <a href="{{route('author', $book->author->slug)}}">{{$book->author->name}}</a></small>
                                                    </div>
                                                    <div class="pbook-price mb-3">
                                                        @if($book->discount_rate)
                                                            <span class="line-through mr-3">Rp. {{$book->init_price}}</span>
                                                        @endif
                                                        <span class=""><strong>Rp. {{$book->price}}</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="{{route('category', 'literature')}}" class="text-secondary">See More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discount-book mb-5" id="discount-books">
        <div class="container">
            <div class="card mb-10">
                <div class="card-header bg-light text-white">
                    <h4><a href="{{route('discount-books')}}" class="text-white">Discount's Book</a></h4>
                </div>
                </div>
            </div>
        </div>
    </section>

       <!-- Sidebar Cart Item -->
       <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="http://127.0.0.1/quantumbook-main/"><img
                                        src="http://127.0.0.1/quantumbook-main/themes/images/logo-quantum-book-white.png"
                                        alt="" /></a>
                            </div>
                            <div class="content-box">
                                                                    <h2>Tentang Kami</h2>
                                <p class="text"><p>PT. Kuantum Buku Sejahtera adalah salah satu perusahaan yang bergerak di bidang penerbitan dan pendistribusian buku khususnya buku-buku SMK di seluruh Indonesia. PT Kuantum Buku Sejahtera atau yang dapat disebut&#8230;</p>
                                <a href="http://127.0.0.1/quantumbook-main/contact" class="theme-btn btn-style-two"><span
                                        class="txt">Konsultasi</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span
                                            class="icon fa fa-location-arrow"></span>Jl. Pondok Blimbing Indah Selatan X N6 No.5 Kota Malang - Jawa Timur                                        </li>
                                    <li><span class="icon fa fa-phone"></span>+62 822-9951-2221</li>
                                    <li><span class="icon fa fa-envelope"></span>office@quantumbook.id</li>
                                    <li><span class="icon fa fa-clock-o"></span>9.00 s/d 17.00 WIB</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href=""
                                        class="fa fa-facebook-f"></a></li>
                                <li class="instagram"><a href="https://www.instagram.com/quantumbook.id"
                                        class="fa fa-instagram"></a></li>
                                <!-- <li class="twitter"><a href="#" class="fa fa-twitter"></a></li> -->
                                <!-- <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li> -->
                                <li class="youtube"><a href="https://www.youtube.com/channel/UCUQDbcDgBskeDiJbcRGtAaA"
                                        class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

<!--Sponsors Section-->
<section class="sponsors-section style-three mt-2">
<div class="auto-container">
    <!-- Sec Title -->
    <div class="sec-title">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">WE TRANSFORM BUSINESSES</div>
                <h2>Kami memberikan solusi<br> untuk kebutuhanmu</h2>
            </div>
                            <div class="pull-right">
                <div class="text"><p>PT. Kuantum Buku Sejahtera adalah salah satu perusahaan yang bergerak di bidang penerbitan dan pendistribusian buku khususnya buku-buku SMK di seluruh Indonesia. PT Kuantum Buku Sejahtera atau yang dapat disebut dengan Quantum Book digagas oleh para ahli dan praktisi dibidang kejuruan SMK pada pertengahan tahun 2018berlokasikan di Arjosari, Malang, Jawa Timur. Quantum Book hadir di tengah-tengah masyarakat untuk melengkapi dan memenuhi permasalahan kebutuhan buku-buku khususnya buku SMK, Serta menjadi media untuk memenuhi kebutuhan ilmu bagi dunia pendidikan kejuruan yang lebih baik.</p>

<p>Buku bahan ajar yang kami sediakan sudah diselaraskan dengan kebutuhan industri di Indonesia. Dilengkapi pula dengan penguatan KI&amp;KD (Link &amp; Match Industri), Tujuan Pembelajaran, Infografis dan RPP yang sudah diperbaharui berbasis Science, Technology, Engineering and Mathematics (STEM). Hal ini memudahkan para pengajar untuk menyampaikan materi dalam kegiatan belajar mengajar baik di kelas maupun di laboratorium praktikum. Quantum Book menghadirkan buku-buku yang sudah disesuaikan dengan bidang keahlian yang ada di SMK yang meliputi Program&#8230;</div>
            </div>
        </div>
    </div>

</div>
</section>
<!--End Sponsors Section-->

<!-- Call To Action Two -->
<section class="call-to-action-section-two my-5">
<div class="auto-container">
    <div class="inner-container">
        <div class="image">
            <img src="http://127.0.0.1/quantumbook-main/themes/images/resource/image-2.jpg" alt="" />
        </div>
        <h3>Penerbit dan Distributor Buku Terbaik di Indonesia</h3>
        <a href="services.html" class="theme-btn btn-style-two"><span class="txt">Selengkapnya</span></a>
    </div>
</div>
</section>
<!-- End Call To Action Two -->

<!-- Pricing Section -->
<section class="pricing-section pt-0">
<div class="auto-container">
    <!-- Sec Title -->
    <div class="sec-title light centered">
        <div class="title text-dark">Our Blog</div>
        <h2 class="text-dark">Click Out Our <br> Latest News & Artical</h2>
    </div>

    <div class="row clearfix">

        <!-- News Block -->
                    <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="image">
                    <a href="http://127.0.0.1/quantumbook-main/blog/test"><img
                            src="http://127.0.0.1/quantumbook-main/themes/images/resource/news-1.jpg" alt="" /></a>
                </div>
                <div class="lower-content">
                    <h4><a href="http://127.0.0.1/quantumbook-main/blog/test">test</a></h4>
                    <div class="text"><p>tes</p></div>
                    <ul class="post-meta">
                        <li><span class="icon flaticon-user"></span>Ismail Marzuki</li>
                        <li><span class="icon flaticon-date"></span>2022-09-13 14:35:10</li>
                    </ul>
                </div>
            </div>
        </div>
                    <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="image">
                    <a href="http://127.0.0.1/quantumbook-main/blog/1"><img
                            src="http://127.0.0.1/quantumbook-main/themes/images/resource/news-1.jpg" alt="" /></a>
                </div>
                <div class="lower-content">
                    <h4><a href="http://127.0.0.1/quantumbook-main/blog/1">1</a></h4>
                    <div class="text">1</div>
                    <ul class="post-meta">
                        <li><span class="icon flaticon-user"></span></li>
                        <li><span class="icon flaticon-date"></span>2022-09-17 06:27:55</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>

</div>
</section>
<!-- End Pricing Section -->


    @endsection
