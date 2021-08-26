window.onload  = function(){
   var verifica = document.getElementById('verificar')
   verifica.addEventListener('click', verificar)
}
function verificar(){
    var anoInformado = document.getElementById('anoNasc')
    var data = new Date()
    var anoAtual = data.getFullYear()
    
    
    if(anoInformado.value.length == 0 || Number(anoInformado.value)>anoAtual){
        alert('Erro - Informe uma ano de nascimento válido')
    }else{
        var sexo = document.getElementsByName('sexo')
        var idade = anoAtual - Number(anoInformado.value)
        var genero = ''
        var img = document.createElement('img')
        var resultado = document.getElementById('res')
        img.setAttribute('id','foto')
        if(sexo[0].checked){
            genero = 'Homem'
            if(idade >= 0 && idade < 4){
                //nenem
                img.setAttribute('src','../imagens/nenem-menino.png')
            }else if(idade<18){
                //criança
                img.setAttribute('src','../imagens/crianca-menino.png')
            }else if(idade<25){
                //jovem
                img.setAttribute('src','../imagens/homem-jovem.png')
            }else if(idade<50){
                //adulto
                img.setAttribute('src','../imagens/homem-jovem.png')
            }else{
                //idoso
                img.setAttribute('src','../imagens/homem-velho.png')
            }

           
        }else{
            genero = 'Mulher'
            if(idade >= 0 && idade < 4){
                //nenem
                img.setAttribute('src','../imagens/nenem-menina.png')
            }else if(idade<18){
                //criança
                img.setAttribute('src','../imagens/crianca-menina.png')
            }else if(idade<25){
                //jovem
                img.setAttribute('src','../imagens/mulher-jovem.png')
            }else if(idade<50){
                //adulto
                img.setAttribute('src','../imagens/mulher-jovem.png')
            }else{
                //idoso
                img.setAttribute('src','../imagens/mulher-idosa.png')
            }
        }
        resultado.innerHTML = `Detectamos ${genero} com ${idade} anos`
    
        resultado.appendChild(img)
        
    }
        
}

    
