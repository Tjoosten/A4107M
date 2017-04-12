@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
            </div>
        </div>

        <div class="row-padding-top">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="margin-top: -20px;" class="page-header">
                                <h2 style="margin-bottom: -5px;">Verhuring aanvragen</h2>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <p>
                                Heb je intresse in onze lokalen als kampplaats, weekend, of bijeenkomst?
                                Dan kun je hier een verhuring aanvragen. <br>

                                <span class="text-danger">
                                    Maar let wel op het laatste weekend van een maand verhuren wij niet,
                                    doorheen het werkingsjaar. (September - Juni)
                                </span>
                            </p>

                            <form style="margin-top: 25px;" method="POST" action="{{ route('lease.store') }}" class="form-horizontal">
                                {{ csrf_field() }} {{-- CSRF TOKEN --}}

                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        Start datum: <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="start_date" placeholder="Start datum verhuring">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        Eind datum: <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="end_date" placeholder="Eind datum verhuring">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        Groep: <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="group_name" placeholder="groep">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        E-mail: <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="email_address" placeholder="E-amil adres v/d contactpersoon">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">
                                        GSM-nummer: {{-- <span class="text-danger">*</span> --}}
                                    </label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="phone_number" placeholder="GSM-nummer v/d contact persoon">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-5 col-md-offset-2">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <span class="fa fa-btn fa-check"></span> Aanvragen
                                        </button>

                                        <button type="reset" class="btn btn-sm btn-danger">
                                            <span class="fa fa-btn fa-close"></span> Reset
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="col-sm-3">
                            @include('lease.includes.sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection