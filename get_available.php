 <?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $receipt_number = $_GET["receipt_number"];
    $sql = "SELECT * from participants WHERE receipt_number='".$receipt_number."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row["current_amount"];