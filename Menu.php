<?php 
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
    <H1><font face="title1">Таблицы Базы Данных</font></H1>
	<form action="../table/Houses.php">
		<button type=""><font face="title2">Houses</font></button>
	</form>
	<br>
	<form action="../table/charges.php">
		<button type=""><font face="title3">Charges</font></button>
	</form>
	<br>
	<form action="../table/Payments.php">
		<button type=""><font face="title5">Payments</font></button>
	</form>
	<br>
	<form action="../table/Saldo.php">
		<button type=""><font face="title4">Saldo</font></button>
	</form>
	<br>
	<form action="../table/Vedomost1.php">
		<button type=""><font face="title5">Оборотная ведомость</font></button>
	</form>
	<br>
	<form action="../table/Vedomost2.php">
		<button type=""><font face="title6">Оборотная ведомость</font></button>
	</form>

</body>
</html>