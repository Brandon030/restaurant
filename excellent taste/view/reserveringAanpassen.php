<?php include 'Assets/header.php'; ?>


<head>
	<title>Reservering aanpassen</title>
</head>
<body>
	<form action="" method="POST">
		<label for="datum">Datum:</label>
		<input type="DATE" class="form-control" name="datum"
		value= "<?=$reservering['datum']?>">
		<br>

		<label for="tijd">Tijd:</label>
		<input type="text" class="form-control" name="tijd"
		value= "<?=$reservering['tijd']?>"> 
		<br>

		<label for="tafel">Tafel:</label>
		<input type="text" class="form-control" name="tafel" 
		value= "<?=$reservering['tafel']?>">
		<br>

		<label for="naam">Reserverings Naam:</label>
		<input type="text" class="form-control" name="naam"
		value= "<?=$reservering['klantnaam']?>"> 
		<br>	

		<label for="telnr">Tel:</label>
		<input type="number" class="form-control" name="telnr"
		value= "<?=$reservering['telefoonnummer']?>">
		<br>

		<label for="personen">Aantal personen:</label>
		<input type="number" class="form-control" name="personen"
		value= "<?=$reservering['aantal_personen']?>"> 
		<br><br>

		<input type="submit" name="formSubmit">
		<a href="./index.php">
			<input type="button" value="terug" style="color: black;">
		</a>
	</form>
</body>

<?php include 'Assets/footer.php'; ?>
