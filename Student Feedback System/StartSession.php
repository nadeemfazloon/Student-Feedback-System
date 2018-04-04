<?php

echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8">';

echo '<title>Student Feedback</title>';
		echo '</head>';
		echo '<h1 align = "center"><u>Provide feedback</u></h1><br><br>';
		echo '<html>';
		echo '<head>';
				
				
		echo '<html>';
		echo '<head>';
 
        echo '<style>';
        echo 'table,tr,th,td';
        echo '{';
        echo 'border: 1px solid black;';
        echo '}';
        echo '</style>';
		echo '</head>';
		echo '<body>';

echo ' <form action="insert.php" method="POST" >';


	//Variables
	
	$sid =$_POST['id'];
	$sess =$_POST['session'];
	$sname =$_POST['fname'];
	$lname =$_POST['lecname'];
	$date =$_POST['date'];
	$begin=$_POST['stime'];		


	
			
	//Displayed Values 		
echo '<table align = "center">';
echo '<tr><td>Session ID :</td><td><input type="textbox" name = "sess" value="'.($sess).'"disabled></td></tr>';
echo '<tr><td>Student ID :</td><td><input type="textbox" name = "sid" value="'.($sid).'"disabled></td></tr>';
echo '<tr><td>Student Full Name:</td><td><input type="textbox" name = "sname" value="'.($sname).'"disabled></td></tr>';
echo '<tr><td>Lecturer Name :</td><td><input type="textbox" name = "lname" value="'.($lname).'"disabled></td></tr>';
echo '<tr><td>Date :</td><td><input type="textbox" name = "date" value="'.($date).'"disabled></td></tr>';
echo '<tr><td>Start Time :</td><td><input type="textbox" name = "begin" value="'.($begin).'"disabled></td></tr>';




?>


			<input type="hidden" name = "fname" value="<?php echo $sname ?>">
			<input type="hidden" name = "sid" value="<?php echo $sid ?>">
			<input type="hidden" name = "sessio" value="<?php echo $sess ?>">
			<input type="hidden" name = "slname" value="<?php echo $lname ?>">
			<input type="hidden" name = "dates" value="<?php echo $date ?>">
			<input type="hidden" name = "begins" value="<?php echo $begin ?>">


			<tr><br>
			<td><label>End Time :</label></td>
			<td><input type="text" name="etime"/></br></td>
			</tr>
			</table ><br>
		
		
			<table align = "center">
			<tr>
			<td><label>Notes :</label></td>
			<td><textarea name ="note" ></textarea></br></td>
			</tr>
			</table ><br>

			

			<table align = "center">
			<tr>
			<td><label>Tasks :</label></td>
			<td><textarea  name = "task" ></textarea></td>
			</tr>
			<td><input type=reset value ="Clear"></td>
			<td align = "center"><input type="submit" name="submit" value="Insert"/></td>
			</th>
			</table>
			




<?php


echo '</table>';
echo '</form>';
echo '</body>';

?>
<br><br><br>
<a href="lecfeedback.php"><h2 align = "center">Home</h2></a>
<a href="index.php"><h2 align = "center">Logout</h2></a>