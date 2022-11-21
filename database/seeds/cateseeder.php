<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cateseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categoryName' => 'Single Stem',
            'categoryImage' => 'single_stem.jpg',
        ]);
        
        DB::table('categories')->insert([
            'categoryName' => 'Bouquet',
            'categoryImage' => 'bouquet.jpg',
        ]);
    }
}
