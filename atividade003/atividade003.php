<?php
// Q001 -> Com for, imprima de 10 a 1 (decrescente).

for($i = 10; $i >= 0; $i--){
    echo $i . "<br>";
}

// Q002 -> Gere os primeiros 10 termos da sequência de Fibonacci usando for e exiba-os em uma string separada por vírgulas. (https://pt.wikipedia.org/wiki/Sequ%C3%AAncia_de_Fibonacci)
$primeiro = 0;
$segundo = 1;
echo "$primeiro, $segundo,";
for($i = 3; $i <= 10; $i++){
    $proximo = $primeiro + $segundo;
    echo "$proximo, ";
    $primeiro = $segundo;
    $segundo = $proximo;
}

// Q003 -> *Verifique se a variável $valor está definida e não é nula; se não, defina-a como 50 e exiba-a.
if(!isset($valor)) {
    $valor = 50;
    echo $valor;
}

// Q004 -> *Crie uma variável $preco com valor "100" (string) e outra $quantidade = 3.  Converta $preco para float, calcule o total e exiba-o.
$preco = "100";
$quantidade = 3;
settype($valor, "float");
$total = $preco * $quantidade;
echo "$total";

// Q005 -> *Em um for de 1 a 10, use break para interromper ao encontrar o valor 5.
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
}

// Q006 -> *Em um for de 1 a 10, use continue para pular a impressão dos múltiplos de 2.
for ($i = 1; $i <= 10; $i++) {
    if ($i%2 == 0) {
        continue;
    }
    echo $i;
}

// Q007 -> **Com while, calcule a soma de 1 até 10.
$i = 1;
$soma = 0;
while ($i < 11) {
    $soma +=$i;
    $i++;
}
echo $soma;

// Q008 -> *Utilize operador ternário para exibir “Maior de idade” se $idade = 20 for ≥ 18, ou “Menor de idade” caso contrário.
$idade = 20;
echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

// Q009 -> *Usando switch, exiba o dia da semana (1–7) em português, para $dia = 3.
$dia = 3;
switch ($dia) {
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Dia não existente na semana";

}

// Q010 -> *Defina uma constante SITE com valor "www.exemplo.com&quot; e exiba-a.
define("SITE", "www.ifba.com.br");//alterei o site! =D
echo SITE;

// Q011 -> *Crie uma variável variável chamada $a = "b" e $b = "PHP". Exiba o conteúdo de $b usando variável $a.
$a = "b";
$b = "PHP";
echo $$a;

// Q012 -> *Use o operador de coalescência nula (??) para obter $_GET['user'] ou, se não existir, usar "visitante" e imprimir.
$usuario = $_GET['user'] ?? "Visitante";
echo $usuario;

// Q013 -> *Use settype() para converter a string "123" em inteiro e exiba o tipo com gettype().
$string = "123";
settype($string, "integer");
echo gettype($string);

// Q014 -> *Aplique coalescência nula em cadeia: $a ?? $b ?? $c, com $a = null; $b = null; $c = 'OK'.
$a = null;
$b = null;
$c = "Ok";
echo $a ?? $b ?? $c;