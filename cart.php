<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giỏ Hàng </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cartdeco.css">
    <script src="https://kit.fontawesome.com/054b30d207.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="header">
  <img class="img" src="images/logo.jpg" alt="logo">
  <a class="logo">Nga Coffee & Tea</a>
  <div class="header-right">
    <a href="index.html">Trang chủ</a>
    <a class="active" href="cart.php">Giỏ hàng</a>
  </div>
</div>
    <?php
    if (!isset($_SESSION['sum'])) $_SESSION['sum'] = 0;
    $_SESSION['price'] = 0;
    if (isset($_POST['but1'])) {
        if (!isset($_SESSION['f1'])) {
            $_SESSION['f1'] = 0;
        }
        $_SESSION['sum']++;
        $_SESSION['f1']++;
    }
    if (isset($_POST['but2'])) {
        if (!isset($_SESSION['f2'])) {
            $_SESSION['f2'] = 0;
        }
        $_SESSION['sum']++;
        $_SESSION['f2']++;
    }
    if (isset($_POST['but3'])) {
        if (!isset($_SESSION['f3'])) {
            $_SESSION['f3'] = 0;
        }
        $_SESSION['sum']++;
        $_SESSION['f3']++;
    }
    if (isset($_POST['but4'])) {
        if (!isset($_SESSION['f4'])) {
            $_SESSION['f4'] = 0;
        }
        $_SESSION['sum']++;
        $_SESSION['f4']++;
    }
    if (isset($_SESSION['f1'])) $_SESSION['price'] = $_SESSION['price'] + $_SESSION['f1'] * 20000;
    if (isset($_SESSION['f2'])) $_SESSION['price'] = $_SESSION['price'] + $_SESSION['f2'] * 17000;
    if (isset($_SESSION['f3'])) $_SESSION['price'] = $_SESSION['price'] + $_SESSION['f3'] * 20000;
    if (isset($_SESSION['f4'])) $_SESSION['price'] = $_SESSION['price'] + $_SESSION['f4'] * 20000;
    ?>
    <?php
    echo "<div id='t5'>" . "Bạn đã chọn " . $_SESSION['sum'] . " sản phẩm" . "</div>"
    ?>
    <?php
    $check = true;
    if (isset($_SESSION['f1'])) {
        $a = "<img src='images\caphesua.png' class='jj photo'>";
        $b = "<div><h3> Cà phê sữa"  . "</h3></div>";
        $c = "<div><h3>" . $_SESSION['f1'] . "</h3></div>";
        if ($check == true) {
            $check = false;
            echo "<div class='box box2'>" . $a . $b . $c . "</div>";
        } else echo "<div class='box box3'>" . $a . $b . $c . "</div>";
    }
    if (isset($_SESSION['f2'])) {
        $a = "<img src='images\capheden.png' class='jj photo'>";
        $b = "<div><h3> Cà phê đen"  . "</h3></div>";
        $c = "<div><h3>" . $_SESSION['f2'] . "</h3></div>";
        if ($check == true) {
            $check = false;
            echo "<div class='box box2'>" . $a . $b . $c . "</div>";
        } else echo "<div class='box box3'>" . $a . $b . $c . "</div>";
    }
    if (isset($_SESSION['f3'])) {
        $a = "<img src='images\bacsiu.png' class='jj photo'>";
        $b = "<div><h3> Bạc sỉu"  . "</h3></div>";
        $c = "<div><h3>" . $_SESSION['f3'] . "</h3></div>";
        if ($check == true) {
            $check = false;
            echo "<div class='box box2'>" . $a . $b . $c . "</div>";
        } else echo "<div class='box box3'>" . $a . $b . $c . "</div>";
    }
    if (isset($_SESSION['f4'])) {
        $a = "<img src='images\cappuchino.png' class='jj photo'>";
        $b = "<div><h3>Cappuchino"  . "</h3></div>";
        $c = "<div><h3>" . $_SESSION['f4'] . "</h3></div>";
        if ($check == true) {
            $check = false;
            echo "<div class='box box2'>" . $a . $b . $c . "</div>";
        } else echo "<div class='box box3'>" . $a . $b . $c . "</div>";
    }
    ?>
    
    <div class="box4">
        <div><h3>Chọn phương thức mua hàng</h3></div>
        <img class="hehe img10" src="images/Rectangle 9.png">
        <img class="hehe img11" src="images/Rectangle 10.png">
        <div id="line6"></div>
        <div><h3>Tổng tiền :</h3></div>
        <?php
        echo "<div class='tranhuy t11'>" . $_SESSION['price'] . "</div>";
        echo "<a href='thanhtoanthanhcong.html'> 
        <div class='box6'>" .
            "<div class='tran t12'>" . $_SESSION['price'] . "</div>" .
            "<div class='tran t13'>" . "Thanh Toán" . "</div>" .
            "<img class='tran img12' src='images/Right.png'>" .
            "</div>" . "</a>";
        ?>
    </div>
</body>
</html>