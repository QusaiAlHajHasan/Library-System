<html>
<head>
<title>Display All Books</title>
</head>
<body background=sql.jpg>
<?php
$Conn = mysqli_connect("localhost","root","");
if(!$Conn)
	die("<center><br><br><br><br><h1><font color=orange>Error To Connect To Server!</font></h1></center>");

$DB = mysqli_select_db($Conn , "just library");
if(!$DB)
	die("<center><br><br><br><br><h1><font color=orange>Error To Select The Database!</font></h1></center>");

$Query = "select * from book";
$Result = mysqli_query($Conn , $Query);
if(!$Result)
	die("<center><br><br><br><br><h1><font color=orange>No Books In Library!</font></h1></center>");
else
{
	echo ("<center><br><br><br><br><h1><font color=orange>All Books In Library!</font></h1></center>");
	print ("<center><table border = '1' width=500 bgcolor=red><tr>");
	print ("<th align=center>ID</th><th align=center>Book Name</th><th align=center>Publisher</th><th align=center>Edition</th><th align=center>Price</th></tr><tr>");
    while ($row = mysqli_fetch_assoc($Result))
    {
        foreach ($row as $K => $v)
        print ("<th align=center>$v</th>");
        print("</tr>");
	}
}

mysqli_close($Conn);
?>
</body>
</html>