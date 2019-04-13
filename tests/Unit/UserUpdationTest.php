<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserUpdationTest extends TestCase {
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserUpdation() {

        $user = factory(User::class)->create();

        $user->name = 'Steve Smith';
        $user->save();

        $this->assertDatabaseHas('users', [
            'name' => 'Steve Smith',
            'email' => $user->email,
        ]);
    }
}
