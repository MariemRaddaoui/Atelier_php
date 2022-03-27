<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
</head>
<body style="text-align:center;">
<div>
<form action="index.php" method="post">
        <fieldset>
            <legend>NOUVELLE NOTE:</legend>
            <p>
        <label for="title">Titre</label>
        
        <input type="text" name="title">
        <br>
        <br>
        <textarea name="textarea" cols="30" rows="15"></textarea>
        <br><br>

        <input type="submit" value="Ajouter">
        </p>
    </filedset>
    </form>
    </div>
    <br>
    <a href="index.php">Retour à vos notes.</a>

    <?php
    session_start();


    ?>
</body>
</html>
