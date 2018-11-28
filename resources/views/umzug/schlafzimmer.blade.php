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
                    {!! Form::button('Wohnzimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'wohnzimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Küche', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'küche']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Schlafzimmer', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'schlafzimmer']) !!}
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
            <img src="{{ asset('images/moebel/bett_doppelbett.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('schlafzimmer_dopelbett_komplett', 'Bett, Doppelbett') !!}
            {!! Form::number('schlafzimmer_dopelbett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bett_140.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('schlafzimmer_einzelbett_komplett', 'Bett 1,40m') !!}
            {!! Form::number('schlafzimmer_einzelbett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/matratze140.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('schlafzimmer_matratze140', 'Matratze, 1.40m') !!}
            {!! Form::number('schlafzimmer_matratze140', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/matraze090.svg') }}" alt="matratze" height="64px">
            {!! Form::label('schlafzimmer_matratze090', 'Matratze 0.90m') !!}
            {!! Form::number('schlafzimmer_matratze090', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lattenrost090.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('schlafzimmer_lattenrost', 'Lattenrost 0.90m') !!}
            {!! Form::number('schlafzimmer_lattenrost', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl.svg') }}" alt="sofa" height="64px">
            {!! Form::label('schlafzimmer_stuhl', 'Stuhl') !!}
            {!! Form::number('schlafzimmer_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_buerostuhl.svg') }}" alt="hocker" height="64px">
            {!! Form::label('schlafzimmer_stuhl_mit_armlehnen', 'Stuhl, Bürostuhl') !!}
            {!! Form::number('schlafzimmer_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_klappstuhl.svg') }}" alt="klappstuhl" height="64px">
            {!! Form::label('schlafzimmer_klappstuhl', 'Stuhl, Klappstuhl') !!}
            {!! Form::number('schlafzimmer_klappstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hocker.svg') }}" alt="hocker" height="64px">
            {!! Form::label('schlafzimmer_hocker', 'Hocker') !!}
            {!! Form::number('schlafzimmer_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_beistelltisch.svg') }}" alt="tisch_beistelltisch" height="64px">
            {!! Form::label('schlafzimmer_tisch_06', 'Tisch, Beistelltisch') !!}
            {!! Form::number('schlafzimmer_tisch_06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_nachttisch.svg') }}" alt="tisch_nachttisch" height="64px">
            {!! Form::label('schlafzimmer_tisch_10', 'Tisch, Nachttisch') !!}
            {!! Form::number('schlafzimmer_tisch_10', null, ['class'=>'form-control']) !!}
        </div>



        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/couchtisch.svg') }}" alt="couchtisch" height="64px">
            {!! Form::label('schlafzimmer_couchtisch', 'Couchtisch (medium)') !!}
            {!! Form::number('schlafzimmer_couchtisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tv_schrank_tv_bank.svg') }}" alt="tv_schrank" height="64px">
            {!! Form::label('schlafzimmer_tvschrank', 'TV-Schrank/TV Bank') !!}
            {!! Form::number('schlafzimmer_tvschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fernseher_flachbild_mittel.svg') }}" alt="fernseher" height="64px">
            {!! Form::label('schlafzimmer_fernseher_mittel', 'Fernseher, Flachbild (mittel)') !!}
            {!! Form::number('schlafzimmer_fernseher_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fernseher_flachbild_mittel.svg') }}" alt="fernseher" height="64px">
            {!! Form::label('schlafzimmer_fernseher_groß', 'Fernseher, Flachbild (groß)') !!}
            {!! Form::number('schlafzimmer_fernseher_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fernseher_flachbild_mittel.svg') }}" alt="fernseher" height="64px">
            {!! Form::label('schlafzimmer_fernseher_klein', 'Fernseher, Flachbild (klein)') !!}
            {!! Form::number('schlafzimmer_fernseher_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/wohnwand_klein.svg') }}" alt="Wohnwand" height="64px">
            {!! Form::label('schlafzimmer_wohnwand', 'Wohnwand (klein)') !!}
            {!! Form::number('schlafzimmer_wohnwand', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_buecherregal_klein.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_bücherregal', 'Bücherregal, klein') !!}
            {!! Form::number('schlafzimmer_bücherregal', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_buecherregal_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_bücherregal_mittel', 'Bücherregal, mittel') !!}
            {!! Form::number('schlafzimmer_bücherregal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_klein.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_regal_klein', 'Regal (klein)') !!}
            {!! Form::number('schlafzimmer_regal_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_regal_mittel', 'Regal (mittel)') !!}
            {!! Form::number('schlafzimmer_regal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_billy.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_billy', 'Billy Regal') !!}
            {!! Form::number('schlafzimmer_billy', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_stehlampe.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_stehlampe', 'Lampe, Stehlampe') !!}
            {!! Form::number('schlafzimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_deckenlampe.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_deckenlampe', 'Lampe, Deckenlampe') !!}
            {!! Form::number('schlafzimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_bodenlampe.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_bodenlampe', 'Lampe, Bodenlampe') !!}
            {!! Form::number('schlafzimmer_bodenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_nachttisch.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_lampe_nachttisch', 'Lampe, Nachttisch') !!}
            {!! Form::number('schlafzimmer_lampe_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_tischlampe.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_tischlampe', 'Lampe, Tischlampe') !!}
            {!! Form::number('schlafzimmer_tischlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_standard.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_teppich', 'Teppich (Standard)') !!}
            {!! Form::number('schlafzimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_groß.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_teppich_groß', 'Teppich (groß)') !!}
            {!! Form::number('schlafzimmer_teppich_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bild_groß.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_bilder_b08', 'Bild (groß)') !!}
            {!! Form::number('schlafzimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/pflanze_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_pflanze', 'Pflanze (mittel)') !!}
            {!! Form::number('schlafzimmer_pflanze', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spiegel_groß.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_spiegel', 'Spiegel (groß)') !!}
            {!! Form::number('schlafzimmer_spiegel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/truhe_klein.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_truhe', 'Truhe (klein)') !!}
            {!! Form::number('schlafzimmer_truhe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_umzugskarton_b80_gepackt', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('schlafzimmer_umzugskarton_b80_gepackt', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_umzugskarton_a80_gepackt', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('schlafzimmer_umzugskarton_a80_gepackt', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_umzugskarton_b80', 'Umzugskarton bis 80 l') !!}
            {!! Form::number('schlafzimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('schlafzimmer_umzugskarton_a80', 'Umzugskarton über 80 l') !!}
            {!! Form::number('schlafzimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'esszimmer']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection