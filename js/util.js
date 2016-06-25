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


