<?php
$host = "localhost";
$user = "root";
$haslo = "";
$baza = "łukasz mieczkowski";
$port 3306;

$poloczenie =@new Mysqli($host,$user,$haslo,$baza,$port);

if (mysqli_connect_errno()!=0){
    echo "błąd połączenia <br>";
    
}else {
    echo "Połoczono z db ";
}


?>