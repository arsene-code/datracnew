<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actes')->insert([
        [
            'id' => 1,
            'cotation' => 'QAJA013',
            'libelle'  => 'Parage et/ou suture de plaie superficielle de la peau de la face de moins de 3 cm de grand axe',
        ],
        [
            'id' => 2,
            'cotation' => 'QCJA001',
            'libelle'  => 'Parage et/ou suture de plaie profonde de la peau et des tissus mous de la main',
        ],
        [
            'id' => 3,
            'cotation' => 'QZGA002',
            'libelle'  => 'Ablation ou changement implant pharmacologique souscutané',
        ],
        [
            'id' => 4,
            'cotation' => 'DEQP003',
            'libelle'  => 'Électrocardiographie sur au moins 12 dérivations',
        ],
        [
            'id' => 5,
            'cotation' => 'FGLB001',
            'libelle'  => 'Séance injection extrait allergénique à concentration donnée pour désensibilisation spécifique',
        ],
        [
            'id' => 6,
            'cotation' => 'QZRB001',
            'libelle'  => 'Séance acupuncture',
        ],
        [
            'id' => 7,
            'cotation' => 'YYYY010',
            'libelle'  => 'Traitement de premier recours de cas nécessitant des actes techniques (pose perfusion, administration oxygène, soins de réanimation cardio-respiratoire...)',
        ],
    ]);
    }
}
