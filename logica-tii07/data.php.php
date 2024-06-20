<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    
</body>
</html>
<?php
//Escreva um script PHP que imprima o dia da semana de uma data
$data = "25-05-2024";
$timestamp = strtotime($data); //calcular o numero de segundos desde 01-01-1970

if($timestamp === false){
    echo "Formato inválido.";
}else{
    $dia_semana = date("l", $timestamp);

    echo "O dia da semana para a data $data é $dia_semana";
}