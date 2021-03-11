<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="border-table">
        <?php
            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                    for ($col=1;$col<=10;$col++){
                        for ($i=1;$i<=100;$i++){
                            echo "<td class='col-white'><p>$i</p></td>";
                        }
                    }
                echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>