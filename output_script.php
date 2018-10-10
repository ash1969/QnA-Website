<?php
require("includes/common.php");
$id=$_GET['id'];
$cur_id=$_SESSION['id'];
$answer=mysqli_real_escape_string($con,$_POST['answer']);
$select_query="SELECT name,question,answer,likes,user_id,qnat.id FROM qnat INNER JOIN users on qnat.user_id=users.id WHERE qnat.id='$id'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
$selects_query="SELECT * FROM users WHERE users.id='$cur_id'";
$selects_query_result=mysqli_query($con,$selects_query) or die(mysqli_error($con));
$rowz=mysqli_fetch_array($selects_query_result);
$ans=$row['answer'];
$alias=$rowz['name'];
$check_id=$row['user_id'];
$answer=$alias.": ".$answer."<br>".$ans;
if($check_id==$cur_id)
{
  header('location: answerforum.php');  
}
 else 
     {
    $answer_registration_query = "UPDATE qnat SET answer='$answer' WHERE id='$id' ";
    $answer_registration_submit = mysqli_query($con, $answer_registration_query) or die(mysqli_error($con));
    
    header('location: answerforum.php');
     }

?>
