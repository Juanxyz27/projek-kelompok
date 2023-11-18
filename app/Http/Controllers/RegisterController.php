<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// tambahan
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Creativeorange\Gravatar\Facades\Gravatar;

class RegisterController extends Controller
{
    //membuat fungsi register
    //membuat sebuah method untuk menampilkan view
    public function regis(){
        return view('auth.register');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'email' => ['required', 'email', 'unique:users', 'max:255'],
        'password' => ['required', 'min:8', 'confirmed'],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Set avatar for the user based on email using Gravatar
    $avatar = Gravatar::get($user->email);
    $user->update(['avatar' => $avatar]);

    if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }
}


}


