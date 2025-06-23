<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Kemana redirect setelah login (default jika role tidak dikenali)
     */
    protected $redirectTo = '/home';

    /**
     * Middleware constructor
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Redirect otomatis setelah login berdasarkan role
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'siswa') {
            return redirect('/dashboard-siswa');
        } elseif ($user->role === 'guru') {
            return redirect('/dashboard-guru');
        }

        // Jika role tidak dikenali
        return redirect('/home');
    }
}
