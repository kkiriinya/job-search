<?php
$host="localhost";
$user="root";
$pass="";
$db="order_list";
$con= mysqli_connect($host,$user,$pass,$db);
if($con)

$condb=mysqli_select_db($con,$db);
$available="SELECT*FROM Employee";
$result=mysqli_query($con,$available);
?>
<!DOCTYPE html>
<html>
<head>
<title>Employees</title>
  <link type="text/css" rel="stylesheet" href="css/admin.css">
</head>
<body>



<?php
while($record=mysqli_fetch_array($result))

{
	print  "<ul>";
	print   "<fieldset>";
	print   "<legend>Available Employees</legend>";
    print   "<div class='admin'>";

	print	"<li>";
	//echo   $record[0];

	//print "</td><td>";
	echo   "First Name: ",$record[1];
	//print "</td><td>";
	print "</li>";

	print	"<li>";
	//echo   $record[0];

	//print "</td><td>";
	echo   "Second Name: ",$record[2];
	//print "</td><td>";
	print "</li>";

	print	"<li>";
	echo   "Phone Number: ",$record[3];
	print	"</li>";
	//print "</td><td>";
	print	"<li>";
	echo   "Email: ",$record[4];
	print	"</li>";

	print	"<li>";
	echo   "Message: ",$record[5];
	print	"</li>";

	print "</div>";
	
	print	"<li>";
	echo   "Level: ",$record[6];
	print	"</li>";
	print	"<li>";
	echo   "years: ",$record[7];
	print	"</li>";
	
    print	"<li>";
	echo   "attachment: ",$record[8];
	print	"</li>";
    
    print "</div>";
    print   "</fieldset>";
	print  "</ul>";
	}

?>

<form method="post" action="logout.php">
<input type="submit" value="Logout">
</form>
</body>
</html>
