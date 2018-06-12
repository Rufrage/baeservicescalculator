<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator.index');
    }

    public function calculate(Request $request)
    {
        //Array mit Recheneinheiten und key
        //Mehrfach: schrank_zerlegbar, deckenlampe, fernseher, teppich, bilder, umzugskarton

        $recheneinheiten = array(
            "sofa_couch" =>4,
            "sitzlandschaft"=>4,
            "sessel_mit"=> 8,
                "sessel_ohne"=>4,
            "stuhl_ohne"=>2,
           " stuhl_mit"=>3,
            "tisch_b06"=>4,
            "tisch_b10"=>5,
            "tisch_b12"=>6,
            "tisch_a12"=>8,
            "schrank_zerlegbar"=>8,
            "anbauwand_b38"=>8,
            "anbauwand_a38"=>10,
            "regal_zerlegbar"=>4,
            "buffet_mit"=>18,
            "buffet_ohne"=>15,
            "schreibtisch_b16"=>12,
            "schreibtisch_a16"=>17,
            "standuhr"=>4,
            "video_dvd_player"=>1,
            "musikschrank_turm"=>4,
            "stereoanlage"=>4,
            "fernseher"=>3,
            "klavier"=>15,
            "flügel"=>20,
            "heimorgel"=>10,
            "nähmaschine"=>4,
            "stehlampe"=>2,
            "brücke"=>1,
            "deckenlampe"=>2,
            "lüster"=>5,
            "teppich"=>3,
            "bilder_b08"=>1,
            "bilder_a08"=>2,
            "sideboard_klein"=>6,
            "sideboard_groß"=>12,
            "tv_schrank"=>4,
            "umzugskarton_b80"=>1,
            "umzugskarton_a80"=>2,
            "schrank_bis_2_türen"=>15,
            "doppelbett"=>20,
            "einzelbett"=>10,
            "bett_französisch"=>15,
            "bettzeug"=>3,
            "nachttisch"=>2,
            "bettumbau"=>3,
            "kommode"=>7,
            "frisierkommode"=>6,
            "wäschetruhe"=>3,
            "stuhl_hocker"=>2,
            "spiegel_a08"=>1,
            "kleiderbehältnis"=>6,
            "umzugskarton_b80_gepackt"=>1,
            "umzugskarton_a80_gepackt"=>2,
            "eckbank"=>2,
            "sekretär"=>12,
            "hausbar"=>5,
            "teewagen"=>4,
            "vitrine"=>10,
            "unterteil_tür"=>4,
            "oberteil_tür"=>4,
            "besenschrank"=>6,
            "herd"=>5,
            "geschirrspülmaschine"=>5,
            "waschmaschine_trockner"=>5,
            "kühlschrank_truhe_b120"=>5,
            "kühlschrank_truhe_a120"=>10,
            "arbeitsplatte"=>1,
            "mikrowelle"=>2,
            "truhe_kommode"=>7,
            "kleiderablage"=>2,
            "toilettenschrank"=>2,
            "wäschekorb"=>2,
            "kinderbett_komplett"=>5,
            "etagenbett_komplett"=>16,
            "schreibpult"=>7,
            "spielzeugkiste"=>4,
            "laufgitter"=>1,
            "fahrrad_moped"=>5,
            "motorrad"=>8,
            "dreirad_kinderrad"=>2,
            "bügelbrett"=>1,
            "staubsauger"=>1,
            "autoreifen"=>1,
            "koffer"=>1,
            "klapptisch_klappstuhl"=>2,
            "kinderwagen"=>5,
            "leiter"=>1,
            "rasenmäher_motor"=>5,
            "rasenmäher_hand"=>2,
            "schubkarre"=>4,
            "werkzeugschrank"=>2,
            "werkzeugkoffer"=>1,
            "ski"=>2,
            "schlitten"=>2,
            "blumenkübel_kasten"=>1,
            "sonnenschirm"=>2,
            "tischtennisplatte"=>3,
            "mülltonne"=>2,
            "gartengeräte"=>2,
            "sonnenbank"=>10,
            "gartengrill"=>4,
            "schreibtischcontainer"=>3,
            "schreibtischstuhl"=>3,
            "winkelkombination"=>12,
            "aktenschrank"=>8,
            "computer"=>5,
            "tischkopierer"=>5,
        );



        $newvar = $request->all();
        $kubikmeter = 0;
        foreach ($newvar as $key=>$value) {
            if ($key == "_token" ||$key == "auszugsort" || $key == "einzugsort" || $key == "distanz_text" || $key == "distanz" || $key == "volumen"){
                continue;
            }
            else{
                //print($value);
            $kubikmeter += array_sum($value)* $recheneinheiten[$key];
            }
        }
        return $kubikmeter;


    }
}