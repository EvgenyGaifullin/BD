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
                <th>payments</th>
                <th>month</th>
                <th>year</th>
                <th>charges_id</th>
            </tr>

            <?php
                $payments = mysqli_query($connect, query: "SELECT * FROM Payments");
                $payments = mysqli_fetch_all($payments);
                foreach ($payments as $payment){
                    ?>
                    <tr>
                        <td><?=$payment[0]?></td>
                        <td><?=$payment[1]?></td>
                        <td><?=$payment[2]?></td>
                        <td><?=$payment[3]?></td>
                        <td><?=$payment[4]?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <h1>Добавить новые данные</h1>
        <form action="../function/AddPayments.php" method="post">
            <p>Начисления</p>
            <input type="number" name="payments">
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