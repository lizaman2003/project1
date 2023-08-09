@extends('tampletes.header2')
@section('title')
    Панель администратора
@endsection
@section('body')
    <div id="modal">
        @include('incl_admin.settings_modal')
    </div>


    <main class="pt-5 justify-content-center" id="#lesson">
        <div class="container">
            <p class="text-center mt-5 pt-2 fs-1">Занятия</p>
            <select class="form-select form-select-lg  w-auto mt-1 mb-1" onchange="filterlesson(this)">
                <option value="all">Все</option>
                <option value="month">Этот месяц</option>
                <option value="week">Эта неделя</option>
            </select>
            <div id="lesson">
                @include('incl_admin.lessons')
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2s">
                <button class="btn btn1 btn btn-lg"data-bs-toggle="modal" data-bs-target="#addLesson"
                    type="button">Добавить занятие</button>
            </div>


            <p id="lesson1" class="text-center mt-4 fs-1">Учебные материалы </p>
            <div class="row justify-content-center">
                <div class="col-10">
                    <select id="filter" class="form-select form-select-lg w-auto " onchange="filter(this)">
                        <option value="5">Все</option>
                        <option value="1">Beginner</option>
                        <option value="2">Elementary</option>
                        <option value="3">Pre-intermediate</option>
                        <option value="4">Intermediate+</option>
                    </select>
                </div>
            </div>
            <div id="material">
                @include('incl_admin.material')
            </div>

            <p class="text-center fs-1 mt-4" id="teacher">Все преподаватели</p>
            <div class="table-responsive-lg">
                <table class="table mt-1 table-hover">
                    <thead>
                        <tr class="text-center fs-5">

                            <th scope="col-4">Имя</th>
                            <th scope="col-2">Фамилия</th>
                            <th scope="col-2">Email</th>
                            <th scope="col-2">Телефон</th>

                        </tr>
                    </thead>
                    <tbody>

                        @forelse($users as $u)
                            <tr class="text-center" style="font-size:18px">
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->surname }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->phonenumber }}</td>

                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>



            <p class="text-center fs-1 mt-4" id="user">Ученики школы их абонементы</p>
            <div class="table-responsive-lg">
                <table class="table mt-1 table-hover">
                    <thead>
                        <tr class="text-center fs-5">
                            <th scope="col-4">Имя фамилия</th>
                            <th scope="col-2">Email</th>
                            <th scope="col-2">Телефон</th>
                            <th scope="col-1">Абонемент</th>
                            <th scope="col-1">Срок</th>
                            <th scope="col-1">Уровень</th>
                            <th scope="col-1"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users1 as $u)
                            <tr class="">
                                <td>{{ $u->name }} {{ $u->surname }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->phonenumber }}</td>
                                <td>{{ $u->abonemet }}</td>
                                <td>{{ date('Y-m-d', strtotime($u->abonement_expiration)) }}</td>
                                <form action="{{ route('changeLevel', ['id' => $u->id]) }}" method="POST"
                                    id="changeLevel">
                                    @csrf
                                    <td>
                                        <div class=" d-flex justify-content-center">
                                            <select name="level" class="form-select w-auto">
                                                <option value="{{ $u->level }}">
                                                    @switch($u->level)
                                                        @case(1)
                                                            Beginner
                                                        @break

                                                        @case(2)
                                                            Elementary
                                                        @break

                                                        @case(3)
                                                            Pre-Intermediate
                                                        @break

                                                        @case(4)
                                                            Intermediate+
                                                        @break
                                                    @endswitch
                                                </option>
                                                @forelse($levels1 as $l)
                                                    @if ($l->id == $u->level)
                                                    @elseif($l->id == '5')
                                                    @else
                                                        <option value="{{ $l->id }}">{{ $l->name }}
                                                        </option>
                                                    @endif
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </td>
                                    <td><button type="submit" class="btn btn1">Изменить</button></td>
                                </form>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2s">
                <p class="fs-5"> {{ $users1->links() }}</p>
            </div>

            <p class="text-center fs-1 mt-4">Все пользователи</p>
            <div class="table-responsive-lg">
                <table class="table table align-middle mt-1 table-hover">
                    <thead>
                        <tr class="fs-5">
                            <th scope="col-4">Имя фамилия</th>
                            <th scope="col-3">Email</th>
                            <th scope="col-2">Телефон</th>
                            <th scope="col-1">Уровень</th>
                            <th scope="col-1">Доступ</th>
                            <th scope="col-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users3 as $u)
                            <tr style="font-size:18px">
                                <td>{{ $u->name }} {{ $u->surname }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->phonenumber }}</td>
                                <td>
                                    @switch($u->level)
                                        @case(1)
                                            Beginner
                                        @break

                                        @case(2)
                                            Elementary
                                        @break

                                        @case(3)
                                            Pre-Intermediate
                                        @break

                                        @case(4)
                                            Intermediate+
                                        @break

                                        @case(5)
                                            admin
                                        @break
                                    @endswitch
                                </td>
                                <form action="{{ route('changeForm', ['id' => $u->id]) }}" method="POST" id="changeForm">
                                    @csrf
                                    <td>
                                        <div class="">

                                            @if ($u->is_admin == 1)
                                                <input name="is_admin" type="hidden"
                                                    value="{{ $u->is_admin }}">Преподаватель
                                            @elseif($u->is_admin == 2)
                                                <input name="is_admin" type="hidden"
                                                    value="{{ $u->is_admin }}">Администратор
                                            @else
                                                <select name="is_admin" class="form-select w-auto">
                                                    <option value="{{ $u->is_admin }}">Пользователь</option>
                                                    <option value="1">Преподаватель</option>
                                                    <option value="2">Администратор</option>
                                                </select>
                                            @endif
                                        </div>

                                    </td>
                                    <td>
                                        @if ($u->is_admin == 1)
                                        @elseif($u->is_admin == 2)
                                        @else
                                            <button type="submit" class="btn btn1">Изменить</button>
                                        @endif
                                    </td>
                                </form>
                            </tr>

                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2s">
                    <p class="fs-5"> {{ $users3->links() }}</p>
                </div>


                <p class="text-center fs-1 mt-4" id="abonement">Абонементы</p>
                <div class="table-responsive-lg mb-5">
                    <table class="table mt-1 table-hover">
                        <thead>
                            <tr class="fs-5">
                                <th scope="col-4">Название</th>
                                <th scope="col-2">Старая цена</th>
                                <th scope="col-2">Новая цена</th>
                                <th scope="col-1">Скидка</th>
                                <th scope="col-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($abonemets as $a)
                                <tr class="text-center" style="font-size:18px">
                                    <div class=" d-flex justify-content-center">
                                        <form action="{{ route('changeabonement', ['id' => $a->id]) }}" method="post">
                                            @csrf
                                            <td><input type="text" name="name" class="form-control w-auto"
                                                    value="{{ $a->name }}"></td>
                                            <td><input type="integer" name="old_price" class="form-control w-auto"
                                                    value="{{ $a->old_price }}"></td>
                                            <td><input type="integer" name="price"class="form-control w-auto"
                                                    value="{{ $a->price }}"></td>
                                            <td><input type="text" name="discount"class="form-control w-auto"
                                                    value="{{ $a->discount }}"></td>
                                            <td><button type="submit" class="btn btn1">Изменить</button></td>
                                        </form>
                                    </div>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        </div>
        </div>
    @endsection
