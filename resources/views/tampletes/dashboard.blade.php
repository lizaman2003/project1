<div class="slidebar-fixed position-fixed">
    <div class="mt-3">
        <a href="#" class="logo-wrapper text-dark" >
            
            <img src="public\img\person.png" alt="" class="rounded-circle " style="width: 22%; height:20%">
            <strong class="text ">{{ Auth::user()->name }} {{ Auth::user()->surname }} </strong>
        </a>

        <div class="mt-2 text-center">
            @switch(Auth::user()->level)
                @case(Auth::user()->level == '1')
                    Beginner
                @break

                @case(Auth::user()->level == '2')
                    Elementary
                @break

                @case(Auth::user()->level == '3')
                    Pre-intermediate
                @break

                @case(Auth::user()->level == '4')
                    Intermediate+
                @break
            @endswitch
            <div class="progress">
                @switch(Auth::user()->level)
                    @case(Auth::user()->level == '1')
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: 25%"></div>
                    @break

                    @case(Auth::user()->level == '2')
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: 50%"></div>
                    @break

                    @case(Auth::user()->level == '3')
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: 80%"></div>
                    @break

                    @case(Auth::user()->level == '4')
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: 100%"></div>
                    @break
                @endswitch

            </div>
        </div>
        <p class="text-center">
            @if ($buyabonemet == null)
                вы еще не купили абонемент
            @else
                @if (Auth::user()->status == '1')
                    <strong>Абонемент до </strong>{{ $buyabonemet->abonement_expiration->toDateString() }}
                @else
                    <button type="button" data-bs-toggle="modal" data-bs-target="#buyaboniment"
                        class="btn btn1 mt-2">
                        <b>Продлить абонемент</b>
                    </button>
                @endif
            @endif
        </p>
        <hr>


        <p class="text-center fw-bold ">Панель навигации</p>
                    <div class="mt-3">
                        <ul class="nav nav-pills flex-column mb-auto">
                        @forelse( $buyabonemet1 as $a)
                           @if($a->status == 1)
                           @else
                            
                            @endif
                            @empty
                            <li class="nav-item ">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#buyaboniment" id="primary1"
                                    class="btn btn1 nav-link text-light d-flex justify-content-beetween align-items-center"
                                    aria-current="page">
                                    <img src="public\img\color.png" alt="" width="16" height="16"
                                        class=" me-2">
                                    <b>Купить абонемент</b>
                                </a>
                            </li>
                            @endforelse
                            <li class="nav-item ">
                                <a href="{{ route('timetable') }}" id="primary1"
                                    class="nav-link   text-light d-flex justify-content-beetween align-items-center"
                                    aria-current="page" >
                                    <img src="public\img\calendar_edit.png" alt="" width="16" height="16"
                                        class=" me-2">
                                    <b>Записаться</b>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#lesson1"  id="primary1"
                                    class="nav-link  text-light d-flex justify-content-beetween align-items-center"
                                    aria-current="page">
                                    <img src="public\img\coolicon.png" alt="" width="11" height="12"
                                        class="ms-1 me-2">
                                    <b>Материалы</b>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#records" id="primary1"
                                    class="nav-link   text-light justify-content-beetween align-items-center"
                                    aria-current="page">
                                    <img src="public\img\calendar_check.png" alt="" width="16"
                                        height="16" class=" me-2">
                                    <b>Мои записи</b>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a type="button" id="primary1" data-bs-toggle="modal" data-bs-target="#settings"
                                    class="nav-link  text-light  d-flex justify-content-beetween align-items-center"
                                    aria-current="page">
                                    <img src="public\img\settings.png" alt="" width="16" height="16"
                                        class=" me-2">
                                    <b>Настройки</b>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

    </div>
</div>
