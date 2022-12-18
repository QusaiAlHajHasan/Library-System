<html>
<head>
<title>Add Borrower</title>
</head>
<body background=sql.jpg>
<?php
extract($_POST);
$NO = $_POST["t1"];
$Name = $_POST["t2"];
$Phone = $_POST["t3"];
$BDate = $_POST["t4"];

$Conn = mysqli_connect("localhost","root","");
if(!$Conn)
	die("<center><br><br><br><br><h1><font color=orange>Error To Connect To Server!</font></h1></center>");

$DB = mysqli_select_db($Conn , "just library");
if(!$DB)
	die("<center><br><br><br><br><h1><font color=orange>Error To Select The Database!</font></h1></center>");

$Query = "Insert INTO borrower values ('$NO' , '$Name' , '$Phone' , '$BDate')";
$Result = mysqli_query($Conn , $Query);
if(!$Result)
	die("<center><br><br><br><br><h1><font color=orange>Borrower Not Added To Library!</font></h1></center>");
else
	echo ("<center><br><br><br><br><h1><font color=orange>Borrower Added To Library!</font></h1></center>");

mysqli_close($Conn);
?>
</body>
</html>