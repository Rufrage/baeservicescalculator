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
                    {!! Form::button('Weitere Zimmer', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'weitere_zimmer']) !!}
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
            <img src="{{ asset('images/moebel/schreibtisch.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_tisch_b06', 'Tisch, Schreibtisch (klein)') !!}
            {!! Form::number('weitere_zimmer_tisch_b06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schreibtisch.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_schreibtisch_b16', 'Tisch, Schreibtisch (mittel)') !!}
            {!! Form::number('weitere_zimmer_schreibtisch_b16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schreibtisch.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_schreibtisch_a16', 'Tisch, Schreibtisch (groß)') !!}
            {!! Form::number('weitere_zimmer_schreibtisch_a16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sekretär.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_sekretär', 'Sekretär') !!}
            {!! Form::number('weitere_zimmer_sekretär', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schreibtisch.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_eckschreibtisch', 'Tisch, Schreibtisch (groß)') !!}
            {!! Form::number('weitere_zimmer_eckschreibtisch', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl.svg') }}" alt="sofa" height="64px">
            {!! Form::label('weitere_zimmer_stuhl', 'Stuhl') !!}
            {!! Form::number('weitere_zimmer_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_buerostuhl.svg') }}" alt="hocker" height="64px">
            {!! Form::label('weitere_zimmer_stuhl_mit_armlehnen', 'Stuhl, Bürostuhl') !!}
            {!! Form::number('weitere_zimmer_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_klappstuhl.svg') }}" alt="klappstuhl" height="64px">
            {!! Form::label('weitere_zimmer_klappstuhl', 'Stuhl, Klappstuhl') !!}
            {!! Form::number('weitere_zimmer_klappstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hocker.svg') }}" alt="hocker" height="64px">
            {!! Form::label('weitere_zimmer_hocker', 'Hocker') !!}
            {!! Form::number('weitere_zimmer_hocker', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_stehlampe.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_stehlampe', 'Lampe, Stehlampe') !!}
            {!! Form::number('weitere_zimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_deckenlampe.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_deckenlampe', 'Lampe, Deckenlampe') !!}
            {!! Form::number('weitere_zimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_bodenlampe.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_bodenlampe', 'Lampe, Bodenlampe') !!}
            {!! Form::number('weitere_zimmer_bodenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_nachttisch.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_lampe_nachttisch', 'Lampe, Nachttisch') !!}
            {!! Form::number('weitere_zimmer_lampe_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_tischlampe.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_tischlampe', 'Lampe, Tischlampe') !!}
            {!! Form::number('weitere_zimmer_tischlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_standard.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_teppich', 'Teppich (Standard)') !!}
            {!! Form::number('weitere_zimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_groß.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_teppich_groß', 'Teppich (groß)') !!}
            {!! Form::number('weitere_zimmer_teppich_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bild_groß.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_bilder_b08', 'Bild (groß)') !!}
            {!! Form::number('weitere_zimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/pflanze_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_pflanze', 'Pflanze (mittel)') !!}
            {!! Form::number('weitere_zimmer_pflanze', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spiegel_groß.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_spiegel', 'Spiegel (groß)') !!}
            {!! Form::number('weitere_zimmer_spiegel', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_klein.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_regal_klein', 'Regal (klein)') !!}
            {!! Form::number('weitere_zimmer_regal_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_regal_mittel', 'Regal (mittel)') !!}
            {!! Form::number('weitere_zimmer_regal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_billy.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_billy', 'Billy Regal') !!}
            {!! Form::number('weitere_zimmer_billy', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/staubsauger.svg') }}" alt="staubsauger" height="64px">
            {!! Form::label('weitere_zimmer_staubsauger', 'Staubsauger') !!}
            {!! Form::number('wohnzimmer_staubsauger', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/buegelbrett.svg') }}" alt="buegelbrett" height="64px">
            {!! Form::label('weitere_zimmer_buegelbrett', 'Bügelbrett') !!}
            {!! Form::number('weitere_zimmer_buegelbrett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/drucker_mittel.svg') }}" alt="drucker" height="64px">
            {!! Form::label('weitere_zimmer_drucker', 'Drucker (mittel)') !!}
            {!! Form::number('weitere_zimmer_drucker', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('weitere_zimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('weitere_zimmer_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('weitere_zimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'sonstiges']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection