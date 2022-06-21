<?php

namespace Database\Seeders;

use App\Models\Chauffeur;
use App\Models\Option;
use App\Models\PointPassage;
use App\Models\PpOption;

use App\Models\Role;
use App\Models\User;
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
        
        User::Create([
                    "name" => "mgoumane@outlook.fr",
                    "email" => "mgoumane@outlook.fr",
                    "password" => bcrypt("mgoumane@outlook.fr"),
                    "role_id" =>2,
                ]);
        // Options

        Option::Create([
            "nom" => "Petit tour",
            "prix" => 79,
            "duree" => "30 minutes",
            "image" => "image1_option1.jpg",
            "description" => "Profitez d'une visite rapide de l'ouest parisien."
        ]);
        Option::Create([
            "nom" => "Grand tour",
            "prix" => 199,
            "duree" => "3 heures",
            "image" => "image1_option2.jpg",
            "description" => "Passez avec nous une demi-journée inoubliable !"
        ]);
        Option::Create([
            "nom" => "Full day",
            "prix" => 399,
            "duree" => "3 heures",
            "image" => "image1_option3.jpeg",
            "description" => "Vous souhaitez découvrir la ville à votre guise ? Choisissez cette option !"
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
        Chauffeur::Create([
            "nom" => "Blanc",
            "prenom" => "Franck",
            "adresse" => "rue de Paris 75013",
            "telephone" => "0668750207",
            "dateEntree" => "",
            "email" => "",
            "mdp" => ""
        ]);


        // POINTS DE PASSAGE
        PointPassage::Create([
            "nom" => "Concorde",
            "adresse" => "Place de la Concorde",
            "image" => "concorde.jpg",
        ]);
        PointPassage::Create([
            "nom" => "Tour Eiffel",
            "adresse" => "5, avenue Anatole-France",
            "image" => "tour_eiffel.jpg",
        ]);
        PointPassage::Create([
            "nom" => "Arc de triompe",
            "adresse" => "Place Charles de Gaulle",
            "image" => "arc_de_triomphe.jpg",
        ]);
        PointPassage::Create([
            "nom" => "Jardin du Trocadéro",
            "adresse" => "Pl. du Trocadéro et du 11 Novembre, 75016 Paris",
            "image" => "jardin_trocadero.jpg",
        ]);
        PointPassage::Create([
            "nom" => "Moulin Rouge",
            "adresse" => "82 Bd de Clichy, 75018 Paris",
            "image" => "moulin_rouge.jpg",
        ]);
        PointPassage::Create([
            "nom" => "Montmartre",
            "adresse" => "82 Bd de Clichy, 75018 Paris",
            "image" => "montmartre.jpg",
        ]);
        PointPassage::Create([
            "nom" => "Le chauffeur s'adapte à vos envies !",
            "adresse" => "",
            "image" => "arc.jpg",
        ]);

        // Points de Passage de l'option 1
        PpOption::Create([
            "option_id" => 1,
            "point_passage_id" => 1,
        ]);
        PpOption::Create([
            "option_id" => 1,
            "point_passage_id" => 2,
        ]);
        PpOption::Create([
            "option_id" => 1,
            "point_passage_id" => 3,
        ]);
        PpOption::Create([
            "option_id" => 1,
            "point_passage_id" => 4,
        ]);

         // Points de Passage de l'option 2
        PpOption::Create([
            "option_id" => 2,
            "point_passage_id" => 5,
        ]);
        PpOption::Create([
            "option_id" => 2,
            "point_passage_id" => 6,
        ]);
        PpOption::Create([
            "option_id" => 2,
            "point_passage_id" => 1,
        ]);
        PpOption::Create([
            "option_id" => 2,
            "point_passage_id" => 2,
        ]);
        PpOption::Create([
            "option_id" => 2,
            "point_passage_id" => 3,
        ]);
        PpOption::Create([
            "option_id" => 2,
            "point_passage_id" => 4,
        ]);

        //Point de passage de l'option 3
        PpOption::Create([
            "option_id" => 3,
            "point_passage_id" => 7,
        ]);
    }
}
