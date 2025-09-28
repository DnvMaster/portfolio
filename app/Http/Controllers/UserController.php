<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function premium()
    {
        $user_type = Auth::User()->usertype;
        if ($user_type == 1) {
            return view('frontend.index');
        } else if ($user_type == 0) {
            return view('backend.index');
        }
    }
}
