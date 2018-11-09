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
                    {!! Form::button('Kinderzimmer', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'kinderzimmer']) !!}
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
            <img src="{{ asset('images/moebel/babybed.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_bett_komplett', 'Bett, Kinderbett') !!}
            {!! Form::number('kinderzimmer_bett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/babybed.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_babybett', 'Bett, Babybett') !!}
            {!! Form::number('kinderzimmer_babybett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/wickeltisch.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_wickeltisch', 'Bett, Babybett') !!}
            {!! Form::number('kinderzimmer_wickeltisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bett_140.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_etagenbett_komplett', 'Etagenbett komplett') !!}
            {!! Form::number('kinderzimmer_etagenbett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_mittel.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_kommode_mittel', 'Kommode (mittel)') !!}
            {!! Form::number('kinderzimmer_kommode_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_kommode_klein', 'Kommode (klein)') !!}
            {!! Form::number('kinderzimmer_kommode_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spielzeugkiste.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_spielzeugkiste', 'Spielzeugkiste') !!}
            {!! Form::number('kinderzimmer_spielzeugkiste', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hochstuhl.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('kinderzimmer_stuhl_hocker', 'Hochstuhl') !!}
            {!! Form::number('kinderzimmer_stuhl_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('kinderzimmer_schrank_bis_zwei_türen', 'Schrank bis 2 Türen, nicht zerlegbar') !!}
            {!! Form::number('kinderzimmer_schrank_bis_zwei_türen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('kinderzimmer_schrank_zerlegbar', 'Schrank zerlegbar je angef. m') !!}
            {!! Form::number('kinderzimmer_schrank_zerlegbar', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('kinderzimmer_bettzeug_je_betteinheit', 'Bettzeug je Betteinheit') !!}
            {!! Form::number('kinderzimmer_bettzeug_je_betteinheit', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('kinderzimmer_nachttisch', 'Nachttisch') !!}
            {!! Form::number('kinderzimmer_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_schreibpult', 'Schreibpult') !!}
            {!! Form::number('kinderzimmer_schreibpult', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_tisch_b06', 'Tisch bis 0,6 m') !!}
            {!! Form::number('kinderzimmer_tisch_b06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_tisch_b10', 'Tisch bis 1,0 m') !!}
            {!! Form::number('kinderzimmer_tisch_b10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_tisch_b12', 'Tisch bis 1,2 m') !!}
            {!! Form::number('kinderzimmer_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_tisch_a12', 'Tisch über 1,2 m') !!}
            {!! Form::number('kinderzimmer_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_laufgitter', 'Laufgitter') !!}
            {!! Form::number('kinderzimmer_laufgitter', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_teppich', 'Teppich') !!}
            {!! Form::number('kinderzimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_brücke', 'Brücke') !!}
            {!! Form::number('kinderzimmer_brücke', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_anbauwand_b38', 'Anbauwand b.38cm Tiefe je ang. m') !!}
            {!! Form::number('kinderzimmer_anbauwand_b38', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_anbauwand_a38', 'Anbauwand ü.38cm Tiefe je ang. m') !!}
            {!! Form::number('kinderzimmer_anbauwand_a38', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('kinderzimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_kleiderbehältnis', 'Kleiderbehältnis') !!}
            {!! Form::number('kinderzimmer_kleiderbehältnis', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('kinderzimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('kinderzimmer_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('kinderzimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'weitere_zimmer']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection