<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name_lesson;
use App\Models\Lesson;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function admin()
    { $lesson=Name_lesson::select('name_lessons.id as id', 'levels.name as level_name','name_lessons.name as name','name_lessons.id_level as id_level','name_lessons.files_lesson as files_lesson')
        ->join('levels','levels.id','name_lessons.id_level')
        ->orderby('name_lessons.id','asc')
        ->paginate(7);
        $dt2 = Carbon::now()->addDays(7);
        $alllesson = Lesson::select('lessons.id as id', 'levels.name as level_name', 'name_lessons.name as lesson', 'lessons.time_start as time_start', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.teacher as teacher', 'lessons.places as places', 'lessons.time as time', 'lessons.id_level as id_level', 'users.id as user_id', 'users.name as user')
            ->join('users', 'users.id', 'lessons.teacher')
            ->join('levels', 'levels.id', 'lessons.id_level')
            ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
            ->where('lessons.teacher', Auth::user()->id)
            ->orderBy('lessons.time', 'asc')
            ->where('lessons.time', '<', $dt2)
            ->orderBy('lessons.time_start', 'asc')
            ->paginate(7);

        return view('admin', ['lesson'=>$lesson, 'alllesson'=>$alllesson]);
    }
    
    public function filter( Request $r){
        if ($r->id_level == '5') {
            $lesson= Name_lesson::select('name_lessons.id as id', 'levels.name as level_name','name_lessons.name as name','name_lessons.id_level as id_level','name_lessons.files_lesson as files_lesson')
            ->join('levels','levels.id','name_lessons.id_level')
            ->orderby('name_lessons.id','asc')
            ->paginate(7);
        } else {
            $lesson = Name_lesson::select('name_lessons.id as id', 'levels.name as level_name','name_lessons.name as name','name_lessons.id_level as id_level','name_lessons.files_lesson as files_lesson')
            ->join('levels','levels.id','name_lessons.id_level')
            ->where('name_lessons.id_level', $r->id_level)
            ->orderby('name_lessons.id','asc')
            ->paginate(7);
        }

        return view('incl_admin.material', ['lesson' => $lesson]);
    }
}
