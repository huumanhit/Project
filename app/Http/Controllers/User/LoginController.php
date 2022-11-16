<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttemptRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    public  function createOne()
    {
        User::create([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => (object)[]
        ]);
    }

    public function attempt(Request $request)
    {
        $params = [
          'email' => $request->email,
          'password' => $request->password
        ];
        $login = Auth::attempt($params);
        if (!$login) {
            return redirect()->back()->with('error', 'Tai khoan hoac mat khau khong hop le');
        }

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
