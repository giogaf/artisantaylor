<?php
/**
 * Created by giogaf.
 * User: gg
 * Date: 2/08/16
 * Time: 10:02 AM
 */

namespace App\Miapp\Repository;


use App\Miapp\Contracts\OrdersRepositoryInterface;
use App\Miapp\Contracts\User;

class OrdersRepository implements OrdersRepositoryInterface
{
    public function getByUser(User $user)
    {
        return User::where('id',$user->id);
    }

    public function saveOrder()
    {
        // TODO: Implement saveOrder() method.
    }

}