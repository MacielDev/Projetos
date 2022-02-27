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
    formData.append('nome', nome);
    formData.append('_token', token);
    const url = `/series/${serieId}/editaNome`;
    fetch(url, {
        body: formData,
        method: 'POST'
    }).then(() => {
        toggleInput(serieId);
        document.getElementById(`nome-serie-${serieId}`).textContent = nome;
    });
}