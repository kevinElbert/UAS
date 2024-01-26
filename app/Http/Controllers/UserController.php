<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
            'role' => 'required',
            'pic' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $file = $request->pic;
        $file_name = time().'.png';
        $path = Storage::putFileAs('public', $file, $file_name);

        $newUser = new User();
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->role = $request->role;
        $newUser->pic = $path;
        $newUser->save();

        return redirect('/login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            session(['user' => $user]);
            return view('homepage', compact('user'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        session(['user' => null]);
        return redirect('/login');
    }

    public function home(Request $request){
        $user = $request->session()->get('user');

        return view('homepage', compact('user'));
    }

    public function update(Request $request){
        $user = User::Find($request->id)->first();
        $user->email = $request->email;

        if($request->pic != null){
            $file = $request->pic;
            $file_name = time().'.png';
            $path = Storage::putFileAs('public', $file, $file_name);
            $user->pic = $path;
        }

        $user->save();
        session(['user' => $user]);

        return redirect('/homepage');
    }

    public function manage(){
        $users = User::All();
        return view('manage', compact('users'));

    }

    public function delete(Request $request){
        $user = User::Find($request->id);
        $user->delete();
        return redirect('manage');
    }
}
