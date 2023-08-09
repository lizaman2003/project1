<div class="modal fade" id="settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Настройки</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 align-items-center">
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item">
                                    <a class="btn  text-light nav-link active  d-flex justify-content-beetween align-items-center text-center "data-bs-toggle="modal"
                                        data-bs-target="#all" type="submit" id="primary1">Изменить общие данные</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="btn text-light nav-link active  d-flex justify-content-beetween align-items-center"data-bs-toggle="modal"
                                        data-bs-target="#passwordsettings"id="primary1" type="submit">Изменить пароль</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="all" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="allForm" action="{{ route('allSettigs') }}" method="post" onsubmit="settings(this,event)">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 text-center" id="exampleModalLabel">Изменить общие данные</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Изменить имя:</label>
                        <input type="text" name="name" id="nameInput" class="form-control"
                            placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                        <div class="invalid-feedback" id="nameError"></div>
                    </div>
                    <div class="mb-3">
                        <label for="surnameInput" class="form-label">Изменить фамилию:</label>
                        <input type="text" name="surname" id="surnameInput" class="form-control"
                            placeholder="{{ Auth::user()->surname }}" value="{{ Auth::user()->surname }}">
                        <div class="invalid-feedback" id="surnameError"></div>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Изменить email:</label>
                        <input type="text" name="email" id="emailInput" class="form-control"
                            placeholder="Ваш email" value="{{ Auth::user()->email }}">
                        <div class="invalid-feedback" id="emailError"></div>
                    </div>
                    <div class="mb-3">
                        <label for="phonenumberInput" class="form-label">Изменить телефон:</label>
                        <input type="tel" name="phonenumber" id="phonenumberInput" class="form-control"
                            placeholder="Ваш телефон" value="{{ Auth::user()->phonenumber }}">
                        <div class="invalid-feedback" id="phonenumberError"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button"data-bs-toggle="modal" id="reg1" data-bs-dismiss="modal"
                        data-bs-target="#settings" class="btn btn2 btn-lg">Вернутся в настройки</button>
                    <button type="submit" class="btn btn1 btn-lg">Изменить</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="passwordsettings" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="paswordForm" action="{{ route('passwordSettigs') }}" method="post"
                onsubmit="settings(this,event)">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 text-center" id="exampleModalLabel">Изменить пароль</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Введите старый пароль:</label>
                        <input type="password" name="password" id="passwordInput" class="form-control">
                        <div class="invalid-feedback" id="passwordError"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password_newInput" class="form-label">Введите новый пароль:</label>
                        <input type="password" name="password_new" id="password_newInput" class="form-control">
                        <div class="invalid-feedback" id="password_newError"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button"data-bs-toggle="modal" id="reg1" data-bs-dismiss="modal"
                        data-bs-target="#settings" class="btn btn2 btn-lg">Вернутся в
                        настройки</button>
                    <button type="submit" class="btn btn1 btn-lg">Изменить</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Изменить</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 align-items-center">
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item mb-2">
                                    <a class="btn btn1 nav-link active  d-flex justify-content-beetween align-items-center text-center "data-bs-toggle="modal"
                                        data-bs-target="#all" type="submit">Изменить общие данные</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="btn btn1 nav-link active  d-flex justify-content-beetween align-items-center"data-bs-toggle="modal"
                                        data-bs-target="#passwordsettings" type="submit">Изменить пароль</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@if(Auth::user()->is_admin != '2' )
@else
<div class="modal fade" id="addLesson" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="paswordForm" action="{{ route('addLesson') }}" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 text-center" id="exampleModalLabel">Добавить занятие в расписание</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <select name="time_start" class="form-select-lg form-select mb-3 "required>
                        <option selected disabled>Время начала занятия</option>
                        <option value="16:45-18:15">16:45-18:15</option>
                        <option value="18:30-20:00">18:30-20:00</option>
                        <option value="20:15-21:30">20:15-21:30</option>
                    </select>
                    <select name="number_cabinet" class="form-select-lg form-select mb-3 "required>
                        <option selected disabled>Выбор кабинета</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <select name="lesson_name" class="form-select-lg form-select mb-3 "required>
                        <option selected disabled>Номер урока</option>
                        @foreach ($lesson as $l)
                            <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                    </select>
                    <select name="teacher" class="form-select-lg form-select mb-3 "required>
                        <option selected disabled>Преподаватель</option>
                        @foreach ($users as $l)
                            <option value="{{ $l->id }}">{{ $l->name }} {{ $l->surname }}</option>
                        @endforeach
                    </select>
                    <input type="text"name="places" placeholder="колличество мест"
                        class="form-control form-select-lg mb-3 "required>
                    <input type="date"name="time" placeholder="дата занятия"
                        class="form-control form-select-lg mb-3 "required>
                    <select name="id_level" class="form-select-lg form-select mb-3 "required>
                        <option selected disabled>Уровень занятия</option>
                        @foreach ($levels as $l1)
                            <option value="{{ $l1->id }}">{{ $l1->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn1 btn-lg mb-3">Добавить</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="material" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('addMaterial') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-4 text-center" id="exampleModalLabel">Добавить материал</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <input type="text"name="name" value="Lesson" placeholder="имя файла"
                    class="form-control form-select-lg mb-3 "required>
                <select name="id_level" id="id_level" class="form-select-lg form-select mb-3 "required>
                    <option selected disabled>Уровень материала</option>
                    @foreach ($levels as $l1)
                        <option value="{{ $l1->id }}">{{ $l1->name }}</option>
                    @endforeach
                </select>
                
                <input type="file" id="file" name="file" placeholder="файл"
                    class="form-control form-select-lg mb-3" required>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn1 btn-lg mb-3">Добавить</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endif
