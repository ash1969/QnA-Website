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
        <title>RECursion-Login</title>
    </head>
    <body>
        <?php require("includes/common.php"); ?>
        <?php include("includes/header.php"); ?>
         <?php
        if (isset($_SESSION['email'])) 
            {
            header('location: ask.php');
            } 
         ?>
        <div id="content">
            <div class="container-fluid decor_bg img" id="login-panel">
                <div class="row row_style ">
                    <div class="col-md-4 col-md-offset-4">
                        
                            
                                <h2 class="text-warning">LOGIN</h2>
                            
                            <div class="panel-body">
                                <h5 class="text-danger"><i>Login to make a post a question!</i></h5>
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="text-warning"><h4>Don't have an account? <a href="signup.php">Register</a></h4></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
