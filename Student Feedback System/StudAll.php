<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignmentiit";


session_start();
$_SESSION['user'];
$name = $_SESSION['user'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `id`, `fname`, `sessions`, `lecname`, `date`, `stime`, `etime`, `note`, `task` FROM `endsession` WHERE `id`='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo '<style>';
        echo 'table,tr,th,td';
        echo '{';
        echo 'border: 1px solid black;';
        echo '}';
        echo '</style>';
		echo '</head>';
		echo '<body>';
		
		echo '<h1 align = "center"><u>All Student Sessions</u></h1><br><br>';
		echo ' <table align = "center">';
        echo "<tr><td><b>ID  : </b>" . $row["id"]. "</td><td><b>Student Name  :  </b> " . $row["fname"]. "</td><td><b>Session ID  :  </b>  " . $row["sessions"]. "</td><td><b>Date  :  </b>  " . $row["date"]. "</td><td><b>Start Time  :  </b>  " . $row["stime"]. "</td><td><b>End Time  :  </b>  " . $row["etime"]. "</td><td><b>Lecturer Notes  :  </b>  " . $row["note"]."</td><td><b>Tasks  :  </b>  " . $row["task"]. "<br></tr></table>";
		
		
	}
} else {
    echo "0 results";
}
echo '<a href="StudFeedback.php"><h2 align = "center">Home</h2></a>';
echo '<a href="Choose.php"><h2 align = "center">Logout</h2></a>';
$conn->close();
?>