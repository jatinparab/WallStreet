<?php
    $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $receipt_number = $_GET["receipt_number_sell"];
    $stock_name = $_GET["stock_name_sell"];
    $stock_number = $_GET["stock_number_sell"];
    $price_add = $_GET["final_price_sell"];
    $sql = "SELECT * from participants WHERE receipt_number='".$receipt_number."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $current_stock_number = $row[$stock_name];
    $number_update = $current_stock_number - $stock_number;
    $current_cash = $row["current_amount"];
    $cash_update = $current_cash + $price_add;

    $sql1 = "UPDATE participants SET current_amount='".$cash_update."' WHERE receipt_number='".$receipt_number."'";
    $sql2 = "UPDATE participants SET `".$stock_name."`='".$number_update."' WHERE receipt_number='".$receipt_number."'";
    if($conn->query($sql1) && $conn->query($sql2)){
        echo $row["receipt_number"]." sucessfully sold stocks amount Rs.".$price_add;
    }

?>
<html>
    <body>
        <br><br><br>
        <a href="index.php"> Click here to continue buying selling.</a>
    </body>
</html>