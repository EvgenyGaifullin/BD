<?php 
require_once '../config/connect.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Vedomost1</title>
    </head>
    <style>
        th, td {
            padding: 10px;
        }

        th {
            background: #606060;
            color: white;
        }

        td {
            background: #b8b8b8;
        }
    </style>
  <body>
	<form action="../Menu.php">
		<button type=""><font face="title1">Назад</button>
	</form>
	<H1 style="margin-left:20px;">Оборотная ведомость по квартирам на 2022 год</H1>

	<table>
		<tr>
			<th>&nbsp Квартира &nbsp</th>
			<th>&nbsp ВХ. Сальдо &nbsp</th>
			<th>&nbsp Январь &nbsp</th>
			<th>&nbsp Февраль &nbsp</th>
			<th>&nbsp Март &nbsp</th>
			<th>&nbsp Апрель &nbsp</th>
			<th>&nbsp Май &nbsp</th>
			<th>&nbsp Июнь &nbsp</th>
			<th>&nbsp Июль &nbsp</th>
			<th>&nbsp Август &nbsp</th>
			<th>&nbsp Сентябрь &nbsp</th>
			<th>&nbsp Октябрь &nbsp</th>
			<th>&nbsp Ноябрь &nbsp</th>
			<th>&nbsp Декабрь &nbsp</th>
			<th>&nbsp Исх. Cальдо &nbsp</th>
		</tr>
		<?php
		$houses = mysqli_query($connect, query: "SELECT DISTINCT Houses.house_number FROM HOUSES, Saldo_vx Where saldo_vx.houses_id = houses.id");
		$houses = mysqli_fetch_all($houses);
		foreach($houses as $h) {
			$saldo_vx = mysqli_query($connect, query: "SELECT saldo_vx From Saldo_vx, Houses
			                                           Where (saldo_vx.houses_id = houses_id) and house_number=$h[0]");
			$saldo_vx = mysqli_fetch_all($saldo_vx);
			foreach($saldo_vx as $sv){
				echo '
				<tr>
				<td>&nbsp' . $h[0] . '</td>
				<td>&nbsp' . $sv[0] . '</td>
				';
			}
		}
		for ($i=1; $i <= 1; $i++){
			$ved = mysqli_query($connect, query: "SELECT charges, payments, saldo FROM Charges
			                                      JOIN Payments on payments.charges_id = Charges.id
												  JOIN Saldo on saldo.charges_id = payments.charges_id
												  JOIN Houses on Houses.id = Charges.houses_id
												  JOIN Saldo_vx on Saldo_vx.houses_id = Houses.id
												  Where Payments.month = Charges.month and Charges.month = Saldo.month
												  and Payments.year = Charges.year and Charges.year = Saldo.year");
			$ved = mysqli_fetch_all($ved);
			foreach($ved as $v){
				echo '
				<td>&nbsp' . $v[0] . '&nbsp<br>&nbsp' . $v[1] . '&nbsp<br>&nbsp' . $v[2] . '&nbsp</td>
				';
			}
		}
		for ($i=3; $i <12; $i++){
			echo '
			<td>&nbsp0<br>&nbsp0<br>&nbsp0</td>
		';
		}
		if($i==12){
			echo '
			<td>&nbsp' . $v[2] . '&nbsp</td>
			';
		}
		
		?>
	</table>

  </menu>
 </body>
</html>