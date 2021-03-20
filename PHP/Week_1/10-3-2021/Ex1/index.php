<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Gender:
    <input type="radio" name="gender" value="2">
    <input type="radio" name="gender" value="1">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    $gender = $_POST['gender'];
    if ($gender == 1) {
        echo 'Male';
    } else{
        echo 'Female';
    }

?>


</body>
</html>