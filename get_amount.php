<?php
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $receipt_number = $_GET["receipt_number"];
    $sql = "SELECT * FROM participants WHERE receipt_number='".$receipt_number."'";
    $res = $conn -> query($sql);
    $res = $res -> fetch_assoc();
    $amount = $res["current_amount"];
    if($amount){
    echo "
    <div class=\"col-sm-12 container-stock\">
                    <div class=\"col-sm-6\"><h4 class=\"title-stock\">".$receipt_number."</h4></div>
                    <div class=\"col-sm-6\">
                        <h4 class=\"amount\">".$amount."</h4>
                    </div></div>";
    }else{
        echo " ";
    }
?>