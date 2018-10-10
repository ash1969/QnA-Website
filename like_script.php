<?php
require("includes/common.php");
$id=$_GET['id'];
$cur_id=$_SESSION['id'];
$select_query="SELECT name,question,answer,likes,user_id,qnat.id FROM qnat INNER JOIN users on qnat.user_id=users.id WHERE qnat.id='$id'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);

$check_id=$row['user_id'];


if($check_id==$cur_id)
{
header('location: answerforum.php');
}
else
{
$like=$row['likes'];
$like=$like+1;
$answer_registration_query = "UPDATE qnat SET likes='$like' WHERE id='$id' ";
$answer_registration_submit = mysqli_query($con, $answer_registration_query) or die(mysqli_error($con));
header('location: answerforum.php');
}

?>
