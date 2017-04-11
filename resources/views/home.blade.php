@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
        </div>

        <div class="col-sm-12 row-padding-top">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4><strong><a href="#">Title of the post</a></strong></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="thumbnail">
                                            <img src="http://placehold.it/260x180" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option.
                                            Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei.
                                        </p>
                                        <p><a class="btn btn-sm btn-primary" href="">Lees meer</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <ul class="pagination pagination-sm">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Toekomstige evenementen:</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
