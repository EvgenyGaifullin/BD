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
                <th>charges</th>
                <th>month</th>
                <th>year</th>
                <th>houses_id</th>
            </tr>

            <?php
                $charges = mysqli_query($connect, query: "SELECT * FROM Charges");
                $charges = mysqli_fetch_all($charges);
                foreach ($charges as $charge){
                    ?>
                    <tr>
                        <td><?=$charge[0]?></td>
                        <td><?=$charge[1]?></td>
                        <td><?=$charge[2]?></td>
                        <td><?=$charge[3]?></td>
                        <td><?=$charge[4]?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <h1>Добавить новые данные</h1>
        <form action="../function/AddCharges.php" method="post">
            <p>Начисления</p>
            <input type="number" name="charges">
            <p>Месяц</p>
            <input type="number" name="month"> 
            <p>Год</p>
            <input type="number" name="year">
            <p>House_id</p>
            <input type="number" name="houses_id">
            <button type="submit">Добавить</button>
        </form>
    </body>
</html>