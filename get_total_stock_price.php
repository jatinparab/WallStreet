<?php
 
 $conn = mysqli_connect("localhost", "root", "", "dalal");
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //$_GET['receptno']=44;
    if(isset($_GET['receiptno'])){

    
 $receiptno = $_GET['receiptno'];
  // $receiptno = 44;
    $total = 0;
    $query = "select * from participants where receipt_number='$receiptno'";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $company_array = ["Reliance Industrials","Reliance Petroleum", "Tata Consultancy Services", "HDFC Bank", "Maruti Suzuki India", "Infosys", "Google","Nestle India", "Ambuja Cement LTD","Kingfisher","Air India","Samsung"];  
    foreach($company_array as $company)
    {
        if($row[$company    ] >0)
        {
            $query2 = "select * from stocks where stock_name='$company'";
            //echo $query2;
            $res2 = $conn->query($query2);
            $row2 = $res2->fetch_assoc();
            $total += $row2['stock_price']*$row[$company];
        }
    }
    echo $total;
}

?>