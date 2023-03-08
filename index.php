<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        body {
            background-color: pink;
        }
        </style>
</head>
<body>
 
<h1>Variaveis e tipos de dados</h1>
 
<?php

$nm_cliente="izabella";
$idade=16;
$peso=50.8;
$est_civil=true;


echo "O nome do cliente é:$nm_cliente </br>";

print_r("A idade do Cliente é:$idade </br>");

echo"O peso do meu cliente é:$peso  </br>";

echo"O estado civil é:$est_civil </br>";



var_dump($nm_cliente);
echo"<br>";
var_dump($idade);
echo"<br>";
var_dump($peso);
echo"<br>";
var_dump($civil);
echo"<br>";



?>


</body>
</html>