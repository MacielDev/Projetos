@extends('categorias.categoria')

@section('content-back')
<div class="conteudo-position container">
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Treinamento</th>
                <th scope="col">Descrição</th>
                <th scope="col">Carga Horária</th>
                <th>Responsável</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Front-end</td>
                <td>HTML5</td>
                <td>Conceitos iniciais</td>
                <td>20 horas</td>
                <td>André</td>
                <td><a class="link_areas" href=""><img src="{{asset('images/icones/editar.png')}}" alt="editar"></a></td>
                <td><a class="link_areas" href=""><img src="{{asset('images/icones/deletar.png')}}" alt="editar"></a></td>
            </tr>

        </tbody>

    </table>
    <tfoot>
        <a href="{{route('criarCursos')}}">
            @csrf
            <button type="button" class="col btn btn-primary btn-lg btn-block">CRIAR CURSO<i class="fas fa-curling"></i></button>
        </a>
    </tfoot>



</div>


@endsection
