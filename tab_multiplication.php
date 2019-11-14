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
            <h1> Notre slogan </h1>
        </div>
        <div class="row justify-content-center">
            <button class="btn btn-info">Retour</button>
        </div>
        <div class="row">
            <label for="table"> Choisissez une table de multiplication:</label>

            <form action="tab_multiplication.php" method="post">
                <select name="table" id="table">
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
                <input type="submit">
            </form>
            <div class="row">
                <?php
                //test de la variable post
                if (isset($_POST["table"])) { // verifie la presence de la variable "post[table]
                    $table = $_POST["table"];
                    $result;

                    for ($i = 1; $i < 16; $i++) { // si variable présente, alors il execute for et affiche le resultat
                        $result = $table * $i;

                        echo  $table . "x" . $i . " = " . $result . "<br>";
                    }
                }
                ?>
            </div>
        </div>

    </div>
</body>

</html>