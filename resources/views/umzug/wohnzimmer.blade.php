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
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_sofa', 'Sofa') !!}
            {!! Form::number('wohnzimmer_sofa', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_sitzlandschaft', 'Sitzlandschaft (Element)') !!}
            {!! Form::number('wohnzimmer_sitzlandschaft', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_sessel_mit_armlehnen', 'Sessel mit Armlehnen') !!}
            {!! Form::number('wohnzimmer_sessel_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_sessel_ohne_armlehnen', 'Sessel ohne Armlehnen') !!}
            {!! Form::number('wohnzimmer_sessel_ohne_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_stuhl', 'Stuhl') !!}
            {!! Form::number('wohnzimmer_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_stuhl_mit_armlehnen', 'Stuhl mit Armlehnen') !!}
            {!! Form::number('wohnzimmer_stuhl_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_tisch_06', 'Tisch bis 0,6m') !!}
            {!! Form::number('wohnzimmer_tisch_06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_tisch_10', 'Tisch bis 1,0m') !!}
            {!! Form::number('wohnzimmer_tisch_10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_tisch_b12', 'Tisch bis 1,2m') !!}
            {!! Form::number('wohnzimmer_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_tisch_a12', 'Tisch über 1,2m') !!}
            {!! Form::number('wohnzimmer_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_wohnzimmerschrank', 'Wohnz.-Schrank zerlegb. je angef. m') !!}
            {!! Form::number('wohnzimmer_wohnzimmerschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_anbauwand_b38', 'Anbauwand b. 38cm Tiefe je angef. m') !!}
            {!! Form::number('wohnzimmer_anbauwand_b38', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_anbauwand_a38', 'Anbauwand ü. 38cm Tiefe je angef. m') !!}
            {!! Form::number('wohnzimmer_anbauwand_a38', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_bücherregal', 'Bücherregal zerlegbar je angef. m') !!}
            {!! Form::number('wohnzimmer_bücherregal', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_buffet_mit_aufsatz', 'Buffet mit Aufsatz') !!}
            {!! Form::number('wohnzimmer_buffet_mit_aufsatz', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_buffet_ohne_aufsatz', 'Buffet ohne Aufsatz') !!}
            {!! Form::number('wohnzimmer_buffet_ohne_aufsatz', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_schreibtisch_b16', 'Schreibtisch bis 1,6m') !!}
            {!! Form::number('wohnzimmer_schreibtisch_b16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_schreibtisch_a16', 'Schreibtisch über 1,6m') !!}
            {!! Form::number('wohnzimmer_schreibtisch_a16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_standuhr', 'Standuhr') !!}
            {!! Form::number('wohnzimmer_standuhr', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_video_dvd_player', 'Video/DVD-Player') !!}
            {!! Form::number('wohnzimmer_video_dvd_player', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_musikschrank_turm', 'Musikschrank/Turm') !!}
            {!! Form::number('wohnzimmer_musikschrank_turm', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_stereoanlage', 'Stereoanlage') !!}
            {!! Form::number('wohnzimmer_stereoanlage', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_fernseher', 'Fernseher') !!}
            {!! Form::number('wohnzimmer_fernseher', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_klavier', 'Klavier') !!}
            {!! Form::number('wohnzimmer_klavier', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_flügel', 'Flügel') !!}
            {!! Form::number('wohnzimmer_flügel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_heimorgel', 'Heimorgel') !!}
            {!! Form::number('wohnzimmer_heimorgel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_nähmaschine', 'Nähmaschine (Schrank)') !!}
            {!! Form::number('wohnzimmer_nähmaschine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_stehlampe', 'Stehlampe') !!}
            {!! Form::number('wohnzimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_brücke', 'Brücke') !!}
            {!! Form::number('wohnzimmer_brücke', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('wohnzimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_lüster', 'Lüster') !!}
            {!! Form::number('wohnzimmer_lüster', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_teppich', 'Teppich') !!}
            {!! Form::number('wohnzimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_bilder_b08', 'Bilder bis 0,8 m') !!}
            {!! Form::number('wohnzimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_bilder_a08', 'Bilder über 0,8 m') !!}
            {!! Form::number('wohnzimmer_bilder_a08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_sideboard_klein', 'Sideboard klein') !!}
            {!! Form::number('wohnzimmer_sideboard_klein', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_sideboard_groß', 'Sideboard groß') !!}
            {!! Form::number('wohnzimmer_sideboard_groß', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_tvschrank', 'TV-Schrank') !!}
            {!! Form::number('wohnzimmer_tvschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('wohnzimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('wohnzimmer_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('wohnzimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
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