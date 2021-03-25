<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("check.php")?>
    <?php require('connectSQL.php')?>

</head>
<body>
<div class="container">
    <h1>Create Record: </h1>
    <hr>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
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
            <input type="submit" name="save" value="Save" class="btn-primary">
            <input type="reset" name="cancel" value="cancel">
        </form>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST["name"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desciption = mysqli_real_escape_string($conn, $_POST["description"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $salary = mysqli_real_escape_string($conn, $_POST["salary"]);
    $birthday = mysqli_real_escape_string($conn, $_POST["birth"]);


    $sql = "INSERT INTO `employee`(`name`, `description`, `gender`, `salary`, `birthday`) VALUES ('$name','$desciption','$gender','$salary','$birthday')";

    if ($conn ->query($sql)){
        header('location:employ_list.php');
    }
}
?>