<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Hướng dẫn đăng ký dịch vụ Data 4G, dịch vụ Data 3G mạng Viettel, tổng đài đăng ký 9123 chính thức từ nhà mạng.">
    <meta itemprop="name" content="Website đăng ký 4G siêu tốc chính Thức của Viettel">
    <meta itemprop="description" content="Hướng dẫn đăng ký dịch vụ Data 4G, dịch vụ Data 3G mạng Viettel, tổng đài đăng ký 9123 chính thức từ nhà mạng.">
    <meta itemprop="url" content="{{route('dashboard')}}">
    <meta itemprop="image" content="{{asset('images/banner.jpg')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{asset('images/banner.jpg')}}">
    <meta name="twitter:title" content="Viettel 3G, 4G, 5G  Siêu tốc">
    <meta name="twitter:description" content="Hướng dẫn đăng ký dịch vụ Data 4G, dịch vụ Data 3G mạng Viettel, tổng đài đăng ký 9123 chính thức từ nhà mạng.">
    <meta property="og:url" content="{{route('dashboard')}}">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Website đăng ký 4G siêu tốc chính Thức của Viettel">
    <meta property="og:title" content="Viettel 4G Siêu tốc">
    <meta property="og:description" content="Hướng dẫn đăng ký dịch vụ Data 4G, dịch vụ Data 3G mạng Viettel, tổng đài đăng ký 9123 chính thức từ nhà mạng.">
    <meta property="og:image" content="{{asset('images/banner.jpg')}}">
    <meta property="og:image:alt" content="Đăng ký 4G siêu tốc Viettel">
    <meta property="fb:app_id" content="">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="canonical" href="{{route('dashboard')}}">

    <title>{{ config('app.name', 'Viettel4GSieuToc') }}</title>
    @auth()
        <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/decoupled-document/ckeditor.js"></script>
    @endauth
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}" type="text/css">
    <script src="https://kit.fontawesome.com/52f13975c5.js" crossorigin="anonymous"></script>
</head>

<body>
@if((!auth()->check() && !request()->is('login')) || auth()->check())
    <nav style="min-height: 70px;" class="navbar navbar-expand-sm navbar-dark fixed-top bg-viettel">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" class="logo mx-auto d-block"
                                                  alt="Viettel 4G Siêu tốc"></a>
            <button class="navbar-toggler d-lg-none border-white" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a href="{{route('category', ['category' => 'goi-combo-4G-phut-goi'])}}" class="nav-link">COMBO 4G + PHÚT GỌI</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-phut-goi'])}}" class="nav-link">GÓI PHÚT GỌI</a></li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-4g-30-ngay'])}}" class="nav-link">GÓI 4G 30 NGÀY</a></li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-dcom'])}}" class="nav-link">GÓI DCOM</a></li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-theo-ngay-tuan'])}}" class="nav-link">GÓI THEO NGÀY/TUẦN</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-dang-ky-6-thang-1-nam'])}}" class="nav-link">GÓI ĐĂNG KÝ 6 THÁNG 1 NĂM</a>
                    </li>
                </ul>
                <form method="post" accept-charset="utf-8" class="navform m-0 {{!auth()->check()? 'd-none d-md-block' : ''}}" action="{{route('package.search')}}">
                    {{ csrf_field() }}
                    <div class="input-group text">
                        <input value="{{request()->name?? null}}" type="text" name="name" class="form-control"
                               placeholder="Tìm gói cước" id="keyword">
                        <div class="input-group-append">
                            <button class="input-group-text" id="basic-addon2"><i class="fas fa-search"
                                                                                  aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>

                @auth()
                    <form method="post" accept-charset="utf-8" class="my-2 ml-md-1 d-block d-md-none"
                          action="{{route('logout')}}">
                        {{ csrf_field() }}
                        <button class="btn btn-success">Đăng Xuất</button>
                    </form>
                @endauth
            </div>
        </div>
        @auth()
            <form method="post" accept-charset="utf-8" class="my-2 ml-md-1 d-none d-md-block"
                  action="{{route('logout')}}">
                {{ csrf_field() }}
                <button class="btn btn-success">Đăng Xuất</button>
            </form>
        @endauth
    </nav>
@endif

<main style="margin-top: 70px; min-height: 75vh;">
    @yield('content')
</main>

@if(!request()->is('login'))
    <footer>
        <p class="text-center p-4">
            © Copyright Viettel 4G Siêu tốc<br>
            Cơ quan chủ quản: Tổng Công ty Viễn thông Viettel (Viettel Telecom) – Chi nhánh Tập đoàn Công nghiệp – Viễn
            thông Quân đội.<br>
            Trụ sở: Số 1, đường Giang Văn Minh, phường Kim Mã, quận Ba Đình, Hà Nội.
        </p>
    </footer>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
