<?php

		

			function ShowData($qry)
			{
				$con =new mysqli("localhost","root","","project");
				if(!$con)
				{
					return "database is not connected";
				}
				if (mysqli_query($con,$qry))
				{
					$result = mysqli_query($con,$qry);
					
					return $result;
				}
				else
				{
					mysql_close($con);
					return "oparetion failed";
				}

			}

			
/*insert data to update noticeboard*/
			
			function Insert($qry)
		{
			$con = new mysqli("localhost","root","","project");
			if(!$con)
			{
				echo '<script type="text/javascript">alert("Database is not connected");</script>';
			}
			if (mysqli_query($con,$qry))
			{
				mysqli_close($con);
				echo '<script type="text/javascript">alert("Insert Success");</script>';
			}
			else
			{
				mysqli_close($con);
				echo '<script type="text/javascript">alert("Insert Failed");</script>';
			}

		}


?>
