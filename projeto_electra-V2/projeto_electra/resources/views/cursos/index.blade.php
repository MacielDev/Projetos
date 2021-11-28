@extends('layouts.categoria')

@section('title','Gerenciar Cursos')

@section('content-cursos')

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
            @php
            $responsavel = $curso->relUsers()->first()->name;
            $categoria = $curso->RelCategorias()->first()->nome;
            @endphp

            <tr>
                <td>{{$categoria}}</td>
                <td>{{$curso->nome_curso}}</td>
                <td>{{$curso->descricao_curso}}</td>
                <td>{{$curso->carga_horaria}}</td>
                <td>{{$responsavel}}</td>
                <td><a class="link_areas" href=""><img src="{{asset('images/icones/editar.png')}}" alt="editar"></a></td>
                <td>
                    <form action="/cursos/curso/{{$curso->id_curso}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" border-1" type="submit"><img src="{{asset('images/icones/deletar.png')}}"></button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>

    </table>
    <tfoot>
        <a href="{{route('create')}}">
            @csrf
            <button type="button" class="col btn btn-primary btn-lg btn-block">CRIAR CURSO<i class="fas fa-curling"></i></button>
        </a>
    </tfoot>



</div>


@endsection
