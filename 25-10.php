<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $var = "Bill Gates"; 
    $tipo = gettype($var);
    echo "$var ($tipo)<br>"; 
    
    $var = 12;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";

    $var = 3.1415;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";

    $var = true;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";

    $data = date('25/10/22');
    $tipo = gettype($data);
    echo "$data ($tipo)<br>";

 
$var1 = 
if(is_null ($var1)) {
    echo "variavel $var1 é nula! <br>";
}
$var1 = "bill Gates";
if(is_string ($var1)) {
    echo "variavel $var1 é uma string!<br>";
}
$var1 = 12;
if(is_integer($var1)) {
    echo "variavel $var1 é um inteiro <br>";   
}
$var1 = false;
    if(is_bool ($var1)) {
        echo "variavel $var1 é um booleana";
        
    }







?>
    



</body>
</html>