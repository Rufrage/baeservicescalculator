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
        <div class="col-sm-6">
            {!! Form::label('küche_buffet_mit_aufsätzen', 'Buffet mit Aufsätzen') !!}
            {!! Form::number('küche_buffet_mit_aufsätzen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_unterteil_je_tür', 'Unterteil je Tür') !!}
            {!! Form::number('küche_unterteil_je_tür', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_oberteil_je_tür', 'Oberteil je Tür') !!}
            {!! Form::number('küche_oberteil_je_tür', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_tisch_b_06', 'Tisch bis 0,6 m') !!}
            {!! Form::number('küche_tisch_b_06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_tisch_b_10', 'Tisch bis 1,0 m') !!}
            {!! Form::number('küche_tisch_b_10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_tisch_b_12', 'Tisch bis 1,2 m') !!}
            {!! Form::number('küche_tisch_b_12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_tisch_a_12', 'Tisch über 1,2 m') !!}
            {!! Form::number('küche_tisch_a_12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_stuhl', 'Stuhl') !!}
            {!! Form::number('küche_stuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_eckbank_je_sitz', 'Eckbank je Sitz') !!}
            {!! Form::number('küche_eckbank_je_sitz', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_besenschrank', 'Besenschrank') !!}
            {!! Form::number('küche_besenschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_herd', 'Herd') !!}
            {!! Form::number('küche_herd', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_geschirrspülmaschine', 'Geschirrspülmaschine') !!}
            {!! Form::number('küche_geschirrspülmaschine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_waschmaschine_trockner', 'Waschmaschine / Trockner') !!}
            {!! Form::number('küche_waschmaschine_trockner', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_kühlschrank_truhe_b_120', 'Kühlschrank / Truhe bis 120 l') !!}
            {!! Form::number('küche_kühlschrank_truhe_b_120', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_kühlschrank_truhe_a_120', 'Kühlschrank / Truhe über 120 l') !!}
            {!! Form::number('küche_kühlschrank_truhe_a_120', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_arbeitsplatte_nicht_unterb', 'Arbeitsplatte nicht unterb. (je angef. m)') !!}
            {!! Form::number('küche_arbeitsplatte_nicht_unterb', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('küche_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_teppich', 'Teppich') !!}
            {!! Form::number('küche_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_mikrowelle', 'Mikrowelle') !!}
            {!! Form::number('küche_mikrowelle', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('küche_umzugskarton_b_80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('küche_umzugskarton_b_80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
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