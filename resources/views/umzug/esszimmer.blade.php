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
                    {!! Form::button('Esszimmer', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'esszimmer']) !!}
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
            <img src="{{ asset('images/moebel/stuhl.svg') }}" alt="sofa" height="64px">
            {!! Form::label('esszimmer_stuhl', 'Stuhl') !!}
            {!! Form::number('esszimmer_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_buerostuhl.svg') }}" alt="hocker" height="64px">
            {!! Form::label('esszimmer_stuhl_mit_armlehnen', 'Stuhl, Bürostuhl') !!}
            {!! Form::number('esszimmer_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_klappstuhl.svg') }}" alt="klappstuhl" height="64px">
            {!! Form::label('esszimmer_klappstuhl', 'Stuhl, Klappstuhl') !!}
            {!! Form::number('esszimmer_klappstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hocker.svg') }}" alt="hocker" height="64px">
            {!! Form::label('esszimmer_hocker', 'Hocker') !!}
            {!! Form::number('esszimmer_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_beistelltisch.svg') }}" alt="tisch_beistelltisch" height="64px">
            {!! Form::label('esszimmer_tisch_06', 'Tisch, Beistelltisch') !!}
            {!! Form::number('esszimmer_tisch_06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_nachttisch.svg') }}" alt="tisch_nachttisch" height="64px">
            {!! Form::label('esszimmer_tisch_10', 'Tisch, Nachttisch') !!}
            {!! Form::number('esszimmer_tisch_10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_esstisch_mittel.svg') }}" alt="tisch_esstisch_mittel" height="64px">
            {!! Form::label('esszimmer_tisch_b12', 'Tisch, Esstisch (mittel)') !!}
            {!! Form::number('esszimmer_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_esstisch_groß.svg') }}" alt="tisch_esstisch_groß" height="64px">
            {!! Form::label('esszimmer_tisch_a12', 'Tisch, Esstisch (groß)') !!}
            {!! Form::number('esszimmer_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_standard.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_teppich', 'Teppich (Standard)') !!}
            {!! Form::number('esszimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/teppich_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_teppich_groß', 'Teppich (groß)') !!}
            {!! Form::number('esszimmer_teppich_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bild_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_bilder_b08', 'Bild (groß)') !!}
            {!! Form::number('esszimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/pflanze_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_pflanze', 'Pflanze (mittel)') !!}
            {!! Form::number('esszimmer_pflanze', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spiegel_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_spiegel', 'Spiegel (groß)') !!}
            {!! Form::number('esszimmer_spiegel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_stehlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_stehlampe', 'Lampe, Stehlampe') !!}
            {!! Form::number('esszimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_deckenlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_deckenlampe', 'Lampe, Deckenlampe') !!}
            {!! Form::number('esszimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_bodenlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_bodenlampe', 'Lampe, Bodenlampe') !!}
            {!! Form::number('esszimmer_bodenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_nachttisch.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_lampe_nachttisch', 'Lampe, Nachttisch') !!}
            {!! Form::number('esszimmer_lampe_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_tischlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_tischlampe', 'Lampe, Tischlampe') !!}
            {!! Form::number('esszimmer_tischlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/truhe_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('esszimmer_truhe', 'Truhe (klein)') !!}
            {!! Form::number('esszimmer_truhe', null, ['class'=>'form-control']) !!}
        </div>





        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('esszimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('esszimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('esszimmer_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('esszimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'bad']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection