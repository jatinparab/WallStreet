<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change round no</title>
</head>
<body>
    <form>
    <label>Set Round No</label>

    <input type="number" name="roundnumber" placeholder="round no"/>
    <br/>
    <br/>
    <br/>

    <input type="submit">
    </form>

</body>
</html>
<?php 
if(isset($_GET['roundnumber']))
{
    
 $conn = mysqli_connect("localhost", "root", "", "dalal");
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
$roundno = $_GET['roundnumber'];
$query ="update round set currentround =$roundno";
$res =$conn->query($query);
header('Location: ./index.php');
}
?>