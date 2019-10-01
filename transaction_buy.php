<?php
    $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $receipt_number = $_POST["receipt_number"];
    $sql = "SELECT * from participants WHERE receipt_number='".$receipt_number."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $present_amount = $row["current_amount"];
    $sub_amount = $_POST["final_price"];
    $stock_name = $_POST["stock_name"];
    $stock_number = $_POST["stock_number"];
    $present_shares = $row[$stock_name];
    $new_shares = $present_shares + $stock_number;
    $new_amount = $present_amount - $sub_amount;
    $sql1 = "UPDATE participants SET current_amount='".$new_amount."' WHERE receipt_number='".$receipt_number."'";
    $sql2 = "UPDATE participants SET `".$stock_name."`='".$new_shares."' WHERE receipt_number='".$receipt_number."'";
    if($conn->query($sql1) && $conn->query($sql2)){
        echo $row["receipt_number"]." sucessfully purchased stocks amount Rs.".$sub_amount;
    }

    ?>
<html>
    <body>
        <br><br><br>
        <a href="index.php"> Click here to continue buying selling.</a>
    </body>
</html>