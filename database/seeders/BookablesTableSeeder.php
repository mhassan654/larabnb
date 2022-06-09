<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Illuminate\Support\Arr;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Bookable::factory()->count(100)->create();


    }
}
