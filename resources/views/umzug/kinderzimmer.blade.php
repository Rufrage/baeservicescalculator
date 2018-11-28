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
            <img src="{{ asset('images/moebel/babybed.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_bett_komplett', 'Bett, Kinderbett') !!}
            {!! Form::number('kinderzimmer_bett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/babybed.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_babybett', 'Bett, Babybett') !!}
            {!! Form::number('kinderzimmer_babybett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/wickeltisch.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_wickeltisch', 'Tisch, Wickeltisch') !!}
            {!! Form::number('kinderzimmer_wickeltisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spielzeugkiste.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_spielzeugkiste', 'Spielzeugkiste') !!}
            {!! Form::number('kinderzimmer_spielzeugkiste', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hochstuhl.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_stuhl_hocker', 'Stuhl, Hochstuhl') !!}
            {!! Form::number('kinderzimmer_stuhl_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_kommode_mittel', 'Kommode (mittel)') !!}
            {!! Form::number('kinderzimmer_kommode_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_kommode_klein', 'Kommode (klein)') !!}
            {!! Form::number('kinderzimmer_kommode_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/Schrank_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_schrank_klein', 'Schrank (klein)') !!}
            {!! Form::number('kinderzimmer_schrank_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kleiderschrank_2_türen.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_schrank2', 'Kleiderschrank 2 Türen') !!}
            {!! Form::number('kinderzimmer_schrank2', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kleiderschrank_3_türen.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_schrank3', 'Kleiderschrank 3 Türen') !!}
            {!! Form::number('kinderzimmer_schrank3', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/Schrank_hochschrank.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_hochschrank', 'Schrank, Hochschrank') !!}
            {!! Form::number('kinderzimmer_hochschrank', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sideboard_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_sideboard_mittel', 'Sideboard (mittel)') !!}
            {!! Form::number('kinderzimmer_sideboard_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/sideboard_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_sideboard', 'Sideboard (klein)') !!}
            {!! Form::number('kinderzimmer_sideboard', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schuhschrank_2_klappensvg.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_schuhschrank2', 'Schuhschrank, 2 Klappen') !!}
            {!! Form::number('kinderzimmer_schuhschrank2', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/vitrine.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_vitrine', 'Vitrine, Glasvitrine (mittel)') !!}
            {!! Form::number('kinderzimmer_vitrine', null, ['class'=>'form-control']) !!}
        </div>


        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_buecherregal_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_buecherregal', 'Regal, Bücherregal (klein)') !!}
            {!! Form::number('kinderzimmer_buecherregal', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_buecherregal_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_buecherregal_mittel', 'Regal, Bücherregal (mittel)') !!}
            {!! Form::number('kinderzimmer_buecherregal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_regal_klein', 'Regal (klein)') !!}
            {!! Form::number('kinderzimmer_regal_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_mittel.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_regal_mittel', 'Regal (mittel)') !!}
            {!! Form::number('kinderzimmer_regal_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/regal_billy.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_billy', 'Billy Regal') !!}
            {!! Form::number('kinderzimmer_billy', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_stehlampe.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_stehlampe', 'Lampe, Stehlampe') !!}
            {!! Form::number('kinderzimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_deckenlampe.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_deckenlampe', 'Lampe, Deckenlampe') !!}
            {!! Form::number('kinderzimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_bodenlampe.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_bodenlampe', 'Lampe, Bodenlampe') !!}
            {!! Form::number('kinderzimmer_bodenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_nachttisch.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_lampe_nachttisch', 'Lampe, Nachttisch') !!}
            {!! Form::number('kinderzimmer_lampe_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_tischlampe.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_tischlampe', 'Lampe, Tischlampe') !!}
            {!! Form::number('kinderzimmer_tischlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/truhe_klein.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_truhe', 'Truhe (klein)') !!}
            {!! Form::number('kinderzimmer_truhe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('kinderzimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('kinderzimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
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