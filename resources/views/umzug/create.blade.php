@extends('layouts.app')


@section('content')

    <h1>Neuer Umzug</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'UmzugController@store']) !!}

        <div class="form-group row">
            <div class="col-sm-6">
                {!! Form::label('vorname', 'Vorname') !!}
                {!! Form::text('vorname', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('nachname', 'Nachname') !!}
                {!! Form::text('nachname', null, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Speichern', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

@endsection