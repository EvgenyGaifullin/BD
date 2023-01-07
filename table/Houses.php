<?php 
require_once '../config/connect.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Houses</title>
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
                <th>number_person</th>
                <th>house_number</th>
            </tr>

            <?php
                $houses = mysqli_query($connect, query: "SELECT * FROM Houses");
                $houses = mysqli_fetch_all($houses);
                foreach ($houses as $house){
                    ?>
                    <tr>
                        <td><?=$house[0]?></td>
                        <td><?=$house[1]?></td>
                        <td><?=$house[2]?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <h1>Добавить новые данные</h1>
        <form action="../function/AddHouses.php" method="post">
            <p>Лицевой счет</p>
            <input type="text" name="number_person">
            <p>Номер квартиры</p>
            <input type="text" name="house_number"> <br> <br>
            <button type="submit">Добавить</button>
        </form>
    </body>
</html>