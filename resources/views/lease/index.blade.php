@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
            </div>
        </div>

        <div class="row row-padding-top">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div style="margin-top: -20px;" class="page-header">
                                    <h2 style="margin-bottom: -5px;">Verhuur info</h2>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <p>
                                    Onze Lokalen zijn het hele jaar te huur voor verenigingen.<br>
                                    Of je een kampplaats in een mooie, avontuurlijke omgeving met speelterrein voor kinderen;<br>
                                    een overnachtings plaats zoekt, of ...! We zijn rustig gelegen nabij het stadspark van Turnhout.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-rounded img-thumbnail" style="width: 400px; height: 200px;" src="{{ asset('img/verhuur-1.jpg') }}" alt="">
                                    </div>

                                    <div class="col-md-6">
                                        <img class="img-rounded img-thumbnail" style="width: 400px; height: 200px;" src="{{ asset('img/verhuur-2.jpg') }}" alt="">
                                    </div>
                                </div>

                                <p style="margin-top: 7px;">
                                    Onze lokalen Bestaan uit 2 Blokken. Waarin 1 grote zaal en 5 lokalen en sanitaire blok gevestigd zijn. De grote zaal is<br>
                                    Polyvalente. Verder is er ook nog een keuken. Deze keuken is voorzien 2 gasfornuizen, friet ketel ,keuken eilend, enz...
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-rounded img-thumbnail" style="width: 400px; height: 200px;" src="{{ asset('img/verhuur-3.jpg') }}" alt="">
                                    </div>

                                    <div class="col-md-6">
                                        <img class="img-rounded img-thumbnail" style="width: 400px; height: 200px;" src="{{ asset('img/verhuur-4.jpg') }}" alt="">
                                    </div>
                                </div>

                                <p style="margin-top: 7px;">
                                    In alle gebouwen is er verwarming aanwezig. Aan de gebouwen grenst er zich een groot grasveld, bos, vuurplaats<br>
                                    + u bevindt zich op wandel afstand van het stadspark. U hoeft ook echter 2 km te rijden voor zich u aan een<br>
                                    supermarkt bevind.
                                </p>
                            </div>

                            <div class="col-sm-3">
                                @include('lease.includes.sidebar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection