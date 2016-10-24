
@extends('layouts.default')

@section('content')
    <div class="container" id="search">
        <div class="row"> <br><br><br>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pesquisando por: {{ $search }}</div>
                    <div class="panel-body" id="post-data">

                        @include('includes.data_search')

                    </div>
                    <div class="ajax-load text-center" style="display:none">
                        <p><img src="{{ asset('img/loader.gif') }}">Carregando...</p>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
@endsection