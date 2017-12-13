
 
<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <link rel="stylesheet" href="css/plugins.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
    <body class="bgcolor">


<div class="header-area section">
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
                    <!-- Header Buttons--> 
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
                            
                                <li><a href="#" data-toggle="modal" data-target="#myModal">ADMIN</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
         </div>



<!-- notice part start -->


<div class="nedit">
        <form action="" method="post" enctype="multipart/form-data">
        <h2 class="">Event part</h2>
                <table class="table table-border">
                    <tr>
                        <td>
                           EventTitle
                        </td>
                        <td>
                            <input type="text" name="EventTitle">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            location
                        </td>
                        <td>
                            <input type="text" name="location">
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Description:
                        </td>
                        <td>
                            <textarea name="Description" style="resize:none;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Picture:
                        </td>
                        <td>
                            <input type="file" name="pics">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit" name="submit-btn-click">
                    </tr>
                </table>
        </form>  
</div>
<!-- notice part end -->

</div>


 <!-- notice part start -->   
        <?php 
        include 'database.php';

            if(isset($_POST["submit-btn-click"]))
            { 
                echo "gfhs";
                $nm=$_POST['EventTitle'];
                $dt = $_POST['location'];
                $dec = $_POST["Description"];
                $dst = "fgh";
                echo $nm;
                $filename = $_FILES['pics']['name'];
                $temp = $_FILES['pics']['tmp_name'];
                $dst = "pic/".$filename;
                move_uploaded_file($temp, $dst);
                $st="Insert into eventinfo(EventTitle,location,Description,Picture) values('$nm','$dt','$dec','$dst');";
                
                Insert($st);

            }
         ?>

<!-- notice part end -->


<?php
    include 'footer.php';
?>