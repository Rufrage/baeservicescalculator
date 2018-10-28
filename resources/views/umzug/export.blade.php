@extends('layouts.app')

@section('content')


<table id="result" class="table table-sm" style="border: none;">
    <tbody>
    <!-- Kundendaten -->
    <tr>
        <td style="color: red;">blablabla</td>{{--{{$ergebnis[2]}} --}}
        <td></td>
    </tr>
    <tr>
        <td>von Frankfurt</td>{{-- {{$umzug->auszugsort}}--}}
        <td></td>
    </tr>
    <tr>
        <td>nach Hamburg 187 </td>{{--{{$umzug->einzugsort}} --}}
        <td></td>
    </tr>

    <tr style="height: 20px;"></tr>

    <tr>
        <td>Kubikmeter (gesamt)</td>
        <td>5000 m³</td>{{-- {{$ergebnis[1]}}--}}
    </tr>
    <tr>
        <td>Door to Door</td>
        <td></td>
    </tr>
    <tr>
        <td>Materialgestellung</td>
        <td></td>
    </tr>
    {{--  @if($umzug_array['montage'] == 'J')
        <tr>
            <td>De- und Montage von teilbaren Möbeln</td>
            <td></td>
        </tr>
    @endif --}}
   {{--  @if($umzug_array['übersee_lokal'] == 'Ü')--}}
        <tr>
            <td>Überseemäßige Verpackung</td>
            <td></td>
        </tr>
        <tr>
            <td>Gestellung eines 20' Containers</td>
            <td></td>
        </tr>
        <tr>
            <td>Verladung in den Container</td>
            <td></td>
        </tr>
        <tr>
            <td>Transport von Bad Homburg nach Hamburg</td>
            <td></td>
        </tr>
        <tr>
            <td>Seefracht von Hamburg nach Busan, Korea</td>
            <td></td>
        </tr>
        <tr>
            <td>Transport von Busan Port nach Seoul, Door</td>
            <td>100000 </td>
        </tr>
      {{--@endif--}}
    <tr>
        <td>Entladen, auspacken (Fullservice: inkl. Geschirr, Kleider, Küchenwaren, etc.)</td>
        <td></td>
    </tr>
    <tr>
        <td>Transportversicherung bis 100000 ,- Euro</td>{{--{{$umzug->versicherung}} --}}
        <td></td>
    </tr>
    <tr>
        <td>Halt</td>
        <td></td>
    </tr>
    <tr>
        <td>shuttle charge</td>
        <td>100000 </td>
    </tr>
    <tr>
        <td>Nettobetrag</td>
        <td>100000  €</td>{{--{{$ergebnis[0]}} --}}
    </tr>
 {{--   @if($umzug_array['steuerbefreiung'] == 'J')--}}
        <tr>
            <td>Steuerbefreiung nach § 4 Nr. 3 ff. UstG</td>
            <td>100000 </td>
        </tr>
        <tr>
            <td>Summe</td>
            <td>100000  €</td>{{--{{$ergebnis[0]}} --}}
        </tr>
  {{--@endif--}}
    {{--  @if($umzug_array['steuerbefreiung'] == 'N') --}}
        <tr>
            <td>Umsatzsteuer</td>
            <td>100000  €</td>{{-- {{$ergebnis[3] - $ergebnis[0]}}--}}
        </tr>
        <tr>
            <td>Summe</td>
            <td>100000 €</td>   {{--{{$ergebnis[3]}} --}}
        </tr>
   {{--@endif--}}
</table>

@endsection