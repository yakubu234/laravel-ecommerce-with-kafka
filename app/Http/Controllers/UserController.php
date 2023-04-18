<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponseTraits;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponseTraits;

    public function allUsers()
    {
        $users = User::inRandomOrder()->limit(3)->get();
        return $this->success($users, 'fetched successfully');
    }
}
