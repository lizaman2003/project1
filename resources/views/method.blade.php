@extends('tampletes.header')
@section('title')
    Преподаватели
@endsection
@section('body')
    <div class="section p-5" id="method">
        <div class="container">
            <div class="row">
                <p class="fs-1 text-center">Наша методика </p>
                <p class="text-justify fs-4"> Наша методика базируется на разных аспектах языка задействуя все подходы к изучению языка. На каждом занятии прорабатываются все аспекты и разбираются трудности, поэтому студенты нашей школы добиваются поставленных результатов.</p>
                <div class="row mt-4">
                    <div class="col-3">
                        <p class="fs-1 text-center">1 Аудирование</p>
                    </div>
                    <div class="col-3">
                        <p class="fs-1 text-center">2 Практика</p>
                    </div>
                    <div class="col-3">
                        <p class="fs-1 text-center">3 Чтение</p>
                    </div>
                    <div class="col-3">
                        <p class="fs-1 text-center">4 Грамматика</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4">
                        <img src="https://dy7oszgl9a56g.cloudfront.net/wp-content/uploads/2017/05/01095836/4habilities.jpg"
                        alt="" class=" img-fluid rounded-2 ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 card wow fadeIn p-4 ">
                        <p class="fs-5">Восприятие информации на слух и прослушивание аудиоматериалов </p>
                    </div>
                    <div class="col-3 card wow fadeIn p-4 ">
                        <p class="fs-5">Говорение с носителем языка на различные темы</p>
                    </div>
                    <div class="col-3 card wow fadeIn p-4 ">
                        <p class="fs-5">Чтение информации на английском </p>
                    </div>
                    <div class="col-3 card wow fadeIn p-4 ">
                        <p class="fs-5">Написание тестов и закрипление грамматических основ</p>
                    </div>
                </div>


              
            </div>
            <div class="row">
                <p class="fs-1 text-center mt-5 pt-2">Как мы обучаем на безлимитных курсах английского?</h1>

                <div class=" bg-light card wow fadeIn mt-1 p-5">
                    <h4>3 важнейших особенности обучения в центре Global Speak</h4>
                    <small class="fs-5 mt-4 me-4">
                        <ul class="list-group-numbered text-justify">
                            <li class="list-group-item"><strong>Безлимитная система обучения</strong> <br> Мы практикуем
                                безлимитную систему обучения, Вы сами выбираете, как
                                часто посещать наши
                                занятия.</li>
                            <li class="list-group-item mt-1"><strong>Преподаватели – носители языка</strong> <br>
                                Большая
                                часть наших преподавателей – носители языка. Вы научитесь
                                говорить на английском и
                                понимать язык на слух. У Вас просто не будет другого варианта!</li>
                            <li class="list-group-item mt-1"><strong>Разговорный английский</strong> <br> На наших
                                занятиях
                                практикуется разговорный английский.
                                Наша основная цель – научить Вас свободно говорить на этом иностранном языке.
                            </li>
                        </ul>
                    </small>
                </div>
                <div class="p-5  mt-5 card wow fadeIn ">
                    <div class="container-fluid py-3 ">
                        <div class="row">
                            <div class="col-4"><img src="public\img\5.jpg" alt=""
                                    class="img-fluid rounded-2 justify-content-center" style=" object-fit:cover" />
                            </div>
                            <p class="col-md-8 fs-4 ps-5">
                                <strong class="mb-5">Обучение в нашем центре проводится по абонементам каждый день, в
                                    абонемент
                                    включены:</strong> <br>
                                <small> - Безлимитное посещение до 7 дней в неделю <br>
                                    - Занятия с носителями языка <br>
                                    - 30 дней заморозки</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <p class="fs-1 text-center mt-5 ">Как будет проходить Ваше обучение?</p>
                <div class="container bg-light card wow fadeIn p-5 mt-1">
                    <div class="row">
                        <h4 class="">Этапы обучения</h4>
                        <div class="accordion accordion-borderless mt-3 px-5" id="accordionFlushExampleX">
                            <div class="accordion-item">
                                <h1 class="accordion-header" id="flush-headingOneX">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseOneX" aria-expanded="true"
                                        aria-controls="flush-collapseOneX">
                                        <small class="fs-4">1. Бесплатное тестирование</small>
                                    </button>
                                </h1>
                                <div id="flush-collapseOneX" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                                    <div class="accordion-body text-justify fs-5">
                                        Мы проводим для Вас бесплатный тест на определение уровня знания английского
                                        языка.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree1X">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseThree1X" aria-expanded="false"
                                        aria-controls="flush-collapseThree1X">
                                        <small class="fs-4">2. Бесплатный пробный урок</small>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree1X" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree1X" data-mdb-parent="#accordionFlushExampleX">
                                    <div class="accordion-body text-justify fs-5">
                                        Вы посещаете одно занятие по своему уровню, чтобы понять, насколько Вам это
                                        нравится.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThreeX">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseThreeX" aria-expanded="false"
                                        aria-controls="flush-collapseThreeX">
                                        <small class="fs-4">3. 30 занятий по Вашему уровню</small>
                                    </button>
                                </h2>
                                <div id="flush-collapseThreeX" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThreeX" data-mdb-parent="#accordionFlushExampleX">
                                    <div class="accordion-body text-justify fs-5">
                                        После приобретения абонемента Вам необходимо пройти 30 занятий для освоения
                                        одного
                                        уровня. Занятия можно посещать в любом порядке, не имеет значения, какую тему вы
                                        пройдете раньше - «семья» или «работа», или сначала научитесь составлять
                                        предложения
                                        в настоящем времени или в прошедшем. Нумерация, которую Вы видите в расписании,
                                        нужна только для удобства, чтобы Вы знали, какую тему Вы уже посетили, а какую
                                        еще
                                        нет. Под номером урока скрывается просто определенная тема, прописывать название
                                        темы в расписании неудобно. При желании/ необходимости Вы можете посетить одно и
                                        то
                                        же занятие несколько раз.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThreeX1">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseThreeX1" aria-expanded="false"
                                        aria-controls="flush-collapseThreeX1">
                                        <small class="fs-4">4. Повторное тестирование</small>
                                    </button>
                                </h2>
                                <div id="flush-collapseThreeX1" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThreeX1" data-mdb-parent="#accordionFlushExampleX">
                                    <div class="accordion-body text-justify fs-5">
                                        После посещения всех 30 занятий, преподаватель проводит для вас индивидуальный
                                        письменный и устный тест, чтобы определить насколько хорошо усвоен уровень.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThreeX2">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseThreeX2" aria-expanded="false"
                                        aria-controls="flush-collapseThreeX2">
                                        <small class="fs-4">5. Переход на следующий уровень</small>
                                    </button>
                                </h2>
                                <div id="flush-collapseThreeX2" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThreeX2" data-mdb-parent="#accordionFlushExampleX">
                                    <div class="accordion-body text-justify fs-5">
                                        После успешного прохождения теста Вы переходите на следующий уровень, где Вам
                                        будут
                                        доступны следующие 30 занятий.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
