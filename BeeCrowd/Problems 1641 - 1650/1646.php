<?php

/*
Bruce Force está na floresta. Ele se pergunta qual é o tronco de árvore mais distante que não está bloqueado, a partir de seu ponto de vista, por outros troncos de árvores.

Bruce fez um mapa das árvores da floresta. O mapa mostra a sua posição atual como a origem de um sistema de coordenadas cartesianas. Árvore i é ilustrada no mapa como um círculo com centro (xi, yi) e raio ri. Você pode assumir que um tronco de árvore é visível se e somente se existe um segmento de linha da origem do mapa (0,0) até um ponto na borda do círculo, que representa o tronco da árvore, onde este segmento de linha não cruza ou tocar outro círculo.

Entrada
A entrada contém vários casos de teste. A primeira linha de cada caso de teste contém um inteiro n (1 ≤ n ≤ 1000), onde n especifica quantas árvores existem no mapa. As seguintes n linhas contém três inteiros xi, yi, ri (-10000 ≤ xi, yi ≤ 10000, 1 ≤ ri ≤ 1000), onde (xi, yi) é o centro do círculo que representa tronco i, e ri é o raio do círculo. Pode-se presumir que não há dois círculos da entrada que se interceptam, ou seja, para quaisquer dois círculos, a distância entre os seus centros é mais do que a soma dos seus raios. Além disso, você pode assumir que nenhum círculo contém a origem.

O último caso de teste é seguido por uma linha contendo um zero.

Dica: No segundo caso de teste, as quatro primeiras árvores bloqueiam a visão de todas as árvores mais longe do que estas quatro árvores.

Saída
Para cada caso de teste, imprima uma linha com a distância máxima euclidiana da origem a uma árvore visível. A distância de uma árvore deve ser medida utilizando a ponta da árvore mais próxima da origem, não importa se este ponto é, de fato, visível ou não.

Imprima a resposta com três dígitos depois do ponto decimal.
*/

// ATENÇÃO, ESTE PROBLEMA FOI RESOLVIDO PELO CHAT-GPT! 

function distance($x, $y) {
    return sqrt($x * $x + $y * $y);
}

while (true) {
    $n = intval(fgets(STDIN));
    if ($n == 0) break;

    $trees = [];
    for ($i = 0; $i < $n; $i++) {
        list($x, $y, $r) = array_map("intval", explode(" ", fgets(STDIN)));
        $trees[] = [$x, $y, $r, distance($x, $y) + $r];
    }

    usort($trees, function($a, $b) {
        return $b[3] - $a[3];
    });

    $visible = [];
    foreach ($trees as $tree) {
        $blocked = false;
        foreach ($visible as $v) {
            if ($tree[0] * $v[0] + $tree[1] * $v[1] >= $v[2] * $tree[2]) {
                $blocked = true;
                break;
            }
        }

        if (!$blocked) $visible[] = $tree;
    }

    echo sprintf("%.3f\n", $visible[0][3]);
}