<!DOCTYPE html>
<html>
<body>

		<?php

		$t = date("l");

		$days = array(

			"Monday", "Tuesday", "wednesday",
			"Thursday", "Friday", "Saturday",
			"Sunday"

			  );

		  	if ($t==$days[0]) {

			    echo "briyani!";
			    
			} 

			elseif ($t==$days[1]) {

			    echo "bong!";

			}

			elseif ($t==$days[2]) {

			    echo "qorma!";

			}

			elseif ($t==$days[3]) {

			    echo "pie!";

			}

			elseif ($t==$days[4]) {

			    echo " Chicken karahi!";

			}

			elseif ($t==$days[5]) {

			    echo " Chicken kufta!";

			}

			else {

			    echo "Icecream Shake! ";
			}
		?>
 
</body>
</html>