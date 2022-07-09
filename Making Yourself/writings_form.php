<?php  



$con = mysqli_connect('localhost', 'root' );
if ($con) {

	echo "Connection Successful";
	# code.ec..
}
else{

	echo "No Connection";
}


mysqli_select_db($con ,'story');

$user = $_POST['user'];
$email = $_POST['email'];
$title = $_POST['title'];
$comment = $_POST['comment'];

$query = " insert into creative_writings (user, email, title, comment)  
values ('$user', '$email', '$title', '$comment') ";

mysqli_query($con, $query);
 
header('location:story.php');


?>
