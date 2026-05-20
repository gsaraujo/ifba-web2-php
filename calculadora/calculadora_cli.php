<?php

$menu = "\nBem vindo ao Calculator.\nDigite a opção desejada: 
    \n1 - Soma
    \n2 - Subtracao
    \n3 - Multiplicacao
    \n4 - Divisao
    \n5 - Sair";
echo $menu;
$opcao = readline("\nDigite o opcao: ");

while ($opcao != 5) {

    if ($opcao == 1){

        $parcela1 = readline("\nDigite a primeira parcela: ");
        $parcela2 = readline("\nDigite a segunda parcela: ");
        $soma = $parcela1 + $parcela2;
        echo "\n$parcela1 + $parcela2 = ".$soma."\n";

    }//soma
    if ($opcao == 2){

        $minuendo = readline("\nDigite a minuendo: ");
        $subtraendo = readline("\nDigite o subtraendo: ");
        $diferenca = $minuendo - $subtraendo;
        echo "\n$minuendo - $subtraendo = ".$diferenca."\n";

    }//subtracao
    if ($opcao == 3){

        $multiplicando = readline("\nDigite o multiplicando: ");
        $multiplicador = readline("\nDigite o multiplicador: ");
        $produto = $multiplicando * $multiplicador;
        echo "\n$multiplicando * $multiplicador = ".$produto."\n";

    }//multiplicacao
    if ($opcao == 4){

        $dividendo = readline("\nDigite o dividendo: ");
        $divisor = readline("\nDigite o divisor: ");
        $quociente = $dividendo / $divisor;
        echo "\n$dividendo / $divisor = ".$quociente."\n";

    }//divisao
    if ($opcao == 5){
        echo "Obrigado por utilizar o Calculator!\nAté a próxima!";

    }//sair

    echo $menu;
    $opcao = readline("\nDigite o opcao: ");
}