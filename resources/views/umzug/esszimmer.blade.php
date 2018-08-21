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
        <div class="col-sm-6">
            {!! Form::label('esszimmer_stuhl', 'Stuhl') !!}
            {!! Form::number('esszimmer_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_stuhl_mit_armlehnen', 'Stuhl mit Armlehnen') !!}
            {!! Form::number('esszimmer_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_eckbank_je_sitz', 'Eckbank je Sitz') !!}
            {!! Form::number('esszimmer_eckbank_je_sitz', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_tisch_b06', 'Tisch bis 0,6 m') !!}
            {!! Form::number('esszimmer_tisch_b06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_tisch_b10', 'Tisch bis 1,0 m') !!}
            {!! Form::number('esszimmer_tisch_b10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_tisch_b12', 'Tisch bis 1,2 m') !!}
            {!! Form::number('esszimmer_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_tisch_a12', 'Tisch über 1,2 m') !!}
            {!! Form::number('esszimmer_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_sekretär', 'Sekretär') !!}
            {!! Form::number('esszimmer_sekretär', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_sideboard_klein', 'Sideboard klein') !!}
            {!! Form::number('esszimmer_sideboard_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_sideboard_groß', 'Sideboard groß') !!}
            {!! Form::number('esszimmer_sideboard_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_hausbar', 'Hausbar') !!}
            {!! Form::number('esszimmer_hausbar', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_teewagen', 'Teewagen (nicht zerlegbar)') !!}
            {!! Form::number('esszimmer_teewagen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_teppich', 'Teppich') !!}
            {!! Form::number('esszimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_brücke', 'Brücke') !!}
            {!! Form::number('esszimmer_brücke', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('esszimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_stehlampe', 'Stehlampe') !!}
            {!! Form::number('esszimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_vitrine', 'Vitrine (Glasschrank)') !!}
            {!! Form::number('esszimmer_vitrine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_bilder_b08', 'Bilder bis 0,8 m') !!}
            {!! Form::number('esszimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_bilder_a08', 'Bilder über 0,8 m') !!}
            {!! Form::number('esszimmer_bilder_a08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('esszimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('esszimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
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