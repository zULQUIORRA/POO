<?php
include("trab_assalariado.php");

$pessoa = new Empregado("nome","sobrenome","salario");
$nome = "jaolindao";
$sobrenome = "perfeito";
$salario = 1.212;
$salAnual = 14.544;
$aumento =  ($salario * 12) / 10; 

echo "<p> nome: " .$nome. "<p>";
echo "<p> sobrenome: " .$sobrenome. "<p>";
echo "<p> salario: R$" .$salario. "</p>";
echo "<p> salario anual: " .$salAnual. "</p>";
echo "<p> salario com aumento de 10%: " .number_format($aumento,3,".","."). "</p>";

?>