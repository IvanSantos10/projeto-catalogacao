@extends('layouts.default')
@section('content')
    @foreach($catalogacaos as $k => $val)
        <div class="content-section-{{ $k % 2 ? 'a' : 'b'}}">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 {{ $k % 2 ? '' : 'col-lg-offset-1 col-sm-push-6'}}">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">{{ $val['nome_especie'] }} </h2>
                        <p class="lead">{{ $val['Infor_etnofarmacologica'] }}</p>
                    </div>
                    <div class="col-lg-5 {{ $k % 2 ? 'col-lg-offset-2' : 'col-sm-pull-6'}} col-sm-6">
                        <img class="img-responsive" src="{{ asset("images/thumbnail/$val[foto]") }}" alt="">
                    </div>
                </div>

                @if (Auth::user() && Auth::user()->active)
                    <div class="text-{{ $k % 2 ? 'left' : 'right'}}">
                        <a href="catalogacao/{{$val['id']}}/edit#services" class="btn btn-xs btn-warning">Editar</a>
                    </div>
                @endif
            </div>
            <!-- /.container -->

        </div>
    @endforeach
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">
            <div class="text-center">
                {{ $catalogacaos->fragment('services')->render() }}
            </div>
        </div>
        <!-- /.container -->

    </div>
@stop
