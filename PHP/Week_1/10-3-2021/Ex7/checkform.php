<?php
$lastName = $_POST["last_name"];
$firstName = $_POST["first_name"];
$gender = $_POST["gender"];
$duration = $_POST["duration"];
$pay = $_POST["pay"];
$address = $_POST["address"];
if (empty($_POST["magazine"])) {
    $erroMess = "Bạn phải tích ít nhất 1 cái !";
} else {
    $magazine = $_POST["magazine"];
    foreach ($magazine as $value) {
        if ($value == "time") {
            $checkValueTime = "TIME";
        } elseif ($value == "newsweek") {
            $checkValueNewsweek = "Newsweek";
        } elseif ($value == "sunday") {
            $checkValueSunday = "Sunday";
        } elseif ($value == "vogue") {
            $checkValueVogue = "Vogue";
        } elseif ($value == "people") {
            $checkValuePeople = "People";
        }
    }
}

if (isset($magazine)) {
    $magazineList = "";
    for ($i = 0; $i < count($magazine); $i++) {
        if ($i == count($magazine) - 1) {
            $magazineList .= $magazine[$i];
        } else {
            $magazineList .= $magazine[$i] . ", ";
        }
    }
}

?>
<script>
    const openmess = confirm("Please check your information, again !!");
    if (openmess) {
        $windownQuestion = confirm("Do you want to order " + "<?php echo $magazineList ?>" + " magazine for " + "<?php echo $duration ?>" + " and to pay with " + "<?php echo $pay ?>");
    }
    if ($windownQuestion) {
        alert('<?php echo"Thank you very much for you order, we will supply as soon as possible the magazines for you to the address: $firstName $lastName , address: $address" ?>');
    }
</script>




