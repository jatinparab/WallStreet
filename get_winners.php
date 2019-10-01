<?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT * from participants";
    $result_receipt = $conn -> query($sql1);

?>

<html>
    <meta http-equiv="refresh">
    <head>
        <sc lang="en"></sc>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wall Street</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Wall Street Leaderboard</h1>
        
        <div id="main-holder" class="container col-sm-6">
            <div class="container-fluid" id="header-holder">
                <h2>Ranking</h2>
            </div>
            <div class="container-fluid">
                <div class="col-sm-6"><h3>Receipt Number</h3></div>
                <div class="col-sm-6"><h3>Amount Available</h3></div>
                <div id="data"></div>
            </div>
        
        </div>
        <div id="main-holder" class="container col-sm-5">
            <div class="container-fluid" id="header-holder">
                <h1>Add participants to leaderboard</h1>
            </div>
            <div class="container-fluid">
                
                <div id="news_section">
                    
                </div>
                
            </div>
        <h3 class="text-center">
            Receipt Number:
            <select style="width:50%"  id="receipt_number" >
                        <?php while($row = $result_receipt -> fetch_assoc()){ ?>
                      <option value="<?php echo $row["receipt_number"] ?>"><?php echo $row["receipt_number"]; ?></option>
                        <?php } ?>
                    </select>
            </h3>
            <button onclick="addParticipant(document.getElementById('receipt_number').value)" class="btn">Add</button>
        </div>
    
    
    </body>
<script>
     var children = document.getElementById("data").childNodes;
    function addParticipant(str){
         xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
                var node = document.createElement("span");
                
                node.innerHTML =  this.responseText ;
                document.getElementById("data").appendChild(node);
                sort();
            }
        }
        xmlhttp.open("GET","get_amount.php?receipt_number="+str,true);
        xmlhttp.send();
    }
    function sort(){
       
        for(var i=0; i < children.length-1; i++){
            for(var j=0; j < children.length-1; j++ ){
                
                try1 = children[j].childNodes;
                try2 = try1[1].lastChild;
                var amount = try2.childNodes;
                amount1 = amount[1].innerHTML;
                try3 = children[j+1].childNodes;
                try4 = try3[1].lastChild;
                amountx = try4.childNodes;
                amount2 = amountx[1].innerHTML;
                amount1 = parseInt(amount1);
                amount2 = parseInt(amount2);
                if(amount1 < amount2){
                    
                    children[j+1].parentNode.insertBefore(children[j+1], children[j]);
                }
                
            }
        }
        
        
    }
    
    
</script>