<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// tambahan
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Creativeorange\Gravatar\Facades\Gravatar;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    //membuat fungsi register
    //membuat sebuah method untuk menampilkan view
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function regis()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed'],
            'phone' => ['nullable', 'string', 'max:20'], // Tambahkan aturan validasi untuk nomor telepon
            'address' => ['nullable', 'string', 'max:255'], // Tambahkan aturan validasi untuk alamat
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
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


