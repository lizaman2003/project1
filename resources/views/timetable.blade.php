@extends('tampletes.header')
@section('title')
    Расписание
@endsection
@section('body')
    <section id="main">
        <div class="container py-5">
            <div class="row">
                <p class="text-center fs-1"> Расписание занятий</p>

                <div class="col-lg-4 mt-5 text-center">
                    <p class="fs-3">Запишитесь на свой уровень</p>
                </div>


                @foreach ($level as $l)
                    @switch($l->name)
                        @case($l->name == 'Beginner')
                            <div class="col-lg-2 mt-5">
                                <div class="container p-2 text-center card wow fadeIn" style="background:  #FBFFDF">
                                    {{ $l->name }}</div>
                            </div>
                        @break

                        @case($l->name == 'Elementary')
                            <div class="col-lg-2 mt-5">
                                <div class="container p-2 text-center card wow fadeIn" style="background: #D4FFEB">
                                    {{ $l->name }}</div>
                            </div>
                        @break

                        @case($l->name == 'Intermediate+')
                            <div class="col-lg-2 mt-5">
                                <div class="container p-2 text-center card wow fadeIn" style="background: #ffdffc">
                                    {{ $l->name }}</div>
                            </div>
                        @break

                        @case($l->name == 'admin')
                        @break

                        @default
                            <div class="col-lg-2 mt-5">
                                <div class="container p-2 text-center card wow fadeIn" style="background: #dff3ff">
                                    {{ $l->name }}</div>
                            </div>
                    @endswitch
                @endforeach

            </div>
        </div>



        
            <div class="container-fluid  px-5 pb-5 pt-1">
                <div class="row row-cols-1 row-cols-md-6 g-3 text-center ">
                    @foreach ($timetable as $t)
                        <div class="col">
                            <div class="card card wow fadeIn p-3"><b>{{ date('l Y-m-d', strtotime($t->time)) }}</b>
                                @switch($t->id_level)
                                    @case($t->id_level == '1')
                                        <div class="mt-1 mb-3 p-3 text-start shadow-sm rounded-2 " style="background:  #FBFFDF">
                                            <b>Lesson {{ $t->lesson_name }}</b> <span class="text-muted">{{ $t->time_start }}</span>
                                            <p class="text-wrap">Лектор: {{ $t->name }} <br>
                                                Каб - {{ $t->number_cabinet }}
                                                <span class="text-center">
                                                    @auth
                                                        @if (Auth::user()->is_admin == 0 && Auth::user()->status == 1)
                                                            <a http="#" onclick="addLesson_book({{ $t->id }})"
                                                                class="btn  btn1">
                                                                Записаться <span id="places1{{ $t->id }}"
                                                                    class="badge bg-light text-dark rounded-pill">{{ $t->places }}</span>
                                                            </a>
                                                        @else
                                                        @endif
                                                    @endauth
                                                </span>
                                            </p>
                                        </div>
                                    @break

                                    @case($t->id_level == '2')
                                        <div class="mt-1 mb-3 p-3 text-start shadow-sm rounded-2 " style="background: #D4FFEB">
                                            <b>Lesson {{ $t->lesson_name }}</b> <span
                                                class="text-muted">{{ $t->time_start }}</span>
                                            <p class="text-wrap">Лектор: {{ $t->name }} <br>
                                                Каб - {{ $t->number_cabinet }}
                                                <span class="text-center">
                                                    @auth
                                                        @if (Auth::user()->is_admin == 0 && Auth::user()->status == 1)
                                                            <a http="#" onclick="addLesson_book({{ $t->id }})"
                                                                class="btn  btn1">
                                                                Записаться <span id="places1{{ $t->id }}"
                                                                    class="badge bg-light text-dark rounded-pill">{{ $t->places }}</span>
                                                            </a>
                                                        @else
                                                        @endif
                                                    @endauth
                                                </span>
                                            </p>
                                        </div>
                                    @break

                                    @case($t->id_level == '4')
                                        <div class="mt-1 mb-3 p-3 text-start shadow-sm rounded-2" style="background: #ffdffc">
                                            <b>Lesson {{ $t->lesson_name }}</b> <span
                                                class="text-muted">{{ $t->time_start }}</span>
                                            <p class="text-wrap">Лектор: {{ $t->name }} <br>
                                                Каб - {{ $t->number_cabinet }}
                                                <span class="text-center">
                                                    @auth
                                                        @if (Auth::user()->is_admin == 0 && Auth::user()->status == 1)
                                                            <a http="#" onclick="addLesson_book({{ $t->id }})"
                                                                class="btn  btn1">
                                                                Записаться <span id="places1{{ $t->id }}"
                                                                    class="badge bg-light text-dark rounded-pill">{{ $t->places }}</span>
                                                            </a>
                                                        @else
                                                        @endif
                                                    @endauth
                                                </span>
                                            </p>
                                        </div>
                                    @break

                                    @default
                                        <div class="mt-1 mb-3 p-3 text-start shadow-sm rounded-2 " style="background: #dff3ff">
                                            <b>Lesson {{ $t->lesson_name }}</b> <span
                                                class="text-muted">{{ $t->time_start }}</span>
                                            <p class="text-wrap">Лектор: {{ $t->name }} <br>
                                                Каб - {{ $t->number_cabinet }}
                                                <span class="text-center">
                                                    @auth
                                                        @if (Auth::user()->is_admin == 0 && Auth::user()->status == 1)
                                                            <a http="#" onclick="addLesson_book({{ $t->id }})"
                                                                class="btn  btn1">
                                                                Записаться <span id="places{{ $t->id }}"
                                                                    class="badge bg-light text-dark rounded-pill">{{ $t->places }}</span>
                                                            </a>
                                                        @else
                                                        @endif
                                                    @endauth
                                                </span>
                                            </p>
                                        </div>
                                @endswitch
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
            </div>
        
    </section>
@endsection
