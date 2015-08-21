<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Now we will add a handy method to our class.
     *
     * Copy your code from the previous exercise, then add a public method "isAlive" to the class.
     * The method should return a boolean value of true if the value of the "health" property is
     * greater than zero, otherwise it should return false.
     *
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////


    echo "<h3>Are the monsters alive?</h3>";

    foreach ($monsters as $monster) {
        echo "<p>$monster->name is " . ($monster->isAlive() ? 'alive' : 'dead') . "</p>";
    }

    ?>

</p>

</body>
</html>