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
$lastName = $_POST['lastName'];
$firstName = $_POST['lastName'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$pay = $_POST['pay'];
$checkboxarr = $_POST['checkbox[]'];


?>
<script>
        function areyousure() {
            alert();
        }
</script>

<div class="container">
    <p class="text-success text-center"><b>Subscription Form</b></p>
    <div class="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
                <div class="row">
        <div class="col">
            <fieldset>
                <legend>Personal Information:</legend>
                <label>Last Name: </label>
                <input class="mr-5"  type="text" name="lastName">
                <label class="pl-5">First Name:</label>
                <input type="text"  name="firstName"><br>
                <input type="radio" name="gender" id="male" value="male">
                <label>Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label>Female</label><br>
                <label>Address</label><br>
                <textarea name="address"  cols="30" rows="10"></textarea>
            </fieldset>
        </div>
    </div>
    <div class="row border mt-4">
        <div class="col">
            <p>Magazines Subscription For</p>
            <input class="mr-2" type="checkbox" name="checkbox[]" value="TIME">
            <label class="mr-2">TIME</label>
            <input class="mr-2" type="checkbox" name="checkbox[]" value="Newsweek">
            <label class="mr-2">Newsweek</label>
            <input class="mr-2" type="checkbox" name="checkbox[]" value="Sunday">
            <label class="mr-2">Sunday</label>
            <input class="mr-2" type="checkbox" name="checkbox[]" value="Vogue">
            <label class="mr-2">Vogue</label>
            <input class="mr-2" type="checkbox" name="checkbox[]" value="People">
            <label class="mr-2">People</label>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <fieldset>
                <legend>Duration</legend>
                <input type="radio" name="dateTime" value="1year">
                <label for="dateTime">1 Year</label>
                <input class="mr-2 ml-3" type="radio" name="dateTime" value="3Years">
                <label>3 Years</label>
                <input class="mr-2 ml-3" type="radio" name="dateTime" value="5Years">
                <label>5 Years</label>
            </fieldset>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <fieldset>
                <legend>Payment Options</legend>
                <input class="mr-2" type="radio" name="pay" value="Demand Draft">
                <label class="mr-2">Demand Draft</label>
                <input class="mr-2 ml-3" type="radio" name="pay" value="Creadit Card">
                <label>Creadit Card</label>
            </fieldset>
        </div>
    </div>
    <input class="btn bg-dark text-white" onclick="areyousure()" type="submit" value="Process">
    <input class="btn bg-dark text-white" type="reset" value="Reset">
    </form>
</div>
</div>
</body>
</html>