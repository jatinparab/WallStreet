 <?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * from stocks";
    $result = $conn->query($sql);
    $sql1 = "SELECT * from participants";
    $result_receipt = $conn ->query($sql1);
    $result_sell = $conn ->query($sql1);
   
?>

<html>
    <head>
        <sc lang="en"></sc>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dalal Street</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
    </head>
    <body>
        <div class="col-sm-12">
            <div class="container-fluid" id="holder-button">
        
            </div>    
        </div>
        <div id="buy_panel" class="col-sm-12">
            <div class="container" id="trans_holder">
                <div class="container-fluid" id="header-holder">
                    <h1 class="text-center">Add a participant</h1>
                </div>
                <br><br>
                <form action="add_participant_submit.php" method="post">
                <div class="col-sm-2">
                    
                </div>
                <div class="col-sm-2">
                    
                </div>
                <div class="col-sm-2"><h4 class="text-center">Receipt Number: </h4></div>
                <div class="col-sm-2">
                   <input required type="text" name="receipt_number">
                </div>
                <div class="col-sm-2"></div>
                
                <br><br><br><br>
                
                <div class="col-sm-12">
                <div  id="confirm-holder">
                    <button class="btn" type="submit">Confirm</button>
                </div>
                </div>
                </form>
            </div>
        </div>
        
    
        
      
    
    </body>
</html>