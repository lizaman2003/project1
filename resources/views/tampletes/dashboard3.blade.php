<div class="slidebar-fixed position-fixed">
    <div class="mt-3">
        <a href="#" class="logo-wrapper text-dark">

            <img src="public\img\person.png" alt="" class="rounded-circle " style="width: 22%; height:20%">
            <strong class="text ">{{ Auth::user()->name }} {{ Auth::user()->surname }} </strong>
        </a>
        <div class="mt-2 text-center ">
            Статус: администратор
        </div>
        <hr>
        <p class="text-center fw-bold ">Панель навигации</p>

        <div class="mt-3">
            <ul class="nav nav-pills d-flex flex-column mb-auto">

                <li class="nav-item ">
                    <a href="{{ route('timetable') }}"
                    id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
                        aria-current="page">
                        <img src="public\img\calendar.png" alt="" width="16" height="16"
                            class=" me-2">
                        <b>Расписание</b>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#lesson" id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
                        aria-current="page">
                        <img src="public\img\calendar_edit.png" alt="" width="16" height="16"
                            class=" me-2">
                        <b>Занятия</b>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#lesson1" id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
                        aria-current="page">
                        <img src="public\img\coolicon.png" alt="" width="11" height="12"
                            class="ms-1 me-2">
                        <b>Материалы</b>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#teacher"
                    id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
                        aria-current="page">
                        <img src="public\img\group_alt.png" alt="" width="16" height="16"
                            class=" me-2">
                        <b>Преподаватели</b>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#user"
                    id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
                        aria-current="page">
                        <img src="public\img\group.png" alt="" width="16" height="16"
                            class=" me-2">
                        <b>Ученики</b>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#abonement"
                    id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
                        aria-current="page">
                        <img src="public\img\color.png" alt="" width="16" height="16"
                            class=" me-2">
                        <b>Абонементы</b>
                    </a>
                </li>
                <li class="nav-item ">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#settings"
                    id="primary1"class="nav-link text-light d-flex justify-content-beetween align-items-center"
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
