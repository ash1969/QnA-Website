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
            
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1><large>{</large>{<small>{</small><small>}</small>}<large>}</large> &nbsp RECursion</h1>
                            <p>Programming Club of NIT Durgapur </p>
                            <br/>
                            <?php if (!isset($_SESSION['email'])) { ?> <a href="login.php" role="button" class="btn btn-danger btn-lg active">Ask a Question</a> <?php } else {?><a href="ask.php" class="btn btn-lg btn-danger active">Ask a Question</a><?php } ?>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            
            
        </div>

        <?php include("includes/footer.php"); ?>   

    </body> 
</html>