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
            <h1> Slogan</h1>

        </div>
        <div class="row justify-content-center retour">
            <a href="index.php"><button type="button" class="btn btn-info btn-block" >Retour</button></a>
        </div>
        <div class="row align-items-center">
        <label for="table" class="choixtab"> Choisissez une table de multiplication à réviser : </label>
            <form action="revisions.php" method="post">
                <select class="select" name="table" id="table">
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
                <input type="submit" class="btn button_tab" value="Envoyer" >
            </form>
        </div>
</body>

</html>