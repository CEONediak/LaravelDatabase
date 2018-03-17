<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFirstUserNameDataType()
    {
        $user = User::find(1);
        $this -> assertInternalType('string',$user->name);
    }

    public function testRandomUserIDDataType()
    {
        $user = User::inrandomorder()->first();
        $this -> assertInternalType('int',$user->id);
    }

}
