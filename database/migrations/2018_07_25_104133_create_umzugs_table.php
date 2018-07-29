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
            $table->integer('wohnzimmer_sofa')->default(0);
            $table->integer('wohnzimmer_sitzlandschaft')->default(0);
            $table->integer('wohnzimmer_sessel_mit_armlehnen')->default(0);
            $table->integer('wohnzimmer_sessel_ohne_armlehnen')->default(0);
            $table->integer('wohnzimmer_stuhl')->default(0);
            $table->integer('wohnzimmer_stuhl_mit_armlehnen')->default(0);
            $table->integer('wohnzimmer_tisch_06')->default(0);
            $table->integer('wohnzimmer_tisch_10')->default(0);
            $table->integer('wohnzimmer_tisch_b12')->default(0);
            $table->integer('wohnzimmer_tisch_a12')->default(0);
            $table->integer('wohnzimmer_wohnzimmerschrank')->default(0);
            $table->integer('wohnzimmer_anbauwand_b38')->default(0);
            $table->integer('wohnzimmer_anbauwand_a38')->default(0);
            $table->integer('wohnzimmer_bücherregal')->default(0);
            $table->integer('wohnzimmer_buffet_mit_aufsatz')->default(0);
            $table->integer('wohnzimmer_buffet_ohne_aufsatz')->default(0);
            $table->integer('wohnzimmer_schreibtisch_b16')->default(0);
            $table->integer('wohnzimmer_schreibtisch_a16')->default(0);
            $table->integer('wohnzimmer_standuhr')->default(0);
            $table->integer('wohnzimmer_video_dvd_player')->default(0);
            $table->integer('wohnzimmer_musikschrank_turm')->default(0);
            $table->integer('wohnzimmer_stereoanlage')->default(0);
            $table->integer('wohnzimmer_fernseher')->default(0);
            $table->integer('wohnzimmer_klavier')->default(0);
            $table->integer('wohnzimmer_flügel')->default(0);
            $table->integer('wohnzimmer_heimorgel')->default(0);
            $table->integer('wohnzimmer_nähmaschine')->default(0);
            $table->integer('wohnzimmer_stehlampe')->default(0);
            $table->integer('wohnzimmer_brücke')->default(0);
            $table->integer('wohnzimmer_deckenlampe')->default(0);
            $table->integer('wohnzimmer_lüster')->default(0);
            $table->integer('wohnzimmer_teppich')->default(0);
            $table->integer('wohnzimmer_bilder_b08')->default(0);
            $table->integer('wohnzimmer_bilder_a08')->default(0);
            $table->integer('wohnzimmer_sideboard_klein')->default(0);
            $table->integer('wohnzimmer_sideboard_groß')->default(0);
            $table->integer('wohnzimmer_tvschrank')->default(0);
            $table->integer('wohnzimmer_umzugskarton_b80')->default(0);
            $table->integer('wohnzimmer_umzugskarton_a80')->default(0);
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
