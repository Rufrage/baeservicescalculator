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
        'wohnzimmer_umzugskarton_b80', 'wohnzimmer_umzugskarton_a80',
        'küche_buffet_mit_aufsätzen', 'küche_unterteil_je_tür', 'küche_oberteil_je_tür', 'küche_tisch_b_06', 'küche_tisch_b_10', 'küche_tisch_b_12', 'küche_tisch_a_12', 'küche_stuhl',
        'küche_eckbank_je_sitz', 'küche_besenschrank', 'küche_herd', 'küche_geschirrspülmaschine', 'küche_waschmaschine_trockner', 'küche_kühlschrank_truhe_b_120', 'küche_kühlschrank_truhe_a_120',
        'küche_arbeitsplatte_nicht_unterb', 'küche_deckenlampe', 'küche_teppich', 'küche_mikrowelle', 'küche_umzugskarton_b_80', 'küche_umzugskarton_a_80',

        'schlafzimmer_schrank_bis_zwei_türen', 'schlafzimmer_schrank_zerlegbar', 'schlafzimmer_dopelbett_komplett', 'schlafzimmer_einzelbett_komplett', 'schlafzimmer_französisches_bett_komplett', 'schlafzimmer_bettzeug_je_betteinheit',
        'schlafzimmer_nachttisch', 'schlafzimmer_bettumbau', 'schlafzimmer_kommode', 'schlafzimmer_frisierkommode', 'schlafzimmer_wäschetruhe', 'schlafzimmer_stuhl_hocker', 'schlafzimmer_spiegel_a_08', 'schlafzimmer_deckenlampe',
        'schlafzimmer_fernseher', 'schlafzimmer_teppich', 'schlafzimmer_bilder_b08', 'schlafzimmer_bilder_a08', 'schlafzimmer_tv_schrank', 'schlafzimmer_kleiderbehältnis', 'schlafzimmer_umzugskarton_b80', 'schlafzimmer_umzugskarton_a80',
        'schlafzimmer_umzugskarton_b80_gepackt', 'schlafzimmer_umzugskarton_b80_gepackt',

        'esszimmer_stuhl', 'esszimmer_stuhl_mit_armlehnen', 'esszimmer_eckbank_je_sitz', 'esszimmer_tisch_b06', 'esszimmer_tisch_b10', 'esszimmer_tisch_b12', 'esszimmer_tisch_a12', 'esszimmer_sekretär', 'esszimmer_sideboard_klein', 'esszimmer_sideboard_groß',
        'esszimmer_hausbar', 'esszimmer_teewagen', 'esszimmer_teppich', 'esszimmer_brücke', 'esszimmer_deckenlampe', 'esszimmer_stehlampe', 'esszimmer_vitrine', 'esszimmer_bilder_b08', 'esszimmer_bilder_a08', 'esszimmer_umzugskarton_b80', 'esszimmer_umzugskarton_a80',

        'bad_truhe_kommode', 'bad_kleiderablage', 'bad_stuhl_hocker', 'bad_toilettenschrank', 'bad_wäschekorb', 'bad_deckenlampe',

        'kinderzimmer_schrank_bis_zwei_türen', 'kinderzimmer_schrank_zerlegbar', 'kinderzimmer_bett_komplett', 'kinderzimmer_kinderbett_komplett', 'kinderzimmer_etagenbett_komplett', 'kinderzimmer_bettzeug_je_betteinheit', 'kinderzimmer_nachttisch',
        'kinderzimmer_kommode', 'kinderzimmer_schreibpult', 'kinderzimmer_spielzeugkiste', 'kinderzimmer_tisch_b06', 'kinderzimmer_tisch_b10', 'kinderzimmer_tisch_b12', 'kinderzimmer_tisch_a12', 'kinderzimmer_laufgitter', 'kinderzimmer_stuhl_hocker',
        'kinderzimmer_teppich', 'kinderzimmer_brücke', 'kinderzimmer_anbauwand_b38', 'kinderzimmer_anbauwand_a38', 'kinderzimmer_deckenlampe', 'kinderzimmer_kleiderbehältnis', 'kinderzimmer_umzugskarton_b80', 'kinderzimmer_umzugskarton_a80',

        'weitere_zimmer_schreibtisch_b16', 'weitere_zimmer_schreibtisch_a16', 'weitere_zimmer_schreibtischcontainer',
        'weitere_zimmer_schreibtischstuhl', 'weitere_zimmer_winkelkombination', 'weitere_zimmer_bücherregal', 'weitere_zimmer_aktenschrank',
        'weitere_zimmer_sessel_ohne_armlehnen', 'weitere_zimmer_sessel_mit_armlehnen', 'weitere_zimmer_tisch_b06', 'weitere_zimmer_tisch_b10',
        'weitere_zimmer_tisch_b12', 'weitere_zimmer_tisch_a12', 'weitere_zimmer_computer', 'weitere_zimmer_tischkopierer', 'weitere_zimmer_stehlampe',
        'weitere_zimmer_deckenlampe', 'weitere_zimmer_teppich', 'weitere_zimmer_brücke', 'weitere_zimmer_umzugskarton_b80', 'weitere_zimmer_umzugskarton_a80',

        'sonstiges_fahrrad_moped', 'sonstiges_motorrad', 'sonstiges_dreirad_kinderrad', 'sonstiges_bügelbrett', 'sonstiges_staubsauger',
        'sonstiges_autoreifen', 'sonstiges_koffer', 'sonstiges_klapptisch_klappstuhl', 'sonstiges_kinderwagen', 'sonstiges_leiter',
        'sonstiges_rasenmäher_motor', 'sonstiges_rasenmäher_hand', 'sonstiges_schubkarre', 'sonstiges_werkzeugschrank',
        'sonstiges_werkzeugkoffer', 'sonstiges_ski', 'sonstiges_schlitten', 'sonstiges_blumenkübel_kasten', 'sonstiges_sonnenschirm',
        'sonstiges_tischtennisplatte', 'sonstiges_mülltonne', 'sonstiges_regal', 'sonstiges_gartengeräte', 'sonstiges_sonnenbank',
        'sonstiges_gartengrill', 'sonstiges_umzugskarton_b80', 'sonstiges_umzugskarton_a80',

        'auszugsort','einzugsort', 'etage_auszug', 'etage_einzug', 'aussenaufzug_auszug', 'aussenaufzug_einzug', 'halteverbot_auszug', 'halteverbot_einzug', 'abtrageweg_auszug',
        'abtrageweg_einzug', 'volumen', 'distanz_text', 'versicherung', 'übersee_lokal', 'distanz'

    ];
}
