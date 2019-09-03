<?php
	//start session
	 session_start();
    include_once'conn.php';

    $db=mysqli_connect($servername,$username,$password,$dbname);
	
	if ($db->connect_error) 
	{
		die("Connection failed: ".$db->connect_error);
	}
	else 
	 {
	 	echo '"connection ok"';
	 }


	if(isset($_POST['submit']))
		{

				$title= $_POST['title'];
				$comment = $_POST['comment'];
				
				$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$user_id=$_POST['user_id'];

				$query = "INSERT INTO posts (title,comment,image,user_id) VALUES ('$title','$comment','$image','$user_id')";
				
				//session
				$user_id = $_SESSION['user_id'];
				
				if(mysqli_query($db,$query)){
					$_SESSION['msg']="Post Done sucessfully";
					header('location:home.php');
				}else{
					echo $db->error;
				}
		
			}
		if(isset($_POST['update'])){
			$title=mysqli_real_escape_string($db,$_POST['title']);
        	$comment=mysqli_real_escape_string($db,$_POST['comment']);
			//update image
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$post_image=mysqli_real_escape_string($db,$image);
			$post_id=mysqli_real_escape_string($db,$_POST['id']);   
        	$user_id=mysqli_real_escape_string($db,$_POST['user_id']);
		
			$query="UPDATE posts SET title='$title', comment='$comment',image='$post_id',user_id='$user_id' WHERE id='$post_id'";
			
			$results = mysqli_query($db,$query);
			//$_SESSION['msg']="Post Done sucessfully";
			header('location:home.php');

		}
		if(isset($_POST['cancel'])){
			header('location:home.php'); //redirect to home page 
		}

?>