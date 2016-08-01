<?php
/**
 * Created by giogaf.
 * User: gg
 * Date: 1/08/16
 * Time: 02:32 PM
 */

namespace App\Miapp\Repository;


use App\Miapp\Contracts\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

}