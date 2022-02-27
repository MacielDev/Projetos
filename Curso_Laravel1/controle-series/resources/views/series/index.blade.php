@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success p-md-4" role="alert">{{ $mensagem }}</div>
    @endif
    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark btn-lg mb-1">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item  d-flex justify-content-between align-items-center">
                <span id="nome-serie-{{ $serie->id }}">{{ $serie->nome }}</span>
                <div class="input-group w-50" hidden id="input-nome-serie-{{ $serie->id }}">
                    <input type="text" class="form-control" value="{{ $serie->nome }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" onclick="editarSerie({{ $serie->id }})">
                            <i class="bi bi-check-lg"></i>
                        </button>
                        @csrf
                    </div>
                </div>

                <span class="d-flex flex-row">
                    <a href="/series/{{ $serie->id }}/temporadas" class="mr-1 btn btn-info btn-sm"><i
                            class="bi bi-box-arrow-in-up-right"></i></a>

                    <button onclick="toggleInput({{ $serie->id }})" class="btn btn-success btn-sm"><i
                            class="bi bi-pencil"></i></button>

                    <form method="post" action="/series/remover/{{ $serie->id }}">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="ml-1 btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
    <script>
        function toggleInput(serieId) {
            const nomeSerieEl = document.getElementById(`nome-serie-${serieId}`);
            const inputSerieEl = document.getElementById(`input-nome-serie-${serieId}`);
            console.log(nomeSerieEl)
            console.log(inputSerieEl)
            if (nomeSerieEl.hasAttribute('hidden')) {
                nomeSerieEl.removeAttribute('hidden');
                inputSerieEl.hidden = true;
            } else {
                inputSerieEl.removeAttribute('hidden');
                nomeSerieEl.hidden = true;
            }
        }

        function editarSerie(serieId) {
            let formData = new FormData();
            const nome = document.querySelector(`#input-nome-serie-${serieId}>input`).value;
            const token = document.querySelector('input[name="_token"]').value;
            formData.append('nome',nome);
            formData.append('_token',token);
            const url =`/series/${serieId}/editaNome`;
            fetch(url,{
                body:formData,
                method:'POST'
            }).then(()=>{
                toggleInput(serieId);
                document.getElementById(`nome-serie-${serieId}`).textContent = nome;
            });
        }
    </script>
@endsection
