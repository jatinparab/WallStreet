 <?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * from news";
    $res = $conn -> query($sql);
    $i=0;
    while($row = $res -> fetch_assoc()){
        $i++;
    }
    function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
    }
    $tries = 0;
    $taken1 = 0;
    $taken2 = 0;
    
    a:
    $tries++;
    $rndArray = randomGen(1, $i, 2 );
    $sql = "SELECT * from news WHERE number='".$rndArray[0]."'";
    $sql2 = "SELECT * from news WHERE number='".$rndArray[1]."'";

    $ress1 = $conn -> query($sql);
    $ress2 = $conn -> query($sql2);
    
    $title1 = $ress1 ->fetch_assoc();
    $taken1 = $title1["taken"];  
    $title1 = $title1["news_title"];
    $title2 = $ress2 ->fetch_assoc();
    $taken2 = $title2["taken"];  
    $title2 = $title2["news_title"];
    
    if($taken1 == 0 && $taken2 == 0 ){
    $sql = "UPDATE news SET taken='1' WHERE number='".$rndArray[0]."'";
    $sql2 = "UPDATE news SET taken='1' WHERE number='".$rndArray[1]."'";
    
    $conn -> query($sql);
    $conn -> query($sql2);
    
    echo "<h4 id=\"news1\" class='".$rndArray[0]." greenfade'>1: ".$title1."</h4><br><br>";
    echo "<h4 id=\"news2\" class='".$rndArray[1]." greenfade'>2: ".$title2."</h4><br><br>";
    
    } else { 
        if($tries>200000){
            echo "Couldn't get news! Please reset news.";
        }else{
        goto a;
        } 
    }
    
?>