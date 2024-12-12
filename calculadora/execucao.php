<?php

require_once('modelos/Calculadora.php');
require_once('modelos/Divisao.php');
require_once('modelos/Multiplicacao.php');
require_once('modelos/Resto.php');
require_once('modelos/Soma.php');
require_once('modelos/Subtracao.php');

do 
{
    $numA = readline("Insira o primeiro número: ");
    $numB = readline("Insira o segundo número: ");
    print "1 - Soma\n2 - Subtracao\n3 - Multiplicacao\n4 - Divisao\n5 - Resto\n\n";
    $operacao = readline();
    
    if ($operacao == 1) 
    {
        $soma = new Soma($numA, $numB);
        print "O resultado da soma é: " . $soma->calcular() . "\n\n";
    }
    elseif ($operacao == 2) 
    {
        $subtracao = new Subtracao($numA,$numB);
        print "O resultado da subtracao é: " . $subtracao->calcular() . "\n\n";
    }
    elseif ($operacao == 3) 
    {
        $multiplicacao = new Multiplicacao($numA,$numB);
        print "O resultado da multiplicacao é: " . $multiplicacao->calcular() . "\n\n";
    }
    elseif ($operacao == 4) 
    {
        $divisao = new Divisao($numA,$numB);
        print "O resultado da divisao é: " . $divisao->calcular() . "\n\n";
    }
    else
    {
        $resto = new Resto($numA,$numB);
        print "O resultado do resto é: " . $resto->calcular() . "\n\n";
    }
} while ($numA != 0 && $numB != 0);