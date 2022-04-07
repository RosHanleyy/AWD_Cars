<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeding data of car 1 into the car table
        $car_01 = new Car();
        $car_01->make = "Jaguar";
        $car_01->model = "XF";
        $car_01->price = "75000";
        $car_01->engine_size = "2.0";
        $car_01->image_location = "jaguar-xf.jpg";
        $car_01->save();

        // seeding data of car 2 into the car table
        $car_02 = new Car();
        $car_02->make = "Honda";
        $car_02->model = "Civic Type-R";
        $car_02->price = "40000";
        $car_02->engine_size = "2";
        $car_02->image_location = "honda-civic.jpg" ;
        $car_02->save();

        // seeding data of car 2 into the car table
        $car_02 = new Car();
        $car_02->make = "Alfa Romeo";
        $car_02->model = "GTAM";
        $car_02->price = "156000";
        $car_02->engine_size = "2.9";
        $car_02->image_location = "alfa-romeo-gtam.jpg" ;
        $car_02->save();

        // seeding data of car 2 into the car table
        $car_02 = new Car();
        $car_02->make = "BMW";
        $car_02->model = "E92 M3";
        $car_02->price = "77000";
        $car_02->engine_size = "4";
        $car_02->image_location = "BMW-E92-M3.jpg" ;
        $car_02->save();

        // seeding data of car 2 into the car table
        $car_02 = new Car();
        $car_02->make = "Lexus";
        $car_02->model = "LS400";
        $car_02->price = "3496.96";
        $car_02->engine_size = "4";
        $car_02->image_location = "Lexus-LS400.jpg" ;
        $car_02->save();
    }
}
