<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255|unique:users', // Check if name already exists
            'email' => 'required|string|email|max:255|unique:users', // Check if email already exists
        ], [
            'name.unique' => 'The name or email has already been taken.',
            'email.unique' => 'The name or email has already been taken.',
        ]);

        // Create new user
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Registration successful');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Login successful');
        }
 
        return back()->with('error', 'Incorrect email or password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}
