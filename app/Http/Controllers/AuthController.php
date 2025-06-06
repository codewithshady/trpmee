<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.backend.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            // Optional: Check if user is admin
            // if (!$user->is_admin) {
            //     Auth::logout();
            //     return redirect()->back()->withErrors(['email' => 'Not authorized']);
            // }

            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid login credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
