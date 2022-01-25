<?php
    session_start();
    require_once'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nazmul_IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form action="login-post.php" method="POST" class="myForm text-center">
                            <header>Login Form</header>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" name="email" type="text" id="email" value="<?php echo $_SESSION['email']??''?>" >
                                <p>
                                <span class="text">
                                <?php
                                    if (isset($_SESSION['invalidemail'])) {
                                        ?>
                                        <style type="text/css">
                                            .text{
                                                color: red;
                                                font-size: 14px;
                                                font-weight: bold;
                                                font-style: italic;
                                            }
                                        </style>
                                        <?php
                                        echo $_SESSION['invalidemail'];
                                        unset($_SESSION['invalidemail']);
                                    }
                                ?>
                                </span>
                                </p>                                 
                            </div>                       

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" name="password" id="password" placeholder="Password" required>
                                <p>
                                <span class="text">
                                <?php
                                    if (isset($_SESSION['invalidpassword'])) {
                                        ?>
                                        <style type="text/css">
                                            .text{
                                                color: red;
                                                font-size: 14px;
                                                font-weight: bold;
                                                font-style: italic;
                                            }
                                        </style>
                                        <?php
                                        echo $_SESSION['invalidpassword'];
                                        unset($_SESSION['invalidpassword']);
                                    }
                                ?>
                                </span>
                                </p>                                
                            </div>

                            <div class="form-group">
	                            <button type="submit" class="butt">Login</button>
                            </div>                            
                        </form>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box"><header>Wellcome</header>
                            <h6>Once in a while, you should take your time and appreciate your friends who have stick by you throughout your difficult and shiny days. Send some emotional friendship quotes to your precious friends.
                            </h6>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>

