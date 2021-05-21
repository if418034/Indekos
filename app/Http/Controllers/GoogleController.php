<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findadmin = User::where('google_id', $user->getId())->where('admin', 1)->first();
        $findowner = User::where('google_id', $user->getId())->where('pemilik', 1)->first();
        $notowner = User::where('google_id', $user->getId())->where('pengguna', 0)->first();
        if ($findadmin) {
            Auth::login($findadmin);
            return redirect()->intended('/berandaAdmin');
        } else if ($notowner) {
            return redirect()->intended('/berandaPengguna');
        } else if ($findowner) {
            Auth::login($findowner);
            return redirect()->intended('/berandaPemilik');
        } else {
            $newUser = User::create([
                'nama' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
            ]);

            Auth::login($newUser);
            return redirect()->intended('/bookingPemilik');
        }
    }
}
