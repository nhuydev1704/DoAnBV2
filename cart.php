<?php session_start(); 
    require_once('php/dbhelp.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Giỏ hàng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cart.css" >
        <style>
        </style>
    </head>

    <body>
        <?php
        include 'connect_db.php';
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        $error = false;
        $success = false;
        if (isset($_GET['action'])) {

            function update_cart($add = false) {
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                        if ($add) {
                            $_SESSION["cart"][$id] += $quantity;
                        } else {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                    }
                }
            }

            switch ($_GET['action']) {
                case "add":
                    update_cart(true);
                    header('Location: ./cart.php');
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    header('Location: ./cart.php');
                    break;
                case "submit":
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                        header('Location: ./cart.php');
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($con, "SELECT * FROM `GioHang` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                            $total = 0;
                            $orderProducts = array();
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                $total += $row['Gia'] * $_POST['quantity'][$row['id']];
                            }
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $address = $_POST['address'];
                            $note = $_POST['note'];

                            $insertOrder = "INSERT INTO donhang(name, phone, address, note, total, created_time, last_updated) 
                            VALUES ('$name', '$phone', '$address', '$note', '$total', NOW(), NOW());";
                            execute($insertOrder);

                            // $orderID = $con->insert_id;
                            // $insertString = "";
                            // foreach ($orderProducts as $key => $product) {
                            //     $insertString .= "('" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['Gia'] . "',NOW())";
                            //     if ($key != count($orderProducts) - 1) {
                            //         $insertString .= ",";
                            //     }
                            // }
                            // $insertOrder1 = "INSERT INTO dadat (id, order_id, product_id, quantity, price, created_time) VALUES " . $insertString . ";";
                            // execute($insertOrder1);


                            $success = "Đặt hàng thành công";
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($con, "SELECT * FROM `GioHang` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        }
//        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
//        $product = mysqli_fetch_assoc($result);
//        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
//        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        ?>
        <div class="container">
            <?php if (!empty($error)) { ?> 
                <div id="notify-msg">
                    <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg">
                    <?= $success ?>. <a href="muathuoc.php">Tiếp tục mua thuốc</a>
                </div>
            <?php } else { ?>
                <a href="muathuoc.php" style="color:orange;padding-bottom: 5px;"><-Trở lại</a>
                <h1>Giỏ hàng</h1>
                <form id="cart-form" action="cart.php?action=submit" method="POST">
                    <table>
                        <tr>
                            <th class="product-number">STT</th>
                            <th class="product-img">Ảnh sản phẩm</th>
                            <th class="product-price">Đơn giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="total-money">Thành tiền</th>
                            <th class="product-delete">Xóa</th>
                        </tr>
                        <?php
                        if (!empty($products)) {
                            $total = 0;
                            $num = 1;
                            while ($row = mysqli_fetch_array($products)) {
                                ?>
                                <tr>
                                    <td class="product-number"><?=$num++; ?></td>
                                    <td class="product-img"><img src="../php/photo/<?=$row['Anh'] ?>" /></td>
                                    <td class="product-price"><?= number_format($row['Gia'], 0, ",", ".") ?></td>
                                    <td class="product-quantity"><input type="text" value="<?= $_SESSION["cart"][$row['id']] ?>" name="quantity[<?= $row['id'] ?>]" /></td>
                                    <td class="total-money"><?= number_format($row['Gia'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?></td>
                                    <td class="product-delete"><a href="cart.php?action=delete&id=<?= $row['id'] ?>">Xóa</a></td>
                                </tr>
                                <?php
                                $total += $row['Gia'] * $_SESSION["cart"][$row['id']];
                            }
                            ?>
                            <tr id="row-total">
                                <td class="product-number">&nbsp;</td>
                                <td class="product-name">Tổng tiền</td>
                                <td class="product-img">&nbsp;</td>
                                <td class="product-quantity">&nbsp;</td>
                                <td class="total-money"><?= number_format($total, 0, ",", ".") ?></td>
                                <td class="product-delete">Xóa</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <div id="form-button">
                        <input type="submit" name="update_click" value="Cập nhật" />
                    </div>
                    <hr>
                    <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
                    <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng" />
                </form>
            <?php } ?>
        </div>
    </body>
</html>