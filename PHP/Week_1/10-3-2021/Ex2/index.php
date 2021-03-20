<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="checkbox" name="checkbox[]" value="1" />
    <input type="checkbox" name="checkbox[]" value="2" />
    <input type="checkbox" name="checkbox[]" value="3" />

    <input type="submit" name="submit" value="Submit">
</form>
<?php
$checkboxArr = $_POST['checkbox'];
foreach ($checkboxArr as $checkbox) {
    if ($checkbox == 1) {
        echo 'Check1';
    }
    else if ($checkbox == 2) {
        echo 'Check2';
    }
    else {
        echo 'Check3';
    }
}
?>
</body>
</html>