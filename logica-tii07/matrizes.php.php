<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Trabalhando com matrizes</h1>
    <?php
    //VETOR É UMA LINHA []
    //MATRIZ É LINHA E COLUNA []


        //Trabalhando com Matrizes
        $matriz = array(
            ["0,1", "0,2", "0,3", "0,4"],
            ["1,1", "1,2", "1,3", "1,4"]
        );

        echo $matriz[0][1];
        echo"<hr>";

        //Matriz Tridimensional
        $agenda = [
            'levi' => [ //linha
                //coluna
                'telefone' => ["11 - xxxxxxx", "11 - xxxxxxx"], //profundidade
                'email' => ["levi.amcoelho@senacsp.edu.br", "leviangelomiranda@gmail.com"],
                'data-nascimento' => ["08/02/1999"]
            ],
            'fulano' => [
                'telefone' => ["11 xxxxxxx", "11 xxxxxxx"],
                'email' => ["fulano@senacsp.edu.br", "fulaninho@gmail.com"],
                'data-nascimento' => ["06/4/1990"]
            ],
            'karen' => [
                'telefone' => ["11- xxxxxxx", "11 - xxxxxxx"],
                'email' => ["karenkaren@senacsp.edu.br", "fulaninhakaren@gmail.com"],
                'data-nascimento' => ["15/11/1991"]
            ]

        ];

        echo $agenda['fulano']['data-nascimento'][0]."<br><hr>", $agenda['karen']['data-nascimento'][0];
        echo"<hr>";

        //Agenda Bidimensional
        $agenda2 = [
            'alexandra' => [
            'telefone' => [
                'whatsapp' => ['11-xxxxxxxxx','11-xxxxxxxxx'],
                'fixo' => "11-xxxxxxxxx" //nessa linha não existe matriz, apenas ATRIBUIÇÃO do valor à variável 'fixo';
            ],
            'email' => 'alexandra@senacsp.edu.br',
            'data-nascimento' => '16/04/2005'
            ]
        ];

        echo $agenda2['alexandra']['telefone']['whatsapp'][0];
        echo"<br>";
        echo $agenda2['alexandra']['telefone']['fixo'];
        echo"<hr>";

        //Outra forma de criar
        $matriz2 = array(
            array("a0", "b1", "c2"), //linha0
            array("d0", "e1", "f2") //linha1
        );
        echo $matriz2[1][2];
        echo "<hr>";

        //Matriz tridimensional
        $matriz3 = [
        [
            [
                ["0","1"],
            ], //coluna0
            [2], //coluna1
            [3,4], //coluna2
        ] //linha0
        ];

        echo $matriz3[0][2][1];

    ?>
</body>
</html>