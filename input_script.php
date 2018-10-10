<?php
require("includes/common.php");
$id=$_GET['id'];
$question=mysqli_real_escape_string($con,$_POST['question']);



    $question_registration_query = "insert into qnat(question, user_id) values ('$question' , '$id')";
    $question_registration_submit = mysqli_query($con, $question_registration_query) or die(mysqli_error($con));
  
    
    header('location: answerforum.php');

?>

