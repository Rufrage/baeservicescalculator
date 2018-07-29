<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umzug extends Model
{
    protected $fillable = ['vorname', 'nachname', 'wohnzimmer_sofa', 'wohnzimmer_sitzlandschaft', 'wohnzimmer_sessel_mit_armlehnen', 'wohnzimmer_sessel_ohne_armlehnen', 'wohnzimmer_stuhl',
        'wohnzimmer_stuhl_mit_armlehnen', 'wohnzimmer_tisch_06', 'wohnzimmer_tisch_10', 'wohnzimmer_tisch_b12', 'wohnzimmer_tisch_a12', 'wohnzimmer_wohnzimmerschrank',
        'wohnzimmer_anbauwand_b38', 'wohnzimmer_anbauwand_a38', 'wohnzimmer_bücherregal', 'wohnzimmer_buffet_mit_aufsatz', 'wohnzimmer_buffet_ohne_aufsatz', 'wohnzimmer_schreibtisch_b16',
        'wohnzimmer_schreibtisch_a16', 'wohnzimmer_standuhr', 'wohnzimmer_video_dvd_player', 'wohnzimmer_musikschrank_turm', 'wohnzimmer_stereoanlage', 'wohnzimmer_fernseher',
        'wohnzimmer_klavier', 'wohnzimmer_flügel', 'wohnzimmer_heimorgel', 'wohnzimmer_nähmaschine', 'wohnzimmer_stehlampe', 'wohnzimmer_brücke', 'wohnzimmer_deckenlampe',
        'wohnzimmer_lüster', 'wohnzimmer_teppich', 'wohnzimmer_bilder_b08', 'wohnzimmer_bilder_a08', 'wohnzimmer_sideboard_klein', 'wohnzimmer_sideboard_groß', 'wohnzimmer_tvschrank',
        'wohnzimmer_umzugskarton_b80', 'wohnzimmer_umzugskarton_a80'];
}
