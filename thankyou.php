
<html>
<head></head>
<body>
<?php
 
$dbconnect=mysql_connect("localhost","root","","industry");
if(mysqli_connect_errno($dbconnect)){
	 echo "failed to connect";
	 
 }
 else {
	 echo "ThankYou for your comment";
 }
 ?>
 </body>
 </html>
