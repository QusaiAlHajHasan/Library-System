<html>
<head>
<title>Borrow A Book</title>
</head>
<body background=sql.jpg>
<?php
extract($_POST);
$ID = $_POST["t1"];
$NO = $_POST["t2"];
$OutDate = $_POST["t3"];
$DueDate = $_POST["t4"];

$Conn = mysqli_connect("localhost","root","");
if(!$Conn)
	die("<center><br><br><br><br><h1><font color=orange>Error To Connect To Server!</font></h1></center>");

$DB = mysqli_select_db($Conn , "just library");
if(!$DB)
	die("<center><br><br><br><br><h1><font color=orange>Error To Select The Database!</font></h1></center>");

$Query = "Insert INTO loan values ('$ID' , '$NO' , '$OutDate' , '$DueDate')";
$Result = mysqli_query($Conn , $Query);
if(!$Result)
	die("<center><br><br><br><br><h1><font color=orange>Book Not Added To Loan!</font></h1></center>");
else
	echo ("<center><br><br><br><br><h1><font color=orange>Book Added To Loan!</font></h1></center>");

mysqli_close($Conn);
?>
</body>
</html>