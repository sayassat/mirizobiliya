<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    // Other methods...

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
