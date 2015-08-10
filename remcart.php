<?php session_start();?>
<!DOCTYPE html>
<html>
<style>
h1{
  text-align:center;
  color:blue;
}
html, body {
            width: 100%;
            height: 100%;
            font-family: "Helvetica Neue", Helvetica, sans-serif;
            color: #444;
            -webkit-font-smoothing: antialiased;
    background-image: url("http://www.studentgala.com/wp-content/uploads/2015/07/Shop-Online-Banner-2.gif");

  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;


}</style>
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
			echo "Enter the name of the same product as is";
			$hai= $_SESSION['name'];
        ?>
        <h1>Please confirm the name of your Item</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Item:<input type="text" name="item"> 
				<input type="submit" name="submit" value="Remove">        
        </form>
        <?php
        if(isset($_POST['submit'])){
					$item=$_POST['item'];
					$sql="DELETE FROM `vinay cart`.billing WHERE User='$hai' AND Name='$item'";
					$query=mysql_query($sql);
					if($query) {
								echo "Item successfully removed";		
								echo "<a href='http://localhost/product.php'>Go to your cart</a>";
					}
					else {
								echo "Error";	
					}        
        }
        ?>
</body>
</html>
