<!DOCTYPE html>
<html lang="pt-br">
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
                   <label for="nome">NOME:</label>
               <input type="text" name="nome" value=<?php echo $_GET["nome"];?>>
                   <label for="cpf">CPF:</label>
               <input type="text" name="cpf" value=<?php echo $_GET["cpf"];?>>
                   <label for="end">END:</label>
               <input type="text" name="end" value=<?php echo $_GET["end"];?>>
                   <label for="cidade">CIDADE:</label>
               <input type="text" name="cidade" value=<?php echo $_GET["cidade"];?>>
               <input type="submit" value="editar" >
               <input type="submit"  value="salvar"  >

    </div>
</form>

<?php
    include_once("footer.php")
    
    ?>
</body>
</html>