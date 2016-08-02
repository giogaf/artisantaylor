<?php
/**
 * Created by giogaf.
 * User: gg
 * Date: 2/08/16
 * Time: 09:53 AM
 */

namespace App\Miapp\Contracts;


interface OrdersRepositoryInterface
{
    public function getByUser(User $user);
    public function saveOrder();
}dum