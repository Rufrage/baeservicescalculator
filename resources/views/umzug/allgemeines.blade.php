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
                    {!! Form::button('Allgemeines', ['class' => 'nav-link active', 'type' => 'submit', 'name' => 'switch', 'value' => 'allgemeines']) !!}
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

    <!-- Felder für dieses Zimmer-->

        <div class="form-group row">
            <div class="col-sm-6">
                <h3>Auszug</h3><br>
                {!! Form::label('auszugsort', 'Auszugsort') !!}
                {!! Form::text('auszugsort', null, ['class'=>'form-control', 'id'=>'auszug_autocomplete', 'placeholder'=>'Adresse eingeben']) !!}
            </div>
            <div class="col-sm-6">
                <h3>Einzug</h3><br>
                {!! Form::label('einzugsort', 'Einzugsort') !!}
                {!! Form::text('einzugsort', null, ['class'=>'form-control', 'id'=>'einzug_autocomplete', 'placeholder'=>'Adresse eingeben']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                {!! Form::label('etage_auszug', 'Etage') !!}
                {!! Form::number('etage_auszug', null, ['class'=>'form-control', 'id' => 'etage_auszug', 'min'=>0]) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('etage_einzug', 'Etage') !!}
                {!! Form::number('etage_einzug', null, ['class'=>'form-control', 'id' => 'etage_einzug', 'min'=>0]) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                {!! Form::label('aussenaufzug_auszug', 'Außenaufzug') !!}
                {!! Form::select('aussenaufzug_auszug', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'aussenaufzug_auszug'])  !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('aussenaufzug_einzug', 'Außenaufzug') !!}
                {!! Form::select('aussenaufzug_einzug', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'aussenaufzug_einzug'])  !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                {!! Form::label('halteverbot_auszug', 'Halteverbot') !!}
                {!! Form::select('halteverbot_auszug', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'halteverbot_auszug'])  !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('halteverbot_einzug', 'Halteverbot') !!}
                {!! Form::select('halteverbot_einzug', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'halteverbot_einzug'])  !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                {!! Form::label('abtrageweg_auszug', 'Abtrageweg') !!}
                {!! Form::number('abtrageweg_auszug', null, ['class'=>'form-control', 'id' => 'abtrageweg_auszug', 'min'=>0]) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('abtrageweg_einzug', 'Abtrageweg') !!}
                {!! Form::number('abtrageweg_einzug', null, ['class'=>'form-control', 'min'=>0]) !!}
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-6">
                {!! Form::label('distanz_text', 'Distanz') !!}
                {!! Form::text('distanz_text', null, ['class'=>'form-control', 'readonly'=>'true', 'placeholder'=>'Wird automatisch berechnet', 'id' => 'distanz_text']) !!}
                {!! Form::hidden('distanz', null, ['id' => 'distanz']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('volumen', 'Volumen (m³)') !!}
                {!! Form::number('volumen', 0, ['class'=>'form-control']) !!}
            </div>
        </div>

    <div class="form-group row">
        <div class="col-sm-6">
            {!! Form::label('versicherung', 'Versicherungssumme') !!}
            {!! Form::number('versicherung', null, ['class'=>'form-control', 'id' => 'versicherung', 'min' =>0, 'step'=>0.01]) !!}
        </div>

        <div class="col-sm-6">
            {!! Form::label('übersee_lokal', 'Übersee/Lokal') !!}
            {!! Form::select('übersee_lokal', ['Ü' => 'Übersee', 'L' => 'Lokal'], null, ['class'=>'form-control', 'id'=>'übersee_lokal'])  !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('materialgestellung', 'Materialgestellung') !!}
            {!! Form::select('materialgestellung', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'montage'])  !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('montage', 'De- und Montage von teilbaren Möbeln') !!}
            {!! Form::select('montage', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'montage'])  !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('übersee_verpackung', 'Überseemäßige Verpackung') !!}
            {!! Form::select('übersee_verpackung', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'übersee_verpackung'])  !!}
        </div>
        <div class="col-sm-6">
            {!! Form::label('gestellung_container', 'Gestellung eines 20 Containers') !!}
            {!! Form::select('gestellung_container', ['J' => 'Ja', 'N' => 'Nein'], null, ['class'=>'form-control', 'id'=>'gestellung_container'])  !!}
        </div>

    </div>


    <div class="form-group row">
        <div class="col-12">
            <!-- Setzen des nächsten Zimmers als value -->
            {!! Form::button('Weiter', ['class' => 'btn btn-primary float-right', 'type' => 'submit', 'name' => 'switch', 'value' => 'wohnzimmer']) !!}
        </div>
    </div>

    {!! Form::close() !!}




