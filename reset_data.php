<?php 
    $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $i = 0;
    $sql = "SELECT * from stocks";
    $result = $conn->query($sql);
    $price_og = [350, 300, 250, 250, 300, 350, 450, 350, 250, 300, 350, 400, 300, 350 , 300];
    while($row = $result -> fetch_assoc()){
        $sql1 = "UPDATE stocks SET stock_price='".$price_og[$i]."', delta_pc='0',delta='0' WHERE stock_name='".$row["stock_name"]."'";
        if($conn -> query($sql1)){
            echo "Reset stock of ".$row["stock_name"]." successfully<br>"; 
            
            
        }else{
            echo $conn -> error."<br>";
        }$i++;
    }
    $sql3 = "UPDATE news SET taken = '0' WHERE 1";
    echo $sql3;
    print_r($conn -> query($sql3));
    //$sql2= "DELETE FROM `participants` WHERE 1";
   //$conn -> query($sql2);
   session_start();
   
   session_destroy();
     
   
echo "<br><br><a href='live_market.php'>Back to admin panel</a>";

?>