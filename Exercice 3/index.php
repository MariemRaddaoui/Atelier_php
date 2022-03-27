<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sondage</title>
</head>
<body>
<form id="form" method="POST" action="validation.php">
        <fieldset>
            <legend>COMMENT TROUVER-VOUS LE COURS DE PHP?</legend>
			<div>
                <input type="radio" name="sondage" value="bon">
                <label for="bon">Bon</label>
            </div>

            <div>
                <input type="radio" name="sondage" value="moyen">
                <label for="moyen">Moyen</label>
            </div>

            <div>
                <input type="radio" name="sondage" value="mauvais">
                <label for="mauvais">Mauvais</label>
            </div>
			<br><br>
        </fieldset>
        <br>

        <input name="submit" value="Submit" type="submit" />
    </form>


</body>
</html>