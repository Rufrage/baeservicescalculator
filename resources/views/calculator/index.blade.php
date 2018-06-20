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
                            onclick="addField('tisch_b06', 'wohnzimmer', 'Tisch bis 0,6 m')">Tisch bis 0,6 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_b10', 'wohnzimmer', 'Tisch bis 1,0 m')">Tisch bis 1,0 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_b12', 'wohnzimmer', 'Tisch bis 1,2 m')">Tisch bis 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tisch_a12', 'wohnzimmer', 'Tisch ab 1,2 m')">Tisch ab 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block"
                                     onclick="addField('schrank_zerlegbar', 'wohnzimmer', 'Schrank zerlegb. (je angef. m)')">Schrank zerlegb.
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('anbauwand_b38', 'wohnzimmer', 'Anbauwand bis 38cm Tiefe (je angef. m)')">Anbauwand bis 38cm Tiefe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('anbauwand_a38', 'wohnzimmer', 'Anbauwand ab 38cm Tiefe (je angef. m)')">Anbauwand ab 38cm Tiefe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('regal_zerlegbar', 'wohnzimmer', 'Bücherregal zerlegb. (je angef. m)')">Bücherregal zerlegb.
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('buffet_mit', 'wohnzimmer', 'Buffet mit Aufsatz')">Buffet mit Aufsatz
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('buffet_ohne', 'wohnzimmer', 'Buffet ohne Aufsatz')">Buffet ohne Aufsatz
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtisch_b16', 'wohnzimmer', 'Schreibtisch bis 1,6 m')">Schreibtisch bis 1,6 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtisch_a16', 'wohnzimmer', 'Schreibtisch ab 1,6 m')">Schreibtisch ab 1,6 m
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
                            onclick="addField('bilder_b08', 'wohnzimmer', 'Bilder bis 0,8 m')">Bilder bis 0,8 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bilder_a08', 'wohnzimmer', 'Bilder ab 0,8 m')">Bilder ab 0,8 m
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
                            onclick="addField('umzugskarton_b80', 'wohnzimmer', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('umzugskarton_a80', 'wohnzimmer', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>

                </div>
                <h3>Schlafzimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_bis_2_türen', 'schlafzimmer', 'Schrank bis 2 Türen, nicht zerlegb.')">Schrank bis 2 Türen
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_zerlegbar', 'schlafzimmer', 'Schrank zerlegbar (je angefang. m)')">Schrank zerlegbar
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('doppelbett', 'schlafzimmer', 'Doppelbett komplett')">Doppelbett komplett
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('einzelbett', 'schlafzimmer', 'Einzelbett komplett')">Einzelbett komplett
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bett_französisch', 'schlafzimmer', 'Französisches Bett komplett')">Französisches Bett komplett
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bettzeug', 'schlafzimmer', 'Bettzeug je Betteinheit')">Bettzeug je Betteinheit
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('nachttisch', 'schlafzimmer', 'Nachttisch')">Nachttisch
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bettumbau', 'schlafzimmer', 'Bettumbau')">Bettumbau
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('kommode', 'schlafzimmer', 'Kommode')">Kommode
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('frisierkommode', 'schlafzimmer', 'Frisierkommode (mit Spiegel)')">Frisierkommode
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('wäschetruhe', 'schlafzimmer', 'Wäschetruhe')">Wäschetruhe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stuhl_hocker', 'schlafzimmer', 'Stuhl, Hocker')">Stuhl, Hocker
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('spiegel_a08', 'schlafzimmer', 'Spiegel ab 0,8 m')">Spiegel ab 0,8 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('deckenlampe', 'schlafzimmer', 'Deckenlampe')">Deckenlampe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('fernseher', 'schlafzimmer', 'Fernseher')">Fernseher
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('teppich', 'schlafzimmer', 'Teppich')">Teppich
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bilder_b08', 'schlafzimmer', 'Bilder bis 0,8 m')">Bilder bis 0,8 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('bilder_a08', 'schlafzimmer', 'Bilder ab 0,8 m')">Bilder ab 0,8 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tv_schrank', 'schlafzimmer', 'TV-Schrank')">TV-Schrank
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('kleiderbehältnis', 'schlafzimmer', 'Kleiderbehältnis')">Kleiderbehältnis
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('umzugskarton_b80', 'schlafzimmer', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('umzugskarton_a80', 'schlafzimmer', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                    <h6><br>Gepackt:</h6>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('umzugskarton_b80_gepackt', 'schlafzimmer', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('umzugskarton_a80_gepackt', 'schlafzimmer', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                </div>
                <h3>Esszimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stuhl_ohne', 'esszimmer', 'Stuhl')">Stuhl
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('stuhl_mit', 'esszimmer', 'Stuhl mit Armlehnen')">Stuhl mit Armlehnen
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('eckbank', 'esszimmer', 'Eckbank (je Sitz)')">Eckbank (je Sitz)
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b06', 'esszimmer', 'Tisch bis 0,6 m')">Tisch bis 0,6 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b10', 'esszimmer', 'Tisch bis 1,0 m')">Tisch bis 1,0 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b12', 'esszimmer', 'Tisch bis 1,2 m')">Tisch bis 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_a12', 'esszimmer', 'Tisch ab 1,2 m')">Tisch ab 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('sekretär', 'esszimmer', 'Sekretär')">Sekretär
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('sideboard_klein', 'esszimmer', 'Sideboard klein')">Sideboard klein
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('sideboard_groß', 'esszimmer', 'Sideboard groß')">Sideboard groß
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('hausbar', 'esszimmer', 'Hausbar')">Hausbar
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('teewagen', 'esszimmer', 'Teewagen (nicht zerlegbar)')">Teewagen
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('teppich', 'esszimmer', 'Teppich')">Teppich
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('brücke', 'esszimmer', 'Brücke')">Brücke
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('deckenlampe', 'esszimmer', 'Deckenlampe')">Deckenlampe
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('stehlampe', 'esszimmer', 'Stehlampe')">Stehlampe
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('vitrine', 'esszimmer', 'Vitrine (Glasschrank)')">Vitrine
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('bilder_b08', 'esszimmer', 'Bilder bis 0,8 m')">Bilder bis 0,8 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('bilder_a08', 'esszimmer', 'Bilder ab 0,8 m')">Bilder ab 0,8 m
                    </button>
                    <h6><br>Gepackt:</h6>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_b80_gepackt', 'esszimmer', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_a80_gepackt', 'esszimmer', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                </div>
                <h3>Küche</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('buffet_mit', 'küche', 'Buffet mit Aufsätzen')">Buffet mit Aufsätzen
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('unterteil_tür', 'küche', 'Unterteil je Tür')">Unterteil je Tür
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('oberteil_tür', 'küche', 'Oberteil je Tür')">Oberteil je Tür
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b06', 'küche', 'Tisch bis 0,6 m')">Tisch bis 0,6 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b10', 'küche', 'Tisch bis 1,0 m')">Tisch bis 1,0 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b12', 'küche', 'Tisch bis 1,2 m')">Tisch bis 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_a12', 'küche', 'Tisch ab 1,2 m')">Tisch ab 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('stuhl_ohne', 'küche', 'Stuhl')">Stuhl
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('eckbank', 'küche', 'Eckbank je Sitz')">Eckbank je Sitz
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('besenschrank', 'küche', 'Besenschrank')">Besenschrank
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('herd', 'küche', 'Herd')">Herd
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('geschirrspülmaschine', 'küche', 'Geschirrspülmaschine')">Geschirrspülmaschine
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('waschmaschine_trockner', 'küche', 'Waschmaschine / Trockner')">Waschmaschine / Trockner
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kühlschrank_truhe_b120', 'küche', 'Kühlschrank / Truhe bis 120 l')">Kühlschrank / Truhe bis 120 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kühlschrank_truhe_a120', 'küche', 'Kühlschrank / Truhe ab 120 l')">Kühlschrank / Truhe ab 120 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('arbeitsplatte', 'küche', 'Arbeitsplatte nicht unterb. (je angef. m)')">Arbeitsplatte nicht unterb.
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('deckenlampe', 'küche', 'Deckenlampe')">Deckenlampe
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('teppich', 'küche', 'Teppich')">Teppich
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('mikrowelle', 'küche', 'Mikrowelle')">Mikrowelle
                    </button>
                    <h6><br>Gepackt:</h6>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_b80_gepackt', 'küche', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_a80_gepackt', 'küche', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                </div>
                <h3>Bad</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('truhe_kommode', 'bad', 'Truhe / Kommode')">Truhe / Kommode
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kleiderablage', 'bad', 'Kleiderablage')">Kleiderablage
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stuhl_hocker', 'bad', 'Stuhl / Hocker')">Stuhl / Hocker
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('toilettenschrank', 'bad', 'Toilettenschrank')">Toilettenschrank
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('wäschekorb', 'bad', 'Wäschekorb')">Wäschekorb
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('deckenlampe', 'bad', 'Deckenlampe')">Deckenlampe
                    </button>
                </div>
                <h3>Kinderzimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schrank_bis_2_türen', 'kinderzimmer', 'Schrank bis 2 Türen (nicht zerlegb.)')">Schrank bis 2 Türen
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('schrank_zerlegbar', 'kinderzimmer', 'Schrank zerlegbar (je angef. m)')">Schrank zerlegbar
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('einzelbett', 'kinderzimmer', 'Bett komplett')">Bett komplett
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kinderbett_komplett', 'kinderzimmer', 'Kinderbett komplett')">Kinderbett komplett
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('etagenbett_komplett', 'kinderzimmer', 'Etagenbett komplett')">Etagenbett komplett
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('bettzeug', 'kinderzimmer', 'Bettzeug je Betteinheit')">Bettzeug je Betteinheit
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('nachttisch', 'kinderzimmer', 'Nachttisch')">Nachttisch
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kommode', 'kinderzimmer', 'Kommode')">Kommode
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('schreibpult', 'kinderzimmer', 'Schreibpult')">Schreibpult
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('spielzeugkiste', 'kinderzimmer', 'Spielzeugkiste')">Spielzeugkiste
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b06', 'kinderzimmer', 'Tisch bis 0,6 m')">Tisch bis 0,6 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b10', 'kinderzimmer', 'Tisch bis 1,0 m')">Tisch bis 1,0 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b12', 'kinderzimmer', 'Tisch bis 1,2 m')">Tisch bis 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_a12', 'kinderzimmer', 'Tisch ab 1,2 m')">Tisch ab 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('laufgitter', 'kinderzimmer', 'Laufgitter')">Laufgitter
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('stuhl_hocker', 'kinderzimmer', 'Stuhl / Hocker')">Stuhl / Hocker
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('teppich', 'kinderzimmer', 'Teppich')">Teppich
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('brücke', 'kinderzimmer', 'Brücke')">Brücke
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('anbauwand_b38', 'kinderzimmer', 'Anbauwand b. 38cm Tiefe (je angef. m)')">Anbauwand b. 38cm Tiefe
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('anbauwand_a38', 'kinderzimmer', 'Anbauwand ab 38cm Tiefe (je angef. m)')">Anbauwand ab 38cm Tiefe
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('deckenlampe', 'kinderzimmer', 'Deckenlampe')">Deckenlampe
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kleiderbehältnis', 'kinderzimmer', 'Kleiderbehältnis')">Kleiderbehältnis
                    </button>
                    <h6><br>Gepackt:</h6>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_b80_gepackt', 'kinderzimmer', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_a80_gepackt', 'kinderzimmer', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                </div>
                <h3>Sonstiges</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('fahrrad_moped', 'sonstiges', 'Fahrrad / Moped')">Fahrrad / Moped
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('motorrad', 'sonstiges', 'Motorrad')">Motorrad
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('dreirad_kinderrad', 'sonstiges', 'Dreirad / Kinderrad')">Dreirad / Kinderrad
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('bügelbrett', 'sonstiges', 'Bügelbrett')">Bügelbrett
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('staubsauger', 'sonstiges', 'Staubsauger')">Staubsauger
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('autoreifen', 'sonstiges', 'Autoreifen')">Autoreifen
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('koffer', 'sonstiges', 'Koffer')">Koffer
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('klapptisch_klappstuhl', 'sonstiges', 'Klapptisch / Klappstuhl')">Klapptisch / Klappstuhl
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('kinderwagen', 'sonstiges', 'Kinderwagen')">Kinderwagen
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('leiter', 'sonstiges', 'Leiter')">Leiter
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('rasenmäher_motor', 'sonstiges', 'Rasenmäher Motor')">Rasenmäher Motor
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('rasenmäher_hand', 'sonstiges', 'Rasenmäher Hand')">Rasenmäher Hand
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('schubkarre', 'sonstiges', 'Schubkarre')">Schubkarre
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('werkzeugschrank', 'sonstiges', 'Werkzeugschrank')">Werkzeugschrank
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('werkzeugkoffer', 'sonstiges', 'Werkzeugkoffer')">Werkzeugkoffer
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('ski', 'sonstiges', 'Ski')">Ski
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('schlitten', 'sonstiges', 'Schlitten')">Schlitten
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('blumenkübel_kasten', 'sonstiges', 'Blumenkübel / Kasten')">Blumenkübel / Kasten
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('sonnenschirm', 'sonstiges', 'Sonnenschirm')">Sonnenschirm
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tischtennisplatte', 'sonstiges', 'Tischtennisplatte')">Tischtennisplatte
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('mülltonne', 'sonstiges', 'Mülltonne')">Mülltonne
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('regal_zerlegbar', 'sonstiges', 'Regal zerlegbar (je angef. m)')">Regal zerlegbar
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('gartengeräte', 'sonstiges', 'Gartengeräte')">Gartengeräte
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('sonnenbank', 'sonstiges', 'Sonnenbank')">Sonnenbank
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('gartengrill', 'sonstiges', 'Gartengrill')">Gartengrill
                    </button>
                    <h6><br>Gepackt:</h6>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_b80_gepackt', 'sonstiges', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_a80_gepackt', 'sonstiges', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                </div>
                <h3>Weitere Zimmer</h3>
                <div>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtisch_b16', 'weitere_zimmer', 'Schreibtisch bis 1,6 m')">Schreibtisch bis 1,6 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('schreibtisch_a16', 'weitere_zimmer', 'Schreibtisch ab 1,6 m')">Schreibtisch bis 1,6 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtischcontainer', 'weitere_zimmer', 'Schreibtischcontainer')">Schreibtischcontainer
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('schreibtischstuhl', 'weitere_zimmer', 'Schreibtischstuhl')">Schreibtischstuhl
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('winkelkombination', 'weitere_zimmer', 'Winkelkombination')">Winkelkombination
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('regal_zerlegbar', 'weitere_zimmer', 'Bücherregal zerlegbar (je angef. m)')">Bücherregal zerlegbar
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('aktenschrank', 'weitere_zimmer', 'Aktenschrank (je angef. m)')">Aktenschrank
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sessel_ohne', 'weitere_zimmer', 'Sessel ohne Armlehnen')">Sessel ohne Armlehnen
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('sessel_mit', 'weitere_zimmer', 'Sessel mit Armlehnen')">Sessel mit Armlehnen
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b06', 'weitere_zimmer', 'Tisch bis 0,6 m')">Tisch bis 0,6 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b10', 'weitere_zimmer', 'Tisch bis 1,0 m')">Tisch bis 1,0 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_b12', 'weitere_zimmer', 'Tisch bis 1,2 m')">Tisch bis 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('tisch_a12', 'weitere_zimmer', 'Tisch ab 1,2 m')">Tisch ab 1,2 m
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('computer', 'weitere_zimmer', 'Computer: PC / EDV-Anlage')">Computer: PC / EDV-Anlage
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('tischkopierer', 'weitere_zimmer', 'Tischkopierer')">Tischkopierer
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('stehlampe', 'weitere_zimmer', 'Stehlampe')">Stehlampe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('deckenlampe', 'weitere_zimmer', 'Deckenlampe')">Deckenlampe
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('teppich', 'weitere_zimmer', 'Teppich')">Teppich
                    </button>
                    <button class="btn btn-sm btn-block"
                            onclick="addField('brücke', 'weitere_zimmer', 'Brücke')">Brücke
                    </button>
                    <h6><br>Gepackt:</h6>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_b80_gepackt', 'weitere_zimmer', 'Umzugskarton bis 80 l')">Umzugskarton bis 80 l
                    </button>
                    <button class="btn btn-sm btn-block" onclick="addField('umzugskarton_a80_gepackt', 'weitere_zimmer', 'Umzugskarton ab 80 l')">Umzugskarton ab 80 l
                    </button>
                </div>

            </div>
        </div>

        <div class="col-9">
            {!! Form::open(['id' => 'rechner', 'method'=>'POST', 'action'=>'CalculatorController@calculate']) !!}

            <div>

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
                        {!! Form::select('aussenaufzug_auszug', ['J' => 'Ja', 'N' => 'Nein'], 'N', ['class'=>'form-control', 'id'=>'aussenaufzug_auszug'])  !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('aussenaufzug_einzug', 'Außenaufzug') !!}
                        {!! Form::select('aussenaufzug_einzug', ['J' => 'Ja', 'N' => 'Nein'], 'N', ['class'=>'form-control', 'id'=>'aussenaufzug_einzug'])  !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        {!! Form::label('halteverbot_auszug', 'Halteverbot') !!}
                        {!! Form::select('halteverbot_auszug', ['J' => 'Ja', 'N' => 'Nein'], 'N', ['class'=>'form-control', 'id'=>'halteverbot_auszug'])  !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('halteverbot_einzug', 'Halteverbot') !!}
                        {!! Form::select('halteverbot_einzug', ['J' => 'Ja', 'N' => 'Nein'], 'N', ['class'=>'form-control', 'id'=>'halteverbot_einzug'])  !!}
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
                        {!! Form::number('volumen', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        {!! Form::label('versicherung', 'Versicherung') !!}
                        {!! Form::number('versicherung', null, ['class'=>'form-control', 'id' => 'versicherung', 'min' =>0, 'step'=>0.01]) !!}
                    </div>
                </div>
                <div class="col-sm-6"

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
                {!! Form::submit('Weiter', ['class' => 'btn btn-primary', 'action'=>'CalculatorController@calculate']) !!}
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