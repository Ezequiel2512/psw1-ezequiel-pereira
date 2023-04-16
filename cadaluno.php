
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadaluno.css">
</head>
<body>
<?php
    include_once("titulo.php");       
       
?>       
<div class="meio">       
<form action="get.php" method="get">       
        <label>       
           NOME:
           <input type="text" name="nome">
         </label>
       <label >
           CPF:
           <input type="text" name="cpf">
       </label>
       <label>
           END:
           <input type="text" name="end" >
       </label>
       <label >
           CIDADE:
           <input type="text" name="cidade">
       </label>
       <label > <input type="submit"></label>

    </form>

</div>

   
    <?php
    include_once("footer.php")
    
    ?>
    
</body>
</html>
