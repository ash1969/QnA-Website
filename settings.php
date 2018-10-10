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
        <title>RECursion-Settings</title>
    </head>
    <body>
        <?php require("includes/common.php"); ?>
        <?php include("includes/header.php"); ?>
        <?php
        if (!isset($_SESSION['email'])) 
            {
            header('location: login.php');
            } 
         ?>
        <div class="container-fluid imgee" id="content">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h1 class="text-pr">Change Password</h1>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword"  placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
         <?php include("includes/footer.php"); ?> 
    </body>
</html>
