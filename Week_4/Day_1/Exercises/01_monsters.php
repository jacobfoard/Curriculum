<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Let's create a class and some objects!
     *
     * Define a class below with the name "LivingThing".
     * Give the class two public properties called "name" and "health".
     *
     * Once you have your class defined, let's create some living things.
     * Create three objects from your class, one for each of the creatures below.
     * Be sure to set each object's name and health!
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
     * Finally, add each of your objects to an array called "monsters"
     *
     * Use the following function documentation if you need a refresher on how classes are defined:
     * @see http://php.net/manual/en/language.oop5.basic.php
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////


    echo "<h3>Monsters!</h3>";

    foreach ($monsters as $monster) {
        echo "<p>$monster->name: $monster->health</p>";
    }

    ?>

</p>

</body>
</html>