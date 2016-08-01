<?php
/**
 * Created by giogaf.
 * User: gg
 * Date: 1/08/16
 * Time: 04:24 PM
 */

namespace App\Miapp\Repository;


use App\Miapp\Contracts\UserRepositoryInterface;

class DummyUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return collect(array(['password'=>bcrypt('gg1111'),'email'=>'ga@ga.com']));
    }

}