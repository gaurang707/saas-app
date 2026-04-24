<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

class AuthController extends Controller
{

    public function __construct(protected UserRepositoryInterface $userRepo) {}

    public function login(Request $request)
    {
        $user = $this->userRepo->findByEmail($request->email);

        if (!$user) {
            return response()->json(['error' => 'User not found']);
        }

        return $user;
    }
}
