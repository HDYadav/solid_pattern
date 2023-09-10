<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Repository\UserRepository;

class UserController extends Controller
{
    
    public function getUser(){

        $user= User::all()->sortByDesc('id');
        return $user;
    }

    public function store(UserRequest $userRequest, UserRepository $userRepository){

        try {
            // Persist user to database
            $userRepository->create($userRequest);

           // notify_success('User created');
            return redirect()->route('users');
        } catch (Exception $e) {
           // notify_error($e->getMessage());
            return redirect()->back();
        }
        
    }
}
