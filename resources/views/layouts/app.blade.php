<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:title" content="LÀM THẾ NÀO ĐỂ ĐĂNG KÝ ĐƯỢC GÓI DATA MỚI NHẤT CỦA VIETTEL. Đây là kênh đăng ký trọn gói VIETTEL thông dụng nhất qua tin nhắn.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Viettel4GSieuToc') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}" type="text/css">
</head>

<body>
@if((!auth()->check() && !request()->is('login')) || auth()->check())
    <nav style="min-height: 70px;" class="navbar navbar-expand-sm navbar-dark fixed-top bg-viettel">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" class="logo mx-auto d-block"
                                                  alt="Viettel 4G Siêu tốc"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a href="{{route('category', ['category' => '4g-tron-goi'])}}" class="nav-link">4G trọn gói</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-dcom'])}}" class="nav-link">Gói DCOM</a></li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-combo'])}}" class="nav-link">Gói COMBO</a></li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-theo-ngay'])}}" class="nav-link">Gói theo
                            ngày</a></li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-phut-goi'])}}" class="nav-link">Gói phút gọi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category', ['category'=>'goi-hot'])}}" class="nav-link">Gói HOT</a></li>
                </ul>
                <form method="post" accept-charset="utf-8" class="navform m-0" action="{{route('package.search')}}">
                    @csrf
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
                    <form method="post" accept-charset="utf-8" class="my-2 ml-md-1" action="{{route('logout')}}">
                        @csrf
                        <button class="btn btn-success">Đăng Xuất</button>
                    </form>
                @endauth
            </div>
        </div>
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
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/decoupled-document/ckeditor.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
