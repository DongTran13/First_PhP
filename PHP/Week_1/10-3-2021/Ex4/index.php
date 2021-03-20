<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $username= $_POST["username"];
    $pass = $_POST["password"]
?>
    <div class="container">
        <div class="row radius-5px mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg-light-green text-center">
                <p><b>Sign in</b></p>
            </div>
            <div class="row w-100 m-2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
                        <ul class="list-group list-group-flush">
                            <li class="decorate-none"><input type="text" class=" w-100 p-2" required name="username" placeholder="Username" value="<?php echo $username?>"></li>
                            <li class="decorate-none"><input type="password" class="mt-3 mb-3 p-2 w-100" require name="password" placeholder="Password" value="<?php echo $pass?>"></li>
                            <li class="decorate-none"><input type="submit" class="p-2 w-100 bg-light-green" value="Login"></li>
                        </ul>
                    </form>
                </div>  
            </div>
            <div class="container">
                <?php
                if ($username== "admin" && $pass == "admin"){
                    echo $username."<br>";
                    echo $pass;
                }else{
                    echo "Wrong username or password";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>