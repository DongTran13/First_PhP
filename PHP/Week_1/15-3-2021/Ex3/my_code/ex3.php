<?php 
    session_start();

    require_once('./data.php');
    // Bắt đầu từ bước này là sử dụng được biến $data ở dưới, được import từ file data.php

    /**
     * Khi ấn vào nút add-to-cart, toàn bộ thông tin của item được thêm vào Session
     * với key là 'cart-item' (để phân biệt với các session khác - ví dụ như username)
     * và code là mã code của sản phẩm
     */ 
    
    if (isset($_POST['add-to-cart'])) {
        $itemData = $_POST;
        $code = $_POST['code'];
        $_SESSION['cart-item'][$code] = $_POST;

    }

    // Xoá toàn bộ cart bằng cách xoá key 1
    if (isset($_POST['empty-cart'])) {
        unset($_SESSION['cart-item']);
    }

    //nếu nút xoá item được ấn, lấy giá trị của code gửi lên và xoá session chỉ cho key đó
    if (isset($_POST['delete-item'])) {
        $code = $_POST['code'];
        unset($_SESSION['cart-item'][$code]);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Shopping Cart</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="shopping-cart">
        <div class="container">
            <h2 class="txt-heading">Shopping Cart</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <button type="submit" name="empty-cart" id="btnEmpty">Empty cart</button>
            </form>


            <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th width="5%">Quantity</th>
                        <th width="10%">Unit Price</th>
                        <th width="10%">Price</th>
                        <th width="5%">Remove</th>
                    </tr>

                    <!-- Remove item from cart -->
                    <?php

                    ?>

                    <?php 
                        $totalPrice = 0;
                        if (isset($_SESSION['cart-item'])) {
                            foreach ($_SESSION['cart-item'] as $item) {
                            $totalPrice += $item['price'] * $item['quantity'];
                        ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="hidden" name="code" value="<?php echo $item['code'];?>"/>
                                <tr>
                                    <td><img src="<?php echo $item['image']?>" class="cart-item-image"/><?php echo $item['name']; ?></td>
                                    <td><?php echo $item['code'];?></td>
                                    <td><?php echo $item['quantity'];?></td>
                                    <td><?php echo number_format($item['price'], 0);?></td>
                                    <td><?php echo number_format($item['price'] * $item['quantity'], 0); ?></td>
                                    <td><button type="submit" name="delete-item">X</button></td>
                                </tr>
                            </form>
                        <?php 
                            } 
                        } ?>
                    <tr>
                        <td colspan="3"></td>
                        <td>Total: </td>
                        <td><?php echo number_format($totalPrice, 0);?></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="product-grid">
        <div class="container">
            <h2 class="txt-heading">Products</h2>
            <div class="products">
                <?php foreach($data as $item) { ?>
                    <div class="product-item">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="image" value="<?php echo $item['image']?>"/>
                            <input type="hidden" name="name" value="<?php echo $item['name']?>"/>
                            <input type="hidden" name="code" value="<?php echo $item['code']?>"/>
                            <input type="hidden" name="price" value="<?php echo $item['price']?>"/>

                            <div class="product-image"><img src="<?php echo $item['image']?>" /></div>
                            <div class="product-tile-footer">
                                <div class="product-title"><?php echo $item['name']?></div>
                                <div class="product-price-cart">
                                    <div class="product-price"><?php echo '$'.number_format($item['price'],0) ?></div>
                                    <div class="cart-action">
                                        <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                        <input type="submit" name="add-to-cart" value="Add to Cart" class="btnAddAction" />
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>