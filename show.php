<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<style>
h1{
  font-size: 5em;
      font-weight: 600;
      color: rgba(191, 84, 46, 0.9);
      display: inline-block;
      padding-bottom: 50px;
	 margin: 20% auto 0 auto;

      text-shadow: 1px 1px 3px $shadow-color;
}


$shadow-color: #23203b;
$input-color: green;
$input-border-color: #5E5165;
$button-background-color: #27AE60;
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}
html, body {
 padding: 50px;
  width: 600px;
  min-height: 600px;
  margin: 2% auto 0 auto;
  color: rgba(255, 255, 255, 0.7);
  background: url(http://oneiricindia.com/wp-content/uploads/2014/07/website-background-1.jpg)no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>
	<title>Your cart</title>
	
</head>

<body>
		<?php
			$username="root";
$servername="localhost";
$password="mgr14145";
$database="vinay cart";
			$conn=mysql_connect($servername, $username, $password, $database);	
			if(!$conn){
					echo "Not connected";			
			}
			$jeffa= $_SESSION['name'];
			$sql="SELECT * FROM `vinay cart`.billing WHERE User = '$jeffa'";
			$query=mysql_query($sql);
			echo "<h1 class='Header'>Your cart</h1>";
			echo"<div class='container'>";
			echo "<fieldset>";
			echo "<table class='jef'>"; 
			echo "<tr><td><strong>Name</strong></td><td><strong>Quantity&nbsp&nbsp</strong></td><td><strong>Price&nbsp&nbsp&nbsp</strong></td><td><strong>Total&nbsp&nbsp</strong></td>";
	while($row = mysql_fetch_array($query)){   
		echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Quantity'] ."     ". "</td><td>" . $row['Price'] . "</td><td>" . $row['Total'] . "</td><td><a href='remcart.php'>Remove the item</a></td></tr>";  
	}
			echo "</table>";
			echo "</fieldset>";
			echo "</div>"; 	
			
		?>
</body>
<style>
			.container{
						margin:auto;
						padding:30px;
						text-align:center;
						font-size: 14px;
						font-family: monospace;
						width:500px;
			}
			.Header{
						text-align: center;	
								
			}
			.jef{font-size: 30px;text-align: center;	
				
			}
</style>

</html>
<form action= "http://localhost/product.php"  method="post">
<input type="submit" value="go to products page">
</form>
