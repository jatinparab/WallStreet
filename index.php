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
        <title>Wall Street</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
    </head>
    <script>
    function gettoalstockvalue(receiptno)
        {
            console.log(receiptno);
            console.log("called");
            var xhttp; 
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("final_price_sell_total").innerHTML = this.responseText;
                         getTotalSell(select_company_sell.value,select_number_sell.value);
                    }
                  };
                  xhttp.open("GET", "get_total_stock_price.php?receiptno="+receiptno, true);
                  xhttp.send();
        }
        </script>
    <body>
        <div class="col-sm-12">
            <div class="container-fluid" id="holder-button">
                <h1 class="text-center">Volunteer Panel</h1>
                <a href="add_participant.php"><button class="btn">Add a participant</button></a>
                <button class="btn" onclick="display('buy_panel')">Buy</button>
                <button class="btn" onclick="display('sell_panel')">Sell</button>
                <a href="get_winners.php"><button class="btn">Leaderboard</button></a>
                <a href="changeroundno.php"><button class="btn">Change Round No</button></a>

            </div>    
        </div>
        <div id="buy_panel" class="col-sm-12">
            <div class="container" id="trans_holder">
                <div class="container-fluid" id="header-holder">
                    <h1 class="text-center">Buy Stocks</h1>
                </div>
                <br><br>
                <form action="transaction_buy.php" onsubmit="return validateForm()" method="post">
                <div class="col-sm-2">
                    <h4 class="text-center">Receipt Number</h4>
                </div>
                <div class="col-sm-2">
                    <select class="select" onchange="changeNumber(this.value);getAmount(this.value);" id="select_receipt" name="receipt_number">
                        <?php while($row = $result_receipt -> fetch_assoc()){ ?>
                      <option value="<?php echo $row["receipt_number"] ?>"><?php echo $row["receipt_number"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-2"><h4 class="text-center">Company of stock</h4></div>
                <div class="col-sm-2">
                    <select class="select" onchange="getTotal(this.value, select_number.value)" id="select_company" name="stock_name">
                    <?php while($row = $result -> fetch_assoc()){ ?>    
                      <option value="<?php echo $row["stock_name"]; ?>"><?php echo $row["stock_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-2"><h4 class="text-center">Number of stocks</h4></div>
                <div class="col-sm-2">
                    <select class="select" onchange="getTotal(select_company.value ,this.value)" id="select_number" name="stock_number">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select> 
                </div>
                <br><br><br><br>
                <div class="col-sm-6">
                    <h2 class="text-center">Total</h2>
                    <h1 class="text-center" id="final_price"></h1>
                    <input name="final_price" id="hidden_final_price" style="display:none">
                </div>
                
                <div class="col-sm-6">
                    <h2 class="text-center">Amount available with <span id="receipt_number"></span></h2>
                    <h1 class="text-center" id="amount_available"></h1>
                </div>
                <div class="col-sm-12">
                <div  id="confirm-holder">
                    <button class="btn" type="submit">Confirm</button>
                </div>
                </div>
                </form>
            </div>
        </div>
        
        
        <div id="sell_panel" class="col-sm-12 displayNone">
            <div class="container" id="trans_holder">
                <div class="container-fluid" id="header-holder">
                    <h1 class="text-center">Sell Stocks</h1>
                </div>
                <br><br>
                <form action="transaction_sell.php" onsubmit="return validateSell()" method="get">
                <div class="col-sm-2">
                    <h4 class="text-center">Receipt Number</h4>
                </div>
                <div class="col-sm-2">
                    <select class="select" onchange="getDataName(this.value)" id="select_receipt_sell" name="receipt_number_sell">
                        <?php while($row = $result_sell -> fetch_assoc()){ ?>
                      <option value="<?php echo $row["receipt_number"] ?>"><?php echo $row["receipt_number"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-2"><h4 class="text-center">Available Stocks</h4></div>
                <div class="col-sm-2">
                    <select class="select" onchange="getNumber(select_receipt_sell.value, this.value);getTotalSell(this.value, select_number_sell.value);" id="select_company_sell" name="stock_name_sell">
                        
                    </select>
                </div>
                <div class="col-sm-2"><h4 class="text-center">Number of stocks</h4></div>
                <div class="col-sm-2">
                    <select class="select" onchange="getTotalSell(select_company_sell.value,this.value);" id="select_number_sell" name="stock_number_sell">
                      
                    </select> 
                </div>
                <br><br><br><br>
                <div class="col-sm-12">
                    <h2 class="text-center">Total</h2>
                    <h1 class="text-center" id="final_price_sell"></h1>
                    <input name="final_price_sell" id="hidden_final_price_sell" style="display:none">
                </div>
                <div class="col-sm-12">
                <div  id="confirm-holder">
                    <button class="btn" type="submit">Confirm</button>
                </div>
                </div>
                </form>
            </div>
            <div class="container" id="trans_holder">
                <div class="container-fluid" id="header-holder">
                    <h1 class="text-center">Sell All Stocks</h1>
                </div>
                <br><br>
                <form action="transaction_sell_all.php" onsubmit="return validateSell()" method="get">
                <div class="col-sm-2">
                    <h4 class="text-center">Receipt Number</h4>
                </div>
                <div class="col-sm-2">
                    <select class="select" onchange="gettoalstockvalue(this.value)" id="select_receipt_sell_total" name="select_receipt_sell_total">
                        <?php
                         $sql1 = "SELECT * from participants";
                         $result_receipt = $conn ->query($sql1);
                         $result_sell = $conn ->query($sql1);   
                         $i=0;
                        while($row = $result_sell -> fetch_assoc()){ ?>
                      
                      <option value="<?php echo $row["receipt_number"] ?>"><?php echo $row["receipt_number"];
                     
                      ?></option>
                        <?php
                    
                    } ?>
                    </select>
                </div>
               
               
                <br><br><br><br>
                <div class="col-sm-12">
                    <h2 class="text-center">Total</h2>
                    <
                    <h1 class="text-center" id="final_price_sell_total"></h1>
                    <input name="final_price_sell" id="hidden_final_price_sell" style="display:none">
                </div>
                <div class="col-sm-12">
                <div  id="confirm-holder">
                    <button class="btn" type="submit">Confirm</button>
                </div>
                </div>
                </form>
            </div>
        </div>
        
        
        
        
        
        <script>
            gettoalstockvalue(document.getElementById("select_receipt_sell_total").value);
            function validateSell(){
                var p2 = document.getElementById("final_price_sell").innerHTML;
                p2 = p2.slice(3,);
                if(p2==0){
                    alert("Nothing to sell!");
                    return false;
                }return true;   
            }
            function getTotal(str,str2) {
                  var xhttp; 
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("final_price").innerHTML = "Rs." + this.responseText;
                    document.getElementById("hidden_final_price").value = this.responseText;
                    }
                  };
                  xhttp.open("GET", "get_price.php?stock_name="+str+"&stock_number="+str2, true);
                  xhttp.send();
                }
            
            function getTotalSell(str,str2) {
                  var xhttp; 
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("final_price_sell").innerHTML = "Rs." + this.responseText;
                    document.getElementById("hidden_final_price_sell").value = this.responseText;
                    }
                  };
                  xhttp.open("GET", "get_price.php?stock_name="+str+"&stock_number="+str2, true);
                  xhttp.send();
                }
            
            function getAmount(str){
                  var xhttp; 
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("amount_available").innerHTML = "Rs." + this.responseText;
                    }
                  };
                  xhttp.open("GET", "get_available.php?receipt_number="+str, true);
                  xhttp.send();
            }
            var select_company = document.getElementById("select_company");
            var select_number = document.getElementById("select_number");
            var select_receipt_sell = document.getElementById("select_receipt_sell");
            var select_company_sell = document.getElementById("select_company_sell");
            var select_number_sell = document.getElementById("select_number_sell");
            function changeNumber(number){
                document.getElementById("receipt_number").innerHTML = number;
            }
            function validateForm(){
                var p2 = document.getElementById("amount_available").innerHTML;
                p2 = p2.slice(3,);
                p2 = parseInt(p2);
                var p1 = document.getElementById("hidden_final_price").value;
                if(p2-p1 >= 0){
                    return true;
                }
                else{
                    alert("Not enough money!");
                    return false;
                }
                
            }
            function getDataName(str){
                var xhttp; 
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("select_company_sell").innerHTML = this.responseText;
                    getNumber(select_receipt_sell.value, select_company_sell.value);
                    }
                  };
                  xhttp.open("GET", "get_stock.php?receipt_number="+str, true);
                  xhttp.send();
                
                 
            }
            function getNumber(str,str2){
                var xhttp; 
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("select_number_sell").innerHTML = this.responseText;
                         getTotalSell(select_company_sell.value,select_number_sell.value);
                    }
                  };
                  xhttp.open("GET", "get_number.php?receipt_number="+str+"&company_name="+str2, true);
                  xhttp.send();
            }
            function display(str){
                el = document.getElementById(str);
                el.className = "col-sm-12 displayVisible";
                if(str=="buy_panel"){
                    document.getElementById("sell_panel").className = "displayNone";
                }else{
                    document.getElementById("buy_panel").className = "displayNone";
                }
                
            }
            getTotal(select_company.value, select_number.value);
            getDataName(select_receipt_sell.value);
            getNumber(select_receipt_sell.value, select_company_sell.value);
            changeNumber(document.getElementById("select_receipt").value);
            getAmount(document.getElementById("select_receipt").value);
        
        </script>
    </body>
</html>