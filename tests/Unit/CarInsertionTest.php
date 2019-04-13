<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarInsertionTest extends TestCase {
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarInsertion() {
        $car = factory(Car::class)->create();

        $this->assertDatabaseHas('cars', $car->toArray());
    }
}
