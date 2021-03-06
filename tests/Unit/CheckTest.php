<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CheckTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


        public function testCarYear()
        {
            $car = Car::find(1);
            $year = (int)$car->Year;
            $this->assertInternalType("int", $year);
        }

    public function testCarMake()
    {
        $car = Car::find(1);
        $this->assertContains($car->Make, ["Honda", "Ford", "Toyota"]);
    }



}
