<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Traits\ApiResponseTraits;
use App\Traits\LoginTraits;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponseTraits, LoginTraits;

    public function allUsers()
    {
        $users = User::inRandomOrder()->limit(3)->get();
        return $this->success($users, 'fetched successfully');
    }

    public function login(LoginRequest $request)
    {
        return $this->attemptLogin($request->validated());
    }
}
