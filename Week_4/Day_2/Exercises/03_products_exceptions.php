<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * OVERVIEW:
         * So our boss is now happy that he can see the descriptions in a consistent manner.
         * However, he does not like the idea that the description still prints out even if
         * we don't provide all of the necessary information.  He also wants the color
         * field to consist of only a specific list of colors so that customers can search
         * by color.  He also hates the inconsitent formats of the price.  Sometimes they
         * have numbers only, sometimes they have $, etc.
         *
         * INSTRUCTIONS:
         * 1. Let's do some validation in the provideDescriptionForProductType.  First, Instead
         * of accessing our properties directly, let's create getter functions for them and
         * access our properties in the provideDescriptionForProductType using these getters.
         * If these values are empty, let's throw an exception with the message.
         * 'Empty value found';
         *
         * 2. Now, let's add some additional validation to a few of our accessors.  Let's only
         * red, blue, green, black, white, yellow to be valid colors.  If our color
         * is not one of these colors, let's throw an Exception.
         *
         * 3. In our price getter, let's throw an Exception if it has any non-numeric characters
         * in it (like the word dollars).  PHP has a function is_numeric($value) that
         * determines if the string is a valid number.  If it is not a number, throw
         * an exception with the message 'invalid number';
         *
         * 4. Now create the following objects:
         *
         * Clothing Objects:
         *
         * Name: Button Down Shirt
         * Price: $29.88
         * Brand: J Peterman
         * Color: Eye-piercingly bright red
         * Type: Shirt
         * Gender: Male
         *
         * Name: Headband
         * Price: 9 dollars
         * Brand: Nikee
         * Color: Magenta
         * Type: Headgear
         * Gender: Neutral
         *
         * Television Objects:
         *
         * Name: Giant TV
         * Price: $3900.90
         * Brand: Kramerica
         * DisplayType: LED
         * Size: 100 inches
         *
         * Name: Child Television
         * Price: 299
         * Brand: ChildCorp
         * DisplayType: Plasma
         * Size: 23x33
         *
         * 5. Echo out the descriptions.  If the description is valid display it.  If there
         * is an exception, display 'There was an error determining the description to this
         * product'.  Remember how to handle exceptions with try catch.
         *
         * @see http://php.net/manual/en/language.exceptions.php
         */


        ///////////////////////////
        // Put your code here!
        ///////////////////////////
        
        interface Describable {
          public function provideDescription(); 
        }
        
        abstract class Product implements Describable{
          protected $name;
          protected $price;
          protected $brand;

          public function __construct($name, $brand, $price){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
          }
          
          abstract function provideDescriptionForProductType();
          
          public function provideDescription(){
            return $this->provideDescriptionForProductType();
          }
          
          public function getName(){
            if($this->name){
              return $this->name;
            }
            else{
            throw new Exception("Empty value found for name");
            }
          }
          public function getPrice(){
            if($this->price){
              if(is_numeric($this->price)){
                return $this->price;
              }
              else{
                throw new Exception("Invalid price");
              }
            }
            else {
            throw new Exception("Empty value found for price");
            }
          }
          public function getBrand(){
            if($this->brand){
              return $this->brand;  
            }
            else{
              throw new Exception("Empty value found for brand");
            }
          }
          
        }
        
        class Television extends Product {
          protected $displayType;
          protected $size;
          
          public function __construct($name, $brand, $price, $displayType, $size){
            parent::__construct($name, $brand, $price);
            $this->displayType = $displayType;
            $this->size = $size;
          }
          
          public function getDisplayType(){
            if($this->displayType){
            return $this->displayType;
            }
            else{
              throw new Exception("Empty value found for display type");
            }
          }

          public function getSize(){
            if($this->size){
            return $this->size;
            }
            else{
              throw new Exception("Empty value found for size");
            }
          }

          public function provideDescriptionForProductType(){
            try {
            return "This is a " . $this->getSize() . " " . $this->getBrand() . " " . $this->getDisplayType() . " Television";
            }
            catch (Exception $e){
              echo $e->getMessage();
            }
          }
        }
        
        class Clothing extends Product {
          protected $size;
          protected $type;
          protected $color;
          protected $gender;
          
          public function getSize(){
            if($this->size){
            return $this->size;
            }
            else{
              throw new Exception("Empty value found for size");
            }
          }
          public function getType(){
            if($this->type){
            return $this->type;
            }
            else{
              throw new Exception("Empty value found for type");
            }
          } 
          public function getColor(){
            if($this->color){
              if(($this->color == "red") or ($this->color == "blue") or ($this->color == "green") or ($this->color == "black") or ($this->color == "white") or ($this->color == "yellow")){
                  return $this->color;
              }
              else{
                throw new Exception("Invalid color");
              }
            }
            else{
              throw new Exception("Empty value found for color");
            }
          }
          public function getGender(){
           if($this->gender){
            return $this->gender;
           }
            else {
              throw new Exception("Empty value found for gender");
            }
          }

          public function __construct($name, $brand, $price, $type, $size, $color, $gender){
            parent::__construct($name, $brand, $price);
            $this->size = $size;
            $this->type = $type;
            $this->color = $color;
            $this->gender = $gender;
          }
          public function provideDescriptionForProductType(){
            try{
                return "This is an article of clothing. It is a " . $this->getBrand() . " " . $this->getColor() . " " . $this->getGender() . " " . $this->getType() . " of size " . $this->getSize() .  " it costs " . $this->getPrice(); 
              }
            catch(Exception $e){
              echo $e->getMessage();
            }
          }
        }
        
        $shirt = new Clothing("Button Down Shirt", "J Peterman", '29.88', "shirt","medium", "red", "male");
        echo $shirt->provideDescriptionForProductType();
    ?>
    </p>
  </body>
</html>