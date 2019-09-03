<?php 
include ('signindetails.php'); 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>

<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="heading">
            <h2>Sign In</h2>
        </div>

            <form method="post" action="signindetails.php">
                <div class="smile">
                    Username:<input type="text" name="user_name" placeholder="Username"><br><br>
               </div>

               <div class="smile">
                    Password:<input type="password" name="password" placeholder="Password"><br><br>
               </div>

               <div class="smile">
                 <button type="submit" name="submit">Submit</button>
                  <button type="submit" name="cancel">Cancel</button>

            
       </form>
     </div>
</body>
</html>