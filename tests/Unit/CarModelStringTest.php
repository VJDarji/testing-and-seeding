<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelStringTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarModelString()
    {
        $car = factory(Car::class)->create();

        $this->assertIsString($car->model);
    }
}
