<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeEtablissementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_etablissements')->insert([
            [
                'id' => 1,
                'code' => 'ETAB001',
                'libelle' => 'CHR et CHU',
                'description' => '',
            ],
            [
                'id' => 2,
                'code' => 'ETAB002',
                'libelle' => 'Centre hospitalier',
                'description' => '',
            ],
            [
                'id' => 3,
                'code' => 'ETAB003',
                'libelle' => 'Centre hospitalier spécialisé en psychiatrie',
                'description' => '',
            ],
            [
                'id' => 4,
                'code' => 'ETAB004',
                'libelle' => 'Hôpital local',
                'description' => '',
            ],
            [
                'id' => 5,
                'code' => 'ETAB005',
                'libelle' => 'Clinique privée',
                'description' => '',
            ],
            [
                'id' => 6,
                'code' => 'ETAB006',
                'libelle' => 'Autres établissements',
                'description' => '',
            ],
            [
                'id' => 7,
                'code' => 'ETAB007',
                'libelle' => 'Centre pour examens',
                'description' => '',
            ],
        ]);
    }
}
