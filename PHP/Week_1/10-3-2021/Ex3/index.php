<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <select name="select">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
    </select>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
$gender = $_POST['select'];
if ($gender == 1) {
    echo 'Option 1';
} else {
    echo 'Option 2';
}
?>
</body>
</html>