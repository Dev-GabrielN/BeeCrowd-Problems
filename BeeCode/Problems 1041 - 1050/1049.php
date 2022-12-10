<?php

$palavra = readline();
$palavra_2 = readline();
$palavra_3 = readline();

if ($palavra == 'vertebrado'){
    if ($palavra_2 == 'ave'){
        if ($palavra_3 == 'carnivoro'){
            echo 'aguia' . "\n";
        }
        
        if ($palavra_3 == 'onivoro'){
            echo 'pomba' . "\n";
        }
    }

    if ($palavra_2 == 'mamifero'){
        if ($palavra_3 == 'onivoro'){
            echo 'homem' . "\n";
        } else {
            echo 'vaca' . "\n";
        }
    }
}

if($palavra == 'invertebrado'){
    if ($palavra_2 == 'inseto'){
        if ($palavra_3 == 'hematofago'){
            echo 'pulga' . "\n";
        } else {
            echo 'lagarta' . "\n";
        }
    }

    if ($palavra_2 == 'anelideo'){
        if ($palavra_3 == 'hematofago'){
            echo 'sanguessuga' . "\n";
        } 
        if ($palavra_3 == 'onivoro'){
            echo 'minhoca' . "\n";
        }
    }

}