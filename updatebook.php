<html>
<head>
<title>Update Book</title>
</head>
<body background=sql.jpg>
<?php
extract($_POST);
$ID = $_POST["t1"];
$Title = $_POST["t2"];
$Publisher = $_POST["t3"];
$Edition = $_POST["t4"];
$Price = $_POST["t5"];

$Conn = mysqli_connect("localhost","root","");
if(!$Conn)
	die("<center><br><br><br><br><h1><font color=orange>Error To Connect To Server!</font></h1></center>");

$DB = mysqli_select_db($Conn , "just library");
if(!$DB)
	die("<center><br><br><br><br><h1><font color=orange>Error To Select The Database!</font></h1></center>");

$Query = "update book set ID='$ID' , Title='$Title' , Publisher='$Publisher' , Edition='$Edition' , Price='$Price' , where ID = '$ID'";
$Result = mysqli_query($Conn , $Query);
if(!$Result)
	die("<center><br><br><br><br><h1><font color=orange>Book Not Updated To Library!</font></h1></center>");
else
	echo ("<center><br><br><br><br><h1><font color=orange>Book Updated To Library!</font></h1></center>");

mysqli_close($Conn);
?>
</body>
</html>