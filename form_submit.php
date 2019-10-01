<?php 
    $dbhost = 'localhost';
    $dbuser = 'easymjyz_jatin';
    $dbpass = '*8(9reportbizz007';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"easymjyz_dbtest");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $company1 = $_POST["company1"];
    $company2 = $_POST["company2"];
    $company3 = $_POST["company3"];
    $company4 = $_POST["company4"];
    $company5 = $_POST["company5"];
    $company6 = $_POST["company6"];
    $company7 = $_POST["company7"];
    $company8 = $_POST["company8"];
    $company9 = $_POST["company9"];
    $company10 = $_POST["company10"];
    $company11 = $_POST["company11"];
    $company12 = $_POST["company12"];
    $title = $_POST["news_title"];
    $sql = "INSERT INTO `news`(`news_title`, `Reliance Industrials`, `Reliance Petroleum`, `Tata Consultancy Services`, `HDFC Bank`, `Maruti Suzuki India`, `Infosys`, `Google`, `Nestle India`, `Ambuja Cement LTD`, `Kingfisher`,`Air India`,`Samsung`) VALUES('".$title."','".$company1."','".$company2."','".$company3."','".$company4."','".$company5."','".$company6."','".$company7."','".$company8."','".$company9."','".$company10."','".$company10."','".$company12."')";
    if($conn -> query($sql)){
           echo "SUCCESSFULLY UPDATED";
        }else{
            echo $conn -> error."<br>";
        }

?>
<br><br>
<a href="form.php">Click here to fill another one.</a>