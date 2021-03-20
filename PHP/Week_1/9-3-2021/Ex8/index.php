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
    <table>
       <?php
            for($i=1;$i<=100;$i++) {
                echo $i . " ";

                if ($i % 10 == 0) {
                    echo "<br>";
                }
            }
       ?>
    </table>
</div>

</body>
</html>