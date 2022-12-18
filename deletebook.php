<html>
<head>
<title>Delete Book</title>
</head>
<body background=sql.jpg>
<?php
extract($_POST);
$ID = $_POST["t1"];

$Conn = mysqli_connect("localhost","root","");
if(!$Conn)
	die("<center><br><br><br><br><h1><font color=orange>Error To Connect To Server!</font></h1></center>");

$DB = mysqli_select_db($Conn , "just library");
if(!$DB)
	die("<center><br><br><br><br><h1><font color=orange>Error To Select The Database!</font></h1></center>");

$Query = "delete from book where ID = '$ID'";
$Result = mysqli_query($Conn , $Query);
if(!$Result)
	die("<center><br><br><br><br><h1><font color=orange>Book Not Deleted From Library!</font></h1></center>");
else
	echo ("<center><br><br><br><br><h1><font color=orange>Book Deleted From Library!</font></h1></center>");

mysqli_close($Conn);
?>
</body>
</html>