<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ActesTableSeeder::class);
        $this->call(AssurancesTableSeeder::class);
        $this->call(EtablissementsTableSeeder::class);
        $this->call(TypeEtablissementsTableSeeder::class);
        $this->call(MedicamentsTableSeeder::class);
        $this->call(AffectionsTableSeeder::class);
    }
}
