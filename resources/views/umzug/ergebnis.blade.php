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
                    {!! Form::button('Sonstiges', ['class' => 'nav-link', 'type' => 'submit', 'name' => 'switch', 'value' => 'sonstiges']) !!}
                </li>
            </ul>
        </div>
    </div>

    <br>
    <br>
        {{-- {{$newvar = $umzug->toArray()}}--}}



    <table id="result" class="table table-sm" style="border: none;">
        <tbody>
            <!-- Kundendaten -->
            <tr>
                <td >{{$ergebnis[2]}}</td>
                <td></td>
            </tr>
            <tr>
                <td>von {{$umzug->auszugsort}}</td>
                <td></td>
            </tr>
            <tr>
                <td>nach {{$umzug->einzugsort}}</td>
                <td></td>
            </tr>

            <tr style="height: 20px;"></tr>

            <tr>
                <td>Kubikmeter (gesamt)</td>
                    <td style="text-align: right;">{{$ergebnis[1]}}m³</td>
            </tr>
            <tr>
                <td>Door to Door</td>
                <td></td>
            </tr>
            <tr>
                <td>Materialgestellung</td>
                <td></td>
            </tr>
        @if($umzug_array['montage'] == 1)
            <tr>
                <td>De- und Montage von teilbaren Möbeln</td>
                <td></td>
            </tr>
        @endif
            @if($umzug_array['übersee_lokal'] == 0)
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
                <td></td>
            </tr>
            @endif
            <tr>
                <td>Entladen, auspacken (Fullservice: inkl. Geschirr, Kleider, Küchenwaren, etc.)</td>
                <td></td>
            </tr>
            <tr>
                <td>Transportversicherung bis {{$umzug->versicherung}},- Euro</td>
                <td></td>
            </tr>
            <tr>
                <td>Halt</td>
                <td></td>
            </tr>
            <tr>
                <td>shuttle charge</td>
                <td></td>
            </tr>
            <tr>
                <td>Nettobetrag</td>

                <td style="text-align: right;">{{ number_format ( $ergebnis[0] , $decimals = 2 , $dec_point = "," , $thousands_sep = "." ) }}€</td>
            </tr>
            @if($umzug_array['steuerbefreiung'] == 1)
                <tr>
                    <td>Steuerbefreiung nach § 4 Nr. 3 ff. UstG</td>
                    <td style="text-align: right;"></td>
                </tr>
            <tr>
                <td>Summe</td>
                <td style="text-align: right;"> {{ number_format ( $ergebnis[0] , $decimals = 2 , $dec_point = "," , $thousands_sep = "." ) }}€</td>
            </tr>
            @endif
            @if($umzug_array['steuerbefreiung'] == 0)
                <tr>
                    <td>Umsatzsteuer</td>
                    <td style="text-align: right;">{{ number_format ( $ergebnis[3]-$ergebnis[0] , $decimals = 2 , $dec_point = "," , $thousands_sep = "." ) }}€</td>
                </tr>
                <tr>
                    <td>Summe</td>
                    <td style="text-align: right;">{{ number_format ( $ergebnis[3] , $decimals = 2 , $dec_point = "," , $thousands_sep = "." ) }}€</td>
                </tr>
            @endif
    </table>

    {!! Form::close() !!}




@endsection

@section('scripts')
    <script>
        $(document).ready(function (e) {
           $("#result").tableExport(
               {
                   filename: 'umzugexport',
                   bootstrap: true,
                   formats: ['xlsx'],
                   position: 'bottom',
               }
           );
        });

    </script>



@endsection