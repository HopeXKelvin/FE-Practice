<?php 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 	<div id="header"></div>
 	<div id="content">
 		<p>Here's a record of what information you submitted:</p>
 		<p>
 			Name:<?php echo $f_name." ".$l_name; ?><br/>
 			Email:<?php echo $email; ?><br/>
 			<a href="<?php echo $facebook_url; ?>">Your facebook page.</a><br/>
 			<a href="<?php echo $twitter_url; ?>">Check out your Twitter feed.</a>
 		</p>
 	</div>
 	<div id="footer"></div>
 </body>
 </html>