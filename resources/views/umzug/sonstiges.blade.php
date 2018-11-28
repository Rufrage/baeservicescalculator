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
                    {!! Form::button('Weitere Zimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'weitere_zimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Sonstiges', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'sonstiges']) !!}
                </li>
            </ul>
        </div>
    </div>

    <br>
    <br>

    <!-- Felder für dieses Zimmer-->
    <div class="form-group row">
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/reifen.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_autoreifen', 'Reifen') !!}
            {!! Form::number('sonstiges_autoreifen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/leiter_empty.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_trittleiter', 'Leiter / Trittleiter') !!}
            {!! Form::number('sonstiges_trittleiter', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/muellsack_groß_gefüllt.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_muellsack', 'Müllsack (groß), gefüllt') !!}
            {!! Form::number('sonstiges_muellsack', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/schirm_sonnenschirm.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_sonnenschirm', 'Schirm, Sonnenschirm') !!}
            {!! Form::number('sonstiges_sonnenschirm', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/leiter_empty.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_weinkiste', 'Kiste, Weinkiste') !!}
            {!! Form::number('sonstiges_weinkiste', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/rasenmäher.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_rasenmäher_hand', 'Rasenmäher') !!}
            {!! Form::number('sonstiges_rasenmäher_hand', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/gartentisch.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_tisch_gartentisch', 'Tisch, Gartentisch') !!}
            {!! Form::number('sonstiges_tisch_gartentisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/gartenstuhl.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_gartenstuhl', 'Gartenstuhl') !!}
            {!! Form::number('sonstiges_gartenstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/grill.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_gartengrill', 'Grill') !!}
            {!! Form::number('sonstiges_gartengrill', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/werkzeug.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_werkzeug', 'Werkzeug, Gartengeräte') !!}
            {!! Form::number('sonstiges_werkzeug', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/leiter_empty.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_katzenkratzbaum_groß', 'Katzenkratzbaum (groß)') !!}
            {!! Form::number('sonstiges_katzenkratzbaum_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/leiter_empty.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_katzenkratzbaum_mittel', 'Katzenkratzbaum (mittel)') !!}
            {!! Form::number('sonstiges_katzenkratzbaum_mittel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/leiter_empty.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_katzenkratzbaum_klein', 'Katzenkratzbaum (klein)') !!}
            {!! Form::number('sonstiges_katzenkratzbaum_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/aquarium.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_aquarium_200', 'Aquarium, 200 Liter') !!}
            {!! Form::number('sonstiges_aquarium_200', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/aquarium.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_aquarium_75', 'Aquarium, 75 Liter') !!}
            {!! Form::number('sonstiges_aquarium_75', null, ['class'=>'form-control']) !!}
        </div>


        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fahrrad_erwachsene.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_fahrrad_moped', 'Fahrrad (Erwachsene)') !!}
            {!! Form::number('sonstiges_fahrrad_moped', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/koffer.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_koffer', 'Koffer') !!}
            {!! Form::number('sonstiges_koffer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/koffer.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_dreirad_kinderrad', 'Fahrrad (Kind)') !!}
            {!! Form::number('sonstiges_dreirad_kinderrad', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/fahrrad_kind.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_koffer_groß', 'Koffer (groß)') !!}
            {!! Form::number('sonstiges_koffer_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/klavier.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_klavier', 'Klavier') !!}
            {!! Form::number('sonstiges_klavier', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/werkzeuge.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_werkzeuge', 'Werkzeuge') !!}
            {!! Form::number('sonstiges_werkzeuge', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bohrmaschine.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_bohrmaschine', 'Bohrmaschine') !!}
            {!! Form::number('sonstiges_bohrmaschine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/bohrmaschine.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_werkzeugschrank', 'Werkzeugschrank/Werkzeugkasten') !!}
            {!! Form::number('sonstiges_werkzeugschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/hochdruckreiniger.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_hochdruckreiniger', 'Hochdruckreiniger') !!}
            {!! Form::number('sonstiges_hochdruckreiniger', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/werkzeuge.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_rasenmäher_motor', 'Rasentraktor, Sitzrasenmäher') !!}
            {!! Form::number('sonstiges_rasenmäher_motor', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('sonstiges_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/karton_umzugskarton_m.svg') }}" alt="" height="64px">
            {!! Form::label('sonstiges_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('sonstiges_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>

    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Calculate', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'calculate']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection