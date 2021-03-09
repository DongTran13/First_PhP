<?php
    $caculate = "tong";
    $a = 1;
    $b = 1;
    $tong = $a + $b;
    $hieu = $a - $b;
    $tich = $a * $b;
    switch ($caculate){
        case "tong" :
            echo "Tổng:" . $tong."<br>";
        case "hieu":
            echo "Hiệu: " . $hieu."<br>";
        case "tich":
            echo "Tích: ". $tich."<br>";
        case "thuong":
            if ($a < $b){
                $thuong = $b / $a;
                echo "Thương: " . $thuong;
            }elseif ($b < $a){
                $thuong = $a / $b;
                echo "Thương: " . $thuong;
            }else{
                $thuong = $a / $b;
                echo "Thương: " . $thuong;
            }
        break;

    }
?>