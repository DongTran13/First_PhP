<?php 
    session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "admin" && $password === "123456") {
            if (isset($_POST['remember-me'])) {
                //cookie sống trong 30 giây
                setcookie('username', $username, time() + 30);
            } else {
                $_SESSION['username'] = $username;
            }
            
            header('location: login-success.php');
        }
        $error = 'Login failed';
    }

    //Kiểm tra nếu logout success thì ghi ra thông báo Logout success
    if (isset($_SESSION['logout-success'])) {
        $logoutSuccessMessage = $_SESSION['logout-success'];
        //huỷ session ngay lập tức, mình không cần phải thấy thông báo "Login success" một lần nữa
        unset($_SESSION['logout-success']);
    }

    //Nếu đã login mà vào trang login sẽ được điều hướng trục tiếp sang trang login-success
    if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
        header('location: login-success.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <label>Username</label>
            <input type="text" name="username"/>
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password"/>
        </div>

        <div>
            <input type="checkbox" name="remember-me"/> Remember me
        </div>

        <button type="submit" name="login">Login</button>
    </form>

    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif ?>

    <?php if (isset($logoutSuccessMessage)) { ?>
        <p><?php echo $logoutSuccessMessage ?></p>
    <?php } ?>

</body>
</html>