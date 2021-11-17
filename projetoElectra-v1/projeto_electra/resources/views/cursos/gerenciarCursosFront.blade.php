@extends('categorias.categoria')

@section('content-front')
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
            @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->categoria_id_fk}}</td>
                <td>{{$curso->nome_curso}}</td>
                <td>{{$curso->descricao_curso}}</td>
                <td>{{$curso->carga_horaria}}</td>
                <td>{{$curso->user_id}}</td>
                <td><a class="link_areas" href=""><img src="{{asset('images/icones/editar.png')}}" alt="editar"></a></td>
                <td><a class="link_areas" href=""><img src="{{asset('images/icones/deletar.png')}}" alt="editar"></a></td>
            </tr>
            @endforeach


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
