@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-8">
            <h1>Umzüge</h1>
        </div>
        <div class="col-4">
            <a href="{{route('umzug.create')}}" class="btn btn-primary float-right">Neuer Umzug</a>
        </div>
    </div>

    <br>
    <br>

    @if($umzuege->count() > 0)
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Erstellt</th>
            <th>Zuletzt bearbeitet</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($umzuege as $umzug)
            <tr>
              <td>{{$umzug->vorname}}</td>
              <td>{{$umzug->nachname}}</td>
              <td>{{$umzug->created_at->diffForHumans()}}</td>
              <td>{{$umzug->updated_at->diffForHumans()}}</td>
              <td>
                  {!! Form::open(['route' => ['umzug.destroy', $umzug->id], 'method' => 'delete']) !!}
                  {!! Form::button('Löschen', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs float-right', 'onclick' => "return confirm('Wirklich löschen?')"]) !!}
                  {!! Form::close() !!}
                  <a href="/umzug/{{$umzug->id}}/edit" class="btn btn-success float-right">Bearbeiten</a>
              </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @else
        <p>Es gibt noch keine Umzüge</p>
    @endif

@endsection