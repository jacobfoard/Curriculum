<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * It's time to create a hero to dispatch these pesky monsters.
     *
     * Copy your code from the previous exercise.
     *
     * Add a SETTER method to your LivingThing class named "setHealth" that lets you update the value
     * of the "health" property.
     *
     * Now, create a NEW class "Hero" that EXTENDS the LivingThing class.
     *
     * Add a method to the Hero class named "attack" that takes as a parameter a LivingThing object.
     * The method should do three things:
     * 1. Reduce the LivingThing object's health by a random value between 0 and 10.
     * 2. Reduce the hero's health by a random value between 0 and 10.
     * 3. Print out how much damage the monster and hero did to each other.
     *
     * For help generating random numbers:
     * @see http://php.net/manual/en/function.mt-rand.php
     *
     * Give the Hero class another method named "fight" that takes as a parameter an array of LivingThing objects
     * and does the following:
     *  - For each LivingThing object in the array, call the "attack" method so the hero can attack the monster.
     *     - But, don't attack if the LivingThing is already dead!
     *  - Repeat the process until all the monsters or the hero is dead.
     *
     * Finally, you will need to create your hero object with the name "hero". Give them 100 health and a
     * name of your choice.
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////
    //Creates a living thing
    class LivingThing {
        
        protected $name;    //Living Thing Name
        protected $health; //Living Thing Health
        public function isAlive() { //Function to evaluate Living Thing health, returns false if health is below zero
            if($this->health > 0){ 
            return true;   
            }
            else{
                return false;
            }
        }
        function __construct($name, $health){
            $this->name = $name;
            $this->health = $health;
        }
        public function getName() { //Getter for Living Thing Name
            return $this->name;
        }
        public function getHealth() { //Getter for Living Thing Health
            return $this->health;
        }
        public function setHealth($num){ //Setter for Living Thing Health
            $this->health = $num;
        }
    }
    
    class Hero extends LivingThing { //Hero Class
        public function attack($monster){ //Attacks living thing, generating a random number for damage taken and delt to and by the hero
            $heroDamage = mt_rand(0,10);
            $heroHealth = ($this->getHealth() - $heroDamage); 
            $this->setHealth($heroHealth);
            $monsterDamage = mt_rand(6,10);
            $monsterHealth = ($monster->getHealth() - $monsterDamage);
            $monster->setHealth($monsterHealth);
            echo $this->getName() . " dealt $monsterDamage damage to " . $monster->getName() . " and took $heroDamage damage </br>";
            echo $this->getName() . " has " . $this->getHealth() . " health </br>";
            echo $monster->getName() . " has " . $monster->getHealth() . " health </br>";
            if(!$monster->isAlive()){
                echo $monster->getName() . " is dead! </br>"; //Echos that the living thing is dead
            }
        
        }
        public function fight($monsters){ //Attacks every living thing in an array
            if($this->isAlive()){
                foreach($monsters as $monster){
                    while($monster->isAlive() && $this->isAlive()){
                        $this->attack($monster);
                    }
                }
            }
        }
    }
    

    $rat = new LivingThing("Rat", 5);
    $goblin = new LivingThing("Goblin", 30);
    $ogre = new LivingThing("Ogre", 80);
    $hero = new Hero("Batman", 100);
    
    $monsters = array($rat, $goblin, $ogre);


    echo "<h3>A hero emerges!</h3>";

    echo "<p>The noble {$hero->getName()} has vowed to defeat the monsters and save the realm.</p>";
    echo "<p>Will they be victorious?</p>";

    $hero->fight($monsters);

    if ($hero->isAlive()) {
        echo "<p>The hero {$hero->getName()} prevailed!</p>";
    }
    else {
        echo "<p>{$hero->getName()} was bested by the monsters. We are doomed.</p>";
    }

    ?>

</p>

</body>
</html>