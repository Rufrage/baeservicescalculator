<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umzug extends Model
{
    protected $fillable = ['vorname', 'nachname', 'wohnzimmer_sofa_3_sitze', 'wohnzimmer_sofa_2_sitze', 'wohnzimmer_sitzlandschaft', 'wohnzimmer_sessel_mit_armlehnen', 'wohnzimmer_sessel_ohne_armlehnen', 'wohnzimmer_stuhl',
        'wohnzimmer_stuhl_mit_armlehnen', 'wohnzimmer_tisch_06', 'wohnzimmer_tisch_10', 'wohnzimmer_tisch_b12', 'wohnzimmer_tisch_a12', 'wohnzimmer_wohnzimmerschrank',
        'wohnzimmer_anbauwand_b38', 'wohnzimmer_anbauwand_a38', 'wohnzimmer_bücherregal', 'wohnzimmer_buffet_mit_aufsatz', 'wohnzimmer_buffet_ohne_aufsatz', 'wohnzimmer_schreibtisch_b16',
        'wohnzimmer_schreibtisch_a16', 'wohnzimmer_standuhr', 'wohnzimmer_video_dvd_player', 'wohnzimmer_musikschrank_turm', 'wohnzimmer_stereoanlage',
        'wohnzimmer_klavier', 'wohnzimmer_flügel', 'wohnzimmer_heimorgel', 'wohnzimmer_nähmaschine', 'wohnzimmer_stehlampe', 'wohnzimmer_brücke', 'wohnzimmer_deckenlampe',
        'wohnzimmer_lüster', 'wohnzimmer_teppich', 'wohnzimmer_bilder_b08', 'wohnzimmer_bilder_a08', 'wohnzimmer_sideboard_klein', 'wohnzimmer_sideboard_groß', 'wohnzimmer_tvschrank',
        'wohnzimmer_umzugskarton_b80', 'wohnzimmer_umzugskarton_a80', 'wohnzimmer_couchtisch','wohnzimmer_schlafcouch','wohnzimmer_ecksofa45', 'wohnzimmer_ecksofa56','wohnzimmer_klappstuhl', 'wohnzimmer_hocker',
        'wohnzimmer_fernseher_klein', 'wohnzimmer_fernseher_groß', 'wohnzimmer_fernseher_mittel', 'wohnzimmer_wohnwand','wohnzimmer_staubsauger', 'wohnzimmer_bügelbrett', 'wohnzimmer_drucker', 'wohnzimmer_computer', 'wohnzimmer_computer_bildschirm',
        'wohnzimmer_kommode_mittel', 'wohnzimmer_kommode_klein', 'wohnzimmer_kleiderschrank2', 'wohnzimmer_kleiderschrank3', 'wohnzimmer_schrank',
        'wohnzimmer_schrank_hochschrank', 'wohnzimmer_vitrine_glasvitrine', 'wohnzimmer_schuhschrank2','wohnzimmer_billy',
        'wohnzimmer_bücherregal_mittel', 'wohnzimmer_regal_klein', 'wohnzimmer_regal_mittel','wohnzimmer_bodenlampe', 'wohnzimmer_lampe_nachttisch', 'wohnzimmer_tischlampe', 'wohnzimmer_buegelbrett',
        'wohnzimmer_teppich_groß', 'wohnzimmer_pflanze', 'wohnzimmer_spiegel','wohnzimmer_truhe', 'wohnzimmer_weinkiste',

        'küche_buffet_mit_aufsätzen', 'küche_unterteil_je_tür', 'küche_oberteil_je_tür', 'küche_tisch_06', 'küche_tisch_10', 'küche_tisch_b12', 'küche_tisch_a12', 'küche_stuhl',
        'küche_eckbank_je_sitz', 'küche_besenschrank', 'küche_herd', 'küche_geschirrspülmaschine', 'küche_waschmaschine_trockner', 'küche_kühlschrank_truhe_b_120', 'küche_kühlschrank_truhe_a_120',
        'küche_arbeitsplatte_nicht_unterb', 'küche_deckenlampe', 'küche_teppich', 'küche_mikrowelle', 'küche_umzugskarton_b_80', 'küche_umzugskarton_a_80','küche_kühlschrank', 'küche_küchenunterschrank',
        'küche_stuhl_mit_armlehnen', 'küche_hocker', 'küche_klappstuhl','küche_buegelbrett','küche_staubsauger', 'küche_truhe', 'küche_kuehlschrank',

        'schlafzimmer_schrank_bis_zwei_türen', 'schlafzimmer_schrank_zerlegbar', 'schlafzimmer_dopelbett_komplett', 'schlafzimmer_einzelbett_komplett', 'schlafzimmer_französisches_bett_komplett', 'schlafzimmer_bettzeug_je_betteinheit',
        'schlafzimmer_bettumbau', 'schlafzimmer_kommode', 'schlafzimmer_frisierkommode', 'schlafzimmer_wäschetruhe',  'schlafzimmer_spiegel_a_08',
        'schlafzimmer_bilder_b08', 'schlafzimmer_bilder_a08', 'schlafzimmer_kleiderbehältnis', 'schlafzimmer_umzugskarton_b80', 'schlafzimmer_umzugskarton_a80', 'schlafzimmer_umzugskarton_a80_gepackt',
        'schlafzimmer_umzugskarton_b80_gepackt', 'schlafzimmer_umzugskarton_b80_gepackt','schlafzimmer_matratze140', 'schlafzimmer_matratze090', 'schlafzimmer_lattenrost','schlafzimmer_stuhl', 'schlafzimmer_stuhl_mit_armlehnen', 'schlafzimmer_klappsthul', 'schlafzimmer_hocker', 'schlafzimmer_tisch_06',
        'schlafzimmer_tisch_10','schlafzimmer_couchtisch', 'schlafzimmer_tvschrank', 'schlafzimmer_fernseher_mittel', 'schlafzimmer_fernseher_klein', 'schlafzimmer_fernseher_groß', 'schlafzimmer_wohnwand','schlafzimmer_stehlampe',
        'schlafzimmer_deckenlampe', 'schlafzimmer_bodenlampe', 'schlafzimmer_lampe_nachttisch', 'schlafzimmer_tischlampe', 'schlafzimmer_billy', 'schlafzimmer_bücherregal', 'schlafzimmer_bücherregal_mittel', 'schlafzimmer_regal_mittel', 'schlafzimmer_regal_klein',
        'schlafzimmer_teppich', 'schlafzimmer_teppich_groß', 'schlafzimmer_bilder_b08', 'schlafzimmer_bilder_a08', 'schlafzimmer_spiegel', 'schlafzimmer_pflanze', 'schlafzimmer_truhe','schlafzimmer_klappstuhl',

        'esszimmer_stuhl', 'esszimmer_stuhl_mit_armlehnen', 'esszimmer_eckbank_je_sitz', 'esszimmer_tisch_06', 'esszimmer_tisch_10', 'esszimmer_tisch_b12', 'esszimmer_tisch_a12', 'esszimmer_sekretär', 'esszimmer_sideboard_klein', 'esszimmer_sideboard_groß',
        'esszimmer_hausbar', 'esszimmer_teewagen', 'esszimmer_teppich', 'esszimmer_brücke', 'esszimmer_deckenlampe', 'esszimmer_stehlampe', 'esszimmer_vitrine', 'esszimmer_bilder_b08', 'esszimmer_bilder_a08', 'esszimmer_umzugskarton_b80', 'esszimmer_umzugskarton_a80',
        'esszimmer_hocker', 'esszimmer_klappstuhl', 'esszimmer_spiegel', 'esszimmer_teppich_groß', 'esszimmer_pflanze', 'esszimmer_bodenlampe', 'esszimmer_lampe_nachttisch', 'esszimmer_tischlampe', 'esszimmer_truhe',




        'bad_waschmaschine', 'bad_wäschetrockner', 'bad_wäscheständer', 'bad_waeschekorb', 'bad_waschbeckenunterschrank', 'bad_truhe_kommode', 'bad_kleiderablage', 'bad_stuhl_hocker', 'bad_toilettenschrank', 'bad_wäschekorb', 'bad_deckenlampe', 'bad_spiegel',

        'kinderzimmer_schrank_bis_zwei_türen', 'kinderzimmer_schrank_zerlegbar', 'kinderzimmer_babybett', 'kinderzimmer_wickeltisch', 'kinderzimmer_kinderbett_komplett', 'kinderzimmer_etagenbett_komplett', 'kinderzimmer_bettzeug_je_betteinheit', 'kinderzimmer_nachttisch','kinderzimmer_bett_komplett',
        'kinderzimmer_kommode_mittel', 'kinderzimmer_kommode_klein', 'kinderzimmer_schreibpult', 'kinderzimmer_spielzeugkiste', 'kinderzimmer_tisch_b06', 'kinderzimmer_tisch_b10', 'kinderzimmer_tisch_b12', 'kinderzimmer_tisch_a12', 'kinderzimmer_laufgitter', 'kinderzimmer_stuhl_hocker',
        'kinderzimmer_teppich', 'kinderzimmer_brücke', 'kinderzimmer_anbauwand_b38', 'kinderzimmer_anbauwand_a38', 'kinderzimmer_kleiderbehältnis', 'kinderzimmer_umzugskarton_b80', 'kinderzimmer_umzugskarton_a80',
        'kinderzimmer_schrank_klein','kinderzimmer_schrank2', 'kinderzimmer_schrank3','kinderzimmer_hochschrank','kinderzimmer_truhe', 'kinderzimmer_stehlampe', 'kinderzimmer_deckenlampe', 'kinderzimmer_billy', 'kinderzimmer_buecherregal', 'kinderzimmer_buecherregal_mittel',
        'kinderzimmer_regal_mittel', 'kinderzimmer_regal_klein',

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
        'abtrageweg_einzug', 'volumen', 'distanz_text', 'versicherung', 'übersee_lokal', 'distanz', 'montage','steuerbefreiung', 'umzug',

    ];
}
