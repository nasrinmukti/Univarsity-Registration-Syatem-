

<div class="footer-top-area section pt-100 pb-50">
    <div class="container">
        <div class="row">
            <!-- Footer Widget -->
            <div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-50">
                <a class="footer-logo" href="index.php"><img src="img/slid1.jpg" alt=""></a>
                
                 <h3>Publication</h3>
                <ul>
                    <i class="fa fa-map-marker"></i> <span>Media Coverage</span>
                    <i class="fa fa-map-marker"></i> <span>e-Newsletter</span>
                    <i class="fa fa-map-marker"></i> <span> Newsletter</span>
                   <i class="fa fa-newspaper-o"></i> <span>Newspaper</span>
                    <i class="fa fa-map-marker"></i> <span>DIU Blog</span>
                </ul>
            
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-50">
                <h3 id="contact">GET IN TOUCH</h3>
                <ul>
                    <li> <i class="fa fa-mobile" aria-hidden="true"></i><span>+88 017 045 57252</span></li>
                    <li><i class="fa fa-plus-square-o" aria-hidden="true"></i><span><a href="https://daffodilvarsity.edu.bd/" target="_blank">daffodilversity.edu.bd</a></span></li>
                    <li><i class="fa fa-address-card" aria-hidden="true"></i><span>Main campus</span></li>

                    <li style="padding-left: 30px;"><span>Dhanmondi 32,Dhaka-1207</span></li>

                    <li><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/Daffodil-International-University-Fanpage-1525182814184377/?modal=admin_todo_tour" target="_blank"><span>fb.com</span></a></li>

                    <li><i class="fa fa-twitter" aria-hidden="true"></i><a href="https://twitter.com/FanclubDaffodil" target="_blank"><span>twiter</span></a></li>
                    <li><i class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/daffodilfunclub35" target="_blank"><span>instagram</span></a></li>
                    <li><i class="fa fa-linkedin" aria-hidden="true"></i><a href="https://www.linkedin.com/in/daffodil-university-6b942b154" target="_blank"><span>linkedin</span></a></li>

                </ul>
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-50">
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i><span>MAPS</span></a></h3>
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7296.798797765166!2d90.32063400000001!3d23.875452!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a707416b7fb3c64!2sDaffodil+International+University!5e0!3m2!1sen!2sbd!4v1499684237582" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
            
        </div>
    </div>
</div>
<!--End of Footer Top Area-->
<!-- Footer Bottom Area Start -->
<footer class="footer-bottom-area section">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-6 col-sm-7">
                <p>Copyright &copy; Study 2017.All right reserved.Created by Nahed Hasan</a></p>
            </div>
            <div class="text-right col-md-6 col-sm-5">
                <p><a href="#">Privacy Policy</a> , <a href="#">Terms &amp; Conditions</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer Bottom Area -->

<!-- admin popup start-->
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
    //echo $row;
        //echo "string";
    http_redirect("event.php");


}
else{
    //echo'<script type="text/javascript">alert("Not Found")</script>';
}
}
 

 ?>
<!--method call end -->
<!--admin popup end -->

<!-- jquery -->   
<script src="js/vendor/jquery-1.12.4.min.js"></script>

<!-- bootstrap JS -->   
<script src="js/bootstrap.min.js"></script>

<!-- plugins JS -->   
<script src="js/plugins.js"></script>

<!-- Ajax Mail JS -->
<script src="js/ajax-mail.js"></script>

<!-- main JS
============================================ -->    
<script src="js/main.js"></script>
<script>      
    $('a.smoth-scroll').on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1000);
            e.preventDefault();
        });
    </script>
</body>


</html>
