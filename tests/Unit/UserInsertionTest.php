<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserInsertionTest extends TestCase {
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserInsertion() {

        $user = factory(User::class)->create();

        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }
}
