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
        <?php if (!isset($_SESSION['email'])) 
            {
            header('location: signup.php');
            } 
         ?>
        
        

        <div id="content">
            
            <div id = "banner_image_3">
                <div class="container">	
                    <center>
                        <div id="banner_content" class="col-xs-offset-2 col-xs-8">
                            <h2 class="text-primary">POST YOUR QUESTION HERE</h2>
                        <form  action="input_script.php?id=<?php echo $_SESSION['id'] ?>" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Your question goes here." name="question"  required>
                            </div>
                            
                            <div><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                        </form>
                            </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            
            
        </div>

        <?php include("includes/footer.php"); ?>   

    </body> 
</html>

