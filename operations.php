<html>
<head>
<title>SQl Query</title>
</head>
<body background="color2.jpg">
<?php

extract($_POST);
$test1=$_POST["op1"];
$test2=$_POST["op2"];
$test3=$_POST["op3"];
$test4=$_POST["op4"];

if($test1 == "Add Book")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Add Book To Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=addbook.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book ID :</font></label></th><th><input type=text name=t1></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Title :</font></label></th><th><input type=text name=t2></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Publisher :</font></label></th><th><input type=text name=t3></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Edition :</font></label></th><th><input type=text name=t4></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Price :</font></label></th><th><input type=text name=t5></th></tr>");
	echo ("</table>");
	echo ("<table>");
	echo ("<tr><th align=center><br><input type=submit name=AddBook value=Add-Book><th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test1 == "Delete Book")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Delete Book From Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=deletebook.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book ID :</font></label></th><th><input type=text name=t1></th></tr>");
	echo ("</table>");
	echo ("<table>");
    echo ("<tr><th align=center><br><input type=submit name=DelBook value=Delete-Book ></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test1 == "Update Book")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Update Book In Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=updatebook.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book ID :</font></label></th><th><input type=text name=t1></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Title :</font></label></th><th><input type=text name=t2></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Publisher :</font></label></th><th><input type=text name=t3></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Edition :</font></label></th><th><input type=text name=t4></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Price :</font></label></th><th><input type=text name=t5></th></tr>");
	echo ("</table>");
	echo ("<table>");
	echo ("<tr><th align=center><br><input type=submit name=UpBook value=Update-Book></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test1 == "Search Book")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Search For A Book In Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=searchbook.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book ID :</font></label></th><th><input type=text name=t1></th></tr>");
	echo ("</table>");
	echo ("<table>");
    echo ("<tr><th align=center><br><input type=submit name=SearchBook value=Search-Book ></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test1 == "Display All Books")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Display All Books In Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=displayallbook.php>");
	echo ("<tr><th><br><input type=submit name=DisAllBook value=Display-All-Books></th></tr>");
	echo ("</table>");
	echo ("</center>");
}
if($test2 == "Add Borrower")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Add Borrower To Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=addborrower.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Borrower NO. :</font></label></th><th><input type=text name=t1></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Borrower Name :</font></label></th><th><input type=text name=t2></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Borrower Phone :</font></label></th><th><input type=text name=t3></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Borrower BirthDate :</font></label></th><th><input type=text name=t4></th></tr>");
	echo ("</table>");
	echo ("<table>");
	echo ("<tr><th align=center><br><input type=submit name=AddBorrower value=Add-Borrower></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test2 == "Delete Borrower")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Delete Borrower From Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=deleteborrower.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Borrower NO. :</font></label></th><th><input type=text name=t1></th></tr>");
	echo ("</table>");
	echo ("<table>");
    echo ("<tr><th align=center><br><input type=submit name=DelBorrower value=Delete-Borrower></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test3 == "Sell New Book")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Sell New Book!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=sellnewbook.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book ID :</font></label></th><th><input type=text name=t1></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Book Copies :</font></label></th><th><input type=text name=t2></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Sell Date :</font></label></th><th><input type=text name=t3></th></tr>");
	echo ("</table>");
	echo ("<table>");
    echo ("<tr><th align=center><br><input type=submit name=SellNewBook value=Sell-New-Book></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test3 == "Display All Sells Books")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Display All Sells Books!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=displayallsellsbook.php>");
	echo ("<tr><th align=center><br><input type=submit name=DisAllBook value=Display-All-Sells-Books></th></tr>");
	echo ("</table>");
	echo ("</center>");
}
if($test4 == "Borrow A Book")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Borrow A Book From Library!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=borrowabook.php>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Loan ID :</font></label></th><th><input type=text name=t1></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Loan NO. :</font></label></th><th><input type=text name=t2></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Out-Date :</font></label></th><th><input type=text name=t3></th></tr>");
    echo ("<tr><th align=left><label><font color=yellow>- Enter Due-Date :</font></label></th><th><input type=text name=t4></th></tr>");
	echo ("</table>");
	echo ("<table>");
	echo ("<tr><th align=center><br><input type=submit name=BorrowBook value=Borrow-A-Book></th></tr>");
    echo ("</table>");
	echo ("</center>");
}
if($test4 == "Display All Loaned Books")
{
	echo ("<br>");
	echo ("<center><h1><font color=red>Display All Loaned Books!!!</font></h1></center>");
    echo ("<hr width=500 color=black>");
	echo ("<br><br><br>");
	echo ("<center>");
	echo ("<table>");
	echo ("<form method=POST action=displayallloanedbook.php>");
	echo ("<tr><th align=left><input type=submit name=DisAllBook value=Display-All-Books></th></tr>");
	echo ("</table>");
	echo ("</center>");
}
?>
</body>
</html>