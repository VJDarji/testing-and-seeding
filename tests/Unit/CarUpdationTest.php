<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarUpdationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarYearUpdation()
    {
        $car = factory(Car::class)->create();

        $car->year=2000;
        $car->save();

        $this->assertDatabaseHas('cars',[
            'id' => $car->id,
            'year' => 2000,
        ]);
    }
}
