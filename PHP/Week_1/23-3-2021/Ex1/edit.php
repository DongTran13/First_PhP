<?php require ('connectSQL.php')?>
<?php
    $id = $_GET['id'];

$sql = "SELECT * FROM `employee`";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if (isset($_POST['save'])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desciption = mysqli_real_escape_string($conn, $_POST["description"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $salary = mysqli_real_escape_string($conn, $_POST["salary"]);
    $birthday = mysqli_real_escape_string($conn, $_POST["birth"]);
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    require("connectSQL.php");
    $sql = sprintf("UPDATE `employee` SET `name`= '%s',`description`='%s',`gender`='%s',`salary`='%s',`birthday`='%s' where id = $id ", $name, $desciption, $gender, $salary, $birthday, $id);

    $result = $conn->query($sql);
    header("location: employ_list.php");


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("check.php") ?>
    <?php require('connectSQL.php')?>
</head>
<body>
<div class="container">
    <h1>Edit: </h1>
    <hr>
    <div class="content">
        <form action="edit.php?id=<?php echo $row['id']?>" method="POST">
            <label>Name <span class="text-danger">*</span></label><br>
            <input type="text" name="name"><br>
            <span class="text-danger"><?php if (isset($erroName)) echo $erroName ?></span><br>
            <label>Description: </label><br>
            <textarea name="description" cols="30" rows="10"></textarea><br>
            <label>Salary</label><br>
            <input type="number" name="salary"><br>
            <label for="">Gender:</label> <br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">female <br>
            <label>Birthday: </label>
            <input type="date" name="birth"><br>
            <input type="submit" name="save" value="Save" onclick="page()" class="btn-primary">
            <input type="reset" name="cancel" value="cancel">
        </form>
    </div>
</div>
</body>
</html>