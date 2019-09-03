<?php

session_start();
$user_name="";
$password="";


//connect to database
$db = mysqli_connect('localhost','root','','car');
if($db->connect_error){
    die("connection failed:" .$db);
}
else{
    echo "connection suceessfully";
}

//if submit button is clicked
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO car_news(user_name, password)VALUES('$user_name','$password')";

    if(mysqli_query($db, $query)===true)

    {
        echo "success";

    }
    else {

        echo "failed". $query. "error:" . $db->error; 
     } 
    
    header('Location:home.php');
}

?>
