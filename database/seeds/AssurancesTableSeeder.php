<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssurancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assurances')->insert([    
            [
                'id' => 1,
                'nom_assurance' => 'Cnamgs',
                'code_assurance' => 'AA-001',
                'raison_sociale' => 'Bd de l"indépendance, Libreville',
                'statut_juridique' => 'Etablissement public',
                'site_web' => 'www.cnamgs.ga',
                'tel' => '011 77 59 65',
                'bp' => '3999',
                'logo' => '/images/assurance/cnamgs.png',
                'ville_id' => 1,
            ],
            [
                'id' => 2,
                'nom_assurance' => 'Assinco',
                'code_assurance' => 'AA-002',
                'raison_sociale' => 'Bd de le Nation, Immeuble Odyssée Libreville',
                'statut_juridique' => 'Sociéte Anonyme à Responsabilité Limité',
                'site_web' => 'www.assinco-sa.com',
                'tel' => '011 72 19 25',
                'bp' => '7812',
                'logo' => '/images/assurance/assinco.png',
                'ville_id' => 1,
            ],
            [
                'id' => 3,
                'nom_assurance' => 'AXA Gabon',
                'code_assurance' => 'AA-003',
                'raison_sociale' => 'Bord de mer, Bd de la Nation Libreville',
                'statut_juridique' => 'Sociéte Anonyme',
                'site_web' => 'www.axa.ga',
                'tel' => '011 79 80 80',
                'bp' => '4047',
                'logo' => '/images/assurance/axa.png',
                'ville_id' => 1,
            ],
            [
                'id' => 4,
                'nom_assurance' => 'Ascoma',
                'code_assurance' => 'AA-004',
                'raison_sociale' => 'Immeuble Shell Gabon - 90 rue Ange M’Ba',
                'statut_juridique' => 'Sociéte Anonyme',
                'site_web' => 'www.axa.ga',
                'tel' => '011 74 32 90',
                'bp' => '2138',
                'logo' => '/images/assurance/ascoma.png',
                'ville_id' => 1,
            ],
            [
                'id' => 5,
                'nom_assurance' => 'Ogar',
                'code_assurance' => 'AA-005',
                'raison_sociale' => 'Immeuble Deltassur, 1881 Bd de la Nation Libreville',
                'statut_juridique' => 'Sociéte Anonyme',
                'site_web' => 'www.groupeogar.com',
                'tel' => '011 76 15 96',
                'bp' => '',
                'logo' => '/images/assurance/ogar.jpg',
                'ville_id' => 1,
            ],
            [
                'id' => 6,
                'nom_assurance' => 'Nsia',
                'code_assurance' => 'AA-006',
                'raison_sociale' => 'Immeuble NSIA, Glass Libreville',
                'statut_juridique' => 'Sociéte Anonyme',
                'site_web' => 'www.groupensia.com',
                'tel' => '011 72 13 90',
                'bp' => '2221',
                'logo' => '/images/assurance/nsia.png',
                'ville_id' => 1,
            ],
            [
                'id' => 7,
                'nom_assurance' => 'Sunu',
                'code_assurance' => 'AA-007',
                'raison_sociale' => 'Avenue du Colonnel Parant, Libreville',
                'statut_juridique' => 'Sociéte Anonyme',
                'site_web' => 'www.sunu-group.com',
                'tel' => '011 74 36 92',
                'bp' => '915',
                'logo' => '/images/assurance/sunu.jpg',
                'ville_id' => 1,
            ],
            [
                'id' => 8,
                'nom_assurance' => 'Sanlam',
                'code_assurance' => 'AA-008',
                'raison_sociale' => 'Rue Bretonnet, Immeuble Maima, Libreville',
                'statut_juridique' => 'Sociéte Anonyme',
                'site_web' => 'www.ga.sanlam.com',
                'tel' => '011 76 06 51',
                'bp' => '6232',
                'logo' => '/images/assurance/sanlam.jpg',
                'ville_id' => 1,
            ],
        ]);
    }
}
