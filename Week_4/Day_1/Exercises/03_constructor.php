<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Now we will use a class "constructor" method to make it easier for us to create monsters.
     *
     * Copy your class from the previous exercise, but this time add a constructor method to your
     * class that takes two parameters: one for the name and one for the health.
     *
     * Your constructor function should set the value of the "name" and "health" properties.
     *
     * Here are details on how to create a constructor:
     * @see http://php.net/manual/en/language.oop5.decon.php
     *
     * Now, recreate the same monsters as before, but see if you can create each one with
     * just one line of code using your new constructor.
     *
     * The monsters:
     *
     * Name: "Rat"
     * Health: 5
     *
     * Name: "Goblin"
     * Health: 30
     *
     * Name: "Ogre"
     * Health: 80
     *
     * Finally, add each of your objects to an array called "monsters" just like before.
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////


    echo "<h3>Creating monsters with a constructor</h3>";

    foreach ($monsters as $monster) {
        echo "<p>$monster->name: $monster->health</p>";
    }

    ?>

</p>

</body>
</html>