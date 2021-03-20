<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$email = $_POST["email"];
$checkboxArr = $_POST['checkbox'];
$gender = "";
$state = $_POST["state"];

?>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col border">
                <div class="row bg-secondary">
                    <h2>Registration Form</h2>
                </div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
                            <p>First name:</p>
                            <input type="text" name="firstName" required value="<?php echo $firstName ?>">
                            <p>Last Name</p>
                            <input type="text" name="lastName" required value="<?php echo $lastName ?>">
                            <p>Email</p>
                            <input type="email" name="email" value="<?php echo $email ?>">
                            <p>Gender: </p>
                            <input type="radio" name="gender" value="1">
                            <p>Male</p>
                            <input type="radio" name="gender" value="2">
                            <p>Female</p>
                            <p>State</p>
                            <select name="state" id="state">
                                <option value="1">Viet Nam</option>
                                <option value="2">USA</option>
                            </select>
                            <p>Hobbies</p>
                            <input type="checkbox" name="checkbox[]" value="1">
                            <p>Badminton</p>
                            <input type="checkbox" name="checkbox[]" value="2">
                            <p>Football</p>
                            <input type="checkbox" name="checkbox[]" value="3">
                            <p>Bicycle</p>
                            <input type="submit" value="Save record">
                            <input type="reset" value="Reset">
                        </form>
            </div>
            <div class="col ml-3">
                <div class="row border">
                    <div class="col">
                        <div class="row border bg-secondary">
                        <h2 class="text-center">Featured</h2>
                        </div>
                        <p><b>Special title treatment</b></p>
                        <p>With supporting text blow as natureal lead-in to additional content.</p>
                        <button class="bg-primary p-2">Go somewhere</button>
                        </div>
                    </div>  
            </div>
        </div>
    </div>
    <?php
    echo "<h1>Your Infor</h1>";
    echo $firstName . "<br>";
    echo $lastName . "<br>";
    echo $email . "<br>";
    foreach ($checkboxArr as $checkbox) {
        if ($checkbox == 1) {
            echo "Badminton <br>";
        } else if ($checkbox == 2) {
            echo "Football <br>";
        } else {
            echo 'Bicycle <br>';
        }
    }
    if ($gender == 1) {
        echo 'Male <br>';
    } else {
        echo 'Female <br>';
    }
    if ($state == 1) {
        echo "Viet Nam <br>";
    } else {
        echo "USA <br>";
    }
    ?>
</div>

</body>
</html>