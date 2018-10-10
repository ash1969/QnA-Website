<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RECursion</title>
    </head>
    <body style="padding-top: 50px;">
        <?php require("includes/common.php"); ?>
        <?php include("includes/header.php"); ?>
        
        <div id="content">
            
            <div id = "banner_image_4">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            
                    <table class="table table-striped">
                        <div><h1 class="text-primary">PREVIOUSLY POSTED QUESTIONS</h1></div>
                        <tbody>
                          <?php
        $select_query="SELECT name,question,answer,likes,user_id,qnat.id FROM qnat INNER JOIN users on qnat.user_id=users.id";
        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
        $check=mysqli_num_rows($select_query_result);
        
        if($check==0)
        {
            echo "No questions posted till yet.";
        }
        
        else 
            {
            echo "<br>";
            echo "<br>";
            while($row=mysqli_fetch_array($select_query_result))
            {
                ?>
                        <div>  <?php echo $row['name']  ;echo ": ";?><?php echo $row['question'];echo "? ";?><a href="like_script.php?id=<?php echo $row['id'];?>" class="glyphicon glyphicon-thumbs-up "></a><?php echo " ";echo $row['likes'];?></div><div><?php echo "";echo $row['answer'];echo "  ";?><a href= "answer.php?id=<?php echo $row['id']; ?> " color="#ff0000"> ANSWER</a></div>    
             
                <?php 
             echo "<br";
            }
            }
            ?>  
                      
       
      
            </tbody>
                    </table>

                            
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            
        </div>

        

        <?php include("includes/footer.php"); ?>   

    </body> 
</html>
