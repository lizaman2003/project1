<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\User;
use Illuminate\Support\Carbon;
class TimetableController extends Controller
{
    public function timetable(){
        $level= Level::all();
        $dt = Carbon::now()->toDateString();
        $dt2 = Carbon::now()->addDays(7);
        $timetable = Lesson::select('lessons.id as id', 'lessons.time_start as time_start','lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name','lessons.teacher as teacher','lessons.places as places','lessons.time as time', 'lessons.id_level as id_level','users.id as user.id','users.name as name')
        ->join('users', 'users.id', 'lessons.teacher')
        ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
        ->where('lessons.time', '>=', $dt)
        ->where('lessons.time', '<', $dt2)
        ->orderBy('lessons.time', 'asc')
        ->orderBy('lessons.time_start', 'asc')
        ->limit(42)
        ->get();

        return view('timetable', ['timetable'=>$timetable, 'level'=>$level] );
            }
}
?>
