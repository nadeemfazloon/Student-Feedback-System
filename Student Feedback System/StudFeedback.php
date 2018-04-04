<?php

session_start();
$_SESSION['user'];
 
echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8">';

echo '<title>Student Session Details</title>';
		echo '</head>';
		echo '<h1 align = "center"><u>Student Options Page</u></h1><br><br>';
		echo '<body>';
		echo '<head>';
 
        echo '<style>';
        echo 'table,tr,th,td';
        echo '{';
        echo 'border: 1px solid black;';
        echo '}';
        echo '</style>';
		echo '</head>';
		echo '<body>';
		
        echo ' <table align = "center">';
		
		
		echo ' <form name="form1" method=post action="StudFeedback.php" onSubmit="return formvalidation(this)">';
		

			
        echo ' </table></br></br>';

		echo ' <table align = "center">';
        echo ' <th><h2>Student Logged in as Student ID &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h2></th>';
		echo ' <th><h2 >'.$_SESSION['user'].'</h2></th>';
	    echo ' </table></br></br></br>';
		echo '</form>';
		
	

 ?>     

 <a href="StudLast.php"><h3 align = "center">View Last Sessions</h3></a>
 
 <form action="StudAll.php" method="POST" >';
 <input type="hidden" name = "name" value="<?php echo $name ?>">
<a href="StudAll.php"><h3 align = "center">View All Sessions</h3></a></br></br></br>
 </form>
<a href="index.php"><h2 align = "center">Logout</h2></a>

 </body>
 </html>

