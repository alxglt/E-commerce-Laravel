<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('item')->insert([
            'picture_path' => 'images/765.jpg',
            'name' => 'Original Prusa I3 MK3S',
            'description' => "The Original Prusa I3 MK3S is the successor to the award-winning Original Prusa i3 MK2 3D printer. With the redesigned extruder, a plethora of sensors and the new MK52 magnetic heating plate with replaceable print sheet in spring steel and PEI, we believe we have developed our best 3D printer yet!'",
            'price' => '765',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '13',
            'enabled' => '1'
        ]);

        DB::table('item')->insert([
            'picture_path' => 'images/4500.jpg',
            'name' => 'f170',
            'description' => "The F123 Series 3D printers enable designers, engineers and educators to enjoy affordable, industrial-quality 3D printing. Work faster with concept iterations and component verification. Increase your productivity and achieve your goals faster with reproducible results.",
            'price' => '4500',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '5',
            'enabled' => '1'
        ]);

        DB::table('item')->insert([
            'picture_path' => 'images/2149.jpg',
            'name' => 'Imprimante 3D Zortrax M200 Plus',
            'description' => "Bring your creations to life with the Zortrax M200+ 3D printer. Precise and high-performance, it gives you the benefit of professional equipment for a realisation faithful to your project, while remaining very easy to use.",
            'price' => '2149',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '6',
            'enabled' => '1'
        ]);

        DB::table('item')->insert([
            'picture_path' => 'images/940.jpg',
            'name' => 'Flashforge Creator',
            'description' => "Ideal for anyone who deputies with 3D printing, the FlashForge Creator Pro model offers intuitive software, a closed cabinet for a better success rate, a double extrusion head to make many models and a heated platen for more versatility.",
            'price' => '940',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '15',
            'enabled' => '1'
        ]);

        DB::table('item')->insert([
            'picture_path' => 'images/bibi.jpg',
            'name' => 'Dagoma Disco Ultimate',
            'description' => "3D printing will soon no longer hold any secrets for you thanks to the DAGOMA Disco Ultimate Bi-coul printer. Its efficient capabilities and two-colour function make it a high-performance, practical and ideal device for creating in complete freedom.",
            'price' => '499',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '19',
            'enabled' => '1'
        ]);


        DB::table('item')->insert([
            'picture_path' => 'images/558.jpg',
            'name' => 'Labists 3d printer',
            'description' => "Huge Print Volume: Offering a print volume of 220 x 220 x 250 mm and a layer thickness of 0.1 mm, LABISTS 3D printer FDM allows printing at a very high speed up to 150mm / s while guaranteeing high precision thanks to its integrated fan which blows directly on the creation to cool it Automatic Levelling: Thanks to the high precision leveling sensor, LABISTS printer 3D filament allows automatic levelling. Not only does this function allow for a much more accurate result by setting a total of 25 points, but it also makes the manufacturing process much easier Resume Print: Thanks to the advanced Resume Print technology and the filament end detector, LABISTS printer 3D filament is able to resume printing from the last layer in case of loss of power supply or filament breakage.",
            'price' => '558',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '5',
            'enabled' => '1'
        ]);

        DB::table('item')->insert([
            'picture_path' => 'images/2500.jpg',
            'name' => 'Futur of the past',
            'description' => "Ideal for taking your first steps into the world of 3D printing, this 3D metal printer is compatible with the latest versions of Window, Linux and Mac iOS. Equipped with this 3D printer, you will be able to discover the joys of tomorrow's DIY and create your own objects with very high precision!",
            'price' => '2500',
            'categorie' =>  "Printer,3D",
            'quantity' =>  '5',
            'enabled' => '1'
        ]);
    }
}
