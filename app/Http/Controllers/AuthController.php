<?php

namespace App\Http\Controllers;

use App\Mail\LoginOtpMail;
use App\Models\CustomerLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        // Logic for handling login
        return view('backend.auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // If using 'loginId' instead of default 'email'
        $user = User::where('email', $email)->first();
      

        if (!$user) {
            return back()->with('error', 'User not found.')->withInput();
        }
        Log::info('User login attempt', [
            'email' => $email,
            'user_id' => $user->id,
            'ip_address' => $request->ip(),
        ]);
        if (!Hash::check($password, $user->password)) {
            Log::info('passwords', [
                'input_password' => $password,

                'hashed_password' => $user->password,
                'userPassword' => $user->password,
            ]);

            return back()->with('error', 'Invalid credentials.')->withInput();
        }


        Auth::login($user);

        return redirect()->route('dashboard.index')->with('success', 'Login successful!');
    }

    public function logout()
    {
        Auth::logout();
        session()->forget(['sub_user_id', 'sub_user_email']); // Clear subuser session data
        session()->flash('success', 'Logged out successfully.');
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
    public function profile()
    {
        $customer = Auth::user();
        if (!$customer) {
            return redirect()->route('login')->with('error', 'You must be logged in to view your profile.');
        }

        $accoutmanager = DB::table('employeeDetails')
            ->where('id', $customer->accountManager)
            ->first();

        return view('dashboard.profile', compact('customer', 'accoutmanager'));
    }
    public function forgotPassword()
    {
        return view('auth.forget');
    }
    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('loginId', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'No user found with that email');
        }

        // Generate and store OTP
        $otp = rand(100000, 999999);
        session(['otp' => $otp, 'email' => $user->loginId]);

        // sendSmsMessage($user->contact_number, "$otp is The OTP For Request. Digital Soch");
        // Mail::to($user->loginId)->send(new LoginOtpMail($otp));

        return back()->with('status', 'OTP sent to your email and phone')->with('show_otp', true);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
            'new_password' => 'required|confirmed|min:6'
        ]);

        if ($request->otp != session('otp') || $request->email != session('email')) {
            return back()->with('error', 'Invalid OTP or email')->with('show_otp', true);
        }

        $user = User::where('loginId', $request->email)->first();
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Clear OTP
        session()->forget(['otp', 'email']);

        return redirect()->route('login')->with('status', 'Password reset successful. You can now log in.');
    }
}
