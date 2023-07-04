<?php 

$Nota1 = $_POST['n1'];
$Nota2 = $_POST['n2'];

if($Nota1 > $Nota2){
   echo "O Maior Numero é: $Nota1";
}else{
    echo "O Maior Numero é: $Nota2";
}

?>