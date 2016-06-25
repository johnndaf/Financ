function formataDinheiro (valor){
    
    valor = parseFloat(valor);
    var valor_formatado;
    var valores;
    
    valor_formatado = valor.toFixed(2);
    valores = valor_formatado.split(".");
    
    if (valores[1].lenght < 2){
        valores[1] += "0";
    }
    
    valor_formatado = valores[0] + ',' + valores[1];
    
    return valor_formatado;
}

function insereRegistro(elem){
    var classValor = (elem.tipo == "C")? 'valor-credito':'valor-debito';
                   
    var data = new Date(elem.data);
                   
        var tr = $('<tr>' +
            '<td>'+data.getDate()+'/'+(data.getMonth()+1)+'/'+data.getFullYear()+'</td>'+
            '<td>'+elem.descricao+'</td>'+
            '<td>'+elem.categoria+'</td>'+
            '<td>'+elem.tipo+'</td>'+
            '<td class="'+classValor+'">R$ '+formataDinheiro(elem.valor)+'</td>'+
             '</tr>');
        
        $('#rel-30dias tbody').append(tr);
}


