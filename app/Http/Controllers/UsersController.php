<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;

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

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {
        $request ->validate([
            'name'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'type'=>'required',
        ]);

        $user= User::find($id);
        $user->name=$request->get('name');
        $user->firstname=$request->get('firstname');
        $user->lastname=$request->get('lastname');
        $user->email=$request->get('email');
        $user->type=$request->get('type');
        $user->save();


        return url('/userList');
    }

    public function userList()
    {
        $users=User::all();
        return view('userList', ['users'=>$users]);
    }

    public function editProfile($id)
    {
        $user=User::find($id);
        $skills=$user->skills;
        return view('editProfile', ['user'=>$user,
        'skills'=>$skills,
        'user_id'=>$id
        ]);
    }

    public function userSkills()
    {
        $users=User::all();
        // $skills=$users->skills;
        return view('userSkills', compact('users'));
    }

    public function updateSkills(Request $request, $id)
    {

        $user=User::find($id);
        $skill_id=$request->get('id');

            // $user->skills()->attach($skills->id, ['level' => 1]);
        
        $user->skills()->find($skill_id) ->pivot->update(['level' => $request->get('level')]);      
        

        

        return view('profile', compact('user'));
    }

    public function delete_user($id) {

        $user = User::find($id);
    
        $user->delete();
    
        return view('/userList');
    
    }
}
