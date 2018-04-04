<?php
session_start();
$_SESSION['user'];
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `lecsession` WHERE CONCAT(`sessions`, `id`, `fname`, `lecname`, `date`, `stime`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
	
}
 else {
    echo '';
	$search_result = "";

}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "assignmentiit");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;

}

	


echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8">';

echo '<title>New Session Details</title>';
		echo '</head>';
		echo '<h1 align = "center"><u>Session for Lecturer</u></h1><br><br>';
		echo '<html>';
		echo '<head>';
 
	
        echo ' <h3 align = "center">Lecturer Name &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;'.$_SESSION['user'].'</h3>';
		
 
        echo '<style>';
        echo 'table,tr,th,td';
        echo '{';
        echo 'border: 1px solid black;';
        echo '}';
        echo '</style>';
		echo '</head>';
		echo '<body>';
		
        echo ' <table align = "center">';
		
		
		echo ' <form name="form1" method=post action="lecfeedback.php" onSubmit="return formvalidation(this)">';
        echo ' <td><input type="text" name="valueToSearch" placeholder="Enter Student ID"></td>';
        echo ' <td><input type="submit" name="search" value="Search"></td>';
			
        echo ' </table></br></br>';

		echo ' <table align = "center">';
        echo ' <tr>';
        echo ' <th>Session ID</th>';
        echo ' <th>Student ID</th>';
        echo ' <th>Student Name</th>';
        echo ' <th>Lecturer Name</th>';
		echo ' <th>Date</th>';
        echo ' <th>Start Time</th>';

        echo ' </tr>';

		echo ' <!-- populate table from mysql database -->';
                
					
				
				while($row = mysqli_fetch_array($search_result)):
                echo' <tr>';
					$sess =$row['sessions'];
					$sid =$row['id'];
					$sname =$row['fname'];
					$lname =$row['lecname'];
					$sdate =$row['date'];
					$begin=$row['stime'];
				
			
			echo '</form>';
			
				//store database variables
          ?>      
		  
			<form action= "StartSession.php" method = "post">
		  
				<td><input type="textbox" name = "id" value="<?php echo $row['id']; ?>" /></td>
				<td><input type="textbox" name = "session" value="<?php echo $row['sessions']; ?>" /></td>
				<td><input type="textbox" name = "fname" value="<?php echo $row['fname']; ?>" /></td>
				<td><input type="textbox" name = "lecname" value="<?php echo $row['lecname']; ?>" /></td>
				<td><input type="textbox" name = "date" value="<?php echo $row['date']; ?>" /></td>
				<td><input type="textbox" name = "stime" value="<?php echo $row['stime']; ?>" /></td>
				
				<th><input type="submit" align ="center" name="search" value="Proceed to Feedback"></th>
			</form>
		
		
		<?php			
        endwhile;
		echo '</table></br></br></br>';
		
		echo '</form>';
		
		echo '<a href="index.php"><h2 align = "center">Logout</h2></a>';
		echo '</html>';
		?>
