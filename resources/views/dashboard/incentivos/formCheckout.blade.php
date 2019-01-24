@extends('site.master')

@section('content')

    @include('dashboard.menu')

    <div class="container">
    <h3>Investir em  {{$osc->nome_fantasia}}</h3>


        <form class="form form-investidor" action="{{route('pagar')}}" method="POST">
            @csrf

            <div class="form-group" id="box-tipo-usuario">
                <div class="form-group" style="margin-left: 25px">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" id="radioPF" value="OSC">
                        <label class="form-check-label" for="radioPF">Meu investimento sera para projetos</label>
                    </div>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" id="radioPJ" value="PROJETO">
                        <label class="form-check-label" for="radioPJ">Meu investidmento sera para a OSC</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Projetos Disponiveis</label>
                {!! Form::select('projeto_id',$projetos, old('projeto_id'),
                    ['class'=>'form-control','id'=>'projetos']) !!}
            </div>

            <div class="form-group">
                <label for="name">Quanto deseja Investir?</label>
                <input type="text" name="valor" class="form-control form-control-lg" id="valor" aria-describedby="emailHelp" placeholder="">
            </div>

            <input type="hidden" name="osc_id" value="{{$osc->id}}">


            <div class="form-group">
                <center>  <button type="submit" class="btn gradient-bg">Investir</button>
                    <a href="{{route('osc.show',$osc->id)}}" class="btn gradient-bg">Voltar</a>
                </center>

            </div>
        </form>
    </div>
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#valor").mask('#.##0.00', {reverse: true});
        });

    </script>
@stop