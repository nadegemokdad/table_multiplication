<?php

session_start(); // declaration de session 

if (isset($_POST["table"])) { //verif de la variable $_POST["table"]
    $_SESSION["table"]  = $_POST["table"]; //garde la variable $_POST ds la session
};

if(isset($_POST["reponse"])) { // on teste si on a répondu ou pas
    if(isset($_SESSION['random'])){
        if($_SESSION['random'] * $_SESSION['table'] == $_POST['reponse']){
            $result = ' <p class="gagne">Gagné</p><p class="gagne2">la réponse était ' . $_POST["reponse"] . '</p>';
        }
        else {
            $result = '<p class="perdu">Perdu</p><p class="perdu2"> la réponse était ' . $_SESSION['random'] * $_SESSION['table'] . '</p>';
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
        <img src="img/abacus.png" alt="logo">

        </div>
        <div class="row justify-content-center">
        <h1 class="sloganp4">"Les mathématiques sont une gymnastique de l'esprit et une préparation à la philosophie."</h1>
        </div>
        <div class="row justify-content-center">
        <p class="auteur">Isocrate.</p>
        </div>
        <div class="row justify-content-center">
            <a href="tab_revision.php"><button type="button" class="btn btn-lg mb-2 button_color">Tables</button></a>
        </div>
        <div class="row justify-content-center">
            <a href="index.php"><button type="button" class="btn btn-lg mt-2 button_color" >Retour accueil</button></a>
        </div>
        <div class="row">
           <p class="reponserev"> <?php echo $_SESSION["table"] ?> X <?php echo $_SESSION["random"] ?> = </p>
        </div>
        <div class="row align-items-center">
        <form action="revisions.php" method="post">
            <label for="resultat" class="replab" > Réponse : </label>
            <input type="number" name="reponse" id="resultat">
            <input type="submit" class="btn button_tab" value="Envoyer">
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