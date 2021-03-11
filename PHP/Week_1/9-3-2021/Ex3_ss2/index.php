<?php
    $i=1;
    while ($i<=100){
        $i++;
        if ($i>=20 && $i<=50){
            while ($i%3==0){
                echo ($i."<br>");
                $i++;
            }
        }
    }
?>
