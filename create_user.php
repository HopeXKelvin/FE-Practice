<?php 
require("database_connection.php");

$f_name=trim($_REQUEST["first_name"]);
$l_name=trim($_REQUEST["last_name"]);
$email=trim($_REQUEST["email"]);
$facebook_url=str_replace("facebook.org", "facebook.com", trim($_REQUEST["facebook_url"]));
$position=strpos($facebook_url, "facebook.com");
if($position===false){
	$facebook_url="http://www.facebook.com/".$facebook_url;
}
$twitter_handle=trim($_REQUEST["twitter_handle"]);
$twitter_url="http://www.twitter.com/";
$position=strpos($twitter_handle, "@");
if ($position===false) {
	$twitter_url=$twitter_url.$twitter_handle;
}else{
	$twitter_url=$twitter_url.substr($twitter_handle, $position+1);
}

$insert_sql="INSERT INTO users(first_name,last_name,email,facebook_url,twitter_handle)".
	"VALUES('{$f_name}','{$l_name}','{$email}','{$facebook_url}','{$twitter_handle}');";
mysql_query($insert_sql)
	or die(mysql_error());
echo "OK";
 ?>