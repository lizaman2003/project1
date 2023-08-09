@extends('tampletes.header')
@section('title')
    Преподаватели
@endsection
@section('body')
    <section id="slider" class="p-5">
        <div class="container">
            <div class="row">
                <p class="fs-1 text-center">Наши преподаватели</p>
                <p class="fs-4">Наша команда – это молодые, целеустремленные профессионалы, настолько увлеченные своим делом, что мы заразим нашей тотальной уверенностью и твердой верой в собственные силы и возможности. </p>
                <div id="carouselExampleIndicator" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row mx-5 px-5">
                                    <div class="p-3">
                                        <div class="card justify-content-center m-5 p-3">
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2">

                                                                <img src="public\img\photo.avif" alt=""
                                                                    class="img-fluid rounded-2 justify-content-center"
                                                                    style=" object-fit:cover;  min-height:150px" />

                                                            </div>
                                                            <div class="col-3">
                                                                <h5 class="card-title">Мария <span class="badge rounded-pill "
                                                                        id="primary">Стаж 7 лет</span> </h5>
                                                                <p class="card-text">
                                                                <ul>
                                                                    <li>Есть опыт проживания за границей
                                                                    </li>
                                                                    <li>Сертификат TKT</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <div class="col-7">
                                                                <h5 class="card-title">О себе</h5>
                                                                <p class="card-text ">
                                                                <p class="text-justify">Мне нравится искать индивидуальный
                                                                    подход к студентам, общаться с
                                                                    ними на разнообразные темы, делиться (и обмениваться!)
                                                                    знаниями.  Я
                                                                    очень быстро нахожу подход к каждому ученику, и мы
                                                                    становимся
                                                                    друзьями.
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
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row mx-5 px-5">
                                    <div class="p-3">
                                        <div class="card justify-content-center m-5 p-3">
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2">

                                                                <img src="public\img\photo2.avif" alt=""
                                                                    class="img-fluid rounded-2 justify-content-center"
                                                                    style=" object-fit:cover;  min-height:150px" />

                                                            </div>
                                                            <div class="col-3">
                                                                <h5 class="card-title">Алекс <span class="badge rounded-pill"
                                                                        id="primary">Стаж: 5 лет</span> </h5>
                                                                <p class="card-text">
                                                                <ul>
                                                                    <li>
                                                                        Есть опыт работы с детьми
                                                                    </li>
                                                                    <li>Сертификат TEFL/TESOL</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <div class="col-7">
                                                                <h5 class="card-title">О себе</h5>
                                                                <p class="card-text ">
                                                                <p class="text-justify">Уроки стараюсь проводить нескучно.
                                                                    Использую разные задания, расшевелю даже самых
                                                                    немотивированных учеников. Использую коммуникативную
                                                                    методику, придумываю как можно больше ассоциаций для
                                                                    запоминания студентом информации.
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
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row mx-5 px-5">
                                    <div class="p-3">
                                        <div class="card justify-content-center m-5 p-3">
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2">

                                                                <img src="public\img\photo3.avif" alt=""
                                                                    class="img-fluid rounded-2 justify-content-center"
                                                                    style=" object-fit:cover;  min-height:150px" />

                                                            </div>
                                                            <div class="col-3">
                                                                <h5 class="card-title">Акаш <span class="badge rounded-pill"
                                                                        id="primary">Стаж: 8 лет</span> </h5>
                                                                <p class="card-text">
                                                                <ul>
                                                                    <li>
                                                                        Носитель языка
                                                                    </li>
                                                                    <li>Сертификат TEFL/TESOL</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <div class="col-7">
                                                                <h5 class="card-title">О себе</h5>
                                                                <p class="card-text ">
                                                                <p class="text-justify"> Я окончил Южно-Африканский
                                                                    университет со степенью в области социальных
                                                                    наук.Работал со студентами со всего мира. Я также
                                                                    работал со студентами разного уровня владения английским
                                                                    языком.

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
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row mx-5 px-5">
                                    <div class="p-3">
                                        <div class="card justify-content-center m-5 p-3">
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2">

                                                                <img src="public\img\photo4.avif" alt=""
                                                                    class="img-fluid rounded-2 justify-content-center"
                                                                    style=" object-fit:cover;  min-height:150px" />

                                                            </div>
                                                            <div class="col-3">
                                                                <h5 class="card-title">Тадана <span class="badge rounded-pill"
                                                                        id="primary">Стаж: 10 лет</span> </h5>
                                                                <p class="card-text">
                                                                <ul>
                                                                    <li>
                                                                        Носитель языка
                                                                    </li>
                                                                    <li>Сертификаты TEFL/TESOL, M.S. М.А. B.A Bachelor's
                                                                        Degree
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <div class="col-7">
                                                                <h5 class="card-title">О себе</h5>
                                                                <p class="card-text ">
                                                                <p class="text-justify"> Я помогу вам преодолеть языковой
                                                                    барьер, и мы поработаем над произношением. Я использую
                                                                    интересные обучающие материалы. Когда у моих учеников
                                                                    возникают трудности, мы успешно с ними справляемся и
                                                                    продолжаем становиться лучше.

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
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row mx-5 px-5">
                                    <div class="p-3">
                                        <div class="card justify-content-center m-5 p-3">
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2">

                                                                <img src="public\img\photo5.avif" alt=""
                                                                    class="img-fluid rounded-2 justify-content-center"
                                                                    style=" object-fit:cover;  min-height:150px" />

                                                            </div>
                                                            <div class="col-3">
                                                                <h5 class="card-title">Валерия <span class="badge rounded-pill"
                                                                        id="primary">Стаж: 7 лет</span> </h5>
                                                                <p class="card-text">
                                                                <ul>
                                                                    <li>
                                                                        Есть опыт проживания за границей
                                                                    </li>
                                                                    <li>Сертификат TEFL/TESOL</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                            <div class="col-7">
                                                                <h5 class="card-title">О себе</h5>
                                                                <p class="card-text ">
                                                                <p class="text-justify"> Я с радостью как поговорю с вами на разговорном английском, так и помогу в подготовке к ОГЭ/ЕГЭ/Кембриджским экзаменам вплоть до FCE (B2).
                                                                    На своих уроках уделяю внимание коммуникативному подходу,помогаю преодолеть языковой барьер ученика.  
                                                                  

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
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicator"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicator"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
