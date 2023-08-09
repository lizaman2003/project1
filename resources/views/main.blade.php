@extends('tampletes.header')
@section('title')
    Главная
@endsection
@section('body')
    <section id="modals">
        <div class="modal fade" id="auth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="authForm" action="{{ route('auth') }}" method="post" onsubmit="login1(this,event)">
                        <div class="modal-header">
                            <h1 class="modal-title fs-4" id="exampleModalLabel">Авторизация</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="email1" id="email1Input" class="form-control"
                                    placeholder="Ваш email">
                                <div class="invalid-feedback" id="email1Error"></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password1" id="password1Input" class="form-control"
                                    placeholder="Ваш пароль">
                                <div class="invalid-feedback" id="password1Error"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"data-bs-toggle="modal" id="reg1" data-bs-dismiss="modal"
                                data-bs-target="#reg" type="submit" class="btn btn2 btn-lg">Регистрация</button>
                            <button type="submit" class="btn btn1 btn-lg m-2">Войти</button>
                    </form>

                </div>
            </div>
        </div>
        </div>
        </div>


        <div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="registerForm" action="{{ route('register') }}" method="post"
                        onsubmit="formAction(this,event)">
                        <div class="modal-header">
                            <h1 class="modal-title fs-4 text-center" id="exampleModalLabel">Регистрация</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" id="nameInput" class="form-control"
                                    placeholder="Ваше имя">
                                <div class="invalid-feedback" id="nameError"></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="surname" id="surnameInput" class="form-control"
                                    placeholder="Ваша фамилия">
                                <div class="invalid-feedback" id="surnameError"></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" id="emailInput" class="form-control"
                                    placeholder="Ваш email">
                                <div class="invalid-feedback" id="emailError"></div>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phonenumber" id="phonenumberInput" class="form-control"
                                    placeholder="Ваш телефон">
                                <div class="invalid-feedback" id="phonenumberError"></div>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" id="passwordInput" class="form-control"
                                    placeholder="Ваш пароль">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password_repeat" id="password_repeatInput"
                                    class="form-control" placeholder="Повторите ваш пароль">
                                <div class="invalid-feedback" id="passwordError"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn1 btn-lg">Зарегистрироваться</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        @auth
            <div class="modal fade" id="commentadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('newComment') }}" id="newComment" method="post"
                            onsubmit="newComment(this,event)">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Добавление отзыва</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                    <textarea cols="60" rows="6" name="comment" id="commentInput" class="form-control"
                                        placeholder="Напишите свой отзыв здесь"></textarea>
                                    <div class="invalid-feedback" id="commentError"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn1">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endauth
    </section>
    {{-- style="background: #fcf7ed" --}}
    <section id="content">

        <section id="slider py-5 mt-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 py-4 px-3 mt-5 mb-5 card wow fadeIn" style="background: #FFFCFC; ">
                        <div class="container">
                            <p class="fs-1"><small>Занимайтесь каждый день <strong class="text-primary">за
                                        4400 руб/мес</strong></small></p>
                            <div class="mt-4">
                                <p class="fs-4"><img src="public/img/Ellipse.png" alt=""> Ежедневно по вашему
                                    уровню проводится одно занятие</p>
                                <p class="fs-4"><img src="public/img/Ellipse.png" alt="" &nbsp &nbsp> Занятия
                                    групповые по 90 минут</p>
                                <p class="fs-4"><img src="public/img/Ellipse.png" alt="" &nbsp &nbsp> Учим
                                    говорить, а не переводить со словарем</p>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    @guest
                                        <button id="free" class="btn btn1 me-md-2 btn-lg" type="submit">Попробовать
                                            один урок
                                            бесплатно </button>
                                    @endguest
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="public\img\image 3.jpg" alt="" class="rounded-2"
                                                    style="width: 100%; ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="public\img\image 1.jpg" alt="" class="rounded-2"
                                                    style="width: 100%;  ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            </div>
        </section>


        <section id="about study">
            <div class="container py-5 ml-5">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="public\img\self-study 1.png" alt="">
                    </div>
                    <div class="col-lg-10 px-5  ">
                        <p class=" display-6 text-center"><b>Что Вы получите от обучения на курсах разговорного английского
                                Global
                                Speak?</b></p>
                        <div class="bg-light mt-3 p-5 card wow fadeIn">
                            <p><img src="public\img\Icon.png" alt=""><b class="fs-4"style="color: #0D6EFD;">
                                    Эффективную практику с носителями языка на каждом занятии</b></p>
                            <p class="text-justify fs-5">
                                Невозможно научиться говорить на английском, заучивая грамматику и списки новых слов. Только
                                постоянное общение на английском и применение знаний на практике поможет Вам преодолеть
                                языковой барьер и заговорить на английском свободно</p>

                            <p><img src="public\img\Icon.png" alt=""><b class="fs-4"style="color: #0D6EFD;">
                                    Возможность заниматься ежедневно, не переплачивая</b></p>
                            <p class="text-justify fs-5 ">
                                Мы практикуем БЕЗЛИМИТНУЮ систему обучения, в офлайн.
                                Это значит, что Вы можете заниматься ежедневно по нашему расписанию, у нас в офисе или из
                                дома,по материалам пока действует ваш абонемент.

                                При этом все занятия делятся на уровни по международному стандарту, с нулевого до
                                продвинутого.

                                На каждом уровне вам необходимо пройти 35 уроков. Уроки логически завершенные и идут в
                                расписании циклично. Их можно посещать в любом порядке, так как уровень сложности у них
                                одинаковый, отличаются только темой (одна словарная и одна грамматическая на каждом уроке).
                                После того, как Вы изучите и попрактикуете все темы одного уровня, Вы проходите тестирование
                                и переходите на уровень выше.</p>

                            <p class="text-justify"><img src="public\img\Icon.png" alt=""><b
                                    class="fs-4"style="color: #0D6EFD;">
                                    Гарантию результата по окончании курса</b></p>
                            <p class="text-justify fs-5">

                                Мы работаем по этой системе и видим просто отличные результаты - студенты действительно
                                начинают говорить и свободно владеть английским.
                                Поэтому, мы прописали гарантию результата в нашем договоре.
                                К тому же, Вы можете перед покупкой поговорить с любым из наших студентов,узнать их мнение и
                                результаты от обучения.
                                Приходите на БЕСПЛАТНОЕ пробное занятие и убедитесь в эффективности
                                наших курсов уже сегодня! Или оставьте заявку для прохождения пробного урока в формате
                                онлайн.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="price">
            <div class="container py-4">
                <div class="row">
                    <p class="display-6 text-center"><b>Цены на безлимитные курсы английского языка в Уфе</b>
                    </p>
                    <p class="phone fs-4  mt-4 text-center">Возможна РАССРОЧКА без участия банка. Подробнее в нашем офисе
                        или по
                        телефону: <a href="tel:89872405847 " style="text-decoration: none; color:black">+7
                            (347) 266-88-29</a> </p>

                    <div class="row row-cols-1 row-cols-md-4 g-2 ">
                        @forelse ($abonemets as $a)
                            <div class="col text-center">

                                <h2 class="card wow fadeIn p-3 rounded-5 text-light " id="primary">
                                    <strong>{{ $a->name }}</strong>
                                </h2>
                                <div class="body card wow fadeIn bg-light  mt-1" style="min-height:250px; ">
                                    <p class="text-danger fs-2 pt-5">
                                        <strong>{{ \App\Http\Controllers\MainController::strg($a->price) }}
                                            р</strong>
                                    </p>
                                    <h4 class="text-decoration-line-through">
                                        {{ \App\Http\Controllers\MainController::strg($a->old_price) }} р </h4>
                                    <p class="fs-5"> <strong>-{{ $a->discount }}</strong> </p>
                                    <p class="mb-3">
                                        @guest
                                            <button class="btn btn1 mb-2 btn btn-lg " type="submit"
                                                id="buyabonement"><strong style="margin-top:40px; margin-bottom:40px">Купить
                                                    абонемент</strong>
                                            </button>
                                        @endguest

                                    </p>
                                </div>


                            </div>
                        @empty
                        @endforelse

                    </div>



                    <div class="container bg-light card wow fadeIn mt-4 p-5">
                        <div class="row">
                            <p class=" display-6 text-center"><b>Почему мы предлагаем абонементы только на 4, 8 и 12
                                    месяцев?</b></p>
                            <p class="fs-5 mt-3 text-justify">
                                Основная цель нашего центра – научить Вас свободно говорить на английском и понимать
                                иностранную речь. Достичь такого результата менее чем за 4 месяца практически невозможно,
                                экспресс-курсы, обещающие мгновенный результат – это не более, чем рекламная уловка.</p>
                            <p class="fs-5 text-justify">Стоимость абонемента составляет от 4500 до 8000 рублей в пересчете
                                на месяцы.
                                Учитывая, что
                                мы предлагаем безлимитную систему посещения уроков и занятия с носителями языка – это одно
                                из самых выгодных предложений в Уфе!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="commentslider" class="p-5">
            <div class="container">
                <div class="row">
                    <p class="fs-1 text-center">Отзывы наших учеников</p>
                    <div id="carouselExampleIndicator1" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row mx-5 px-5">
                                        <div class="px-3 pb-5">
                                            <div class="card justify-content-center mx-5 px-3">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="p-3 overflow-hidden"
                                                                    style=" height:220px; max-height:200px;  min-height:150px; text-overflow: ellipsis;">
                                                                    <h3>
                                                                        Карим
                                                                    </h3>
                                                                    <p class="text-justify fs-5">
                                                                        Я начал изучать английский язык для саморазвития и
                                                                        путешествий.
                                                                        Эту школу я выбрал из-за того, что занятия проходят
                                                                        каждый день.
                                                                        На данный момент я перешёл на уровень Elementary. Из
                                                                        учителей
                                                                        мне нравится Акаш

                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @forelse($usercomment as $u)
                                @forelse($user as $u1)
                                    @if ($u1->id == $u->id_user)
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="row mx-5 px-5">
                                                    <div class="px-3 pb-5">
                                                        <div class="card justify-content-center mx-5 px-3">
                                                            <div class="row ">
                                                                <div class="col-12">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="p-3 overflow-hidden"
                                                                                style=" height:220px; max-height:150px;  min-height:200px;text-overflow: ellipsis;">
                                                                                <h3>
                                                                                    {{ $u1->name }}
                                                                                </h3>
                                                                                <p class=" text-justify fs-5">
                                                                                    {{ $u->comment }}
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                    @endif
                                @empty
                                @endforelse
                            @empty
                            @endforelse
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicator1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicator1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                @auth
                    @if (Auth::user()->is_admin == 0)
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn1 me-md-2 btn-lg" data-bs-toggle="modal" data-bs-target="#commentadd"
                                type="button">Оставить отзыв</button>
                        </div>
                    @else
                    @endif
                @endauth
            </div>

        </section>
        <section id="question">
            <p class=" display-6 text-center  mb-4"><b>Ответы на часто задаваемые вопросы</b></p>
            <div class="container bg-light card wow fadeIn p-5">
                <div class="row">

                    <div class="accordion accordion-borderless mt-3 px-5" id="accordionFlushExampleX">
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="flush-headingOneX">
                                <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseOneX" aria-expanded="true"
                                    aria-controls="flush-collapseOneX">
                                    <small class="fs-4"> Выдаются ли студентам сертификаты по окончанию уровня?</small>
                                </button>
                            </h1>
                            <div id="flush-collapseOneX" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                                <div class="accordion-body text-justify fs-5">
                                    После завершения каждого уровня преподаватель проводит итоговое тестирование студентов
                                    по всем изученным темам. Если студент успешно справился с заданиями, то мы выдаем
                                    сертификат нашей школы, подтверждающий владение иностранным языком на этом уровне.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree1X">
                                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseThree1X" aria-expanded="false"
                                    aria-controls="flush-collapseThree1X">
                                    <small class="fs-4">Сколько времени занимает обучение?</small>
                                </button>
                            </h2>
                            <div id="flush-collapseThree1X" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree1X" data-mdb-parent="#accordionFlushExampleX">
                                <div class="accordion-body text-justify fs-5">
                                    Длительность обучения зависит от ваших целей и времени, которым вы располагаете. На
                                    прохождение одной ступени общего разговорного курса уходит 6-9 месяцев. Исходя из нашей
                                    практики, для уверенного общения за границей нужно заниматься английским не менее двух
                                    лет, если вы начинаете учить язык с нуля. Если же у вас уже есть определенный уровень
                                    знаний, вы сможете продолжать изучение с любой ступени, которой соответствует ваш
                                    уровень.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThreeX">
                                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseThreeX" aria-expanded="false"
                                    aria-controls="flush-collapseThreeX">
                                    <small class="fs-4">Как быстро начинают говорить студенты Global Speak?</small>
                                </button>
                            </h2>
                            <div id="flush-collapseThreeX" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThreeX" data-mdb-parent="#accordionFlushExampleX">
                                <div class="accordion-body text-justify fs-5">
                                    Наши студенты начинают говорить с первого занятия. Мы работаем по коммуникативной
                                    методике, которая подразумевает полное погружение в языковую атмосферу.
                                    Однако необходимо помнить, что говорение – это навык, который развивается постепенно.
                                    Как правило, на первоначальном этапе студенты употребляют простые фразы и предложения,
                                    которые постепенно усложняются и превращаются в уверенную речь. Самое главное - не
                                    бояться разговаривать в группе, как можно больше. Наши преподаватели создают очень
                                    дружественную атмосферу в классе и помогают каждому студенту почувствовать себя
                                    комфортно и разговориться, используя для этого различные педагогические приемы
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="main">
            <div class="container py-5">
                <div class="row">
                    <div class="text-center">
                        <p class="fs-1">И самое главное</p>
                        <p class="fs-3"> Мы гарантируем Вам 100% результат по окончании курса, либо повторите весь курс
                            абсолютно бесплатно!
                        </p>
                    </div>
                    <div class="col-lg-5 text-end">
                        <p class="fs-5 ">При покупке любого абонемента</p>
                        <p class="fs-5 "> Вы также получаете ПОДАРОК</p>
                    </div>
                    <div class="col-lg-2">
                        <img src="public\img\gift.png" width="189" height="200" style=" object-fit: cover;">
                    </div>
                    <div class="col-lg-5 text-start">
                        <p class="fs-5"> БЕСПЛАТНЫЙ доступ к онлайн</p>
                        <p class="fs-5 ">
                            библиотеке вашего уровня!</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
