<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Bill Calculator</title>
 
 
<body>

<?php
    
    $units = 85;
    $unit_cost_Ist = 3.50;
    $unit_cost_2nd= 4.00;
    $unit_cost_3rd = 5.20;
    $unit_cost_4th = 6.50;

 
    if($units <= 50) {
        $bill = $units * $unit_cost_Ist;
        echo "$bill";
    }

    else if(($units > 50) && ($units <= 100)) {
        $temp = 50 * $unit_cost_Ist;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_2nd);
        echo "$bill";
    }

    else if(($units > 100) && ($units <= 200)) {
        $temp = (50 * 3.5) + (100 * $unit_cost_2nd);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_3rd);
        echo "$bill";
    }

    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_2nd) + (100 * $unit_cost_3rd);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_4th);
        echo "$bill";
    }
    
 
?>



 </body>
</head>
</html>