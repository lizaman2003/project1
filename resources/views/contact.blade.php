@extends('tampletes.header')
@section('title')
Контакты
@endsection
@section('body')
    <div class="container-fluid page-banner blogpost no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block text-center">
                <div class="banner-content">
                    <h3>Свяжитесь с нами</h3>
                    <ol class="breadcrumb text-center">
                        <li><a class="text-bold"href="">Переместиться на</a></li>
                        <li class="active "><a  href="/" class="text-primary text-bold">Главную</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
    <section class="" id="contact ">
        <div class="container mt-5 mb-5  ">
            <div class="row row-cols-1 row-cols-md-3 g-3 mb-4">
                <div class="col">
                    <div class="card text-center pt-4 ">
                        <span class="icon"><img src="public\img\home.png" class="round-house"alt=""></span>
                        <div class="mt-1 ">
                            <h3 class="text-bold">Наша локация</h3>
                            <p class="mt-2 text-dark">г.Уфа, проспект Октября 22/1</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center pt-4">
                        <div class="infobox">
                            <span class="icon"><img src="public\img\phone.png" class="round" alt=""></span>
                        </div>
                        <div class="mt-1 ">
                            <h3>Наш контактный телефон</h3>
                            <p class="mt-2 text-dark"> моб.<a href="tel:+79272368829" style="color:black;"
                                    title="+7(927)236-88-29"> +7(927)236-88-29</a></p>
                        </div>
                    </div>

                </div>
                <div class="col ">
                    <div class="card text-center pt-4">
                        <div class="infobox">
                            <span class="icon"><img src="public\img\mail.png" class="round" alt=""></span>
                        </div>
                        <div class="mt-1">
                            <h3>Наша почта</h3>
                            <p class="mt-2 text-dark">info@global-speak.ru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A72a64629e10a451937f0d94683c12218463e4109b504a741c540fff3b13b5154&amp;width=100%25&amp;height=485&amp;lang=ru_RU&amp;scroll=true"></script>
@endsection
