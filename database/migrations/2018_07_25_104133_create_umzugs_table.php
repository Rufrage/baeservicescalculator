<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmzugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umzugs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vorname');
            $table->string('nachname');
            $table->string('auszugsort')->nullable();
            $table->string('einzugsort')->nullable();
            $table->integer('etage_auszug')->default(0);
            $table->integer('etage_einzug')->default(0);
            $table->integer('aussenaufzug_auszug')->default(0);
            $table->integer('aussenaufzug_einzug')->default(0);
            $table->integer('halteverbot_auszug')->default(0);
            $table->integer('halteverbot_einzug')->default(0);
            $table->integer('abtrageweg_auszug')->default(0);
            $table->integer('abtrageweg_einzug')->default(0);
            $table->integer('volumen')->default(0);
            $table->string('distanz_text')->nullable();
            $table->integer('distanz')->nullable();
            $table->integer('übersee_lokal')->default(0);
            $table->integer('versicherung')->default(0);
            $table->integer('steuerbefreiung')->default(0);
            $table->integer('übersee_verpackung')->default(0);
            $table->integer('gestellung_container')->default(0);
            $table->integer('montage')->default(0);

            $table->integer('wohnzimmer_sofa_3_sitze')->default(0);
            $table->integer('wohnzimmer_sofa_2_sitze')->default(0);
            $table->integer('wohnzimmer_schlafcouch')->default(0);
            $table->integer('wohnzimmer_sitzlandschaft')->default(0);
            $table->integer('wohnzimmer_ecksofa45')->default(0);
            $table->integer('wohnzimmer_ecksofa56')->default(0);
            $table->integer('wohnzimmer_sessel_mit_armlehnen')->default(0);
            $table->integer('wohnzimmer_sessel_ohne_armlehnen')->default(0);
            $table->integer('wohnzimmer_stuhl')->default(0);
            $table->integer('wohnzimmer_stuhl_mit_armlehnen')->default(0);
            $table->integer('wohnzimmer_klappstuhl')->default(0);
            $table->integer('wohnzimmer_hocker')->default(0);
            $table->integer('wohnzimmer_tisch_06')->default(0);
            $table->integer('wohnzimmer_tisch_10')->default(0);
            $table->integer('wohnzimmer_tisch_b12')->default(0);
            $table->integer('wohnzimmer_tisch_a12')->default(0);
            $table->integer('wohnzimmer_couchtisch')->default(0);
            $table->integer('wohnzimmer_tvschrank')->default(0);
            $table->integer('wohnzimmer_fernseher_mittel')->default(0);
            $table->integer('wohnzimmer_fernseher_groß')->default(0);
            $table->integer('wohnzimmer_fernseher_klein')->default(0);
            $table->integer('wohnzimmer_wohnwand')->default(0);
            $table->integer('wohnzimmer_staubsauger')->default(0);
            $table->integer('wohnzimmer_buegelbrett')->default(0);
            $table->integer('wohnzimmer_drucker')->default(0);
            $table->integer('wohnzimmer_computer')->default(0);
            $table->integer('wohnzimmer_computer_bildschirm')->default(0);
            $table->integer('wohnzimmer_kommode_mittel')->default(0);
            $table->integer('wohnzimmer_kommode_klein')->default(0);
            $table->integer('wohnzimmer_kleiderschrank2')->default(0);
            $table->integer('wohnzimmer_kleiderschrank3')->default(0);
            $table->integer('wohnzimmer_schrank')->default(0);
            $table->integer('wohnzimmer_schrank_hochschrank')->default(0);
            $table->integer('wohnzimmer_vitrine_glasvitrine')->default(0);
            $table->integer('wohnzimmer_schuhschrank2')->default(0);
            $table->integer('wohnzimmer_sideboard_klein')->default(0);
            $table->integer('wohnzimmer_sideboard_groß')->default(0);
            $table->integer('wohnzimmer_bücherregal')->default(0);
            $table->integer('wohnzimmer_bücherregal_mittel')->default(0);
            $table->integer('wohnzimmer_regal_klein')->default(0);
            $table->integer('wohnzimmer_regal_mittel')->default(0);
            $table->integer('wohnzimmer_billy')->default(0);
            $table->integer('wohnzimmer_stehlampe')->default(0);
            $table->integer('wohnzimmer_deckenlampe')->default(0);
            $table->integer('wohnzimmer_bodenlampe')->default(0);
            $table->integer('wohnzimmer_lampe_nachttisch')->default(0);
            $table->integer('wohnzimmer_tischlampe')->default(0);
            $table->integer('wohnzimmer_teppich')->default(0);
            $table->integer('wohnzimmer_teppich_groß')->default(0);
            $table->integer('wohnzimmer_bilder_b08')->default(0);
            $table->integer('wohnzimmer_bilder_a08')->default(0);
            $table->integer('wohnzimmer_pflanze')->default(0);
            $table->integer('wohnzimmer_spiegel')->default(0);
            $table->integer('wohnzimmer_truhe')->default(0);
            $table->integer('wohnzimmer_weinkiste')->default(0);


            $table->integer('wohnzimmer_wohnzimmerschrank')->default(0);
            $table->integer('wohnzimmer_anbauwand_b38')->default(0);
            $table->integer('wohnzimmer_anbauwand_a38')->default(0);
            $table->integer('wohnzimmer_buffet_mit_aufsatz')->default(0);
            $table->integer('wohnzimmer_buffet_ohne_aufsatz')->default(0);
            $table->integer('wohnzimmer_schreibtisch_b16')->default(0);
            $table->integer('wohnzimmer_schreibtisch_a16')->default(0);
            $table->integer('wohnzimmer_standuhr')->default(0);
            $table->integer('wohnzimmer_video_dvd_player')->default(0);
            $table->integer('wohnzimmer_musikschrank_turm')->default(0);
            $table->integer('wohnzimmer_stereoanlage')->default(0);
            $table->integer('wohnzimmer_klavier')->default(0);
            $table->integer('wohnzimmer_flügel')->default(0);
            $table->integer('wohnzimmer_heimorgel')->default(0);
            $table->integer('wohnzimmer_nähmaschine')->default(0);
            $table->integer('wohnzimmer_brücke')->default(0);
            $table->integer('wohnzimmer_lüster')->default(0);
            $table->integer('wohnzimmer_umzugskarton_b80')->default(0);
            $table->integer('wohnzimmer_umzugskarton_a80')->default(0);


            $table->integer('küche_herd')->default(0);
            $table->integer('küche_geschirrspülmaschine')->default(0);
            $table->integer('küche_küchenunterschrank')->default(0);
            $table->integer('küche_kuehlschrank')->default(0);
            $table->integer('küche_mikrowelle')->default(0);
            $table->integer('küche_tisch_b_06')->default(0);
            $table->integer('küche_tisch_b_10')->default(0);
            $table->integer('küche_tisch_b_12')->default(0);
            $table->integer('küche_tisch_a_12')->default(0);
            $table->integer('küche_stuhl')->default(0);
            $table->integer('küche_stuhl_mit_armlehnen')->default(0);
            $table->integer('küche_hocker')->default(0);
            $table->integer('küche_klappstuhl')->default(0);
            $table->integer('küche_staubsauger')->default(0);
            $table->integer('küche_buegelbrett')->default(0);
            $table->integer('küche_truhe')->default(0);


            $table->integer('küche_buffet_mit_aufsätzen')->default(0);
            $table->integer('küche_unterteil_je_tür')->default(0);
            $table->integer('küche_oberteil_je_tür')->default(0);
            $table->integer('küche_eckbank_je_sitz')->default(0);
            $table->integer('küche_besenschrank')->default(0);
            $table->integer('küche_waschmaschine_trockner')->default(0);
            $table->integer('küche_kühlschrank_truhe_b_120')->default(0);
            $table->integer('küche_kühlschrank_truhe_a_120')->default(0);
            $table->integer('küche_arbeitsplatte_nicht_unterb')->default(0);
            $table->integer('küche_deckenlampe')->default(0);
            $table->integer('küche_teppich')->default(0);
            $table->integer('küche_umzugskarton_b_80')->default(0);
            $table->integer('küche_umzugskarton_a_80')->default(0);


            $table->integer('schlafzimmer_dopelbett_komplett')->default(0);
            $table->integer('schlafzimmer_einzelbett_komplett')->default(0);
            $table->integer('schlafzimmer_matratze090')->default(0);
            $table->integer('schlafzimmer_matratze140')->default(0);
            $table->integer('schlafzimmer_lattenrost')->default(0);
            $table->integer('schlafzimmer_stuhl')->default(0);
            $table->integer('schlafzimmer_stuhl_mit_armlehnen')->default(0);
            $table->integer('schlafzimmer_klappstuhl')->default(0);
            $table->integer('schlafzimmer_hocker')->default(0);
            $table->integer('schlafzimmer_tisch_06')->default(0);
            $table->integer('schlafzimmer_tisch_10')->default(0);
            $table->integer('schlafzimmer_couchtisch')->default(0);
            $table->integer('schlafzimmer_tvschrank')->default(0);
            $table->integer('schlafzimmer_fernseher_mittel')->default(0);
            $table->integer('schlafzimmer_fernseher_groß')->default(0);
            $table->integer('schlafzimmer_fernseher_klein')->default(0);
            $table->integer('schlafzimmer_wohnwand')->default(0);
            $table->integer('schlafzimmer_regal_mittel')->default(0);
            $table->integer('schlafzimmer_regal_klein')->default(0);
            $table->integer('schlafzimmer_bücherregal')->default(0);
            $table->integer('schlafzimmer_bücherregal_mittel')->default(0);
            $table->integer('schlafzimmer_billy')->default(0);
            $table->integer('schlafzimmer_stehlampe')->default(0);
            $table->integer('schlafzimmer_deckenlampe')->default(0);
            $table->integer('schlafzimmer_bodenlampe')->default(0);
            $table->integer('schlafzimmer_lampe_nachttisch')->default(0);
            $table->integer('schlafzimmer_tischlampe')->default(0);
            $table->integer('schlafzimmer_teppich')->default(0);
            $table->integer('schlafzimmer_teppich_groß')->default(0);
            $table->integer('schlafzimmer_bilder_b08')->default(0);
            $table->integer('schlafzimmer_bilder_a08')->default(0);
            $table->integer('schlafzimmer_pflanze')->default(0);
            $table->integer('schlafzimmer_spiegel')->default(0);
            $table->integer('schlafzimmer_truhe')->default(0);



            $table->integer('schlafzimmer_schrank_bis_zwei_türen')->default(0);
            $table->integer('schlafzimmer_schrank_zerlegbar')->default(0);
            $table->integer('schlafzimmer_französisches_bett_komplett')->default(0);
            $table->integer('schlafzimmer_bettzeug_je_betteinheit')->default(0);
            $table->integer('schlafzimmer_bettumbau')->default(0);
            $table->integer('schlafzimmer_kommode')->default(0);
            $table->integer('schlafzimmer_frisierkommode')->default(0);
            $table->integer('schlafzimmer_wäschetruhe')->default(0);
            $table->integer('schlafzimmer_kleiderbehältnis')->default(0);
            $table->integer('schlafzimmer_umzugskarton_b80')->default(0);
            $table->integer('schlafzimmer_umzugskarton_a80')->default(0);
            $table->integer('schlafzimmer_umzugskarton_b80_gepackt')->default(0);
            $table->integer('schlafzimmer_umzugskarton_a80_gepackt')->default(0);







            $table->integer('esszimmer_stuhl')->default(0);
            $table->integer('esszimmer_stuhl_mit_armlehnen')->default(0);
            $table->integer('esszimmer_hocker')->default(0);
            $table->integer('esszimmer_klappstuhl')->default(0);
            $table->integer('esszimmer_tisch_06')->default(0);
            $table->integer('esszimmer_tisch_10')->default(0);
            $table->integer('esszimmer_tisch_b12')->default(0);
            $table->integer('esszimmer_tisch_a12')->default(0);
            $table->integer('esszimmer_teppich')->default(0);
            $table->integer('esszimmer_deckenlampe')->default(0);
            $table->integer('esszimmer_stehlampe')->default(0);
            $table->integer('esszimmer_bilder_b08')->default(0);
            $table->integer('esszimmer_bilder_a08')->default(0);
            $table->integer('esszimmer_spiegel')->default(0);
            $table->integer('esszimmer_teppich_groß')->default(0);
            $table->integer('esszimmer_pflanze')->default(0);
            $table->integer('esszimmer_bodenlampe')->default(0);
            $table->integer('esszimmer_lampe_nachttisch')->default(0);
            $table->integer('esszimmer_tischlampe')->default(0);
            $table->integer('esszimmer_truhe')->default(0);



            $table->integer('esszimmer_eckbank_je_sitz')->default(0);
            $table->integer('esszimmer_sekretär')->default(0);
            $table->integer('esszimmer_sideboard_klein')->default(0);
            $table->integer('esszimmer_sideboard_groß')->default(0);
            $table->integer('esszimmer_hausbar')->default(0);
            $table->integer('esszimmer_teewagen')->default(0);
            $table->integer('esszimmer_brücke')->default(0);
            $table->integer('esszimmer_vitrine')->default(0);
            $table->integer('esszimmer_umzugskarton_b80')->default(0);
            $table->integer('esszimmer_umzugskarton_a80')->default(0);

            $table->integer('bad_waschmaschine')->default(0);
            $table->integer('bad_wäschetrockner')->default(0);
            $table->integer('bad_wäscheständer')->default(0);
            $table->integer('bad_waeschekorb')->default(0);
            $table->integer('bad_waschbeckenunterschrank')->default(0);
            $table->integer('bad_truhe_kommode')->default(0);
            $table->integer('bad_kleiderablage')->default(0);
            $table->integer('bad_stuhl_hocker')->default(0);
            $table->integer('bad_toilettenschrank')->default(0);
            $table->integer('bad_wäschekorb')->default(0);
            $table->integer('bad_deckenlampe')->default(0);
            $table->integer('bad_spiegel')->default(0);



            $table->integer('kinderzimmer_bett_komplett')->default(0);
            $table->integer('kinderzimmer_babybett')->default(0);
            $table->integer('kinderzimmer_wickeltisch')->default(0);
            $table->integer('kinderzimmer_etagenbett_komplett')->default(0);
            $table->integer('kinderzimmer_spielzeugkiste')->default(0);
            $table->integer('kinderzimmer_schrank_klein')->default(0);
            $table->integer('kinderzimmer_schrank2')->default(0);
            $table->integer('kinderzimmer_schrank3')->default(0);
            $table->integer('kinderzimmer_hochschrank')->default(0);
            $table->integer('kinderzimmer_buecherregal')->default(0);
            $table->integer('kinderzimmer_buecherregal_mittel')->default(0);
            $table->integer('kinderzimmer_regal_mittel')->default(0);
            $table->integer('kinderzimmer_regal_klein')->default(0);
            $table->integer('kinderzimmer_billy')->default(0);
            $table->integer('kinderzimmer_stehlampe')->default(0);
            $table->integer('kinderzimmer_deckenlampe')->default(0);
            $table->integer('kinderzimmer_truhe')->default(0);

            $table->integer('kinderzimmer_schrank_zerlegbar')->default(0);
            $table->integer('kinderzimmer_bettzeug_je_betteinheit')->default(0);
            $table->integer('kinderzimmer_nachttisch')->default(0);
            $table->integer('kinderzimmer_kommode_mittel')->default(0);
            $table->integer('kinderzimmer_kommode_klein')->default(0);
            $table->integer('kinderzimmer_schreibpult')->default(0);
            $table->integer('kinderzimmer_tisch_b06')->default(0);
            $table->integer('kinderzimmer_tisch_b10')->default(0);
            $table->integer('kinderzimmer_tisch_b12')->default(0);
            $table->integer('kinderzimmer_tisch_a12')->default(0);
            $table->integer('kinderzimmer_laufgitter')->default(0);
            $table->integer('kinderzimmer_stuhl_hocker')->default(0);
            $table->integer('kinderzimmer_teppich')->default(0);
            $table->integer('kinderzimmer_brücke')->default(0);
            $table->integer('kinderzimmer_anbauwand_b38')->default(0);
            $table->integer('kinderzimmer_anbauwand_a38')->default(0);
            $table->integer('kinderzimmer_kleiderbehältnis')->default(0);
            $table->integer('kinderzimmer_umzugskarton_b80')->default(0);
            $table->integer('kinderzimmer_umzugskarton_a80')->default(0);

            $table->integer('weitere_zimmer_schreibtisch_b16')->default(0);
            $table->integer('weitere_zimmer_schreibtisch_a16')->default(0);
            $table->integer('weitere_zimmer_schreibtischcontainer')->default(0);
            $table->integer('weitere_zimmer_schreibtischstuhl')->default(0);
            $table->integer('weitere_zimmer_winkelkombination')->default(0);
            $table->integer('weitere_zimmer_bücherregal')->default(0);
            $table->integer('weitere_zimmer_aktenschrank')->default(0);
            $table->integer('weitere_zimmer_sessel_ohne_armlehnen')->default(0);
            $table->integer('weitere_zimmer_sessel_mit_armlehnen')->default(0);
            $table->integer('weitere_zimmer_tisch_b06')->default(0);
            $table->integer('weitere_zimmer_tisch_b10')->default(0);
            $table->integer('weitere_zimmer_tisch_b12')->default(0);
            $table->integer('weitere_zimmer_tisch_a12')->default(0);
            $table->integer('weitere_zimmer_computer')->default(0);
            $table->integer('weitere_zimmer_tischkopierer')->default(0);
            $table->integer('weitere_zimmer_stehlampe')->default(0);
            $table->integer('weitere_zimmer_deckenlampe')->default(0);
            $table->integer('weitere_zimmer_teppich')->default(0);
            $table->integer('weitere_zimmer_brücke')->default(0);
            $table->integer('weitere_zimmer_umzugskarton_b80')->default(0);
            $table->integer('weitere_zimmer_umzugskarton_a80')->default(0);

            $table->integer('sonstiges_fahrrad_moped')->default(0);
            $table->integer('sonstiges_motorrad')->default(0);
            $table->integer('sonstiges_dreirad_kinderrad')->default(0);
            $table->integer('sonstiges_bügelbrett')->default(0);
            $table->integer('sonstiges_staubsauger')->default(0);
            $table->integer('sonstiges_autoreifen')->default(0);
            $table->integer('sonstiges_koffer')->default(0);
            $table->integer('sonstiges_klapptisch_klappstuhl')->default(0);
            $table->integer('sonstiges_kinderwagen')->default(0);
            $table->integer('sonstiges_leiter')->default(0);
            $table->integer('sonstiges_rasenmäher_motor')->default(0);
            $table->integer('sonstiges_rasenmäher_hand')->default(0);
            $table->integer('sonstiges_schubkarre')->default(0);
            $table->integer('sonstiges_werkzeugschrank')->default(0);
            $table->integer('sonstiges_werkzeugkoffer')->default(0);
            $table->integer('sonstiges_ski')->default(0);
            $table->integer('sonstiges_schlitten')->default(0);
            $table->integer('sonstiges_blumenkübel_kasten')->default(0);
            $table->integer('sonstiges_sonnenschirm')->default(0);
            $table->integer('sonstiges_tischtennisplatte')->default(0);
            $table->integer('sonstiges_mülltonne')->default(0);
            $table->integer('sonstiges_regal')->default(0);
            $table->integer('sonstiges_gartengeräte')->default(0);
            $table->integer('sonstiges_sonnenbank')->default(0);
            $table->integer('sonstiges_gartengrill')->default(0);
            $table->integer('sonstiges_umzugskarton_b80')->default(0);
            $table->integer('sonstiges_umzugskarton_a80')->default(0);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umzugs');
    }
}
