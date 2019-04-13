<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserDeletionTest extends TestCase {
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserDeletion() {

        $user = factory(User::class)->create();
        $email = $user->email;
        $user->delete();
        $this->assertDatabaseMissing('users', [
            'email' => $email,
        ]);
    }
}
