<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Cars</title>
</head>
	<body>
		<div class="container">
			<div class="nav">
				<img class="logo" src="logo.jpeg">
        			<div class="slogan">
						Power, beauty And Soul
					</div>
						<div class="link">
							<i class="fa fa-envelope">email@yoursite.com</i>
         					<i class="fa fa-phone">+1-800-392-3673</i>
         					<a href="signin.php">Sign In</a>
         				</div>
   		 				
    		</div>	
 	<center>
  <div class="w3-content" style="max-width:500px">
  <img class="mySlides" src="b.jpg" style="width:100%">
  <img class="mySlides" src="c.jpg" style="width:100%">
  <img class="mySlides" src="e.jpg" style="width:100%">
</center>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

</body>
</html>