<?php

namespace App\Http\Controllers;

use App\Umzug;
use Illuminate\Http\Request;

class UmzugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umzuege = Umzug::all();
        return view('umzug.index', compact('umzuege'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('umzug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $umzug = new Umzug($request->all());
        $umzug->save();
        return redirect(route('umzug.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function show(Umzug $umzug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function edit(Umzug $umzug)
    {
        return view('umzug.kundendaten', compact('umzug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Umzug $umzug)
    {
        $umzug->update($request->all());
        $umzug_array = $umzug->toArray();

        switch($request->switch){
            case "kundendaten":
                return view('umzug.kundendaten', compact('umzug'));
            case "allgemeines":
                return view('umzug.allgemeines', compact('umzug'));
            case "wohnzimmer":
                return view('umzug.wohnzimmer', compact('umzug'));
            case "küche":
                return view('umzug.küche', compact('umzug'));
            case "schlafzimmer":
                return view('umzug.schlafzimmer', compact('umzug'));
            case "esszimmer":
                return view('umzug.esszimmer', compact('umzug'));
            case "bad":
                return view('umzug.bad', compact('umzug'));
            case "kinderzimmer":
                return view('umzug.kinderzimmer', compact('umzug'));
            case "weitere_zimmer":
                return view('umzug.weitere_zimmer', compact('umzug'));
            case "sonstiges":
                return view('umzug.sonstiges', compact('umzug'));
            case "calculate":
                $ergebnis = $this->calculate($umzug);
                return view('umzug.ergebnis', compact('ergebnis', 'umzug', 'umzug_array'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umzug $umzug)
    {
        //
    }

    public function calculate(Umzug $umzug)
    {
        //Variablen

        $umzug_array = $umzug->toArray();

        $kubikmeter = 0;
        $k_grundkosten = 0;
        //Kosten für große und kleine Container
        $container_klein = 1400;
        $container_groß = 2000;


        //Kosten pro Kubikmeter Volumen
        $k_volumen_m3 = 120;
        //Kosten pro Kilometer Distanz
        $k_distanz_km = 1;
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

        //Versicherungssatz Lokal (0,05% --> * 0,0005)
        $versicherung_l = 0.025;
        //Versicherungssatz Übersee (2,5% --> * 0,025)
        $versicherung_ü = 0.025;
        //Gesamtkosten Versicherung
        $k_versicherung = 0;

        //Gesamtsumme
        $kosten = 0;
        //Array mit Recheneinheiten und key

        $recheneinheiten = array(
            //Felder Bad
            "bad_truhe_kommode"=>7,
            "bad_kleiderablage"=>2,
            "bad_stuhl_hocker"=>2,
             "bad_toilettenschrank"=>2,
             "bad_wäschekorb"=>2,
             "bad_deckenlampe"=>2,

             //Felder Esszimmer
            "esszimmer_stuhl"=>2,
            "esszimmer_stuhl_mit_armlehnen"=>3,
            "esszimmer_eckbank_je_sitz"=>2,
            "esszimmer_tisch_b06"=>4,
            "esszimmer_tisch_b10"=>5,
            "esszimmer_tisch_b12"=>6,
            "esszimmer_tisch_a12"=>8,
            "esszimmer_sekretär"=>12,
            "esszimmer_sideboard_klein"=>6,
            "esszimmer_sideboard_groß"=>12,
            "esszimmer_hausbar"=>5,
            "esszimmer_teewagen"=>4,
            "esszimmer_teppich"=>3,
            "esszimmer_brücke"=>1,
            "esszimmer_deckenlampe"=>2,
            "esszimmer_stehlampe"=>2,
            "esszimmer_vitrine"=>10,
            "esszimmer_bilder_b08"=>1,
            "esszimmer_bilder_a08"=>2,
            "esszimmer_umzugskarton_b80"=>1,
            "esszimmer_umzugskarton_a80"=>2,

            //Felder Wohnzimmer
             "wohnzimmer_sofa"=>4,
             "wohnzimmer_sitzlandschaft"=>4,
             "wohnzimmer_sessel_mit_armlehnen"=>8,
             "wohnzimmer_sessel_ohne_armlehnen"=>4,
             "wohnzimmer_stuhl"=>2,
             "wohnzimmer_stuhl_mit_armlehnen"=>3,
             "wohnzimmer_tisch_06"=>4,
             "wohnzimmer_tisch_10"=>5,
             "wohnzimmer_tisch_b12"=>6,
             "wohnzimmer_tisch_a12"=>8,
             "wohnzimmer_wohnzimmerschrank"=>8,
             "wohnzimmer_anbauwand_b38"=>8,
             "wohnzimmer_anbauwand_a38"=>10,
             "wohnzimmer_bücherregal"=>4,
             "wohnzimmer_buffet_mit_aufsatz"=>18,
             "wohnzimmer_buffet_ohne_aufsatz"=>15,
             "wohnzimmer_schreibtisch_b16"=>12,
             "wohnzimmer_schreibtisch_a16"=>17,
             "wohnzimmer_standuhr"=>4,
             "wohnzimmer_video_dvd_player"=>1,
             "wohnzimmer_musikschrank_turm"=>4,
             "wohnzimmer_stereoanlage"=>4,
             "wohnzimmer_fernseher"=>3,
             "wohnzimmer_klavier"=>15,
             "wohnzimmer_flügel"=>20,
             "wohnzimmer_heimorgel"=>10,
             "wohnzimmer_nähmaschine"=>4,
             "wohnzimmer_stehlampe"=>2,
             "wohnzimmer_brücke"=>1,
             "wohnzimmer_deckenlampe"=>2,
             "wohnzimmer_lüster"=>5,
             "wohnzimmer_teppich"=>3,
             "wohnzimmer_bilder_b08"=>1,
             "wohnzimmer_bilder_a08"=>2,
             "wohnzimmer_sideboard_klein"=>6,
             "wohnzimmer_sideboard_groß"=>12,
             "wohnzimmer_tvschrank"=>4,
             "wohnzimmer_umzugskarton_b80"=>1,
             "wohnzimmer_umzugskarton_a80"=>2,

            //Felder Kinderzimmer
            "kinderzimmer_schrank_bis_zwei_türen"=>15,
            "kinderzimmer_schrank_zerlegbar"=>8,
            "kinderzimmer_bett_komplett"=>10,
            "kinderzimmer_kinderbett_komplett"=>5,
            "kinderzimmer_etagenbett_komplett"=>16,
            "kinderzimmer_bettzeug_je_betteinheit"=>3,
            "kinderzimmer_nachttisch"=>2,
            "kinderzimmer_kommode"=>7,
            "kinderzimmer_schreibpult"=>7,
            "kinderzimmer_spielzeugkiste"=>4,
            "kinderzimmer_tisch_b06"=>4,
            "kinderzimmer_tisch_b10"=>5,
            "kinderzimmer_tisch_b12"=>6,
            "kinderzimmer_tisch_a12"=>8,
            "kinderzimmer_laufgitter"=>1,
            "kinderzimmer_stuhl_hocker"=>2,
            "kinderzimmer_teppich"=>3,
            "kinderzimmer_brücke"=>1,
            "kinderzimmer_anbauwand_b38"=>8,
            "kinderzimmer_anbauwand_a38"=>10,
            "kinderzimmer_deckenlampe"=>2,
            "kinderzimmer_kleiderbehältnis"=>6,
            "kinderzimmer_umzugskarton_b80"=>1,
            "kinderzimmer_umzugskarton_a80"=>2,

            //Weitere Zimmer
            "weitere_zimmer_schreibtisch_b16"=>8,
            "weitere_zimmer_schreibtisch_a16"=>12,
            "weitere_zimmer_schreibtischcontainer"=>3,
            "weitere_zimmer_schreibtischstuhl"=>3,
            "weitere_zimmer_winkelkombination"=>12,
            "weitere_zimmer_bücherregal"=>4,
            "weitere_zimmer_aktenschrank"=>8,
            "weitere_zimmer_sessel_ohne_armlehnen"=>4,
            "weitere_zimmer_sessel_mit_armlehnen"=>8,
            "weitere_zimmer_tisch_b06"=>4,
            "weitere_zimmer_tisch_b10"=>5,
            "weitere_zimmer_tisch_b12"=>6,
            "weitere_zimmer_tisch_a12"=>8,
            "weitere_zimmer_computer"=>5,
            "weitere_zimmer_tischkopierer"=>5,
            "weitere_zimmer_stehlampe"=>2,
            "weitere_zimmer_deckenlampe"=>2,
            "weitere_zimmer_teppich"=>3,
            "weitere_zimmer_brücke"=>1,
            "weitere_zimmer_umzugskarton_b80"=>1,
            "weitere_zimmer_umzugskarton_a80"=>2,

            //Schlafzimmer
            "schlafzimmer_schrank_bis_zwei_türen"=>15,
            "schlafzimmer_schrank_zerlegbar"=>8,
            "schlafzimmer_dopelbett_komplett"=>20,
            "schlafzimmer_einzelbett_komplett"=>10,
            "schlafzimmer_französisches_bett_komplett"=>15,
            "schlafzimmer_bettzeug_je_betteinheit"=>3,
            "schlafzimmer_nachttisch"=>2,
            "schlafzimmer_bettumbau"=>3,
            "schlafzimmer_kommode"=>7,
            "schlafzimmer_frisierkommode"=>6,
            "schlafzimmer_wäschetruhe"=>3,
            "schlafzimmer_stuhl_hocker"=>2,
            "schlafzimmer_spiegel_a_08"=>1,
            "schlafzimmer_deckenlampe"=>2,
            "schlafzimmer_fernseher"=>3,
            "schlafzimmer_teppich"=>3,
            "schlafzimmer_bilder_b08"=>1,
            "schlafzimmer_bilder_a08"=>2,
            "schlafzimmer_tv_schrank"=>4,
            "schlafzimmer_kleiderbehältnis"=>6,
            "schlafzimmer_umzugskarton_b80"=>1,
            "schlafzimmer_umzugskarton_a80"=>2,
            "schlafzimmer_umzugskarton_b80_gepackt"=>1,
            "schlafzimmer_umzugskarton_a80_gepackt"=>2,

            //Felder Küche
            "küche_buffet_mit_aufsätzen"=>18,
            "küche_unterteil_je_tür"=>4,
            "küche_oberteil_je_tür"=>4,
            "küche_tisch_b_06"=>4,
            "küche_tisch_b_10"=>5,
            "küche_tisch_b_12"=>6,
            "küche_tisch_a_12"=>8,
            "küche_stuhl"=>2,
            "küche_eckbank_je_sitz"=>2,
            "küche_besenschrank"=>6,
            "küche_herd"=>5,
            "küche_geschirrspülmaschine"=>5,
            "küche_waschmaschine_trockner"=>5,
            "küche_kühlschrank_truhe_b_120"=>5,
            "küche_kühlschrank_truhe_a_120"=>10,
            "küche_arbeitsplatte_nicht_unterb"=>1,
            "küche_deckenlampe"=>2,
            "küche_teppich"=>3,
            "küche_mikrowelle"=>2,
            "küche_umzugskarton_b_80"=>1,
            "küche_umzugskarton_a_80"=>2,

            //Felder Sonstiges
            "sonstiges_fahrrad_moped"=>5,
            "sonstiges_motorrad"=>8,
            "sonstiges_dreirad_kinderrad"=>2,
            "sonstiges_bügelbrett"=>1,
            "sonstiges_staubsauger"=>1,
            "sonstiges_autoreifen"=>1,
            "sonstiges_koffer"=>1,
            "sonstiges_klapptisch_klappstuhl"=>2,
            "sonstiges_kinderwagen"=>5,
            "sonstiges_leiter"=>1,
            "sonstiges_rasenmäher_motor"=>5,
            "sonstiges_rasenmäher_hand"=>2,
            "sonstiges_schubkarre"=>4,
            "sonstiges_werkzeugschrank"=>2,
            "sonstiges_werkzeugkoffer"=>1,
            "sonstiges_ski"=>2,
            "sonstiges_schlitten"=>2,
            "sonstiges_blumenkübel_kasten"=>1,
            "sonstiges_sonnenschirm"=>2,
            "sonstiges_tischtennisplatte"=>3,
            "sonstiges_mülltonne"=>2,
            "sonstiges_regal"=>4,
            "sonstiges_gartengeräte"=>2,
            "sonstiges_sonnenbank"=>10,
            "sonstiges_gartengrill"=>4,
            "sonstiges_umzugskarton_b80"=>1,
            "sonstiges_umzugskarton_a80"=>2

        );

        if ($umzug_array['volumen'] != 0){
            $kubikmeter = $umzug_array['volumen'];
        }
        else {


            foreach ($umzug_array as $key => $value) {
                if ($key == "id" || $key == "created_at" || $key == "updated_at" || $key =="vorname" || $key == "nachname" || $key == "auszugsort" ||
                    $key == "einzugsort" || $key == "etage_auszug" || $key == "etage_einzug" || $key == "aussenaufzug_einzug" || $key == "aussenaufzug_auszug" ||
                    $key == "halteverbot_einzug" || $key == "halteverbot_auszug" || $key == "abtrageweg_einzug" || $key == "abtrageweg_auszug" || $key == "volumen" ||
                    $key == "distanz_text" || $key == "versicherung" || $key == "übersee_lokal" || $key == "distanz" || $key == "montage" || $key == "übersee_verpackung" ||
                    $key == "gestellung_container" || $key == "materialgestellung" || $key == "steuerbefreiung") {
                    continue;
                } else {
                    //print($value);
                    $kubikmeter += $value * $recheneinheiten[$key];

                }
            }
            $kubikmeter /= 10;
        }
        $kundenname_v = $umzug_array['vorname'];
        $kundenname_n = $umzug_array['nachname'];

        var_dump($umzug_array['übersee_lokal']);
        //Berechnung Grundkosten abhängig von Lokal oder Übersee
        if ($umzug_array['übersee_lokal'] == 'Ü'){
            $k_grundkosten = $this->calculate_übersee($kubikmeter, $umzug_array['distanz'], $container_groß, $container_klein, $extra_material);
            var_dump('Übersee ausgewählt');
        }
        if ($umzug_array['übersee_lokal'] == 'L'){
            $k_grundkosten = $this->calculate_local($kubikmeter, $umzug_array['distanz'], $extra_material, $k_volumen_m3, $k_distanz_km);
            var_dump('Lokal ausgewählt');
        }
        var_dump('SAFER ausgewählt');


        //Berechnung Kosten Abtrageweg
        $k_abtrageweg = $abtrageweg * ($umzug_array['abtrageweg_einzug'] + $umzug_array['abtrageweg_auszug']);

        //Berechnung Kosten Etage
        $k_etage = $etage * ($umzug_array['etage_einzug'] + $umzug_array['etage_auszug']);

        //Berechnung Kosten Aussenaufzug
        $k_aussenaufzug = 0;
        if ($umzug_array['aussenaufzug_einzug'] == 'J')
            $k_aussenaufzug += $aussenaufzug;
        if ($umzug_array['aussenaufzug_auszug'] == 'J')
            $k_aussenaufzug += $aussenaufzug;

        //Berechnung Halteverbot
        $k_halteverbot = 0;
        if ($umzug_array['halteverbot_einzug'] == 'J' )
            $k_halteverbot += $halteverbot;

        if ($umzug_array['halteverbot_auszug'] == 'J')
            $k_halteverbot += $halteverbot;

        //Berechnung Versicherung
        if ($umzug_array['übersee_lokal'] == 'Ü'){
            $k_versicherung = $umzug_array['versicherung'] * $versicherung_ü;
        }
        if ($umzug_array['übersee_lokal'] == 'L'){
            $k_versicherung = $umzug_array['versicherung'] * $versicherung_l;
        }

        //Berechnung Kosten Gesamtsumme

        $kosten = $k_grundkosten + $k_etage + $k_aussenaufzug + $k_halteverbot + $k_versicherung + $k_abtrageweg;
        $bruttokosten = $kosten * 1.19;
        $array = [$kosten, $kubikmeter, $kundenname_v . " " . $kundenname_n, $bruttokosten];
        //var_dump($k_grundkosten, $k_etage, $k_aussenaufzug, $k_halteverbot, $k_versicherung, $k_abtrageweg, $newvar['versicherung']);
        return $array;



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
        $extra_material = ($volumen_pro_m3 * $kubikmeter_ü) * $extra_material_ü;
        $grundkosten += $extra_material;
        return $grundkosten;



        //$kosten =  $k_abtrageweg + $k_etage + $k_aussenaufzug + $k_halteverbot + $k_volumen_m3 + $k_versicherung;

    }
    public function calculate_local($kubikmeter_l, $distanz_l, $extra_material_l, $k_volumen_m3, $k_distanz_km){
        $grundkosten = ($kubikmeter_l * $k_volumen_m3);
        $grundkosten *= (1 + $extra_material_l);
        $grundkosten += ($distanz_l/1000 * $k_distanz_km);

        return $grundkosten;

    }

}
