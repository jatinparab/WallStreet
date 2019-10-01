<?php
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
$error="";
if(isset($_SESSION["user"])){
    header("location: live_market.php");
}
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * from admins WHERE username='".$username."' AND password='".$password."'";
        $res = $conn -> query($sql);
        $count = mysqli_num_rows($res);
        if($count == 1){
             session_start();
             $_SESSION["user"]="1011";
              header("location: live_market.php");
        }else {
         $error = "Your Login Name or Password is invalid";
      }
    }

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
        <div class="container-fluid" id="holder-button">
            <h1 class="text-center">Admin Login</h1>
            <br>
            <form action="" method="post">
        <input style="font-size: 23px; color:#212121;" placeholder="Username" required type="text" name="username"><br>
        <br><br>
    <input required type="password" style="font-size: 23px; color:#212121;" placeholder="Password" name="password"><br>
                 <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    <button class="btn" type="submit">Confirm</button>
                </form>
        </div>

    </body>
    <script>
    
    </script>
</html>