<?php

namespace Database\Seeders;

use App\Models\Chauffeur;
use App\Models\Option;
use App\Models\Role;
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
        // \App\Models\User::factory(10)->create();

        Role::Create([
            "nom" => "Admin",
        ]);

         Role::Create([
            "nom" => "Client",
        ]);

         Option::Create([
            "nom" => "Petit tour",
            "prix" => 79,
            "duree" => "30 minutes",
            "image" => "image1_option1.jpg",
            "description" => "Visitez ...."
        ]);
         Option::Create([
            "nom" => "Grand tour",
            "prix" => 199,
            "duree" => "3 heures",
            "image" => "image1_option2.jpg",
            "description" => "Visitez ...."
        ]);
         Option::Create([
            "nom" => "Full day",
            "prix" => 399,
            "duree" => "3 heures",
            "image" => "image1_option3.jpeg",
            "description" => "Visitez...."
        ]);
         
         Chauffeur::Create([
            "nom" => "Blanc",
            "prenom" => "Franck",
            "adresse" => "rue de Paris 75013",
            "telephone" => "0668750207",
            "dateEntree" => "",
            "email" => "",
            "mdp" => ""
        ]);
    }
}
