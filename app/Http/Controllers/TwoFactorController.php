<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeMailer;

class TwoFactorController extends Controller
{
   
    public function enable(Request $request)
    {
        $user = $request->user();
        if (!$user->random_token) {
            $user->random_token = random_int(100000, 999999);
            $user->save();
        }
        Mail::to($user->email)->send(new WelcomeMailer($user->random_token));
        return redirect()->route('2fa.verify')->with('status', 'A verification code has been sent to your email.');
    }

   
    public function showVerifyForm(Request $request)
    {
        return view('auth.two-factor-verify');
    }

   
    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|digits:6',
        ]);
        $user = $request->user();
        if ($user->random_token === $request->code) {
            $user->two_factor_enabled = true;
            $user->save();
            Auth::logout();
            return redirect('/login')->with('status', '2FA enabled! Please log in again.');
        }
        return back()->withErrors(['code' => 'Invalid code.']);
    }
}
