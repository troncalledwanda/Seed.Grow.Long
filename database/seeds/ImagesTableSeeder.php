<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	'url' => '/images/treeplanting.png',
        	'state_id' => 1,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('images')->insert([
        	'url' => '/images/AngelOakTree_articleSpan02.jpg',
        	'state_id' => 2,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('images')->insert([
        	'url' => 'images/23070950-Young-tree-seedling-grow-from-old-stump-Stock-Photo.jpg',
        	'state_id' => 3,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('images')->insert([
        	'url' => '/images/trees-die-of-old-age.jpg',
        	'state_id' => 3,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);	

    }
}
