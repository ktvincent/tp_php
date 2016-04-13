<html>

<head>
  <meta charset="utf-8" />
  <title>Réponses</title>
</head>

<body>
  <?php 
  
  echo "<h1>Réponses</h1>";
  
  $nbq = $_POST['nbq'];
  $score = 0;  

  for ($i=1 ; $i<=$nbq ; $i++){
      echo "<li>Question n°$i :";
      if (isset($_POST['question'.$i])){
         if ($_POST['question'.$i] == "vrai"){
           echo "Bonne réponse";
           $score++;
         }
         if ($_POST['question'.$i] == "faux") 
           echo "Mauvaise réponse";
      }
      else echo "Pas de réponse";
        
      echo "</li>";
    
  }
      
    echo "<h4>Votre score est de : $score<h4>";
  
  ?>
  
</body>

</html>
  
  
  
