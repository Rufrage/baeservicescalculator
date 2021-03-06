<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        // Starte mit Wohnzimmer
        $currentroom = 'wohnzimmer';
        return view('calculator.wohnzimmer', compact('currentroom'));
    }

    public function calculate(Request $request)
    {
        //Variablen

        $newvar = $request->all();
        $kubikmeter = 0;
        $k_grundkosten = 0;
        //Kosten für große und kleine Container
        $container_klein = 1400;
        $container_groß = 2000;

        $k_volumen_m3 = 0;
        //Prozentsatz für Extra Material (10%)
        $extra_material = 0.1;
        //Kosten pro Meter Weg(10)
        $abtrageweg = 10;
        //Gesamtkosten Abtrageweg
        $k_abtrageweg = 0;
        //Kosten pro Etage
        $etage = 100;
        //Gesamtkosten Etagen
        $k_etage = 0;
        //Kosten für Außenaufzug
        $aussenaufzug = 350;
        //Gesamtkosten Außenaufzug
        $k_aussenaufzug = 0;
        //Kosten Halteverbot
        $halteverbot = 150;
        //Gesamtkosten Halteverbot
        $k_halteverbot = 0;

        //Versicherungssatz
        $versicherung = 0.025;
        //Gesamtkosten Versicherung
        $k_versicherung = 0;

        //Gesamtsumme
        $kosten = 0;
        //Array mit Recheneinheiten und key

        $recheneinheiten = array(
            "sofa_couch" =>4,
            "sitzlandschaft"=>4,
            "sessel_mit"=> 8,
            "sessel_ohne"=>4,
            "stuhl_ohne"=>2,
            "stuhl_mit"=>3,
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

        if ($newvar['volumen'] != 0){
            $kubikmeter = $newvar['volumen'];
        }
        else {


            foreach ($newvar as $key => $value) {
                if ($key == "_token" || $key == "auszugsort" || $key == "einzugsort" || $key == "distanz_text" || $key == "distanz" || $key == "volumen"
                    || $key == "etage_auszug" || $key == "etage_einzug" || $key == "size" || $key == "abtrageweg_einzug" || $key == "abtrageweg_auszug"
                    || $key == "aussenaufzug_einzug" || $key == "aussenaufzug_auszug" || $key == "halteverbot_einzug" || $key == "halteverbot_auszug"
                    || $key == "versicherung" || $key == "übersee_lokal") {
                    continue;
                } else {
                    //print($value);
                    $kubikmeter += array_sum($value) * $recheneinheiten[$key];
                }
            }
            $kubikmeter /= 10;
        }

        //Berechnung Grundkosten abhängig von Lokal oder Übersee
        if ($newvar['übersee_lokal'] == 'Ü'){
           $k_grundkosten = $this->calculate_übersee($kubikmeter, $newvar['distanz'], $container_groß, $container_klein, $extra_material);


        }
        if ($newvar['übersee_lokal'] == 'L'){
            $k_grundkosten = $this->calculate_local($kubikmeter, $newvar['distanz'], $extra_material);

        }


        //Berechnung Kosten Abtrageweg
        $k_abtrageweg = $abtrageweg * ($newvar['abtrageweg_einzug'] + $newvar['abtrageweg_auszug']);

        //Berechnung Kosten Etage
        $k_etage = $etage * ($newvar['etage_einzug'] + $newvar['etage_auszug']);

        //Berechnung Kosten Aussenaufzug
        $k_aussenaufzug = 0;
        if ($newvar['aussenaufzug_einzug'] == 'J')
            $k_aussenaufzug += $aussenaufzug;
        if ($newvar['aussenaufzug_auszug'] == 'J')
            $k_aussenaufzug += $aussenaufzug;

        //Berechnung Halteverbot
        $k_halteverbot = 0;
        if ($newvar['halteverbot_einzug'] == 'J' )
            $k_halteverbot += $halteverbot;

        if ($newvar['halteverbot_auszug'] == 'J')
            $k_halteverbot += $halteverbot;

        //Berechnung Versicherung
        $k_versicherung = $newvar['versicherung'] * $versicherung;

        //Berechnung Kosten Gesamtsumme

        $kosten = $k_grundkosten + $k_etage + $k_aussenaufzug + $k_halteverbot + $k_versicherung + $abtrageweg;


        return view('calculator.berechnung', compact('kubikmeter', 'kosten'));

    }

    public function calculate_übersee($kubikmeter_ü, $distanz_ü, $container_groß_ü, $container_klein_ü, $extra_material_ü){
        //Kosten pro Kubikmeter(120)
        $volumen_pro_m3 = 120;
         //Berechnung große Container
            $k_container_groß = floor($kubikmeter_ü/60);
            $grundkosten = 0;
        if (($kubikmeter_ü % 60) >30){
            $k_container_groß++;
        }

        //Berechnung kleine Container
        $k_container_klein = 0;
        if (($kubikmeter_ü % 60) <= 30 && ($kubikmeter_ü % 60) > 0){
            $k_container_klein = 1;
        }
        $k_container_klein = $container_klein_ü * $k_container_klein;
        $k_container_groß = $container_groß_ü * $k_container_groß;
        $grundkosten = $k_container_groß + $k_container_klein + ($volumen_pro_m3 * $kubikmeter_ü);

        //Materialprozentsatz einrechnen
        $grundkosten *= (1 + $extra_material_ü);
        return $grundkosten;



        //$kosten =  $k_abtrageweg + $k_etage + $k_aussenaufzug + $k_halteverbot + $k_volumen_m3 + $k_versicherung;

    }
    public function calculate_local($kubikmeter_l, $distanz_l, $extra_material_l){
         $grundkosten = $kubikmeter_l * $distanz_l;
        $grundkosten *= (1 + $extra_material_l);
         return $grundkosten;

    }

    public function switch(Request $request){

        return "You should not be here";

/*        switch ($request->currentroom){
            case "wohnzimmer":
                //Wohnzimmer speichern
                break;
            case "kueche":
                //Kueche speichern
                break;
        }

        switch($request->switch){
            case "wohnzimmer":
                $currentroom = $request->switch;
                return view('calculator.wohnzimmer', compact('currentroom'));
            case "kueche":
                $currentroom = $request->switch;
                return view('calculator.kueche', compact('currentroom'));
        }*/
    }
}