@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $("#accordion").accordion({
                heightStyle: "content",
                collapsible:true,
            });
        });


        function addField(name, section, label) {
            if ($('#' + name + '-' + section).length > 0) {
                // $('#' + name + '-' + section).toggle("bounce");
                $('#' + name + '-' + section).css("border-color", "red");
                setTimeout(function(){ $('#' + name + '-' + section).css("border-color", "white")}, 1000);
            } else {
                $('#form-' + section).append(
                    "<div class='col-sm-6' style='margin-bottom: 16px;'>" +
                    "<label for='" + name + "[]'>" + label + "</label>" +
                    "<div class='input-group'>" +
                    "<span class=\"input-group-btn\">" +
                    "<button class=\"btn btn-default\" type=\"button\" onclick='decrease(\"" + name + "-" + section + "\")'>-</button>" +
                    "</span>" +
                    "<input min='0' id='" + name + "-" + section + "' type='number' value='0' name='" + name + "[]' class='form-control'>" +
                    "<span class=\"input-group-btn\">" +
                    "<button class=\"btn btn-default\" type=\"button\" onclick='increase(\"" + name + "-" + section + "\")'>+</button>" +
                    "</span>" +
                    "</div>" +
                    "</div>"
                );
            }
        }


        function changeborder(value){
            document.getElementById(value).css("border-color", "white");
        }

        function crease(value, operation){
            if (operation == inc){
                $dvalue = document.getElementById(value).value;
                $dvalue++;
                document.getElementById(value).value = $dvalue;
            }
            else if (operation == dec){
                $dvalue = document.getElementById(value).value;
                $dvalue--;
                document.getElementById(value).value = $dvalue;
            }


        }
        function decrease(value){
            if (document.getElementById(value).value == 0){

            }
            else {
                $dvalue = document.getElementById(value).value;
                $dvalue--;
                document.getElementById(value).value = $dvalue;
            }
        }

        function increase(value){
            $dvalue = document.getElementById(value).value;
            $dvalue++;
            document.getElementById(value).value = $dvalue;

        }

        function updateDistance() {
            if (auszug_autocomplete.getPlace() && einzug_autocomplete.getPlace()) {
                $auszug = auszug_autocomplete.getPlace().formatted_address;
                $einzug = einzug_autocomplete.getPlace().formatted_address;

                /** Calculate distance **/
                var service = new google.maps.DistanceMatrixService();
                service.getDistanceMatrix(
                    {
                        origins: [$auszug],
                        destinations: [$einzug],
                        travelMode: 'DRIVING',
                    }, setDistanceField);

                /** Set  **/
                function setDistanceField(response, status) {
                    if (status == 'OK') {
                        if (response.rows[0].elements[0].status == 'ZERO_RESULTS') {
                            $('#distanz_text').val("Es konnte kein Weg gefunden werden");
                            $('#distanz').val(-1);
                        } else {
                            $('#distanz_text').val(response.rows[0].elements[0].distance.text);
                            $('#distanz').val(response.rows[0].elements[0].distance.value);
                        }
                    } else {
                        console.log(response);
                    }
                }
            }
        }

        function initAutocomplete() {
            auszug_autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('auszug_autocomplete')),
                {types: ['geocode']});
            einzug_autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('einzug_autocomplete')),
                {types: ['geocode']});
            auszug_autocomplete.addListener('place_changed', updateDistance);
            einzug_autocomplete.addListener('place_changed', updateDistance);
        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0S1h8oYvT1KdHFbUGmHy8wTAo4FACNF0&libraries=places&callback=initAutocomplete"
            defer></script>

@endsection