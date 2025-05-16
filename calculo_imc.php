<?php 
// RECEBENDO DADOS DO FORMULÁRIO
$peso = $_POST ['peso'];
$altura = $_POST ['altura'];


//CALCULA O IMC
$IMC = $peso / ($altura*$altura);


//DIMINUI AS CASAS DECIMAIS
$IMC = round($IMC , 2);


//CONDIÇÃO MULTIPLAS ESCOLHAS

//(se o IMC for menor que 18.5, está abaixo do peso normal)
if ($IMC < 18.5) {
    echo "Abaixo do peso normal: " .$IMC;  echo " kg";
} 

//(se o IMC for menor que 25, está abaixo do peso normal)
elseif ($IMC <25) {
    echo "Peso Normal: " .$IMC;  echo " kg";
}

elseif ($IMC <30) {
    echo "Excesso de Peso:  " .$IMC; echo " kg";
}

elseif ($IMC <35) {
    echo "Obesidade Classe I: " .$IMC;  echo " kg";
}

elseif ($IMC <40) {
    echo "Obesidade Classe II: " .$IMC;  echo " kg";
}


else {
    echo "Obesidade Classe III " .$IMC; echo " kg";
}


?>
