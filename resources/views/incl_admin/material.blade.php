<div class="row justify-content-center">
    <div class="col-10">
        <table class="table table align-middle table-sm mt-2 table-hover">
            <thead>
                <tr class="text-center fs-5">
                    <th scope="col">Название</th>
                    <th scope="col">Уровень</th>
                    <th scope="col">Материал урока</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($lesson as $l)
                    <tr class="text-center" style="font-size:18px">

                        <td>{{ $l->name }}</td>
                        <td>{{ $l->level_name }}</td>
                        <td>
                            <a class="btn btn1" href="public/{{ $l->files_lesson }}" target="_blank" download>Скачать <img
                                    src="public\img\download.png" alt="" width="16" height="16"
                                    class=" me-2"></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <h5 class="text-center">Нет материалов</h5>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2s">
             {{ $lesson->links() }}
        </div>

        @if (Auth::user()->is_admin == 2)
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2s">
                <button class="btn btn1 me-md-2 btn btn-lg" data-bs-toggle="modal" data-bs-target="#material"
                    type="button">Добавить материал</button>
            </div>
        @else
        @endif
    </div>

</div>
