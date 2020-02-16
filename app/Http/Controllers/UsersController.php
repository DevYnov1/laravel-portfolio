<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }

    public function userList()
    {
        $users=User::all();
        return view('userList', ['users'=>$users]);
    }

    public function editProfile($id)
    {
        $user=User::find($id);
        return view('editProfile', ['user'=>$user,
        'user_id'=>$id]);
        
    }
}
