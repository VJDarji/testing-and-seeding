<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = factory(Car::class)->create();
        $this->assertContains($car->make,['Ford', 'Honda', 'Toyota']);
    }
}
