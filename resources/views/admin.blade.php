@extends('tampletes.header2')
@section('title')
    Личный кабинет
@endsection
@section('body')
    <div id="modal">
        @include('incl_admin.settings_modal')
    </div>
    <main class="pt-5  justify-content-center">
        <div class="container-fluid">
            <div class="row">
                <p class="text-center fs-1 mt-5 pt-3  ">Мои занятия</p>
                <div id="lesson">
                    <div class="table-responsive-lg">
                        <table class="table mt-2 table-hover">
                            <thead>
                                <tr class="text-center fs-5">
                                    <th scope="col-4">Дата</th>
                                    <th scope="col-2">Время</th>
                                    <th scope="col-2">Урок</th>
                                    <th scope="col-2">Уровень</th>
                                    <th scope="col-1">Места</th>
                                    <th scope="col-1">Кабинет</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($alllesson as $a)
                                    <tr class="text-center" style="font-size:18px">
                                        <td>{{ date('l Y-m-d', strtotime($a->time)) }}</td>
                                        <td>{{ $a->time_start }}</td>
                                        <td>{{ $a->lesson }}</td>
                                        <td>{{ $a->level_name }}</td>
                                        <td>{{ $a->places }}</td>
                                        <td>{{ $a->number_cabinet }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-center mt-2 fs-1" id="lesson1">Учебные материалы </p>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <select id="filter" class="form-select form-select-lg w-auto" onchange="filter(this)">
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



    </main>
    </div>
    </div>
@endsection
