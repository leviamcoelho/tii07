<?php
//Escreva um script PHP que verifique se um número é par ou ímpar
 $numero = 10;

if($numero % 2 == 0){
    echo "O número $numero é Par";
}else{
    echo "O número $numero é Impar";
}

//verificar um numero é bom criar uma function
function verificaParouImpar($n){
    if($n % 2 == 0){
        echo "O número $n é Par";
    }else{
        echo "O número $n é Impar";
    }
}
//chamar a function
$numero = 4;
$resultado = verificaParouImpar($numero);

echo $resultado;