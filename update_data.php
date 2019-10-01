<?php 
    $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * from stocks";
    $news_number1 = $_GET["news1"];
    $news_number2 = $_GET["news2"];
    
    $result = $conn->query($sql);
    

    while($row = $result -> fetch_assoc()){
        $name = $row["stock_name"];
        $sql2 = "SELECT `".$name."` from news WHERE number='".$news_number1."'";
        $sql3 = "SELECT `".$name."` from news WHERE number='".$news_number2."'";
        
        $price_new = $conn -> query($sql2);
        $price_new2 = $conn -> query($sql3);
        
        $res = $price_new -> fetch_assoc();
        $res2 = $price_new2 -> fetch_assoc();
        
        $res = $res[$name];
        $res2 = $res2[$name];
        
        $price_current = $row["stock_price"];
        $price_change = $price_current * ($res/100);
        $price_change2 = $price_current * ($res2/100);
        $rest = $res + $res2;
        $total_price_change = $price_change + $price_change2;
        $price_to_be_updated = $total_price_change + $price_current;
        if($rest > 0){
            $sign = 2;
        }else if($rest < 0){
            $sign = 1;
        }else{
            $sign = 0;
        }
        echo $row["stock_price"]."---|".$price_to_be_updated."----|".$rest."<br>";
        $sql1 = "UPDATE stocks SET stock_price='".$price_to_be_updated."', delta='".$sign."', delta_pc ='".$rest."' WHERE stock_name='".$row["stock_name"]."'";
        if($conn -> query($sql1)){
           echo "Updated stock of ".$row["stock_name"]." successfully<br>"; 
        }else{
            echo $conn -> error."<br>";
        }
    }
mysqli_close($conn);


?>


