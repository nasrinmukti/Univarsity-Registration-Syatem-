<?php 
    include 'database.php';
    include 'menu.php';
    if(isset($_POST['add']))
    {
        $courseCode = $_POST['courseCode'];
        $st = "INSERT INTO `takencourse`(`cid`, `sid`) VALUES (' $courseCode',1)";
        Insert($st);
    }

    $st = "SELECT * FROM `course`";
    $result = ShowData($st);

 ?>
    <div class="container" style="padding-top: 180px; margin-bottom: 20px;">
        <div class="row">
            <form class="form-horizintal" method="post">
                <div class="form-group">
                    <div class="col-xs-3 text-center">
                        Course Name
                    </div>
                    <div class="col-xs-6">
                        <select name="courseCode" required class="form-control">
                            <?php 
                                while ($row = mysqli_fetch_assoc($result))  { ?>
                                    <option value="<?=$row['id']?>"><?=$row['courseName']?></option> <?php
                                }
                            ?>    
                        </select>                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-3">
                        <input type="submit" name="add" value="Add">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
    include 'footer.php';
?>