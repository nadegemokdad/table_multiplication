<?php

session_start(); // declaration de session 

if (isset($_POST["table"])) { //verif de la variable $_POST["table"]
    $_SESSION["table"]  = $_POST["table"]; //garde la variable $_POST ds la session
};

if(isset($_POST["reponse"])) { // on teste si on a répondu ou pas
    if(isset($_SESSION['random'])){
        if($_SESSION['random'] * $_SESSION['table'] == $_POST['reponse']){
            $result = "VRAI";
        }
        else {
            $result = "FAUX";
        }
    }
};

$_SESSION['random'] = rand(1,15);

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
                echo $_SESSION["table"] ." x " . $_SESSION["random"] . " = "  ;
            ?>
        </div>
        <div class="row">
        <form action="revisions.php" method="post">
            <label for="resultat"> Réponse : </label>
            <input type="number" name="reponse" id="resultat">
            <input type="submit" value="Valider">
        </form>

           
        
        </div>
        <div class="row">
           <div id="reponse">
            <?php if(isset($result)){ 
                echo $result; 
                };
            ?>
        </div> 
        </div>
           
    </div>
</body>

</html>