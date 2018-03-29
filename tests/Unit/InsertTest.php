<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user= new User();
        $user->name = 'mandar vyas';
        $user->email = 'mv@gmail.com';
        $user->password = 'kp1234';

        $this->assertTrue($user->save());
    }
}
