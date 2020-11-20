<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    private $user, $totalPage = 10;

    public function __construct(User $user) {
        $this->user = $user;
    }

    //
    public function index(Request $request) {

        $users = $this->user->getResults($request->all(),$this->totalPage);
        return view('users',compact('users', $users));

    }


}
