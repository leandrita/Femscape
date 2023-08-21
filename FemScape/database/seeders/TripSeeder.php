<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trip = new Trip();
        $trip->place = "Creta";
        $trip->country = "Grecia";
        $trip->description = "Porque me gustan las playas de agua cálida";
        $trip->image = "https://www.grecotour.com/img/cms/grecia/creta/region-lassithi/sitia-creta.jpg";
        $trip->save();

        $trip1 = new Trip();
        $trip1->place = "Kefalonia";
        $trip1->country = "Grecia";
        $trip1->description = "Porque me gustan las playas de agua cálida";
        $trip1->image = "https://www.grecotour.com/img/cms/grecia/creta/region-lassithi/sitia-creta.jpg";
        $trip1->save();
    }
}
