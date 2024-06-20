<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor e Matriz</title>
</head>
<body>
    <?php
        //Criando vetor unilateral
        $vetor1=array(
            "Karen",
            "15/11/1991",
            32,
            "11 9 8989-8989",
            true
        );

        echo $vetor1[2]."<br>";

        $vetor2=[
            "TII-07",
            "Lab-31",
            "Manhã",
            true
        ];

        echo $vetor2[3]."<br>";

        //Vetor com parâmetro
        $vetor3=array(
            "nome" => "Karen",
            "data nasc" => "15/11/1991",
            "idade" => 32,
            "zap" => "11 9 8989-8989",
            "ativo" => true
        );

        echo $vetor3["nome"]."<br>";

        foreach($vetor3 as $chave =>$valor){
            echo "{$chave}:{$valor}"."<br>";
        };
        echo "<br><hr>";

        //Imprime todos os ddos do vetor
        //Tipo de informação e qntde de caracteres usado
        var_dump($vetor3);
        echo "<br><hr>";

        //Imprime todo o vetor de uma vez só
        print_r($vetor3);
        echo "<br><hr>";

        //Remove o primeiro item do vetor
        array_shift($vetor2);
        print_r($vetor2);
        echo "<br><hr>";

        //Remove o último item do vetor
        array_pop($vetor1);
        print_r($vetor1);
        echo "<br><hr>";

        //Organizar vetor em ordem crescente
        $vetor4=["Fuquinha", "Brasuca", "Palio bala", "Loira odonto"];
        sort($vetor4);
        print_r($vetor4);
        echo"<br><hr>";

        //Organizar vetor em ordem decrescente
        $vetor4=["Fuquinha", "Brasuca", "Palio bala", "Loira odonto"];
        rsort($vetor4);
        print_r($vetor4);
        echo"<br><hr>";
        
        //Organizar vetor com parâmetros em ordem crescente, de acordo com o valor
        asort($vetor3);
        print_r($vetor3);
        echo"<br><hr>";

        //Organizar vetor com parâmetros em ordem decrescente, de acordo com o valor
        arsort($vetor3);
        print_r($vetor3);
        echo"<br><hr>";

        //Organizar vetor com parâmetros em ordem crescente, de acordo com a chave
        ksort($vetor3);
        print_r($vetor3);
        echo"<br><hr>";

        //Organizar vetor com parâmetros em ordem decrescente, de acordo com a chave
        krsort($vetor3);
        print_r($vetor3);
        echo"<br><hr>";

        //Remover elementos repetidos dentro do vetor
        $vetor5=[3,4,6,8,3,4,9,7,3];
        $vetor5=array_unique($vetor5);
        print_r($vetor5);
        echo"<br><hr>";

        foreach($vetor4 as $carros){
            echo"$carros <br>";
        };
        echo count($vetor4);
        echo "<br><hr>";

        for($i=0;$i<count($vetor4);$i++){
            echo "$vetor4[$i] <br>";
        };
        echo "<br><hr>"
    ?>
    
</body>
</html>