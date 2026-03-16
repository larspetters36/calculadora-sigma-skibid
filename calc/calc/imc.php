<?php

$peso = 69.67;
$altura = 1.67;

$imc = $peso / ($altura *$altura);


echo "<h1>IMC</h1>";
echo "<p>Peso: $peso kg</p>";
echo "<p>Altura: $altura </p>;";
echo  "<h2>IMC: " . number_format($imc, 2, ",");

if($imc < 18.5) {
    echo "Menor que 18,5: Abaixo do peso";
}
else if($imc >= 18.5 && $imc < 24.9) {
    echo "18,5 a 24,9: Peso normal";
}  
else {
    echo "Menor que 18,5: Abaixo do peso";

}
