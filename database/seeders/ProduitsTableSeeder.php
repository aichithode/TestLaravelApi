<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produits')->insert([
            'nom'     =>"Marteau",
            'description'     =>"un marteau",
            'id_categorie'     =>1,
            'letterRange'     =>"N",
            'id_unitSal'     =>1,
            'unitCapacity'     =>"PCE",
            'capacityQuantity'     =>1,
            'status'       =>"1",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('produits')->insert([
            'nom'     =>"Pince",
            'description'     =>"une pince",
            'id_categorie'     =>1,
            'letterRange'     =>"N",
            'id_unitSal'     =>2,
            'unitCapacity'     =>"PCE",
            'capacityQuantity'     =>1,
            'status'       =>"1",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('produits')->insert([
            'nom'     =>"Tournevis",
            'description'     =>"un trournevis",
            'id_categorie'     =>1,
            'letterRange'     =>"N",
            'id_unitSal'     =>3,
            'unitCapacity'     =>"PCE",
            'capacityQuantity'     =>1,
            'status'       =>"1",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
    }
}
