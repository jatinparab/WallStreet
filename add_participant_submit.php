 <?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $default_amount = 10000;
    $receipt_number = $_POST["receipt_number"];
    $sql = "INSERT INTO `participants`(`receipt_number`, `current_amount`) VALUES ('".$receipt_number."','".$default_amount."')";
    if($conn -> query($sql)){
        echo "Account for receipt number ".$receipt_number." succesfully created.";
        echo "<br><a href='index.php'>Back to volunteer panel</a>";
    }
?>