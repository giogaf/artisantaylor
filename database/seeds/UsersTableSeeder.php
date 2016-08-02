<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,5)->create()->each(function ($u){
            $max=rand(0,4);
            for ($i=0;$i<=$max;$i++){
                $u->orders()->save(factory(App\Order::class)->make());
            }
        });
    }
}
