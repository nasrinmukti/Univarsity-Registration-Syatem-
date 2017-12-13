<?php 
    include 'database.php';
    include 'menu.php';
    $st = "select course.courseName,course.courseCode,course.courseTeacher,student.name from takencourse,student,course where course.id = takencourse.cid And takencourse.sid = student.id And student.id=1  ";
    $result = ShowData($st);
?>
	<div class="container" style="padding-top: 180px;">
		<div class="row">
			<table class="table-bordered table-striped table">
				<tr>
					<td>Name</td>
					<td>Course Name</td>
					<td>Course Code</td>
					<td>Course Teacher</td>
				</tr>
				 <?php 
                    while ($row = mysqli_fetch_assoc($result))  { ?>
                     <tr>
                     	<td><?=$row['name']?></td>
                     	<td><?=$row['courseName']?></td>
                     	<td><?=$row['courseCode']?></td>
                     	<td><?=$row['courseTeacher']?></td>
                     </tr>
                    <?php
                    }
                ?> 
			</table>
		</div>
	</div>

<?php
    include 'footer.php';
?>