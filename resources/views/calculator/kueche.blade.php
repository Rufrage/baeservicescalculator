@extends('layouts.app')

@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>'CalculatorController@switch']) !!}


    {!! Form::hidden('currentroom', $currentroom) !!}

    <!-- Top Menu -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    {!! Form::button('Wohnzimmer', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'wohnzimmer']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Küche', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'kueche']) !!}
                </li>
                <li class="nav-item">
                    {!! Form::button('Bad', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'bad']) !!}
                </li>
            </ul>
        </div>
    </div>

    <br>
    <br>

    <!-- Page -->
    <div class="form-group row">
        <div class="col-sm-6">
            {!! Form::label('kueche', 'Küchensachen') !!}
            {!! Form::text('kueche', 0, ['class'=>'form-control', 'value' => 0]) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('abc', 'Noch mehr Küche') !!}
            {!! Form::text('abc', 0, ['class'=>'form-control', 'value' => 0]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('Caption', ['class' => 'btn btn-primary', ]) !!}
    </div>


    {!! Form::close() !!}




@endsection