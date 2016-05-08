
<?php

						$con = mysql_connect("208.91.198.197:3306","arihant","superman");
						if (!$con)
					  	{
 							 die('Could not connect: ' . mysql_error());
 						}

						mysql_select_db("arihant", $con);

						
?>
