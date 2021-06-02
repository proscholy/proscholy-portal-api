<?php


namespace App\Repository;


use App\Models\User;

class UserRepository
{

    public function getAuthUser()
    {
        return User::first();
    }


    public function createUser($name, $email): User
    {
        $user        = new User();
        $user->name  = $name;
        $user->email = $email;
        $user->save();

        return $user;
    }
}