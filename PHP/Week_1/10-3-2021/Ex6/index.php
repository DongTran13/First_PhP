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
    $email = $_POST["email"];
    $mess = $_POST["mess"];
    $website = $_POST["url"];
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $websiteErr="";
if (empty($_POST["website"])) {
    $websiteErr = "Fill the form";
} else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    <div class="container">
        <div class="content bg-secondary">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="m-3">
                        <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
                            <input type="text" class="w-100 m-2" required name="name" placeholder="Your Name" value="<?php echo "$name" ?>"><br>
                            <input type="email" class="w-100 m-2" name="email" required placeholder="Your Email Address" value="<?php echo "$email" ?>"><br>
                            <input type="tel" class="w-100 m-2" name="telephone" required placeholder="Your Phone Number" value="<?php echo "$tel" ?>"><br>
                            <input type="text" class="w-100 m-2" name="website"  placeholder="Your Web Site starts with http://" value="<?php echo "$website" ?>"><br>
                            <p><span class="text-danger"><?php echo "$websiteErr"?></span></p>
                            <textarea name="mess" class="w-100 m-2" cols="30" rows="10" placeholder="Type your Message Here..." value="<?php echo "$mess" ?>"></textarea>
                            <button type="submit" class="w-100 m-2 bg-danger"><p><b>SUBMIT</b></p></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <?php
            echo "Your info: "."<br>";
            echo "Your name: ".$name."<br>";
            echo "Your email: ".$email."<br>";
            echo "Your telephone: ".$tel."<br>";
            echo "Your url: ".$website."<br>";
            echo "Your mess: ".$mess."<br>";
            ?>
        </div>
    </div>
    
</body>
</html>