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
<div class="container">
    <div>
        <h1 class="text-center text-success">Subscription Form</h1>
        <div>
            <form method="post" action="checkForm.php">
                <p>Personal Information</p>
                <div class="border m-3 p-3">
                    <label>Last Name: </label>
                    <input type="text" required name="last_name" placeholder="Last Name"
                           value="<?php if (isset($_POST["last_name"])) echo $lastName; ?>" autofocus="autofocus">
                    <label>First Name: </label>
                    <input type="text" required name="first_name" placeholder="First Name"
                           value="<?php if (isset($_POST["first_name"])) echo $firstName; ?>"><br>
                    <input type="radio" name="gender"
                           value="male" <?php if (isset($_POST["gender"]) && $gender == "male") echo "checked id=\"male\""; ?>>
                    <label>Male</label>
                    <input type="radio" name="gender"
                           value="female" <?php if (isset($_POST["gender"]) && $gender == "female") echo "checked id=\"female\""; ?>>
                    <label>Female</label><br>
                    <label>Address: </label><br>
                    <textarea name="address" cols="30" rows="10" <?php if (isset($_POST["address"])) echo $address; ?>></textarea>
                </div>
                <div class="border m-3 p-3">
                    <p>Magazines subccription for: </p>
                    <input name="magazine[]" type="checkbox"
                           value="time" <?php if (isset($checkValueTime)) echo $checkValueTime ?>>
                    <label>TIME</label>
                    <input name="magazine[]" type="checkbox"
                           value="newsweek" <?php if (isset($checkValueNewsweek)) echo $checkValueTime ?>>
                    <label>Newsweek</label>
                    <input name="magazine[]" type="checkbox"
                           value="sunday" <?php if (isset($checkValueSunday)) echo $checkValueTime ?>>
                    <label>Sunday</label>
                    <input name="magazine[]" type="checkbox"
                           value="vogue" <?php if (isset($checkValueTime)) echo $checkValueTime ?>>
                    <label>Vogue</label>
                    <input name="magazine[]" type="checkbox"
                           value="people" <?php if (isset($checkValueTime)) echo $checkValueTime ?>>
                    <label>Peole</label>
                    <p><?php if (isset($erroMess)) echo $erroMess?></p>
                </div>
                <div class="border m-3 p-3">
                    <input name="duration" type="radio"
                           value="1 Year" <?php if (isset($_POST["duration"]) && $duration == "1") echo "checked id =\"1 Year\""; ?>>
                    <label>1 Year</label>
                    <input name="duration" type="radio"
                           value="3 Years" <?php if (isset($_POST["duration"]) && $duration == "3") echo "checked id =\"3 Years\""; ?>>
                    <label>3 Year</label>
                    <input name="duration" type="radio"
                           value="5 Years" <?php if (isset($_POST["duration"]) && $duration == "5") echo "checked id =\"5 Years\""; ?>>
                    <label>5 Year</label><br>
                    <input name="pay" type="radio" value="Demand Draft" <?php if (isset($_POST["pay"])) echo "checked id=\"demand_draft\""?>>
                    <label>Demand Draft</label>
                    <input name="pay" type="radio" value="Credit Card" <?php if (isset($_POST["pay"])) echo "checked id=\"credit_crad\""?>>
                    <label>Credit Card</label>
                </div>
                <input type="submit" name="progess" value="Progess">
                <input class="ml-3" name="reset" type="reset" value="Reset">
            </form>
        </div>

    </div>
</div>

</body>
</html>