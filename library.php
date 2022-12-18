<html>
<head>
<title>JUST Library</title>
</head>
<body background="color.jpg">
<?php
extract($_POST);
$ID = $_POST["ID"];
$Pass = $_POST["PASS"];

echo ("<center>");
echo ("<h1><font color=yellow>Welcome To JUST Library!!!</font></h1>");
echo ("<hr width=500 color=green>");
echo ("<form method=POST  action=operations.php >");
echo ("<h3><font color=red>Book Operations :</font></h3>");
echo ("<select name=op1>");
echo ("<option>---</option>");
echo ("<option>Add Book</option>");
echo ("<option>Delete Book</option>");
echo ("<option>Update Book</option>");
echo ("<option>Search Book</option>");
echo ("<option>Display All Books</option>");
echo ("</select>");    
echo ("\t<input Type = submit value=GO>");

echo ("<br><br><br><br><br>");
echo ("<hr width=900 color=green>");

echo ("<form method=POST  action=operations.php >");
echo ("<h3><font color=red>Borrower Operations :</font></h3>");
echo ("<select name=op2>");
echo ("<option>---</option>");
echo ("<option>Add Borrower</option>");
echo ("<option>Delete Borrower</option>");
echo ("</select>");    
echo ("\t<input Type = submit value=GO>");

echo ("<br><br><br><br><br>");
echo ("<hr width=900 color=green>");

echo ("<form method=POST  action=operations.php >");
echo ("<h3><font color=red>Sell Book Operations :</font></h3>");
echo ("<select name=op3>");
echo ("<option>---</option>");
echo ("<option>Sell New Book</option>");
echo ("<option>Display All Sells Books</option>");
echo ("</select>");    
echo ("\t<input Type = submit value=GO>");

echo ("<br><br><br><br><br>");
echo ("<hr width=900 color=green>");

echo ("<form method=POST  action=operations.php >");
echo ("<h3><font color=red>Loan Book Operations :</font></h3>");
echo ("<select name=op4>");
echo ("<option>---</option>");
echo ("<option>Borrow A Book</option>");
echo ("<option>Display All Loaned Books</option>");
echo ("</select>");  
echo ("\t<input Type = submit value=GO>");
echo ("</center>");
?>
</body>
</html>