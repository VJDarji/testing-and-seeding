<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        $this->assertGreaterThanOrEqual(50, User::count());
    }
}
