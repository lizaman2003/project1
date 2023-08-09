<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/html" href="public/css/custom.css">
    <link rel="shortcut icon" href="#" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="public/css/mdb.min.css" />
    <link rel="stylesheet" href="public/css/style.css">
    <title>@yield('title')</title>
</head>

<body>

    <body class="bg-light">
        <header>
            <nav class="navbar navbar1 fixed-top navbar-expand-lg navbar-dark scrolling-navbar"style="background: linear-gradient( #A473FF, #73ABFF );">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><img src="public/img/1.png" alt=""
                        style=" height: 60%;
                    width:60%;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item ms-2">
                                <a class="nav-link active fs-5" aria-current="page" href="/#price">Цены</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link active fs-5" aria-current="page" href="/#commentslider">Отзывы</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link active fs-5" aria-current="page" href="{{route('method')}}">Методика</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link active fs-5" aria-current="page" href="{{route('teachers')}}">Преподаватели</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link active fs-5" aria-current="page"
                                    href="{{ route('timetable') }}">Расписание</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link active fs-5" aria-current="page" href="{{ route('contact') }}">Контакты</a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center">
                         
                            <a href="{{ route('logout') }}" class="btn btn-outline-light btn-rounded ms-2 btn-lg"><b>Выйти</b></a>
                        </div>
                    </div>
                </div>
            </nav>
            @if(Auth::user()->is_admin == 0)
            @include('tampletes.dashboard')
            @elseif(Auth::user()->is_admin == 1)
            @include('tampletes.dashboard2')
            @else
            @include('tampletes.dashboard3')
            @endif
        </header>
  
    @yield('body')
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast" id="notify" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Global Speak</strong>
                <small>сейчас</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block" id="scrollToTop" onclick="goUp();"><img src="public\img\long_up.png" alt="">
    </div>

    <div class="container-fluid" style="background: linear-gradient( #A473FF, #73ABFF )">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 p-5 text-light ">
            <div class="col mb-4">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="public/img/1.png" alt="" style=" height: 70%;
                width:70%;">
                </a>
                <p class="fw-bold">+7(347)266-88-29
                <p>
                <p class="fw-bold">+7(927)236-88-29</p>

            </div>
            <div class="col mb-2">

            </div>
            <div class="col mb-2">

            </div>
            <div class="col mb-4">
                <h5>Контактная информация</h5>
                <ul class="nav flex-column ">
                    <li class="nav-item mb-2"><a href="{{ route('method') }}" class="nav-link link-light p-0 ">Как мы обучаем
                        </a></li>
                    <li class="nav-item mb-2"><a href="{{ route('contact') }}"
                            class="nav-link p-0 link-light">Контакты</a></li>
                    
                    <li class="nav-item mb-2"><a href="{{ route('consent') }}" class="nav-link p-0 link-light"> Согласие на
                            обработку
                            персональных данных</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Полезная информация</h5>
                <ul class="nav flex-column">
                
                    <li class="nav-item mb-2"><a href="/#commentslider" class="nav-link p-0 link-light">Отзывы</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('timetable') }}"
                            class="nav-link p-0 link-light">Расписание</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <p class="text-center">© 2023 Все права защишены</p>
                </div>
            </div>
        </footer>

    </div>
    <script src="public/js/jquery-3.6.3.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="public/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="public/js/main.js"></script>
</body>

</html>
