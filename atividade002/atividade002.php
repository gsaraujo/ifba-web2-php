<?php

//Q001 -> Declare uma variável $nome e atribua a ela seu nome. Em seguida, exiba seu conteúdo
$nome = "Aluno exemplar";
echo $nome;

//Q002 - Declare três variáveis $a, $b e $c, atribuindo os valores 10, 20 e 30, respectivamente. Exiba a soma delas.
$a = 10;
$b = 20;
$c = 30;
echo $a + $b + $c;

//Q003 -> Dado $primeiro = "Olá" e $segundo = "Mundo", concatene-os com um espaço entre eles.
$primeiro = "Olá";
$segundo = "Mundo";
echo $primeiro . " " . $segundo;

//Q004 -> Utilize interpolação para exibir: Meu nome é SEUNOME e eu tenho SUAIDADE anos. usando as variáveis $nome = SEUNOME e $idade = SUAIDADE.
$nome = "Aluno exemplar Segundo";
$idade = 15;
echo "Meu nome é $nome e eu tenho $idade anos.";

//Q005 -> Verifique se uma variável $num = -5 é positiva. Se for, exiba “Positivo”.
$num = -5;
if($num > 0) {
    echo "Positivo";
}

//Q006 -> Usando if…else, diga se um número $n = 8 é par ou ímpar.
$n = 8;
if($n%2 == 0) {
    echo "Par";
} else {
    echo "Ímpar";
}
//Q007 -> Com if…elseif…else, classifique a idade $idade = 17 em “Criança” (0–12), “Adolescente” (13–17) ou “Adulto” (18+).
$idade = 17;
if($idade >= 0 && $idade <= 12) {
    echo "Criança";
} elseif ($idade > 12 && $idade <= 17) {
    echo "Adolescente";
} else {
    echo "Adulto";
}//lembrando que essa solução não trata possíveis "idades negativas".

//Q008 -> Implemente um sistema simples de autenticação: se $login == "admin" $senha =="1234", exiba “Bem-vindo”, senão “Acesso negado”.
$login = "admin";
$senha = "1234";
if($login == "admin" && $senha == "1234") {
    echo "Bem vindo";
} else {
    echo "Acesso negado";
}
