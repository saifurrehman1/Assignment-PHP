<!DOCTYPE html>
<html>
<head>
	><meta charset="utf-8">
	<title>Switch statement</title>
</head>
<body>

	<?php

	$favdish = date("l");

switch ($favdish) {

    case "Monday":

        echo "Briyan!";

        break;

    case "Tuesday":

        echo "qorma!";

        break;

    case "Wednesday":

        echo "plao!";

        break;

        case "Thursday":

        echo "Fish Fry!";

        break;

        case "Friday":

        echo "karahi!";

        break;

        case "Saturday":

        echo "Pokara!";
        break;

        case "Sunday":

        echo "Aloo Chat!";

        break;

       default:
         echo "neither Lady Finger nor kadu!";
    }

	?>

</body>
</html>