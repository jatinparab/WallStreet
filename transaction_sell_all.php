<?php
    $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $receipt_number = $_GET["select_receipt_sell_total"];
    $receiptno = $receipt_number;
  // $receiptno = 44;
    $total = 0;
    $query = "select * from participants where receipt_number='$receiptno'";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $company_array = ["Reliance Industrials","Reliance Petroleum", "Tata Consultancy Services", "HDFC Bank", "Maruti Suzuki India", "Infosys", "Google","Nestle India", "Ambuja Cement LTD","Kingfisher","Air India","Samsung"];  
    foreach($company_array as $company)
    {
        if($row[$company] >0)
        {
            $query2 = "select * from stocks where stock_name='$company'";
            //echo $query2;
            $res2 = $conn->query($query2);
            $row2 = $res2->fetch_assoc();
            $total += $row2['stock_price']*$row[$company];
        }
    }
   // echo $total;
    foreach($company_array as $company)
    {
        $query = "update participants set `".$company."` =0 where receipt_number=".$receipt_number.";";
        $conn->query($query);
      //  echo  $query."<br>";

    }
    $totalmoney = $row['current_amount'];
    $query3="select current_amount from participants where receipt_number ='$receipt_number'";
    $res = $conn->query($query3);
    $row =$res->fetch_assoc();
    $totalmoney = $row['current_amount']+$total;
    $query4 ="update participants set current_amount=$totalmoney where receipt_number=$receipt_number";
    //echo $query4;
    //echo $query4;
    $res = $conn->query($query4);
    //$row =$res->fetch_assoc();
        echo $receiptno." sucessfully sold stocks amount Rs.".$total;
    

?>
<html>
    <body>
        <br><br><br>
        <a href="index.php"> Click here to continue buying selling.</a>
    </body>
</html> 