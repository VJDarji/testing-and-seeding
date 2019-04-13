<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContactUs()
    {
        $response = $this->get('/contactus');

        $response->assertStatus(200);
    }
}
