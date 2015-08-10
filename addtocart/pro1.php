<?php session_start();?>
<!DOCTYPE html>
<html>
</head>
<style>
 body {
 padding: 5px;
  width: 1000px;
  min-height: 600px;
  margin: 2% auto 0 auto;
  color: blue;
  background: url(http://www.studentgala.com/wp-content/uploads/2015/07/Shop-Online-Banner-2.gif)no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<body>

<?php
if(isset($_POST['submit']))
{
$username="root";
$servername="localhost";
$password="mgr14145";
$database="vinay cart";
$connect=mysql_connect($servername,$username,$password,$database);
if(!$connect){
echo "Error not connected to the server";
}
$quan=$_POST['quan'];
$u=$_SESSION['name'];
if($u!=""){
echo "WOODLAND"."<br>";
echo "Your Product quantity is ".$quan."<br>";
$name="WOODLAND";
$price=4999;
$_SESSION['each']= $quan * $price;

 
$total=$_SESSION['each'];
echo $total."<br>";

$sql ="INSERT INTO `vinay cart`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
if (!mysql_query($sql)){
echo "Your item didn't add to the cart";
}
else {
echo "Item added to the cart successfully";
echo "<a href='http://localhost/product.php'>    GO TO PRODUCTS PAGE</a>";
}
}
else {echo "login first";
echo "<a href='http://localhost/login.html'>  Login</a>";}
}
?>
</body>
</html>
