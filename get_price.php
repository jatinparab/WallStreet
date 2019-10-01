 <?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $stock_name = urldecode($_GET["stock_name"]);
    $stock_number = $_GET["stock_number"];
    $sql = "SELECT * from stocks WHERE stock_name='".$stock_name."'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();
    echo $row["stock_price"]*$stock_number;
?>