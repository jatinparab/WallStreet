<?php
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
$flag = 0;
$receipt_number = $_GET["receipt_number"];
$company_array = ["Reliance Petroleum","Maruti Suzuki", "Nestle India", "Ambuja Cement", "Kingfisher Airlines", "Air India", "Patanjali","ICICI Bank", "HDFC Bank","Cipla"];
    $sql = "SELECT * from participants WHERE receipt_number='".$receipt_number."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    foreach($company_array as $company){
        
        if($row[$company]>0){
            $flag=1;
            echo "<option value='".$company."'>".$company."</option>\n";
        }
    }
if($flag==0){
    echo "<option value'0'>0</option>";
}


?>
