<?php 
include('connection.php'); 
$date = date('Y-m-d');
if(isset($_POST['submit'])){
	$sql = "INSERT INTO ratings (name, rate, review, created_at)
    VALUES ('".$_POST['name']."','".$_POST['rate']."','".$_POST['review']."','".$date."')";

    $result = mysqli_query($conn,$sql); 
    if(!$result){
    	echo "failed";
    	die();
    }      
}
?>