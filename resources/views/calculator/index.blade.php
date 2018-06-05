@extends('layouts.app')

@section('content')

    <h1 class="mb-4">Umzugsrechner</h1>

    <div class="row">

        <div class="col-3">
            {{-- Sidebar for list buttons --}}
            <div class="sticky-top" id="accordion" style="top: 20px;">
                <h3>Wohnzimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'wohnzimmer', 'Sofa/Couch/Liege (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sitzlandschaft', 'wohnzimmer', 'Sitzlandschaft(Element, Anzahl Sitze)')">Sitzlandschaft (Element)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sessel_mit', 'wohnzimmer','Sessel mit Armlehne')">Sessel mit Armlehne
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sessel_ohne', 'wohnzimmer', 'Sessel ohne Armlehne')">Sessel ohne Armlehne
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stuhl_ohne', 'wohnzimmer', 'Stuhl ohne Armlehne')">Stuhl ohne Armlehne
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stuhl_mit', 'wohnzimmer','Stuhl mit Armlehne')">Stuhl mit Armlehne
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_b0,6', 'wohnzimmer', 'Tisch bis 0,6 (m)')">Tisch bis 0,6 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_b1,0', 'wohnzimmer', 'Tisch bis 1,0 (m)')">Tisch bis 1,0 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_b1,2', 'wohnzimmer', 'Tisch bis 1,2 (m)')">Tisch bis 1,2 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_ü1,2', 'wohnzimmer', 'Tisch über 1,2 (m)')">Tisch bis 1,2 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                                     onclick="addField('schrank_zerlegbar', 'wohnzimmer', 'Schrank zerlegb. (je angef. m)')">Schrank zerlegb.
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('anbauwand_b38', 'wohnzimmer', 'Anbauwand b. 38cm Tiefe (je angef. m)')">Anbauwand b. 38cm Tiefe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('anbauwand_ü38', 'wohnzimmer', 'Anbauwand ü. 38cm Tiefe (je angef. m)')">Anbauwand ü. 38cm Tiefe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bücherregal_zerlegbar', 'wohnzimmer', 'Bücherregal zerlegb. (je angef. m)')">Bücherregal zerlegb.
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('buffet_mit', 'wohnzimmer', 'Buffet mit Aufsatz')">Buffet mit Aufsatz
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('buffet_ohne', 'wohnzimmer', 'Buffet ohne Aufsatz')">Buffet ohne Aufsatz
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtisch_b1,6', 'wohnzimmer', 'Schreibtisch bis 1,6 (m)')">Schreibtisch bis 1,6 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtisch_ü1,6', 'wohnzimmer', 'Schreibtisch über 1,6 (m)')">Schreibtisch über 1,6 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('standuhr', 'wohnzimmer', 'Standuhr')">Standuhr
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('video_dvd_player', 'wohnzimmer', 'Video / DVD-Player')">Video / DVD-Player
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('musikschrank_turm', 'wohnzimmer', 'Musikschrank / Turm')">Musikschrank / Turm
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stereoanlage', 'wohnzimmer', 'Stereoanlage')">Stereoanlage
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('fernseher', 'wohnzimmer', 'Fernseher')">Fernseher
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('klavier', 'wohnzimmer', 'Klavier')">Klavier
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('flügel', 'wohnzimmer', 'Flügel')">Flügel
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('heimorgel', 'wohnzimmer', 'Heimorgel')">Heimorgel
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('nähmaschine', 'wohnzimmer', 'Nähmaschine (Schrank)')">Nähmaschine (Schrank)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stehlampe', 'wohnzimmer', 'Stehlampe')">Stehlampe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('brücke', 'wohnzimmer', 'Brücke')">Brücke
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('deckenlampe', 'wohnzimmer', 'Deckenlampe')">Deckenlampe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('lüster', 'wohnzimmer', 'Lüster')">Lüster
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('teppich', 'wohnzimmer', 'Teppich')">Teppich
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bilder_b0,8', 'wohnzimmer', 'Bilder bis 0,8 (m)')">Bilder bis 0,8 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bilder_ü0,8', 'wohnzimmer', 'Bilder über 0,8 (m)')">Bilder über 0,8 (m)
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sideboard_klein', 'wohnzimmer', 'Sideboard klein')">Sideboard klein
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sideboard_groß', 'wohnzimmer', 'Sideboard groß')">Sideboard groß
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tv_schrank', 'wohnzimmer', 'TV-Schrank')">TV-Schrank
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('umzugskarton', 'wohnzimmer', 'Umzugskarton bis 80 l (gepackt)')">Umzugskarton bis 80 l (gepackt)
                    </button>

                </div>
                <h3>Schlafzimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'schlafzimmer', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'schlafzimmer', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'schlafzimmer', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>
                <h3>Esszimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'esszimmer', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'esszimmer', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'esszimmer', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>
                <h3>Küche</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'küche', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'küche', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'küche', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>
                <h3>Bad</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'bad', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'bad', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'bad', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>
                <h3>Kinderzimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'kinderzimmer', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'kinderzimmer', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'kinderzimmer', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>
                <h3>Sonstiges</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'sonstiges', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'sonstiges', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'sonstiges', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>
                <h3>Weitere Zimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sofa_couch', 'weitere_zimmer', 'Sofa/Couch (Anzahl Sitze)')">Sofa/Couch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch', 'weitere_zimmer', 'Tisch (m)')">Tisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'weitere_zimmer', 'Schrank zerlegb. (m)')">Schrank zerlegb.
                    </button>
                </div>

            </div>
        </div>

        <div class="col-9">
            {!! Form::open(['id' => 'rechner', 'method'=>'POST', 'action'=>'CalculatorController@calculate']) !!}

            <div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        {!! Form::label('auszugsort', 'Auszugsort') !!}
                        {!! Form::text('auszugsort', null, ['class'=>'form-control', 'id'=>'auszug_autocomplete', 'placeholder'=>'Adresse eingeben']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('einzugsort', 'Einzugsort') !!}
                        {!! Form::text('einzugsort', null, ['class'=>'form-control', 'id'=>'einzug_autocomplete', 'placeholder'=>'Adresse eingeben']) !!}
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
                        {!! Form::number('volumen', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <hr>
                <div id="form-wohnzimmer" class="form-group row">
                    <h2 class="col-12">Wohnzimmer</h2>
                </div>
                <hr>
                <div id="form-schlafzimmer" class="form-group row">
                    <h2 class="col-12" >Schlafzimmer</h2>
                </div>
                <hr>
                <div id="form-esszimmer" class="form-group row">
                    <h2 class="col-12" >Esszimmer</h2>
                </div>
                <hr>
                <div id="form-küche" class="form-group row">
                    <h2 class="col-12" >Küche</h2>
                </div>
                <hr>
                <div id="form-bad" class="form-group row">
                    <h2 class="col-12" >Bad</h2>
                </div>
                <hr>
                <div id="form-kinderzimmer" class="form-group row">
                    <h2 class="col-12" >Kinderzimmer</h2>
                </div>
                <hr>
                <div id="form-sonstiges" class="form-group row">
                    <h2 class="col-12" >Sonstiges</h2>
                </div>
                <hr>
                <div id="form-weitere_zimmer" class="form-group row">
                    <h2 class="col-12" >Weitere Zimmer</h2>
                </div>
                <hr>
            </div>

            <div class="form-group">
                {!! Form::submit('Weiter', ['class' => 'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

        </div>

    </div>


@endsection


@section('scripts')

    <script>
        $(document).ready(function () {
            $("#accordion").accordion({
                heightStyle: "content",
            });
        });

        function addField(name, section, label) {
            if ($('#' + name + '-' + section).length > 0) {
                $('#' + name + '-' + section).effect("shake", {distance: 5, times: 3});
            } else {
                $('#form-' + section).append(
                    "<div class='col-sm-6' style='margin-bottom: 16px;'><label for='" + name + "[]'>" + label + "</label><input min='0' id='" + name + "-" + section + "' type='number' name='" + name + "[]' class='form-control'></div>"
                );
            }
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
            async defer></script>

@endsection