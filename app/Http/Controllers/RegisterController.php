<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function validateUser()
    {
        return request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6|max:20',
        ]);
    }

    function form()
    {
        return view('models.user.register');
    }

    function register(Request $request)
    {
        $userData = $this->validateUser();

        $newUser = User::create([
            'name'=>$userData['name'],
            'email'=>$userData['email'],
            'password'=>Hash::make($userData['password'])
        ]);
        $roleMember = Role::where('name','member')->first();

        $newUser->roles()->attach($roleMember);


        if($newUser)
        {
            auth()->attempt($request->only('email','password'));
            toast()->success('Uspešna registracija')->push();
            return redirect(route('book.livewire_search'));
        }
        else
        {
            toast()->success('Došlo je do greške prilikom upisa u bazu')->push();
            return back();
        }
    }
}
