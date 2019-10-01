<?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
$i = 1;
$receipt_number = $_GET["receipt_number"];
$company_name = urldecode($_GET["company_name"]);
    $sql = "SELECT * from participants WHERE receipt_number='".$receipt_number."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $count = $row[$company_name];
if($count > 0){
    while($i <= $count){
    echo "<option value='".$i."'>".$i."</option>\n";
    $i++;
}

}
else{
  echo "<option value='0'>0</option>";
}

?>