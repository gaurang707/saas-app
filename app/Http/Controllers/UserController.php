<?php

namespace App\Http\Controllers;

//use App\Repositories\UserRepositoryInterface;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::latest()->paginate(10));
    }

    public function show($id) {
        $user = User::findorFail($id);
        return new UserResource($user);
    }
}
