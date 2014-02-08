
<?php

if($_GET["username"] && $_GET["password"] &&$_GET["password1"]&& $_GET["email"]  )
{
	if($_GET["password"]==$_GET["password1"])
	{
	$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
    $conn=  mysql_connect($mysql_host,$mysql_user,$mysql_pass)or die(mysql_error());
    mysql_select_db("a_database",$conn);
    $sql="insert into users (username,password,email)values('$_GET[username]','$_GET[password1]','$_GET[email]')";
   	$result=mysql_query($sql,$conn) or die(mysql_error());
	
    print "<h1>you have registered sucessfully</h1>";
   
    print "<a href='index.html'>go to login page</a>";
	}
	else print "passwords doesnt match";
}
//else print"invaild input data";

?>