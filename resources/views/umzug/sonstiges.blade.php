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
        <div class="col-sm-6">
            {!! Form::label('sonstiges_fahrrad_moped', 'Fahrrad / Moped') !!}
            {!! Form::number('sonstiges_fahrrad_moped', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_motorrad', 'Motorrad') !!}
            {!! Form::number('sonstiges_motorrad', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_dreirad_kinderrad', 'Dreirad / Kinderrad') !!}
            {!! Form::number('sonstiges_dreirad_kinderrad', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_bügelbrett', 'Bügelbrett') !!}
            {!! Form::number('sonstiges_bügelbrett', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_staubsauger', 'Staubsauger') !!}
            {!! Form::number('sonstiges_staubsauger', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_autoreifen', 'Autoreifen') !!}
            {!! Form::number('sonstiges_autoreifen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_koffer', 'Koffer') !!}
            {!! Form::number('sonstiges_koffer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_klapptisch_klappstuhl', 'Klapptisch / Klappstuhl') !!}
            {!! Form::number('sonstiges_klapptisch_klappstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_kinderwagen', 'Kinderwagen') !!}
            {!! Form::number('sonstiges_kinderwagen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_leiter', 'Leiter je angef. m') !!}
            {!! Form::number('sonstiges_leiter', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_rasenmäher_motor', 'Rasenmäher Motor') !!}
            {!! Form::number('sonstiges_rasenmäher_motor', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_rasenmäher_hand', 'Rasenmäher Hand') !!}
            {!! Form::number('sonstiges_rasenmäher_hand', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_schubkarre', 'Schubkarre') !!}
            {!! Form::number('sonstiges_schubkarre', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_werkzeugschrank', 'Werkzeugschrank') !!}
            {!! Form::number('sonstiges_werkzeugschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_werkzeugkoffer', 'Werkzeugkoffer') !!}
            {!! Form::number('sonstiges_werkzeugkoffer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_ski', 'Ski') !!}
            {!! Form::number('sonstiges_ski', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_schlitten', 'Schlitten') !!}
            {!! Form::number('sonstiges_schlitten', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_blumenkübel_kasten', 'Blumenkübel / Kasten') !!}
            {!! Form::number('sonstiges_blumenkübel_kasten', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_sonnenschirm', 'Sonnenschirm') !!}
            {!! Form::number('sonstiges_sonnenschirm', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_tischtennisplatte', 'Tischtennisplatte') !!}
            {!! Form::number('sonstiges_tischtennisplatte', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_mülltonne', 'Mülltonne') !!}
            {!! Form::number('sonstiges_mülltonne', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_regal', 'Regal zerlegbar je angef. m') !!}
            {!! Form::number('sonstiges_regal', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_gartengeräte', 'Gartengeräte') !!}
            {!! Form::number('sonstiges_gartengeräte', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_sonnenbank', 'Sonnenbank') !!}
            {!! Form::number('sonstiges_sonnenbank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_gartengrill', 'Gartengrill') !!}
            {!! Form::number('sonstiges_gartengrill', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('sonstiges_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('sonstiges_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
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