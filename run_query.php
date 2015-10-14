<?php 
require("database_connection.php");
$query_text=$_REQUEST['query'];
$result=mysql_query($query_text);
if(!result){
	die("<p>Error in executing the SQL query ".$query_text.":".mysql_error()."</p>");
}

$return_row=true;
$uppercase_query_text=strtoupper($query_text);
if(preg_match("/^\s*(CREATE|INSERT|UPDATE|DELETE|DROP)/i", trim($query_text))){
	$return_row=false;
}

if($return_row){
	echo "<p>Results from your query:</p>";
	echo "<ul>";
	while ($row=mysql_fetch_row($result)) {
		echo "<li>{$row[0]}</li>";
	}
	echo "<ul>";
}else{
	echo "<p>Your query was processed successfully.</p>";
	echo "<p>{$query_text}</p>";
}

 ?>