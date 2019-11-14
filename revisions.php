<?php
// declaration de session 
session_start();
$result;
if (isset($_POST["table"])) { //verif de la variable $_POST["table"]
    $_SESSION["table"]  = $_POST["table"]; //garde la variable $_POST ds la session
};
if(isset($_POST["reponse"])) {
    for ($i=1; $i <16 ; $i++) {
        $_SESSION['randomn'.$i] = rand(1,15); 
    
    $result = $_SESSION["table"] * $_SESSION["randomn".$i];
        echo $result;
    }

var_dump($_SESSION["random_table"]);

var_dump($result);
if ($_POST["input"] == $result ) {
   echo "youpi";
   
}
else {
    echo "raté";
}
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table de multiplication</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <img src="" alt="">

        </div>
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <a type="button" class="btn btn-primary col-6" href="tab_revision.php">Tables</a>
            <a type="button" class="btn btn-success col-6" href="index.php">Retour accueil</a>

        </div>
        <div class="row">
            <?php
     
                echo $_SESSION["table"] ." x " . $_SESSION["randomn1"] . " = "  ;
               

           
            
            ?>
        </div>
        <div class="row">
        <form action="revisions.php" method="post">
            <label for="resultat"> Réponse : </label>
            <input type="number" name="input" id="resultat">
            <input type="submit" name = "reponse">
      
        </form>
             
        </div>
    </div>
</body>

</html>