<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Let's protect our class' properties so no one can change the name or health directly.
     *
     * Copy your class from the previous exercise, then change the properties to be protected.
     *
     * Once the properties are protected you will need to add GETTER methods so we can still
     * access the values. So, add two methods called "getName" and "getHealth" that return the
     * value of the name and health properties respectively.
     *
     * Finally, now that your name and health properties are protected, fix the line that
     * prints out each monster's name and health.
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////


    echo "<h3>Protecting our monsters</h3>";

    foreach ($monsters as $monster) {
        // Fix the line below!
        echo "<p>$monster->name: $monster->health</p>";
    }

    ?>

</p>

</body>
</html>