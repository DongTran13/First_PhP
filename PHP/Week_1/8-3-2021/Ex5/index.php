<?php
    $numberElectric = 400;
    if($numberElectric<=100){
        echo ("Giá tiền điện tháng này của mày đấy thằng đầu moi: ". $numberElectric*450 +0.1*($numberElectric*450)." VNĐ");
    }elseif ($numberElectric>=100 && $numberElectric<=200){
        echo ("Giá tiền điện tháng này của mày đấy thằng đầu moi: ".$numberElectric*600+0.1*($numberElectric*600)." VNĐ");
    }elseif ($numberElectric>=200 && $numberElectric<=500){
        echo ("Giá tiền điện tháng này của mày đấy thằng đầu moi: ". $numberElectric*750+0.1*($numberElectric*750)." VNĐ");
    }elseif ($numberElectric>=500 && $numberElectric<=1000){
        echo ("Giá tiền điện tháng này của mày đấy thằng đầu moi: ".$numberElectric*900+0.1*($numberElectric*900)." VNĐ");
    }else{
        echo ("Giá tiền điện tháng này của mày đấy thằng đầu moi:".$numberElectric*1200+0.1*($numberElectric+1000). " VNĐ");
    }
?>