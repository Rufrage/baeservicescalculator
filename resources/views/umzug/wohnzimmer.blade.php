@extends('layouts.app')

@section('content')

    {!! Form::model($umzug, ['method'=>'PUT', 'action' => array('UmzugController@update', $umzug->id)]) !!}

    <!-- Top Menu -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs">
                <!-- Neues li pro Zimmer. Value muss entsprechend angepasst werden. Aktuelles zimmer bekommt klasse 'active' -->
                <li class="nav-item">
                    {!! Form::button('Kundendaten', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'kundendaten']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Allgemeines', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'allgemeines']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Wohnzimmer', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'wohnzimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Küche', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'küche']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Schlafzimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'schlafzimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Esszimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'esszimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Bad', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'bad']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Kinderzimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'kinderzimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Weitere Zimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'weitere_zimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Sonstiges', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'sonstiges']) !!}
                </li>
            </ul>
        </div>
    </div>

    <br>
    <br>

    <!-- Felder für dieses Zimmer-->
    <div class="form-group row">
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sofa.svg') }}" alt="sofa" height="64px">
            {!! Form::label('wohnzimmer_sofa_3_sitze', 'Sofa, 3 Sitze') !!}
            {!! Form::number('wohnzimmer_sofa_3_sitze', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sofa_2_sitze.svg') }}" alt="sofa" height="64px">
            {!! Form::label('wohnzimmer_sofa_2_sitze', 'Sofa, 2 Sitze') !!}
            {!! Form::number('wohnzimmer_sofa_2_sitze', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sofa.svg') }}" alt="sofa" height="64px">
            {!! Form::label('wohnzimmer_sitzlandschaft', 'Sitzlandschaft (Element)') !!}
            {!! Form::number('wohnzimmer_sitzlandschaft', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/couch_schlafcouch.svg') }}" alt="couch" height="64px">
            {!! Form::label('wohnzimmer_schlafcouch', 'Couch, Schlafcouch') !!}
            {!! Form::number('wohnzimmer_schlafcouch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/ecksofa_45.svg') }}" alt="couch" height="64px">
            {!! Form::label('wohnzimmer_ecksofa45', '4,5er Ecksofa') !!}
            {!! Form::number('wohnzimmer_ecksofa45', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/ecksofa_56.svg') }}" alt="couch" height="64px">
            {!! Form::label('wohnzimmer_ecksofa56', '5,6er Ecksofa') !!}
            {!! Form::number('wohnzimmer_ecksofa56', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sessel.svg') }}" alt="sofa" height="64px">
            {!! Form::label('wohnzimmer_sessel_mit_armlehnen', 'Sessel mit Armlehnen') !!}
            {!! Form::number('wohnzimmer_sessel_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sessel.svg') }}" alt="sofa" height="64px">
            {!! Form::label('wohnzimmer_sessel_ohne_armlehnen', 'Sessel ohne Armlehnen') !!}
            {!! Form::number('wohnzimmer_sessel_ohne_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl.svg') }}" alt="sofa" height="64px">
            {!! Form::label('wohnzimmer_stuhl', 'Stuhl') !!}
            {!! Form::number('wohnzimmer_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_buerostuhl.svg') }}" alt="hocker" height="64px">
            {!! Form::label('wohnzimmer_stuhl_mit_armlehnen', 'Stuhl mit Armlehnen') !!}
            {!! Form::number('wohnzimmer_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_klappstuhl.svg') }}" alt="klappstuhl" height="64px">
            {!! Form::label('wohnzimmer_klappstuhl', 'Klappstuhl') !!}
            {!! Form::number('wohnzimmer_klappstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hocker.svg') }}" alt="hocker" height="64px">
            {!! Form::label('wohnzimmer_hocker', 'Hocker') !!}
            {!! Form::number('wohnzimmer_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_beistelltisch.svg') }}" alt="tisch_beistelltisch" height="64px">
            {!! Form::label('wohnzimmer_tisch_06', 'Tisch, Beistelltisch') !!}
            {!! Form::number('wohnzimmer_tisch_06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_nachttisch.svg') }}" alt="tisch_nachttisch" height="64px">
            {!! Form::label('wohnzimmer_tisch_10', 'Tisch, Nachttisch') !!}
            {!! Form::number('wohnzimmer_tisch_10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_esstisch_mittel.svg') }}" alt="tisch_esstisch_mittel" height="64px">
            {!! Form::label('wohnzimmer_tisch_b12', 'Tisch, Esstisch (mittel)') !!}
            {!! Form::number('wohnzimmer_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_esstisch_groß.svg') }}" alt="tisch_esstisch_groß" height="64px">
            {!! Form::label('wohnzimmer_tisch_a12', 'Tisch, Esstisch (groß)') !!}
            {!! Form::number('wohnzimmer_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/couchtisch.svg') }}" alt="couchtisch" height="64px">
            {!! Form::label('wohnzimmer_couchtisch', 'Couchtisch (medium)') !!}
            {!! Form::number('wohnzimmer_couchtisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tv_schrank_tv_bank.svg') }}" alt="tv_schrank" height="64px">
            {!! Form::label('wohnzimmer_tvschrank', 'TV-Schrank') !!}
            {!! Form::number('wohnzimmer_tvschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fernseher_flachbild_mittel.svg') }}" alt="fernseher" height="64px">
            {!! Form::label('wohnzimmer_fernseher_mittel', 'Fernseher, Flachbild (mittel)') !!}
            {!! Form::number('wohnzimmer_fernseher_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fernseher_flachbild_mittel.svg') }}" alt="fernseher" height="64px">
            {!! Form::label('wohnzimmer_fernseher_groß', 'Fernseher, Flachbild (groß)') !!}
            {!! Form::number('wohnzimmer_fernseher_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fernseher_flachbild_mittel.svg') }}" alt="fernseher" height="64px">
            {!! Form::label('wohnzimmer_fernseher_klein', 'Fernseher, Flachbild (klein)') !!}
            {!! Form::number('wohnzimmer_fernseher_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/wohnwand_klein.svg') }}" alt="Wohnwand" height="64px">
            {!! Form::label('wohnzimmer_wohnwand', 'Wohnwand (klein)') !!}
            {!! Form::number('wohnzimmer_wohnwand', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/staubsauger.svg') }}" alt="staubsauger" height="64px">
            {!! Form::label('wohnzimmer_staubsauger', 'Staubsauger') !!}
            {!! Form::number('wohnzimmer_staubsauger', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/buegelbrett.svg') }}" alt="buegelbrett" height="64px">
            {!! Form::label('wohnzimmer_buegelbrett', 'Bügelbrett') !!}
            {!! Form::number('wohnzimmer_buegelbrett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/drucker_mittel.svg') }}" alt="drucker" height="64px">
            {!! Form::label('wohnzimmer_drucker', 'Drucker (mittel)') !!}
            {!! Form::number('wohnzimmer_drucker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/computer.svg') }}" alt="Computer" height="64px">
            {!! Form::label('wohnzimmer_computer', 'Computer') !!}
            {!! Form::number('wohnzimmer_computer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/computer_bildschirm.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_computer_bildschirm', 'Computer-Bildschirm') !!}
            {!! Form::number('wohnzimmer_computer_bildschirm', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_kommode_mittel', 'Kommode (mittel)') !!}
            {!! Form::number('wohnzimmer_kommode_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_kommode_klein', 'Kommode (klein)') !!}
            {!! Form::number('wohnzimmer_kommode_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kleiderschrank_2_türen.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_kleiderschrank2', 'Kleiderschrank, 2 Türen') !!}
            {!! Form::number('wohnzimmer_kleiderschrank2', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kleiderschrank_3_türen.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_kleiderschrank3', 'Kleiderschrank, 3 Türen') !!}
            {!! Form::number('wohnzimmer_kleiderschrank3', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sideboard_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_sideboard_klein', 'Sideboard klein') !!}
            {!! Form::number('wohnzimmer_sideboard_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schuhschrank_2_klappensvg.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_schuhschrank2', 'Schuhschrank, 2 Klappen') !!}
            {!! Form::number('wohnzimmer_schuhschrank2', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_buecherregal_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_bücherregal', 'Bücherregal, klein') !!}
            {!! Form::number('wohnzimmer_bücherregal', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_buecherregal_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_bücherregal_mittel', 'Bücherregal, mittel') !!}
            {!! Form::number('wohnzimmer_bücherregal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_regal_klein', 'Regal, klein') !!}
            {!! Form::number('wohnzimmer_regal_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_regal_mittel', 'Regal, mittel') !!}
            {!! Form::number('wohnzimmer_regal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_billy.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_billy', 'Billy Regal') !!}
            {!! Form::number('wohnzimmer_billy', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_stehlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_stehlampe', 'Stehlampe') !!}
            {!! Form::number('wohnzimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_deckenlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('wohnzimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_bodenlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_bodenlampe', 'Bodenlampe') !!}
            {!! Form::number('wohnzimmer_bodenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_nachttisch.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_lampe_nachttisch', 'Lampe, Nachttisch') !!}
            {!! Form::number('wohnzimmer_lampe_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_tischlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_tischlampe', 'Tischlampe') !!}
            {!! Form::number('wohnzimmer_tischlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_standard.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_teppich', 'Teppich') !!}
            {!! Form::number('wohnzimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_teppich_groß', 'Teppich') !!}
            {!! Form::number('wohnzimmer_teppich_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bild_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_bilder_b08', 'Bilder bis 0,8 m') !!}
            {!! Form::number('wohnzimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bild_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_bilder_a08', 'Bilder über 0,8 m') !!}
            {!! Form::number('wohnzimmer_bilder_a08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/pflanze_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_pflanze', 'Pflanze (mittel)') !!}
            {!! Form::number('wohnzimmer_pflanze', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spiegel_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_spiegel', 'Spiegel (groß)') !!}
            {!! Form::number('wohnzimmer_spiegel', null, ['class'=>'form-control']) !!}
        </div>


        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('wohnzimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('wohnzimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/truhe_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_truhe', 'Truhe (klein)') !!}
            {!! Form::number('wohnzimmer_truhe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_weinkiste', 'Truhe Weinkiste') !!}
            {!! Form::number('wohnzimmer_weinkiste', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sideboard_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_sideboard_groß', 'Sideboard groß') !!}
            {!! Form::number('wohnzimmer_sideboard_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schrank_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_schrank', 'Schrank (klein)') !!}
            {!! Form::number('wohnzimmer_schrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schrank_hochschrank.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_schrank_hochschrank', 'Schrank, Hochschrank') !!}
            {!! Form::number('wohnzimmer_schrank_hochschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/vitrine_glasvitrine.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('wohnzimmer_vitrine_glasvitrine', 'Vitrine, Glasvitrine (mittel)') !!}
            {!! Form::number('wohnzimmer_vitrine_glasvitrine', null, ['class'=>'form-control']) !!}
        </div>


        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_wohnzimmerschrank', 'Wohnz.-Schrank zerlegb. je angef. m') !!}
            {!! Form::number('wohnzimmer_wohnzimmerschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_anbauwand_b38', 'Anbauwand b. 38cm Tiefe je angef. m') !!}
            {!! Form::number('wohnzimmer_anbauwand_b38', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_anbauwand_a38', 'Anbauwand ü. 38cm Tiefe je angef. m') !!}
            {!! Form::number('wohnzimmer_anbauwand_a38', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_buffet_mit_aufsatz', 'Buffet mit Aufsatz') !!}
            {!! Form::number('wohnzimmer_buffet_mit_aufsatz', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_buffet_ohne_aufsatz', 'Buffet ohne Aufsatz') !!}
            {!! Form::number('wohnzimmer_buffet_ohne_aufsatz', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_schreibtisch_b16', 'Schreibtisch bis 1,6m') !!}
            {!! Form::number('wohnzimmer_schreibtisch_b16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_schreibtisch_a16', 'Schreibtisch über 1,6m') !!}
            {!! Form::number('wohnzimmer_schreibtisch_a16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_standuhr', 'Standuhr') !!}
            {!! Form::number('wohnzimmer_standuhr', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_video_dvd_player', 'Video/DVD-Player') !!}
            {!! Form::number('wohnzimmer_video_dvd_player', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_musikschrank_turm', 'Musikschrank/Turm') !!}
            {!! Form::number('wohnzimmer_musikschrank_turm', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_stereoanlage', 'Stereoanlage') !!}
            {!! Form::number('wohnzimmer_stereoanlage', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_klavier', 'Klavier') !!}
            {!! Form::number('wohnzimmer_klavier', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_flügel', 'Flügel') !!}
            {!! Form::number('wohnzimmer_flügel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_heimorgel', 'Heimorgel') !!}
            {!! Form::number('wohnzimmer_heimorgel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_nähmaschine', 'Nähmaschine (Schrank)') !!}
            {!! Form::number('wohnzimmer_nähmaschine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_brücke', 'Brücke') !!}
            {!! Form::number('wohnzimmer_brücke', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('wohnzimmer_lüster', 'Lüster') !!}
            {!! Form::number('wohnzimmer_lüster', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'küche']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection