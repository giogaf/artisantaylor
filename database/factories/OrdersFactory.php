<?php

/**
 * Created by giogaf.
 * User: gg
 * Date: 2/08/16
 * Time: 08:32 AM
 */

$factory->define(App\Order::class,function (Faker\Generator $faker){
    return [
        'amount'=>$faker->numberBetween(100000,5000000)
    ];
});