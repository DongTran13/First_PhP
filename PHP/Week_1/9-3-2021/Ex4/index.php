<?php
    $tong =0;
    $tongBinhPhuong = 1;
    for($i =1; $i<=100;$i++){
        $tong += $i;
        $tongBinhPhuong += $i*2;
        if ($i=50){
            for($i =1; $i<=50;$i++) {
                $tong += $i;
                $tongBinhPhuong += $i * 2;
            }
            break;
        }
    }
    echo ("Tổng 100 số đầu tiên: ".$tong."<br>");
    echo ("Tổng bình phương 100 số đầu: ".$tongBinhPhuong);
?>
