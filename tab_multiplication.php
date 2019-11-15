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
            <h1> Notre slogan </h1>
        </div>
        <div class="row justify-content-center retour">
            <a href="index.php"><button type="button" class="btn btn-info" >Retour</button></a>
        </div>
        <div class="row align-items-center">
            <label for="table" class="choixtab"> Choisissez une table de multiplication : </label>
            <form action="tab_multiplication.php" method="post">
                <select  class="select" name="table" id="table">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
                <input class="btn button_tab" type="submit" value="Envoyer">
            </form>
            </div>
            <div class="row justify-content-start mx-auto result">
                <!-- <div class="col"> -->
                    <?php
                    //test de la variable post
                    if (isset($_POST["table"])) { // verifie la presence de la variable "post[table]
                        $table = $_POST["table"];
                        $result;

                        for ($i = 1; $i < 16; $i++) { // si variable présente, alors il execute for et affiche le resultat
                            $result = $table * $i; ?>

                        <p class="tabmultiple"><?php echo $table ?> X <?php echo $i ?> = <?php echo $result ?> </p><br>

                        <?php
                        }
                    }
                    ?>
                <!-- </div> -->
            </div>
    </div>
</body>

</html>