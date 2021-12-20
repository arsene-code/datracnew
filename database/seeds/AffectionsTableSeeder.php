<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AffectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affections')->insert([
            [

            ],
        ]);
    }
}
