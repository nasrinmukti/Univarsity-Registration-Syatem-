<?php 
    include 'database.php';
 ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Study</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">

     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <link rel="stylesheet" href="css/plugins.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="bgcolor">



<header class="header-area section">
    <div class="header-top section">
        <div class="container">
            <div class="row">
                <div class="header-top-left text-left col-sm-6">
                    <p>Have any question? call to- +880-1704-557252</p>
                </div>
              
            </div>
        </div>
    </div>
    <div class="header-bottom bg-white sticker section sticker">
        <div class="container">
                <div class="col-sm-12">
                  <!-- Header Logo -->
                    <div class="header-logo float-left">
                        <a href="index.php"><img src="img/logo2.png" alt="logo"></a>
                    </div>
                    <!-- Header Buttons -->
                    <div class="header-buttons float-right">
                        
                    </div>
                    <!-- Main Menu -->
                    <div class="main-menu float-right hidden-xs">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="courses.php">Courses</a></li>
                                <li><a href="event.php">event</a></li>
                                <li><a href="gallery.php">gallery</a></li>
                                <li class="info-edit"><a href="#">Information</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php">About Us</a></li>
                                        <li><a href="courses.php">Courses Page</a></li>
                                        <li><a href="event.php">Event Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="notice.php">Notice</a></li>
                                <li><a href="#contact" class="smoth-scroll">Contact</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal">ADMIN</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>   

</header>
<!-- End of Header Area -->



<!-- admin modal start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login as Admin</h4>
      </div>
      <div class="modal-body">
  
            <h3 class="modal-font">Alart!!!This field is only for Admin use.If you are  not,stay away.</h3><br>
                  <form method="post">
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!--admin modal end -->


<!--method call -->

<?php 
        if(isset($_POST['login']))
        {
        $name=$_POST['user'];
        $pass=$_POST['pass'];
        $st="SELECT username FROM `admin` WHERE username='$name' and password=$pass";
        echo "$st";
        $result=ShowData($st);
        $row = mysqli_num_rows($result);
        if($row==1){
            

            echo "<script> location.href='noticeedit.php';</script>";
            exit;           

        }
        else{
            echo'<script type="text/javascript">alert("sorry your username and password doesnot match")</script>';
        }
        }
 

 ?>
<!--method call end -->


<?php
    include 'footer.php';
?>