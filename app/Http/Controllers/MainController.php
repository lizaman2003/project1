<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonement;
use App\Models\Commet;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function main()
    {
        $user = User::select('id as id', 'name as name')->get();
        $usercomment = Commet::all();
        $abonemets = Abonement::all();
        return view('main', ['abonemets' => $abonemets, 'usercomment' => $usercomment, 'user' => $user]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function teachers()
    {
        return view('teachers');
    }
    public function method()
    {
        return view('method');
    }
    static function strg($price)
    {
        $len = strlen($price);

        if ($len == 4) {
            $price = substr($price, 0, 1) . ' ' . substr($price, 1, 3);
        } elseif ($len == 5) {
            $price = substr($price, 0, 2) . ' ' . substr($price, 2, 3);
        } elseif ($len == 6) {
            $price = substr($price, 0, 3) . ' ' . substr($price, 3, 3);
        } elseif ($len == 7) {
            $price = substr($price, 0, 1) . ' ' . substr($price, 1, 3);
        }
        return $price;
    }


    public function newComment(Request $r)
    {

        $validator = Validator::make($r->all(), [
            'comment' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        Commet::create([
            'comment' => $r->comment,
            'id_user' => $r->id_user
        ]);
        return response()->json(['success' => 'success', 200]);
    }

    public function consent()
    {
        return view('consent');
    }
   

}
