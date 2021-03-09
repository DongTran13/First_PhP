<?php
    $id = "EV2009";
    $name ="Tấm hợp kim nhôm ngoài trời EV2009";
    $number =500;
    $cost = 160000;
    $vat = 0.05;
    $beforeMinusVat = $number*$cost-$vat;
    $afterMinusVat = $number*$cost*$vat;
    echo ("Mã sản phẩm " . $id ."<br>". "Tên sản phẩm: ". $name."<br>". "Số lượng: ". $number."<br>"."Đơn giá: ".$cost."<br>". "VAT: ". $vat."<br>");

    echo ("Trước khi trừ thuế: ".$beforeMinusVat."<br>");
    echo ("Sau khi trừ thuế: ".$afterMinusVat);
?>
