<?php

/* 
Faça um programa que leia um vetor N[20]. Troque a seguir, o primeiro 
elemento com o último, o segundo elemento com o penúltimo, etc., até 
trocar o 10º com o 11º. Mostre o vetor modificado.

Entrada
A entrada contém 20 valores inteiros, positivos ou negativos.

Saída
Para cada posição do vetor N, escreva "N[i] = Y", onde i é a posição do 
vetor e Y é o valor armazenado naquela posição.
*/

// Lê os valores do vetor N
for ($i = 0; $i < 20; $i++) {
    fscanf(STDIN, "%d", $n[$i]);
}

// Troca os elementos do vetor
for ($i = 0; $i < 10; $i++) {
    $temp = $n[$i];
    $n[$i] = $n[19 - $i];
    $n[19 - $i] = $temp;
}

// Imprime os valores do vetor N
for ($i = 0; $i < 20; $i++) {
    printf("N[%d] = %d\n", $i, $n[$i]);
}

?>
