<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAcess;
use Illuminate\Support\Facades\DB;

class UserAcessController extends Controller
{
    //
    public function index() {


        $users_acess = DB::table('users_acess')
            ->join('users', 'users_acess.users_id', '=', 'users.id')
            ->select('users.name', 'users_acess.last_login','users_acess.id')
            ->paginate(10);      

        return view('users_acess',compact('users_acess', $users_acess));

    }
}
