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
                    {!! Form::button('Weitere Zimmer', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'weitere_zimmer']) !!}
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
            {!! Form::label('weitere_zimmer_schreibtisch_b16', 'Schreibtisch bis 1,6 m') !!}
            {!! Form::number('weitere_zimmer_schreibtisch_b16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_schreibtisch_a16', 'Schreibtisch über 1,6 m') !!}
            {!! Form::number('weitere_zimmer_schreibtisch_a16', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_schreibtischcontainer', 'Schreibtischcontainer') !!}
            {!! Form::number('weitere_zimmer_schreibtischcontainer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_schreibtischstuhl', 'Schreibtischstuhl') !!}
            {!! Form::number('weitere_zimmer_schreibtischstuhl', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_winkelkombination', 'Winkelkombination') !!}
            {!! Form::number('weitere_zimmer_winkelkombination', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_bücherregal', 'Bücherregal zerlegbar je angef. m') !!}
            {!! Form::number('weitere_zimmer_bücherregal', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_aktenschrank', 'Aktenschrank je angef. m') !!}
            {!! Form::number('weitere_zimmer_aktenschrank', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_sessel_ohne_armlehnen', 'Sessel ohne Armlehnen') !!}
            {!! Form::number('weitere_zimmer_sessel_ohne_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_sessel_mit_armlehnen', 'Sessel mit Armlehnen') !!}
            {!! Form::number('weitere_zimmer_sessel_mit_armlehnen', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_tisch_b06', 'Tisch bis 0,6 m') !!}
            {!! Form::number('weitere_zimmer_tisch_b06', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_tisch_b10', 'Tisch bis 1,0 m') !!}
            {!! Form::number('weitere_zimmer_tisch_b10', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_tisch_b12', 'Tisch bis 1,2 m') !!}
            {!! Form::number('weitere_zimmer_tisch_b12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_tisch_a12', 'Tisch über 1,2 m') !!}
            {!! Form::number('weitere_zimmer_tisch_a12', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_computer', 'Computer: PC / EDV-Anlage') !!}
            {!! Form::number('weitere_zimmer_computer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_tischkopierer', 'Tischkopierer') !!}
            {!! Form::number('weitere_zimmer_tischkopierer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_stehlampe', 'Stehlampe') !!}
            {!! Form::number('weitere_zimmer_stehlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('weitere_zimmer_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_teppich', 'Teppich') !!}
            {!! Form::number('weitere_zimmer_teppich', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_brücke', 'Brücke') !!}
            {!! Form::number('weitere_zimmer_brücke', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_umzugskarton_b80', 'Umzugskarton bis 80 l (gepackt)') !!}
            {!! Form::number('weitere_zimmer_umzugskarton_b80', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('weitere_zimmer_umzugskarton_a80', 'Umzugskarton über 80 l (gepackt)') !!}
            {!! Form::number('weitere_zimmer_umzugskarton_a80', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'sonstiges']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection