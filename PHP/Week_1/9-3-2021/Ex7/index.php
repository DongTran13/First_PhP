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
        <?php for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $col + $row;
                if ($total % 2 == 0) {
                    echo "<td class='col-white'></td>";
                } else {
                    echo "<td class='col-black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>