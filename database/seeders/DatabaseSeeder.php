<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(3)->create();
        \App\Models\Admin::factory(3)->create();
        \App\Models\Saison::factory(3)->create();
        \App\Models\Competition::factory(3)->create();
        \App\Models\Stade::factory(3)->create();
        \App\Models\Boutique::factory(3)->create();
        \App\Models\Joueur::factory(20)->create();
        \App\Models\Journee::factory(3)->create();
        \App\Models\Phase::factory(3)->create();
        \App\Models\Arbitre::factory(3)->create();
        \App\Models\Poste::factory(4)->create();
        \App\Models\Publicite::factory(3)->create();
        \App\Models\Actualite::factory(3)->create();
        \App\Models\Partenaire::factory(3)->create();
        \App\Models\Club::factory(6)->create();
        \App\Models\Matche::factory(15)->create();
        \App\Models\DetailCompetitionSaison::factory(15)->create();
        \App\Models\Classement::factory(6)->create();
        \App\Models\PalmaresClub::factory(6)->create();
        \App\Models\PalmaresJoueur::factory(66)->create();
        \App\Models\DetailClubSaison::factory(20)->create();
        \App\Models\DetailMatch::factory(15)->create();
        \App\Models\StatistiqueJoueur::factory(60)->create();
        \App\Models\StatistiqueClub::factory(3)->create();
        \App\Models\FeuilleMatch::factory(60)->create();
    }
}
