<?php

namespace App\Http\Controllers;

use App\Models\Abonement;
use App\Models\Buyabonement;
use App\Models\Level;
use Illuminate\Http\Request;
use App\Models\Name_lesson;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SuperadminController extends Controller
{
    public function superadmin()
    {

        $abonemets = Abonement::select('name as name', 'old_price as old_price', 'price as price', 'discount as discount', 'id as id')->get();
        $levels = Level::select('levels.id as id', 'levels.name as name')->limit(4)->get();
        $levels1 = Level::select('levels.id as id', 'levels.name as name')->get();
        $lesson = Name_lesson::select('name_lessons.id as id', 'levels.id as level_id', 'levels.name as level_name', 'name_lessons.name as name', 'name_lessons.id_level as id_level', 'name_lessons.files_lesson as files_lesson')
            ->join('levels', 'levels.id', 'name_lessons.id_level')
            ->orderby('name_lessons.id', 'asc')
            ->paginate(7);
        $users = User::select('name as name', 'surname as surname', 'id as id', 'email as email', 'phonenumber', 'is_admin as is_admin')->where('is_admin', '1')->get();

        $users1 = Buyabonement::select('users.name as name', 'users.surname as surname', 'users.id as id', 'users.email as email', 'users.phonenumber as phonenumber', 'users.level as level', 'users.is_admin as is_admin', 'buyabonements.id_user as id_user', 'buyabonements.id_abonement as id_abonement', 'buyabonements.abonement_expiration as abonement_expiration', 'abonements.name as abonemet')
            ->join('users', 'users.id', 'buyabonements.id_user', 'abonements.id as abonemets.id')
            ->join('abonements', 'abonements.id', 'buyabonements.id_abonement')
            ->paginate(5);

        $users3 = User::select('users.name as name', 'users.surname as surname', 'users.id as id', 'users.email as email', 'users.phonenumber as phonenumber', 'users.level as level', 'users.is_admin as is_admin', 'created_at as created_at')->orderBy('created_at', 'desc')->paginate(5);

        if (Auth::user()->is_admin == 1)
            $alllesson = Lesson::select('lessons.id as id', 'levels.name as level_name', 'name_lessons.name as lesson', 'lessons.time_start as time_start', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.teacher as teacher', 'lessons.places as places', 'lessons.time as time', 'lessons.id_level as id_level', 'users.id as user_id', 'users.name as user')
                ->join('users', 'users.id', 'lessons.teacher')
                ->join('levels', 'levels.id', 'lessons.id_level')
                ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
                ->where('lessons.teacher', Auth::user()->id)
                ->orderBy('lessons.time', 'desc')
                ->orderBy('lessons.time_start', 'asc')
                ->paginate(7);
        else
            $alllesson = Lesson::select('lessons.id as id', 'levels.name as level_name', 'name_lessons.name as lesson', 'lessons.time_start as time_start', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.teacher as teacher', 'lessons.places as places', 'lessons.time as time', 'lessons.id_level as id_level', 'users.id as user_id', 'users.name as user')
                ->join('users', 'users.id', 'lessons.teacher')
                ->join('levels', 'levels.id', 'lessons.id_level')
                ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
                ->orderBy('lessons.time', 'desc')
                ->orderBy('lessons.time_start', 'asc')
                ->paginate(7);

        return view('superadmin', ['lesson' => $lesson, 'levels' => $levels, 'alllesson' => $alllesson, 'users' => $users, 'abonemets' => $abonemets, 'users1' => $users1, 'users3' => $users3, 'levels1' => $levels1]);
    }


    public function filterlesson(Request $r)
    {
        $dt3 = Carbon::now()->addMonth(1);
        $dt2 = Carbon::now()->addDays(7);
        $dt = Carbon::now()->toDateString();
        if ($r->time == 'all') {
            $alllesson = Lesson::select('lessons.id as id', 'levels.name as level_name', 'name_lessons.name as lesson', 'lessons.time_start as time_start', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.teacher as teacher', 'lessons.places as places', 'lessons.time as time', 'lessons.id_level as id_level', 'users.id as user.id', 'users.name as user')
                ->join('users', 'users.id', 'lessons.teacher')
                ->join('levels', 'levels.id', 'lessons.id_level')
                ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
                ->orderBy('lessons.time', 'desc')
                ->orderBy('lessons.time_start', 'asc')
                ->paginate(7);
        } elseif ($r->time == 'week') {
            $alllesson = Lesson::select('lessons.id as id', 'levels.name as level_name', 'name_lessons.name as lesson', 'lessons.time_start as time_start', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.teacher as teacher', 'lessons.places as places', 'lessons.time as time', 'lessons.id_level as id_level', 'users.id as user.id', 'users.name as user')
                ->join('users', 'users.id', 'lessons.teacher')
                ->join('levels', 'levels.id', 'lessons.id_level')
                ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
                ->where('lessons.time', '>=', $dt)
                ->where('lessons.time', '<', $dt2)
                ->orderBy('lessons.time', 'desc')
                ->orderBy('lessons.time_start', 'asc')
                ->paginate(7);
        } elseif ($r->time == 'month') {
            $alllesson = Lesson::select('lessons.id as id', 'levels.name as level_name', 'name_lessons.name as lesson', 'lessons.time_start as time_start', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.teacher as teacher', 'lessons.places as places', 'lessons.time as time', 'lessons.id_level as id_level', 'users.id as user.id', 'users.name as user')
                ->join('users', 'users.id', 'lessons.teacher')
                ->join('levels', 'levels.id', 'lessons.id_level')
                ->join('name_lessons', 'name_lessons.id', 'lessons.lesson_name')
                ->where('lessons.time', '>=', $dt)
                ->where('lessons.time', '<', $dt3)
                ->orderBy('lessons.time', 'desc')
                ->orderBy('lessons.time_start', 'asc')
                ->paginate(7);
        }


        return view('incl_admin.lessons', ['alllesson' =>  $alllesson]);
    }

    public function addMaterial(Request $r)
    {
        $material = Storage::put("public/material", $r->file);
        Name_lesson::create([
            'name' => $r->name,
            'id_level' => $r->id_level,
            'files_lesson' => Storage::url($material)
        ]);

        return redirect(route('superadmin'));
    }

    public function addLesson(Request $r)
    {
        Lesson::create([
            'time_start' => $r->time_start,
            'number_cabinet' => $r->number_cabinet,
            'lesson_name' => $r->lesson_name,
            'teacher' => $r->teacher,
            'places' => $r->places,
            'time' => $r->time,
            'id_level' => $r->id_level
        ]);
        return redirect(route('superadmin'));
    }

    public function changeForm($id, Request $r)
    {

        $user = User::find($id);

        if ($r->is_admin == 0) {
        } else {
            $user->level = '5';
            $user->is_admin = $r->is_admin;
            $user->save();
        }
        return redirect(route('superadmin'));
    }

    public function changeLevel($id, Request $r)
    {
        $user = User::find($id);
        $user->level = $r->level;
        $user->save();
        return redirect(route('superadmin'));
    }

    public function changeabonement($id, Request $r)
    {
        $abonement = Abonement::find($id);
        $abonement->name = $r->name;
        $abonement->old_price = $r->old_price;
        $abonement->price = $r->price;
        $abonement->discount = $r->discount;
        $abonement->save();
        return redirect(route('superadmin'));
    }

}
