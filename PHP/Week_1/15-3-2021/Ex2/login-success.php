<?php 
    session_start();
    //set timezone hiện tại là múi giờ +7
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }

    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    }

    if (isset($_POST['logout'])) { 
        //xoá toàn bộ session và cookie
        unset($_SESSION['username']);
        setcookie('username', '', time() - 1);
        $_SESSION['logout-success'] = "Đăng xuất thành công";
        header('location: ex2.php');    
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
    <?php if (isset($username)) { ?>
        <p>Username: <?php echo $username; ?></p>
        <p>Thời gian đăng nhập: <?php echo date('d/m/y H:m:s'); ?></p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <button name="logout">Logout</button>
        </form>
    <?php } else {
        echo "<p>Cần đăng nhập để thực hiện chức năng này. Quay về trang đăng nhập trong 5 giây</p>";
        header('Refresh:5; url=ex2.php', true, 303);
    } ?>

</body>
</html>