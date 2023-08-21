<?php

namespace App\Repositories\Users;
use App\Repositories\Users\UserRepositoryInterface;


class UserRepository implements UserRepositoryInterface{


    public function allUser()
    {
        $data = [
            'name' => 'sadam',
            'age' => 23
        ];

        return $data;
    }

}