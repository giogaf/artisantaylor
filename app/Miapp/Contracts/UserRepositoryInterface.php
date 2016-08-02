<?php
/**
 * Created by giogaf.
 * User: gg
 * Date: 1/08/16
 * Time: 02:30 PM
 */

namespace App\Miapp\Contracts;


interface UserRepositoryInterface
{
    public function all();
    public function find($id);
}