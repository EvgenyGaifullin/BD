<?php 
require_once '../config/connect.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Charges</title>
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
        <table>
            <tr>
                <th>id</th>
                <th>saldo</th>
                <th>month</th>
                <th>year</th>
                <th>charges_id</th>
            </tr>

            <?php
                $saldos = mysqli_query($connect, query: "SELECT * FROM Saldo");
                $saldos = mysqli_fetch_all($saldos);
                foreach ($saldos as $saldo){
                    ?>
                    <tr>
                        <td><?=$saldo[0]?></td>
                        <td><?=$saldo[1]?></td>
                        <td><?=$saldo[2]?></td>
                        <td><?=$saldo[3]?></td>
                        <td><?=$saldo[4]?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <h1>Добавить новые данные</h1>
        <form action="../function/AddSaldo.php" method="post">
            <p>Начисления</p>
            <input type="number" name="saldo">
            <p>Месяц</p>
            <input type="number" name="month"> 
            <p>Год</p>
            <input type="number" name="year">
            <p>Charges_id</p>
            <input type="number" name="charges_id">
            <button type="submit">Добавить</button>
        </form>
    </body>
</html>