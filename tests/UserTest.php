<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
     //   $this->assertTrue(true);
        $repo = Mockery::mock('UserRepository');
        $repo->shouldReceive('all')->once()->andReturn(array('foo'));
        App::instance('UserRepository',$repo);

        $res = $this->action('GET','UserController@index');

        $this->assertResponseOk();
        //$this->assertViewHas()



    }
}
