<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Calculatrice</title>
</head>

<body>
  
  <?php

  if (isset($_POST['multipl']) && isset($_POST['multipl2'])){
    $operation=$_POST['operation'];
    $mult1 = $_POST['multipl'];
    $mult2 = $_POST['multipl2'];
    
        switch($operation){
      case "+":
          $resultat= $mult1+$mult2;
          break;
      case "-":
          $resultat= $mult1-$mult2;
          break;
      case "*":
          $resultat= $mult1*$mult2;
          break;
      case "/":
          if ($mult2 != 0){
          $resultat= $mult1/$mult2;
          }
          else echo "NON. Pas par 0. Erreur. Nul. Arrete tout. Repars en primaire.";
          break;
            
      }
    
   

  }
  ?>
  
  <form method="post" action="calculatrice.php">
    <fieldset>
      <legend><b><h1>Calculatrice</h1></b></legend>
       <input id="el1" type="number" name="multipl" value="<?php if (isset($resultat)) echo $resultat; ?>" placeholder="1ère valeur à calculer" />
       <select name="operation">
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">x</option>
         <option value="/" >/</option>
      </select>
      <input id="el2" type="number" name="multipl2" placeholder="2e valeur à calculer" />
    </fieldset>
    <input type="submit" name="accepter" value="Calculer" />
  </form>
  
  <?php 
  if ($resultat != null){
    echo "Le résultat est $resultat"; 
  }
  ?>
</body>

</html>