<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarDeletionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = factory(Car::class)->create();
        $id = $car->id;
        $car->delete();
        $this->assertDatabaseMissing('cars', [
            'id' => $id,
        ]);
    }
}
