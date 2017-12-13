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
<script type="text/javascript">
    <script>        
        $('a.smoth-scroll').on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1000);
            e.preventDefault();
        });
    </script>
</script>
</body>


</html>