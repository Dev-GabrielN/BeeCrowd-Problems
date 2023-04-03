<?php
/*
Amarelinha provavelmente é a brincadeira em que as crianças da vila mais se divertem, porém a mesma 
vem causando um bom tempo de discussão e choro nas crianças que a praticam. A causa do transtorno é 
para decidir quem será o próximo a pular, mas recentemente Quico (O gênio!) teve uma grande ideia para
solucionar o problema. Basicamente a brincadeira só poderá ser jogada de dois em dois jogadores e para
escolher o próximo jogador Quico indicou o uso do tradicional método par ou ímpar, onde os dois 
jogadores informam um número e se a soma desses números for par o jogador que escolheu PAR ganha ou 
vice verso. Entretanto a utilização desse método vem deixando o Quico louco, louco, louco... E por 
esse motivo ele pediu a sua ajuda! Solicitou a você um programa que dado o nome dos jogadores, suas 
respectivas escolhas PAR ou IMPAR e os números, informe quem foi o vencedor.

Entrada
A primeira linha de entrada contém um número inteiro QT (1 ≤ QT ≤ 100), indicando a quantidade de casos 
de teste que vem a seguir. Cada caso de teste contém duas linhas. Na primeira linha será informado o 
nome do jogador 1 seguido de sua escolha, “PAR” ou “IMPAR” e logo após, o nome do jogador 2 seguido de 
sua escolha, “PAR” ou “IMPAR”. Na segunda linha de entrada, contém 2 números inteiros N (1 ≤ N ≤ 10⁹) 
e M (1 ≤ M ≤ 10⁹), representando respectivamente os números escolhidos pelo jogador 1 e pelo jogador 2. 
É garantido que a escolha (PAR ou IMPAR) do jogador 1 será diferente da escolha (PAR ou IMPAR) do 
jogador 2 e que o nome dos jogares são formados somente por letras e não ultrapassarão 100 caracteres.

Saída
Para cada caso de teste, imprima uma única linha contendo o nome do jogador vencedor.
*/

# Inserir o número de casos de testes.
$num_testes = (int) readline();

# Condição para checar se o número é válido.
while ($num_testes < 1 || $num_testes > 100) {
    echo 'Quantidade de testes inválidas!' . PHP_EOL;
    $num_testes = (int) readline('Insira um número entre 1 e 100: ') . PHP_EOL;
}

# Inicio do Loop.
for ($i = 0; $i < $num_testes; $i++) {
    $input_1 = readline('Insira os nomes e a escolha de cada jogador: ') . PHP_EOL;
    $input_2 = readline('Qual números eles escolheram respectivamente: ') . PHP_EOL;

    # Separa a entrada em uma string com os nomes e as escolhas dos jogadores.
    $input_1 = explode(' ', $input_1);

    $player_one = $input_1[0];
    $option_one = $input_1[1];
    $player_two = $input_1[2];
    $option_two = $input_1[3];

    # Separa a string e atribue a cada variavel seu respectivo número. 
    $input_2 = explode(' ', $input_2);

    $num_one = intval($input_2[0]);
    $num_two = intval($input_2[1]);

    $result = $num_one + $num_two;

    # Compara se o resultado é PAR ou IMPAR.
    if ($result % 2 == 0) {
        $result = 'PAR';
    } else {
        $result = 'IMPAR';
    }

    # Decide o jogador com base no resultado.
    if ($option_one == $result) {
        echo $player_one . PHP_EOL;
    } else {
        echo $player_two . PHP_EOL;
    }
}
