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
                    {!! Form::button('Küche', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'küche']) !!}
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
            <img src="{{ asset('images/moebel/herd.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('küche_herd', 'Herd / Ofen') !!}
            {!! Form::number('küche_herd', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spülmaschine.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('küche_geschirrspülmaschine', 'Geschirrspülmaschine') !!}
            {!! Form::number('küche_geschirrspülmaschine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/mikrowelle.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('küche_mikrowelle', 'Mikrowelle') !!}
            {!! Form::number('küche_mikrowelle', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/küchenunterschrank.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('küche_küchenunterschrank', 'Küchenunterschrank, 1 Tür') !!}
            {!! Form::number('küche_küchenunterschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kuehlschrank.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('küche_kuehlschrank', 'Kühlschrank (mittel)') !!}
            {!! Form::number('küche_kuehlschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl.svg') }}" alt="sofa" height="64px">
            {!! Form::label('küche_stuhl', 'Stuhl') !!}
            {!! Form::number('küche_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_buerostuhl.svg') }}" alt="hocker" height="64px">
            {!! Form::label('küche_stuhl_mit_armlehnen', 'Stuhl, Bürostuhl') !!}
            {!! Form::number('küche_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl_klappstuhl.svg') }}" alt="klappstuhl" height="64px">
            {!! Form::label('küche_klappstuhl', 'Stuhl, Klappstuhl') !!}
            {!! Form::number('küche_klappstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hocker.svg') }}" alt="hocker" height="64px">
            {!! Form::label('küche_hocker', 'Hocker') !!}
            {!! Form::number('küche_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_beistelltisch.svg') }}" alt="tisch_beistelltisch" height="64px">
            {!! Form::label('küche_tisch_06', 'Tisch, Beistelltisch') !!}
            {!! Form::number('küche_tisch_06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_nachttisch.svg') }}" alt="tisch_nachttisch" height="64px">
            {!! Form::label('küche_tisch_10', 'Tisch, Nachttisch') !!}
            {!! Form::number('küche_tisch_10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_esstisch_mittel.svg') }}" alt="tisch_esstisch_mittel" height="64px">
            {!! Form::label('küche_tisch_b12', 'Tisch, Esstisch (mittel)') !!}
            {!! Form::number('küche_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/tisch_esstisch_groß.svg') }}" alt="tisch_esstisch_groß" height="64px">
            {!! Form::label('küche_tisch_a12', 'Tisch, Esstisch (groß)') !!}
            {!! Form::number('küche_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/staubsauger.svg') }}" alt="staubsauger" height="64px">
            {!! Form::label('küche_staubsauger', 'Staubsauger') !!}
            {!! Form::number('küche_staubsauger', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/buegelbrett.svg') }}" alt="buegelbrett" height="64px">
            {!! Form::label('küche_buegelbrett', 'Bügelbrett') !!}
            {!! Form::number('küche_buegelbrett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/truhe_klein.svg') }}" alt="buegelbrett" height="64px">
            {!! Form::label('küche_truhe', 'Truhe (klein)') !!}
            {!! Form::number('küche_truhe', null, ['class'=>'form-control']) !!}
        </div>



        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('küche_umzugskarton_b_80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('küche_umzugskarton_b_80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('küche_umzugskarton_a_80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('küche_umzugskarton_a_80', null, ['class'=>'form-control']) !!}
        </div>
    </div>


    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'schlafzimmer']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection