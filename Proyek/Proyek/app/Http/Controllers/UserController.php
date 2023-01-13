<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request){
        $validateData = $request->validate([
            'name'=> 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phoneNumber' =>'required',
        ]);

        $user = new User();
		$user->name = $validateData['name'];
		$user->email = $validateData['email'];
        $user->password = $validateData['password'];
        $user->phoneNumber = $validateData['phoneNumber'];
        $user->save();
        return redirect('login');
    }

    public function updateUser(Request $request, User $user){
        $password = $request->password;
        $validateData = $request->validate([
            'password' => 'required|min:6',
        ]);

        $user->password = $password;
        User::where('id', $user->id)->update($validateData);
        $user->save();

        return redirect('profile');
    }


    public function signup(){
        return view('signup');
    }


}
