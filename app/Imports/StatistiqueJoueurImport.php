<?php

namespace App\Imports;

use App\Models\StatistiqueJoueur;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StatistiqueJoueurImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new StatistiqueJoueur([
            'saison_id'     => $row['saisonid'],
            'match_id'    => $row['matchid'], 
            'joueur_id'     => $row['joueurid'],
            'tir'    => $row['tir'], 
            'tir_cadre'     => $row['tir_cadre'],
            'but_marque'    => $row['but_marque'], 
            'passe_decisive'     => $row['passe_decisive'],
            'ballon_recupere'    => $row['ballon_recupere'], 
            'ballon_intercepte'     => $row['ballon_intercepte'],
            'tir_arrete'    => $row['tir_arrete'],

            'but_encaisse'     => $row['but_encaisse'],
            'faute_comise'    => $row['faute_comise'], 
            'hors_jeux'     => $row['hors_jeux'],
            'minute_jouer'    => $row['minute_jouer'], 
            'faute_subis'     => $row['faute_subis'],
            'carton_jaune'    => $row['carton_jaune'], 
            'carton_rouge'     => $row['carton_rouge'],
            'centre'    => $row['centre'], 
            'penelty_marque'     => $row['penelty_marque'],
            'coup_franc_marque'    => $row['coup_franc_marque'],

            'passe_reussi'     => $row['passe_reussi'],
            'penalty_arrete'    => $row['penalty_arrete'], 
            'penalty_concede'     => $row['penalty_concede'],
            'but_contre_camp'    => $row['but_contre_camp'], 
            'homme_match'     => $row['homme_match'],
            'domiciliation'    => $row['domiciliation'], 
        ]);
    }
}
