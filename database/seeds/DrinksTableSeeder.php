<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->insert([ 
           'name' => 'Orange Juice',
           'comments' => 'Rich in C vitamin',
           'rating' => 9,
           'juice_date' => '2019-06-09',
       ]);
    }
}
