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
                    {!! Form::button('Bad', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'bad']) !!}
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
            <img src="{{ asset('images/moebel/waschmaschine.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_waschmaschine', 'Waschmaschine') !!}
            {!! Form::number('bad_waschmaschine', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/wäschetrockner.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_wäschetrockner', 'Wäschetrockner') !!}
            {!! Form::number('bad_wäschetrockner', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/wäscheständer.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_wäscheständer', 'Wäscheständer') !!}
            {!! Form::number('bad_wäscheständer', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/waeschekorb.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_waeschekorb', 'Wäschekorb') !!}
            {!! Form::number('bad_waeschekorb', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/waschbeckenunterschrank.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_waschbeckenunterschrank', 'Waschbeckenunterschrank') !!}
            {!! Form::number('bad_waschbeckenunterschrank', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/stuhl.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_stuhl_hocker', 'Stuhl, Hocker') !!}
            {!! Form::number('bad_stuhl_hocker', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/truhe_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_truhe_kommode', 'Truhe, Kommode') !!}
            {!! Form::number('bad_truhe_kommode', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/kommode_klein.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_kleiderablage', 'Kleiderablage') !!}
            {!! Form::number('bad_kleiderablage', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/lampe_deckenlampe.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_deckenlampe', 'Deckenlampe') !!}
            {!! Form::number('bad_deckenlampe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            <img src="{{ asset('images/moebel/spiegel_groß.svg') }}" alt="computer_bildschirm" height="64px">
            {!! Form::label('bad_spiegel', 'Spiegel') !!}
            {!! Form::number('bad_spiegel', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('bad_toilettenschrank', 'Toilettenschrank') !!}
            {!! Form::number('bad_toilettenschrank', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'kinderzimmer']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection