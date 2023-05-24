<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallBackHandler()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('google_id', $user->getId())->first();

        if ($findUser) {
            if (!($findUser->google_id)) {
                $findUser->google_id = $user->id;
                $findUser->save();
            }
            Auth::login($findUser);
            return redirect()->intended('home/dashboard')->with('success', 'Autentikasi berhasil, sekarang anda dapat mendownload CV');
        } else {
            $findUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('1235678'),
            ]);

            Auth::login($findUser);
            return redirect()->intended('home/dashboard')->with('success', 'Autentikasi berhasil, sekarang anda dapat mendownload CV');
        }
    }

    public function googleCallBackHandlerCV()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('google_id', $user->getId())->first();

        if ($findUser) {
            if (!($findUser->google_id)) {
                $findUser->google_id = $user->id;
                $findUser->save();
            }
            Auth::login($findUser);
            return redirect()->intended('home/dashboard/downloadcv')->with('success', 'Autentikasi berhasil, sekarang anda dapat mendownload CV');
        } else {
            $findUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('1235678'),
            ]);

            Auth::login($findUser);
            return redirect()->intended('home/dashboard/downloadcv')->with('success', 'Autentikasi berhasil, sekarang anda dapat mendownload CV');
        }
    }
}