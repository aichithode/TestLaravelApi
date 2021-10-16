<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'libelle'     =>"Outillage",
            'description'     =>"Les outils",
            'status'       =>"1",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('categories')->insert([
            'libelle'     =>"SVC",
            'description'     =>"",
            'status'       =>"1",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
    }
}
