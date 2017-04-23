@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
            </div>
        </div>

        <div class="row row-padding-top">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row"> {{-- Content --}}
                            <div class="col-md-12"> {{-- Page title --}}
                                <div style="margin-top: -20px;" class="page-header">
                                    <h2 style="margin-bottom: -5px;">Verhuur kalendar</h2>
                                </div>
                            </div> {{-- /page title --}}

                            <div class="col-sm-9"> {{-- Content --}}
                                <p>
                                    Hier vind u wanner onze lokalen al reeds verhuurd zijn.
                                    Vind u hier de datum niet dat u onze lokalen wilt huren leg dan snel je datum vast. Dat doe je door dit formulier in te vullen.
                                </p>

                                <div class="row">
                                    @if ((int) count($leases) === 0)
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="alert alert-info" role="alert">
                                                Er zijn momenteel geen reservaties.
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-xs-4 col-md-4 col-sm-4">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th>Start datum:</th>
                                                            <th>Eind datum:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($leases as $lease)
                                                            <tr>
                                                                <td>{{ $lease->start_date->format('d/m/Y') }}</td>
                                                                <td>{{ $lease->end_date->format('d/m/Y') }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif
          				        </div>
                            </div> {{-- End content --}}

                            <div class="col-sm-3"> {{-- Sidebar --}}
                                @include('lease.includes.sidebar')
                            </div> {{-- End sidebar --}}
                        </div> {{-- /Content --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
