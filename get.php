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
    <table >
        
    <tr>
    <td>  
        <?php
              echo $_GET["nome"];
              echo  "<br>"; 
           ?> 
    </td>   
    </tr>
    <tr> 
    <td>  
         <?php 
              echo $_GET["cpf"];
              echo  "<br>";
          ?> 
     </td> 
     </tr>
      <tr>
      <td>
        <?php
             echo $_GET["end"];
             echo  "<br>";
           ?>
     </td>
     </tr>
      <tr>
      <td>
            <?php
              echo $_GET["cidade"];
             ?>
        </td>
        </tr>
    </table>

    <form action="editar.php" method="get">
    <input type="hidden" name="nome" value=<?php echo $_GET["nome"]?>>
    <input type="hidden" name="cpf" value=<?php echo $_GET["cpf"];?>>
    <input type="hidden" name="end" value=<?php echo $_GET["end"];?>>
    <input type="hidden" name="cidade" value=<?php echo $_GET["cidade"];?>>
    <input type="submit" value="editar" >
   </form>

   </div>

   
    <?php
    include_once("footer.php")
    ?>
    
</body>
</html>