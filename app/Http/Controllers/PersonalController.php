<?php

namespace App\Http\Controllers;

use App\Models\Abonement;
use App\Models\Buyabonement;
use App\Models\Lesson_Book;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Name_lesson;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PersonalController extends Controller
{
    public function personal()
    {

        $buyabonemet = Buyabonement::select('id_user', 'abonement_expiration as abonement_expiration')->where('id_user', Auth::user()->id)->orderBy('abonement_expiration', 'desc')->first();
        $buyabonemet1 = Buyabonement::select('id_user as id_user', 'status as status')->where('id_user', Auth::user()->id)->get();
        $abonements = Abonement::all();
        $lesson = Name_lesson::select('name_lessons.id as id', 'name_lessons.name as name', 'name_lessons.id_level as id_level', 'name_lessons.files_lesson as files_lesson')
            ->join('levels', 'levels.id', 'name_lessons.id_level')

            ->paginate(10);
        $teacher = User::all();

        $dt = Carbon::now()->toDateString();
        $lesson_book = Lesson_Book::select('lesson__books.id as id', 'lesson__books.id_lesson as id_lesson', 'lesson__books.id_user as id_user', 'lessons.time as time', 'lessons.time_start as time_start', 'lessons.teacher as teacher', 'lessons.number_cabinet as number_cabinet', 'lessons.lesson_name as lesson_name', 'lessons.places as places')
            ->where('lesson__books.id_user', Auth::user()->id)
            ->where('lessons.time', '>', $dt)
            ->join('lessons', 'lessons.id', 'lesson__books.id_lesson')
            ->get();

        $dt1 = Carbon::now();
        $abonement_buy = Buyabonement::select('abonement_expiration', 'id_user', 'created_at')->where('id_user', Auth::user()->id)->orderBy('created_at', 'desc')->first();
        if ($abonement_buy == null) {
        } else {
            $rt2 = $abonement_buy->abonement_expiration;
            if ($rt2 <= $dt1) {
                $rt = User::find(Auth::user()->id);
                $rt->status = 0;
                $rt->save();

                Buyabonement::where('id_user', Auth::user()->id)->where('status', '1')->update(['status' => '0']);
            }
        }


        return view('personal', ['lesson' => $lesson, 'lesson_book' => $lesson_book, 'teacher' => $teacher, 'abonemets' => $abonements, 'buyabonemet' => $buyabonemet, 'buyabonemet1' => $buyabonemet1]);
    }

    public function deleteLesson_book($id, $id_lesson)
    {
        if (Lesson_Book::select('lesson__books.id_user as id_user')->where('lesson__books.id_user', Auth::user()->id)->exists()) {
            Lesson::where('id', $id_lesson)->increment('lessons.places', 1);
            Lesson_Book::where('id', $id)->delete();
        }
        return redirect()->back();
    }

    public function addLesson_book(Request $r)
    {
        $lesson1 = Lesson::find($r->lesson);
        $lesson_books = Lesson_Book::where('lesson__books.id_lesson', $r->lesson)->where('lesson__books.id_user', Auth::user()->id)->first();
        if (is_null($lesson_books)) {
            if ($lesson1->places > 0) {
                if ($lesson1->id_level == Auth::user()->level) {
                    Lesson_Book::create([
                        'id_user' => Auth::user()->id,
                        'id_lesson' => $lesson1->id,
                        'places_count' => '1'
                    ]);
                    Lesson::find($r->lesson)->decrement('places', 1);
                    return response()->json(['lesson' => 'success'], 200);
                } else {
                    return response()->json(['lesson' => 'nolevel'], 400);
                }
            } else {
                return response()->json(['lesson' => 'noCount'], 400);
            }
        }
        if ($lesson_books->places_count + 1 > $lesson1->places) {
            return response()->json(['lesson' => 'noCount'], 400);
        } else {
            return response()->json(['lesson' => 'noUser'], 400);
        }
        
    }


    public function paidAboniment(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id_abonement' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $add1Mouth = Carbon::now()->addMonth();
        $add4Mouth = Carbon::now()->addMonth(4);
        $add8Mouth = Carbon::now()->addMonth(8);
        $add12Mouth = Carbon::now()->addMonth(12);
        // $dt = Carbon::now();


        if ($r->id_abonement == '1') {
            Buyabonement::create([
                'id_user' => Auth::user()->id,
                'id_abonement' => $r->id_abonement,
                'status' => '1',
                'abonement_expiration' => $add1Mouth
            ]);
        } elseif ($r->id_abonement == '2') {
            Buyabonement::create([
                'id_user' => Auth::user()->id,
                'id_abonement' => $r->id_abonement,
                'status' => '1',
                'abonement_expiration' => $add4Mouth
            ]);
        } elseif ($r->id_abonement == '3') {
            Buyabonement::create([
                'id_user' => Auth::user()->id,
                'id_abonement' => $r->id_abonement,
                'status' => '1',
                'abonement_expiration' => $add8Mouth
            ]);
        } elseif ($r->id_abonement == '4') {
            Buyabonement::create([
                'id_user' => Auth::user()->id,
                'id_abonement' => $r->id_abonement,
                'status' => '1',
                'abonement_expiration' => $add12Mouth
            ]);
        }
        $rt = User::find(Auth::user()->id);
        $rt->status = 1;
        $rt->save();

        return response()->json(['success' => 'success', 200]);
    }


    public function allSettigs(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'name' => 'required|string|regex:/^([a-яА-ЯёЁ\s-]*)$/u',
            'surname' => 'required|string|regex:/^([a-яА-ЯёЁ\s-]*)$/u',
            'email' => 'required|string|email:rfc|unique:App\Models\User,email|',
            'phonenumber' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $user = User::find(Auth::user()->id);
        $user->name = $r->name;
        $user->surname = $r->surname;
        $user->email = $r->email;
        $user->phonenumber = $r->phonenumber;
        $user->save();
        if (Auth::user()->is_admin == 1) {
            return response()->json(['success' => 'admin', 200]);
        } elseif (Auth::user()->is_admin == 2) {
            return response()->json(['success' => 'superadmin', 200]);
        } elseif (Auth::user()->is_admin == 0) {
            return response()->json(['success' => 'success', 200]);
        }
    }

    public function passwordSettigs(Request $r)
    {

        $validator = Validator::make($r->all(), [
            'password' => 'required|string|min:6|current_password',
            'password_new' => 'required|string|min:6|',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($r->password_new);
        $user->save();
        if (Auth::user()->is_admin == 1) {
            return response()->json(['success' => 'admin', 200]);
        } elseif (Auth::user()->is_admin == 2) {
            return response()->json(['success' => 'superadmin', 200]);
        } elseif (Auth::user()->is_admin == 0) {
            return response()->json(['success' => 'success', 200]);
        }
    }
}
