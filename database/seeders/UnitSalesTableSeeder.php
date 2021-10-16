<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_sales')->insert([
            'code'     =>"LTR",
            'libelle'     =>"Litre",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"MTR",
            'libelle'     =>"Mètre",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"MTK",
            'libelle'     =>"M2",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"MTQ",
            'libelle'     =>"M3",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"KGM",
            'libelle'     =>"Kg",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"LOT",
            'libelle'     =>"Lot",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"NIU",
            'libelle'     =>"Unité",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"BZ",
            'libelle'     =>"Botte",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"RO",
            'libelle'     =>"Rouleau",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"PAN",
            'libelle'     =>"Panneau",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"DAY",
            'libelle'     =>"Jour",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"UO",
            'libelle'     =>"Par unité d'oeuvre",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"WE",
            'libelle'     =>"Week-end",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('unit_sales')->insert([
            'code'     =>"DJ",
            'libelle'     =>"Demi journée",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"H",
            'libelle'     =>"Heure",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"PREST",
            'libelle'     =>"Prestation",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('unit_sales')->insert([
            'code'     =>"CAR",
            'libelle'     =>"Carton",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"GM",
            'libelle'     =>"Grammes",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"TO",
            'libelle'     =>"Tonnes",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        DB::table('unit_sales')->insert([
            'code'     =>"WT",
            'libelle'     =>"Watts",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
    }
}
