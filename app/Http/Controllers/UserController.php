<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $users = User::all(); 
        return view('users',compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('edituser', compact('user','roles'));
    }
    public function update(Request $request){
        $user =  User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $user->roles()->sync($request->role);

        return redirect("/admin/users");
    }
}
