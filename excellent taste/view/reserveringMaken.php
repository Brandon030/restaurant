<?php include 'Assets/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservering aanmaken</title>
</head>
<body>
	<form action="" method="POST">
		<label for="datum">Datum:</label>
		<input type="DATE" class="form-control" name="datum"> <br>

		<label for="tijd">Tijd:</label>
		<input type="text" class="form-control" name="tijd"> <br>

		<label for="tafel">Tafel:</label>
		<input type="text" class="form-control" name="tafel"> <br>

		<label for="naam">Reserverings Naam:</label>
		<input type="text" class="form-control" name="name"> <br>	

		<label for="telnr">Tel:</label>
		<input type="number" class="form-control" name="telnr"> <br>

		<label for="personen">Aantal personen:</label>
		<input type="number" class="form-control" name="personen"> <br><br>

		<input type="submit" name="formSubmit">
		<a href="./index.php">
			<input type="button" value="terug" style="color: black;">
		</a>
	</form>

</body>
</html>
<?php include 'Assets/footer.php'; ?>
