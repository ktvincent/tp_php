<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Formulaire 2</title>
</head>

<body>
  
  <form method="post" action="form2.php">
    <fieldset>
      <legend><b>Quelle table de multiplication souhaitez-vous?</b></legend>
       <input id="el1" type="text" name="multipl" placeholder="Table" /><br>
    </fieldset>
    <input type="submit" name="accepter" value="Envoyer" />
  </form>
  
<?php

  if (isset($_POST['multipl'])){
    $x = $_POST['multipl'];
    for($i=1;$i<=12;$i++){
      $resultat = $x*$i;
      echo "$x * $i = $resultat<br>";
    }
  } ?>
  
</body>

</html>