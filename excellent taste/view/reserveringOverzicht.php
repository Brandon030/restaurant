<?php include 'Assets/header.php'; ?>
<link rel="stylesheet" type="text/css" href="CSS/THECSS.css">
<body>
	<a href="?op=create" style="color: black;">
		<button class="btn">reservering maken</button>
	</a>

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Datum</th>
				<th scope="col">Tijd</th>
				<th scope="col">Tafel</th>
				<th scope="col">Klantnaam</th>
				<th scope="col">Telefoon</th>
				<th scope="col">Aantal personen</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row = $reserveringen->fetch(PDO::FETCH_ASSOC)) {
					echo'<tr>
					<td>'. $row['datum']. '</td>
					<td>'. $row['tijd'].'</td>
					<td>' .$row['tafel'] . '</td>
					<td>' . $row['klantnaam'] . '</td>
					<td>' . $row['telefoonnummer'] . '</td>
					<td>' . $row['aantal_personen'] . '</td>
					<td><a href="?op=read&id='. $row['reserveringsID'] .'"> <button class="btn"><i class="fa fa-pencil" aria-hidden="true"></i></button></a><span class="tooltiptext">Aanpassen</span>
					<a href="#'. $row['reserveringsID'] .'"> <button class="btn"><i class="fa fa-cutlery" aria-hidden="true"></i></button></a><span class="tooltiptext">Bestelling(en)</span>
					<a href="?op=delete&id='. $row['reserveringsID'] .'"><button class="btn"><i class="fa fa-trash" aria-hidden="true"></i></button></a><span class="tooltiptext">Verwijderen</span>
					</td>
					</tr>';
				}
			?>
		</tbody>		
	</table>

</body>

<?php include 'Assets/footer.php'; ?>