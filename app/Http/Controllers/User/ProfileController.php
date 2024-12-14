<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function currentUser(){
        $User=Auth::guard('api')->user();
        $scopes = $User->token()->scopes;
        return $User;
    }
}
