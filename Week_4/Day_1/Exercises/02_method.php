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
    
    class LivingThing {
        
        public $name;
        public $health;
        public function isAlive() {
            if($this->health > 0){
            return true;   
            }
            else{
                return false;
            }
        }    
    }

    $rat = new LivingThing();
    $rat->name = "Rat";
    $rat->health = -5;
    
    $goblin = new LivingThing();
    $goblin->name = "Goblin";
    $goblin->health = 30;
    
    $ogre = new LivingThing();
    $ogre->name = "Ogre";
    $ogre->health = 80;
    
    $monsters = array($rat, $goblin, $ogre);
    
    var_dump($ogre);

    echo "<h3>Are the monsters alive?</h3>";

    foreach ($monsters as $monster) {
        echo "<p>$monster->name is " . ($monster->isAlive() ? 'alive' : 'dead') . "</p>";
    }

    ?>

</p>

</body>
</html>