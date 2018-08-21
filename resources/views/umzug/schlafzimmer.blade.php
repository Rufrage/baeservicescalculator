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
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_schrank_bis_zwei_türen', 'Schrank bis 2 Türen, nicht zerlegbar') !!}
            {!! Form::number('schlafzimmer_schrank_bis_zwei_türen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_schrank_zerlegbar', 'Schrank zerlegbar je angefang. m') !!}
            {!! Form::number('schlafzimmer_schrank_zerlegbar', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_dopelbett_komplett', 'Doppelbett komplett') !!}
            {!! Form::number('schlafzimmer_dopelbett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_einzelbett_komplett', 'Einzelbett komplett') !!}
            {!! Form::number('schlafzimmer_einzelbett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_französisches_bett_komplett', 'Französisches Bett komplett') !!}
            {!! Form::number('schlafzimmer_französisches_bett_komplett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_bettzeug_je_betteinheit', 'Bettzeug je Betteinheit') !!}
            {!! Form::number('schlafzimmer_bettzeug_je_betteinheit', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_nachttisch', 'Nachttisch') !!}
            {!! Form::number('schlafzimmer_nachttisch', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_bettumbau', 'Bettumbau') !!}
            {!! Form::number('schlafzimmer_bettumbau', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_kommode', 'Kommode') !!}
            {!! Form::number('schlafzimmer_kommode', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_frisierkommode', 'Frisierkommode (mit Spiegel)') !!}
            {!! Form::number('schlafzimmer_frisierkommode', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_wäschetruhe', 'Wäschetruhe') !!}
            {!! Form::number('schlafzimmer_wäschetruhe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_stuhl_hocker', 'Stuhl, Hocker') !!}
            {!! Form::number('schlafzimmer_stuhl_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_spiegel_a_08', 'Spiegel über 0,8 m') !!}
            {!! Form::number('schlafzimmer_spiegel_a_08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('schlafzimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_fernseher', 'Fernseher') !!}
            {!! Form::number('schlafzimmer_fernseher', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_teppich', 'Teppich') !!}
            {!! Form::number('schlafzimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_bilder_b08', 'Bilder bis 0,8 m') !!}
            {!! Form::number('schlafzimmer_bilder_b08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_bilder_a08', 'Bilder über 0,8 m') !!}
            {!! Form::number('schlafzimmer_bilder_a08', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_tv_schrank', 'TV-Schrank') !!}
            {!! Form::number('schlafzimmer_tv_schrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_kleiderbehältnis', 'Kleiderbehältnis') !!}
            {!! Form::number('schlafzimmer_kleiderbehältnis', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_umzugskarton_b80', 'Umzugskarton bis 80 l') !!}
            {!! Form::number('schlafzimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_umzugskarton_a80', 'Umzugskarton über 80 l') !!}
            {!! Form::number('schlafzimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_umzugskarton_b80_gepackt', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('schlafzimmer_umzugskarton_b80_gepackt', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('schlafzimmer_umzugskarton_a80_gepackt', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('schlafzimmer_umzugskarton_a80_gepackt', null, ['class'=>'form-control']) !!}
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