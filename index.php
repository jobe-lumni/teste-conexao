<?php
echo "Echo com aspas <br>";
echo ("Echo com parenteses e aspas <br>");
print "Print<br>";

// variáveis
$nome = "Jobe";
$idade = 29;
$altura = 1.72;
$doador_de_orgaos = true;

echo "<br>";
// tipo de dado
var_dump($nome);
echo "<br>";
// tipo de dado
var_dump($idade);
echo "<br>";
// tipo de dado
var_dump($altura);
echo "<br>";
// tipo de dado
var_dump($doador_de_orgaos);
echo "<br>";

echo "<p>Eu sou $nome e tenho $idade anos. </p>";

// constantes, sem letras maiúsculas
define("TAXA", 0.5);
define("JUROS", 0.01);

// concatecação com "."
echo "Taxa " . TAXA . "%<br>";
echo "Juros " . JUROS . "%<br>";
