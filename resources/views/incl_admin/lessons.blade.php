<div class="table-responsive-lg">
    <table class="table mt-2 table-hover">
        <thead>
            <tr class="text-center fs-5">
                <th scope="col-4">Дата</th>
                <th scope="col-2">Время</th>
                <th scope="col-2">Урок</th>
                <th scope="col-2">Преподаватель</th>
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
                    <td>{{ $a->user }}</td>
                    <td>{{ $a->level_name }}</td>
                    <td>{{ $a->places }}</td>
                    <td>{{ $a->number_cabinet }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center mt-2s">
   <p class="fs-5"> {{$alllesson->links()}}</p>
</div>

