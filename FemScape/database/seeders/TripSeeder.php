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
        $trip1->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaiTxFi5EiLIgEX9xJCICOWoiWfxp6n0SB7A&usqp=CAU";
        $trip1->save();

        $trip2 = new Trip();
        $trip2->place = "Creta";
        $trip2->country = "Grecia";
        $trip2->description = "Porque me gustan las playas de agua cálida";
        $trip2->image = "https://www.grecotour.com/img/cms/grecia/creta/region-lassithi/sitia-creta.jpg";
        $trip2->save();

        $trip3 = new Trip();
        $trip3->place = "Kefalonia";
        $trip3->country = "Grecia";
        $trip3->description = "Porque me gustan las playas de agua cálida";
        $trip3->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaiTxFi5EiLIgEX9xJCICOWoiWfxp6n0SB7A&usqp=CAU";
        $trip3->save();

        $trip4 = new Trip();
        $trip4->place = "Creta";
        $trip4->country = "Grecia";
        $trip4->description = "Porque me gustan las playas de agua cálida";
        $trip4->image = "https://www.grecotour.com/img/cms/grecia/creta/region-lassithi/sitia-creta.jpg";
        $trip4->save();

        $trip5 = new Trip();
        $trip5->place = "Kefalonia";
        $trip5->country = "Grecia";
        $trip5->description = "Porque me gustan las playas de agua cálida";
        $trip5->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaiTxFi5EiLIgEX9xJCICOWoiWfxp6n0SB7A&usqp=CAU";
        $trip5->save();

        $trip6 = new Trip();
        $trip6->place = "Creta";
        $trip6->country = "Grecia";
        $trip6->description = "Porque me gustan las playas de agua cálida";
        $trip6->image = "https://www.grecotour.com/img/cms/grecia/creta/region-lassithi/sitia-creta.jpg";
        $trip6->save();

        $trip7 = new Trip();
        $trip7->place = "Kefalonia";
        $trip7->country = "Grecia";
        $trip7->description = "Porque me gustan las playas de agua cálida";
        $trip7->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaiTxFi5EiLIgEX9xJCICOWoiWfxp6n0SB7A&usqp=CAU";
        $trip7->save();
    }
}
