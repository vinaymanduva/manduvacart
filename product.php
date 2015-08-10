<?php session_start();?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
.sri
{
font-size:2em;
text-align:left;
 color: white;
}
.sr
{
font-size:3em;
 color: white;
text-align:right;
}
h1{
  font-size: 5em;
      font-weight: 600;
      color: orange;
      display: inline-block;
      padding-bottom: 100px;
	 margin: 50% auto 0 auto;

      text-shadow: 1px 1px 3px $shadow-color;
}
h2{
 font-size: 2em;
      font-weight: 300;
      color: white;
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
h3{
 font-size: 2em;
      font-weight: 300;
      color: white;
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
li{
 font-size: 1em;
      font-weight: 300;
      color: white;
      
 
	 margin: 2% auto 0 auto;

      text-shadow: 50px 1px 3px $shadow-color;
}
h4{
 font-size: 2em;
      font-weight: 300;
      color: orange;
      
 
	 margin: 2% auto 0 auto;
text-align: right;
      text-shadow: 50px 1px 3px $shadow-color;
}




$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}
html, body {
 padding: 5px;
  width: 1000px;
  min-height: 600px;
  margin: 2% auto 0 auto;
  color: blue;
  background: url(http://i.imgur.com/iQFPDkj.jpg)no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>
</head>
<body>
<div id = 'S'>
<h4 class="nidhi">
 <?php echo "WELCOME....:-".$_SESSION ['name']?> 
</h4><div class="sri"><a href="login.html">Logout</a></div>
<div class="sr"><a href="show.php">MY CART</a></div></div>
<h1> SHOES</h1>

<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
     <img src="http://localhost/images/1.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">WOODLAND</h2></li>
           <li><h3 class="pj">Rs. 4999</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>WOODLAND SHOES </li>
                    <li>NEW STYLE</li>
                    <li>HIGH QUALITY</li>
                    <li>Men casual</li>
                    
                  </ol>
           </li>      
        
       <form action="http://localhost/addtocart/pro1.php" method='post'>
           Quantity:<input type="number" max="10" min="1" name="quan" >
              <input type="submit" name="submit" value="Buy now">
      </form>    
     </div>
  </div>

<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
        <img src="http://localhost/images/2.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">DIESEL</h2></li>
           <li><h3 class="pj">Rs. 5000</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li> DIESEL SHOES</li>
                    <li>HIGH QUALITY</lI>
                    <li>NEW STYLE</li>
                     <li>Men casual</li>
                    
                  </ol>
           </li>      
        
       <form action="http://localhost/addtocart/pro2.php" method='post'>
        Quantity:<input type="number" max="10" min="1" name="quan" >
        <input type="submit" name="submit" value="Buy now">
       </form>    
    </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://localhost/images/3.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">ADDIDAS</h2></li>
           <li><h3 class="pj">Rs. 5299</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol><li>Men casual</li>
                    <li>RUNNING SHOES</li>
                    <li>FULL ACTION </li>
                    <li>GOOD QUALITY</li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro3.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
</div>
    
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://localhost/images/4.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">TOMMY</h2></li>
           <li><h3 class="pj">Rs. 8999</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol><li>Men casual</li>
                    <li>NEW LOOKING</li>
                    <li>DIFFERENT STYLE</li>
                    <li>HIGH QUALITY</li>
                    
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro4.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://localhost/images/5.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">WOODLAND</h2></li>
           <li><h3 class="pj">Rs. 3999</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Style 	Panel and Stitch</li>
                    <li>LUXORY</li>
                    <li>Men  </li>
                    <li>casual </li>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro5.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://localhost/images/6.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">WOODLAND</h2></li>
           <li><h3 class="pj">Rs. 4999</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                      <li>WOODLAND SHOES </li>
                    <li>NEW STYLE</li>
                    <li>HIGH QUALITY</li>
                    <li>Men casual</li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro6.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://localhost/images/7.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">diesel shoes</h2></li>
           <li><h3 class="pj">Rs. 6000</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                     <li>luxury</li>
                    <li>good quality</li>
                    <li>pure leathre</li>
                    <li>speacial design </li>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro7.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>
 </div>
 <h1>laptops</h1>

<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
     <img src="http://img6a.flixcart.com/image/computer/p/m/6/hp-pavilion-notebook-400x400-imadn4dmztxgvdck.jpeg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">hp</h2></li>
           <li><h3 class="pj">Rs.30000</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Core i3 (4th Gen)</li>
                    <li>4 GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                    
                  </ol>
           </li>      
        
       <form action="http://localhost/addtocart/pro8.php" method='post'>
           Quantity:<input type="number" max="10" min="1" name="quan" >
              <input type="submit" name="submit" value="Buy now">
      </form>    
     </div>
  </div>

<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
        <img src="http://blog.laptopmag.com/wpress/wp-content/uploads/2014/08/Dell-XPS-13-2014-G03.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">dell</h2></li>
           <li><h3 class="pj">Rs-50000</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                     <li>Core i5 (4th Gen)</li>
                    <li>8 GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                    
                  </ol>
           </li>      
        
       <form action="http://localhost/addtocart/pro9.php" method='post'>
        Quantity:<input type="number" max="10" min="1" name="quan" >
        <input type="submit" name="submit" value="Buy now">
       </form>    
    </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://www.lenovo.com/images/gallery/1060x596/lenovo-laptop-convertible-thinkpad-yoga-silver-front-1.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">lenovo</h2></li>
           <li><h3 class="pj">Rs. 49999</h3></li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol> <li>Core i7 (4th Gen)</li>
                    <li>8GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro10.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
</div>
    
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://microsoft-news.com/wp-content/uploads/2014/09/Dell-Latitude-5000-Series.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">dell</h2></li>
           <li><h3 class="pj">Rs.50000</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol><li>Core i7 (4th Gen)</li>
                    <li>8GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                  </ol>
                    
                    
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro11.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://www.king-phones.com/wp-content/uploads/2013/06/apple-3.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">apple</h2></li>
           <li><h3 class="pj">Rs. 100999</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Core i7 (4th Gen)</li>
                    <li>8GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                  </ol>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro12.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://www.gadgetfolder.com/wp-content/uploads/2012/10/Asus-VivoBook-S200-notebook.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">asus</h2></li>
           <li><h3 class="pj">Rs. 50099</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                      <li>Core i7 (4th Gen)</li>
                    <li>8GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                  </ol>
                  </ol>
           </li>      
        
<form action="http://localhost/addtocart/pro13.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
    
 </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://www.notebookcheck.net/uploads/tx_nbc2/hpM6_silver__2_01.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">hp</h2></li>
           <li><h3 class="pj">Rs. 57000</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Core i7 (4th Gen)</li>
                    <li>8GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                  </ol>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro14.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>
 </div>
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
    <img src="http://www.notebookcheck.net/uploads/tx_nbc2/hpM6_silver__2_01.jpg" height="250" width="250" style="margin:10px">
           <li><h2 class="pj">hp</h2></li>
           <li><h3 class="pj">Rs. 57000</h3></li>
           
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Core i7 (4th Gen)</li>
                    <li>8GB DDR3 RAM</li>
                    <li>1 TB HDD</li>
                    <li> Free DOS</li>
                  </ol>
                  </ol>
           </li>      
        
 <form action="http://localhost/addtocart/pro15.php" method='post'>
Quantity:<input type="number" max="10" min="1" name="quan" >
<input type="submit" name="submit" value="Buy now">
</form>
   
 </div>
 </div>
</body>
