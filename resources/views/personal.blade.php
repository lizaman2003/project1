@extends('tampletes.header2')
@section('title')
    Личный кабинет
@endsection
@section('body')
    <div class="modal fade" id="buyaboniment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="abonement" action="{{ route('paidAboniment') }}" onsubmit="abonement(this,event)" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Купить абонемент</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <select name="id_abonement" id="id_abonementInput" class="form-select-lg form-select mb-3" required>

                            <option selected disabled>Выбрать абонимент на</option>
                            @foreach ($abonemets as $a)
                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                            @endforeach

                        </select>
                        <div class="invalid-feedback" id="id_abonementError"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn1">Купить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="modal">
        @include('incl_admin.settings_modal')
    </div>


    <main class="pt-5 justify-content-center">
        <div class="container-fluid">

            <div class="row">


                <div class="col-lg-12  col-ms-2 mt-4 mb-4  " id="records">

                    <p class="fs-1 mt-5 text-center">Мои записи</p>

                    <div class="table-responsive-lg">
                        <table class="table mt-2 table-hover">
                            <thead>
                                <tr class="text-center fs-5">

                                    <th scope="col-4">Дата</th>
                                    <th scope="col-2">Время</th>
                                    <th scope="col-2">Преподователь</th>
                                    <th scope="col-2">Урок</th>
                                    <th scope="col-1">Кабинет</th>
                                    <th scope="col-1"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($lesson_book && !$lesson_book->isEmpty())
                                    @foreach ($lesson_book as $b)
                                        <tr class="text-center" style="font-size:18px">

                                            <td>{{ date('l Y-m-d', strtotime($b->time)) }}</td>
                                            <td>{{ $b->time_start }}</td>
                                            @foreach ($teacher as $t)
                                                @if ($t->id == $b->teacher)
                                                    <td>{{ $t->name }}</td>
                                                @endif
                                            @endforeach
                                            @foreach ($lesson as $l)
                                                @if ($l->id == $b->lesson_name)
                                                    <td>{{ $l->name }}</td>
                                                @else
                                                @endif
                                            @endforeach
                                            <td>{{ $b->number_cabinet }}</td>
                                            <td><a href="{{ route('deleteLesson_book', ['id' => $b->id, 'id_lesson' => $b->id_lesson]) }}"
                                                    class="btn-close " aria-label="Закрыть"
                                                    onclick="return confirm('Вы уверены что хотите отменить запись?')"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <p class="fs-5">Вы еще не записались на занятия</p>
                                        </td>

                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <b id="lesson"></b>
                    @if (Auth::user()->status == 1)
                        <div class="row justify-content-center" >
                            <div class="col-10">
                                <p class=" fs-1 text-center mt-5">Учебные материалы </p>
                                <table class="table table align-middle table-sm mt-2 table-hover ">
                                    <thead>
                                        <tr class="text-center fs-5">
                                            <th scope="col">Название</th>
                                            <th scope="col">Материал урока</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lesson as $l)
                                            <tr class="text-center" style="font-size:18px">
                                                @switch(Auth::user()->level)
                                                    @case(Auth::user()->level == '1')
                                                        @if ($l->id_level == 1)
                                                            <td>{{ $l->name }}</td>
                                                            <td>
                                                                <p><a class="btn btn1  "
                                                                        href="public/{{ $l->files_lesson }}"target="_blank"
                                                                        download>Скачать
                                                                        <img src="public\img\download.png" alt=""
                                                                            width="16" height="16" class=" me-2"></a></p>
                                                            </td>
                                                        @else
                                                        @endif
                                                    @break

                                                    @case(Auth::user()->level == '2')
                                                        @if ($l->id_level == 2)
                                                            <td>{{ $l->name }}</td>
                                                            <td>
                                                                <p><a class="btn btn1"
                                                                        href="public/{{ $l->files_lesson }}"target="_blank"
                                                                        download>Скачать</a></p>
                                                            </td>
                                                        @else
                                                        @endif
                                                    @break

                                                    @case(Auth::user()->level == '3')
                                                        @if ($l->id_level == 3)
                                                            <td>{{ $l->name }}</td>
                                                            <td>
                                                                <p><a class="btn btn1"
                                                                        href="public/{{ $l->files_lesson }}"target="_blank"
                                                                        download>Скачать</a></p>
                                                            </td>
                                                        @else
                                                        @endif
                                                    @break

                                                    @case(Auth::user()->level == '4')
                                                        @if ($l->id_level == 4)
                                                            <td>{{ $l->name }}</td>
                                                            <td>
                                                                <p><a class="btn btn1"
                                                                        href="public/{{ $l->files_lesson }}"target="_blank"
                                                                        download>Скачать</a></p>
                                                            </td>
                                                        @else
                                                        @endif
                                                    @break

                                                    @default
                                                        @if ($l->id_level == 1)
                                                            <td>{{ $l->name }}</td>
                                                            <td>
                                                                <p><a class="btn btn1"
                                                                        href="public/{{ $l->files_lesson }}"target="_blank"
                                                                        download>Скачать</a></p>
                                                            </td>
                                                        @else
                                                        @endif
                                                @endswitch
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                    @endif
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2s">
                <p class="fs-5"> {{ $lesson->links() }}</p>
            </div>
        </div>
        </div>
        </div>
    </main>
@endsection
