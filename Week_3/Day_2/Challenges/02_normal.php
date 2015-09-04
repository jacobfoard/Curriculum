<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a PHP script to calculate and display average temperature, 
             five lowest and highest temperatures.
            
            Expected Output :
            Average Temperature is : 70.6 
            List of seven lowest temperatures : 60, 62, 63, 63, 64, 
            List of seven highest temperatures : 76, 78, 79, 81, 85,
            */

            $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

            sort($temperatures);
            $arrayAverage = array_sum($temperatures) / (count($temperatures));
            echo $arrayAverage . "</br>";
            $temperatures = array_unique($temperatures);
            var_dump($temperatures);
            $uniqueTemps = array_values($temperatures);
            var_dump($uniqueTemps);
            echo "List of seven lowest temperatures: " . $uniqueTemps[0] . ", " . $uniqueTemps[1] .", " . $uniqueTemps[2] .", " . $uniqueTemps[3] .", " . $uniqueTemps[4] .", " . $uniqueTemps[5] .", " . $uniqueTemps[6];
            echo "</br>";
            echo "List of seven highest temperatures: " . $uniqueTemps[count($uniqueTemps) -7] . ", " . $uniqueTemps[count($uniqueTemps) -6] .", " . $uniqueTemps[count($uniqueTemps) -5] .", " . $uniqueTemps[count($uniqueTemps) -4] .", " . $uniqueTemps[count($uniqueTemps) -3] .", " . $uniqueTemps[count($uniqueTemps) -2] .", " . $uniqueTemps[count($uniqueTemps) -1];
        ?>

    </p>

    </body>
</html>