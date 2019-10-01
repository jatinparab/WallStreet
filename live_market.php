<?php 
session_start();
if(!isset($_SESSION["user"])){
    header("location: admin_panel.php");
}

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
        <link rel="stylesheet" href="bootstrap.css" >
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Wall Street Market</h1>
        
        <div id="main-holder" class="container col-sm-6">
            <div class="container-fluid" id="header-holder">
                <h2>Stocks Available</h2>
            </div>
            <div class="container-fluid">
                <div class="col-sm-6"><h3>Company Name</h3></div>
                <div class="col-sm-6"><h3>Stock Price</h3></div>
                <div id="data"></div>
            </div>
        
        </div>
        <div id="main-holder" class="container col-sm-5">
            <div class="container-fluid" id="header-holder">
                <h1>In Today's News</h1>
            </div>
            <div class="container-fluid">
                
                <div id="news_section">
                    
                </div>
                
            </div>
        <h3 class="text-center">
            Next Stock Update In: <h3 class="text-center" id="timer"></h3>
            </h3>
        <h3 class="text-center">
            Next News Update In: <h3 class="text-center" id="timer2"></h3>
            </h3>
            <a href="reset_data.php"><button onclick="resetNEWS()" class="btn">Stop round. Reset Data.</button></a>
        </div>
    
    
    </body>
<script>
function getDataAJAX(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","get_data.php",true);
    xmlhttp.send();
    console.log("updated db successfully");
}
    
function resetNEWS(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
             
        }
    }
    xmlhttp.open("GET","reset_news.php",true);
    xmlhttp.send();
    console.log("reset news successfully");
}    
function getNewsAJAX(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("news_section").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","get_news.php",true);
    xmlhttp.send();
    console.log("updated news successfully");
}
    

    
//function updateDataAJAX(){
//    xmlhttp = new XMLHttpRequest();
//    xmlhttp.onreadystatechange = function(){
//        
//    }
//    xmlhttp.open("GET","update_data.php",true);
//    
//    xmlhttp.send();
//    console.log("changed values successfully");
//    
//    setTimeout(getDataAJAX,1000);
//}    
    
function updateAccordingToNews(str1, str2, str3){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
                getDataAJAX();
        }
    }
    xmlhttp.open("GET","update_data.php?news1="+str1+"&news2="+str2,true);
    xmlhttp.send();

}
   
    getDataAJAX();
    getNewsAJAX();
    timerCall();
    startTimer();
    setInterval(function(){
    getNewsAJAX();
        timerCall();startTimer();
    },2000*10*12);
    setTimeout(function(){
        timerCall2();
        startTimer2();
 updateAccordingToNews(document.getElementById("news1").className,document.getElementById("news2").className);
        setInterval(function(){
            timerCall2();
            startTimer2();
            updateAccordingToNews(document.getElementById("news1").className,document.getElementById("news2").className);
        },2000*10*12);
    },1000*10*12);
    
    

    ////TIMER SCRIPTSS
    
    function timerCall(){
        document.getElementById('timer').innerHTML =
        02 + ":" +00;
       
    }
    
    function timerCall2(){
        
            document.getElementById('timer2').innerHTML = 02 + ":" + 00;
        
        
    }


        function startTimer() {
          var presentTime = document.getElementById('timer').innerHTML;
          var timeArray = presentTime.split(/[:]+/);
          var m = timeArray[0];
          var s = checkSecond((timeArray[1] - 1));
          if(s==59){m=m-1}
          if(m<0){return;}

          document.getElementById('timer').innerHTML =
            m + ":" + s;
          setTimeout(startTimer, 1000);
        }
    
    function startTimer2() {
          var presentTime2 = document.getElementById('timer2').innerHTML;
          var timeArray2 = presentTime2.split(/[:]+/);
          var m2 = timeArray2[0];
          var s2 = checkSecond((timeArray2[1] - 1));
          if(s2==59){m2=m2-1}
          if(m2<0){return;}

          document.getElementById('timer2').innerHTML =
            m2 + ":" + s2;
          setTimeout(startTimer2, 1000);
        }

        function checkSecond(sec) {
          if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
          if (sec < 0) {sec = "59"};
          return sec;
        }

</script>
    

</html>