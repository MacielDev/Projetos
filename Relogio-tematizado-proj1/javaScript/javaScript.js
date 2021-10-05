window.onload =function(){
    horario()
    imagem()
    setInterval(horario,1000)
    setInterval(imagem,1000)
    imagem()
}
var agora = new Date()
function horario(){
    var agora = new Date()
    var relogio =`${agora.getHours()}:${agora.getMinutes()}:${agora.getSeconds()}`
    document.getElementById('horario').innerHTML = relogio
}
function imagem(){

    var periodo = agora.getHours()
    var mesagem = document.getElementById('mensagem')
    var imagem = document.getElementById('imagem')
    var corBody = document.getElementById('fundo')
    var conteudo = document.getElementById('conteudo')
    if(periodo >= 6 && periodo < 12){
        imagem.setAttribute('src','../imagens/bomDia.jpg')
        corBody.style.background = 'rgb(241, 195, 96)'
        conteudo.style.background = 'rgb(248, 246, 113)'
        mensagem.innerHTML = 'Bom Dia!!!'
    }else if(periodo >=12 && periodo < 18){
        imagem.setAttribute('src','../imagens/boaTarde.jpg')
        corBody.style.background = 'rgb(53, 88, 128)'
        conteudo.style.background = 'rgb(141, 156, 199)'
        mensagem.innerHTML ='Boa Tarde!!!'
    }else if(periodo >= 18 && periodo < 24){
        imagem.setAttribute('src','../imagens/boaNoite.jpg')
        corBody.style.background = 'rgb(57, 70, 85)'
        conteudo.style.background = 'rgb(73, 81, 102)'
        mensagem.innerHTML = 'Boa Noite!!!'
    }else{
        imagem.setAttribute('src','../imagens/boaMadrugada.jpg')
        corBody.style.background = 'black'
        conteudo.style.background = 'rgb(70, 68, 70)'
        mensagem.innerHTML = 'Boa Madrugada!!!'
    }

}

