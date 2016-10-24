@foreach($Catalogacaos as $Catalogacao)
    <div class="col-md-12 ">
        <div class="col-lg-2">
            <img class="img-responsive" src="{{ asset("images/thumbnail/$Catalogacao->foto") }}" alt="">

        </div>
        <div class="col-lg-10" data-search="{{ $search }}">
            <h3><a href="">{{ $Catalogacao->nome_especie }}</a></h3>
            <p>{{ str_limit($Catalogacao->Infor_etnofarmacologica, 400) }}</p>
        </div>

        <div class="text-right">
            <button class="btn btn-xs btn-success">Leia mais</button>
            @if (Auth::user() && Auth::user()->active)
                <a href="catalogacao/{{$Catalogacao->id}}/edit#services" class="btn btn-xs btn-warning">Editar</a>
            @endif
        </div>
        <hr style="margin:5px;">
    </div>
@endforeach