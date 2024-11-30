<?php

namespace App\Http\Controllers;

use App\Models\NewUsers;
use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function index(){
        $users=NewUsers::all();
        return view('user.show',compact('users'));
    }
    public function create(){
        return view('user.create');
    }

    public function store(){
        request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'phoneNumber'=>'required|min:8',
        ]);
        NewUsers::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'phoneNumber'=>request('phoneNumber'),
        ]);
        return redirect('/');
    }

    public function edit(){
      $user= NewUsers::find(request('id'));
        return view('user.edit',compact('user'));
    }

    public function update(NewUsers $user){
        request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'phoneNumber'=>'required|min:8'
        ]);

        NewUsers::where('id',request('id'))->update([
            'name'=>request('name'),
            'email'=>request('email'),
            'phoneNumber'=>request('phoneNumber'),
        ]);

        return redirect('/');
    }

    public function delete(){
        NewUsers::find(request('id'))->delete();
        return redirect('/');
    }
}
