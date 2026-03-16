<?php

$nota1 = 3;
$nota2 = 6;
$nota3 = 9;
$nota4 = 9;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media >= 0 && $media < 5) {
    echo "Você foi reprovado por ficar abaixo da media com $media";
}
else if($media >= 5 && $media < 6.9) {
    echo "Você está de recuperação por ter tirado $media." ;
}  
else if($media >= 7 && $media <= 10){
    echo "Você esta aprovado por ter ficado acima da media com $media";

}
else {
    echo "Os numeros inseridos são invalidos";
}
