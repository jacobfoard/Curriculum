<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * OVERVIEW:
         * So, our boss gave us a call and hated the fact that 2 pieces of clothing had such
         * different looking descriptions.  He wanted to look at 2 different pieces of clothing
         * and be able to compare them side by side without much effort.  Same with the
         * 2 pieces of electronics.  He would like to see the size and display types shown in
         * exactly the same format
         *
         * INSTRUCTIONS:
         * Tweak your Product class from Step 1.  Since a Product is so Generic that we will
         * never want to create a "Product", let's make it an abstract class.  To make sure
         * that our products of similar type are described in a similar fashion, we want to
         * restrict how our descriptions are created.  Delete the description property from
         * our Product class and remove it from the constructor.  Instead of having the
         * provideDescription method output the description property, let's have it return
         * the value provided by an abstract method named "provideDescriptionForProductType".
         *
         * Let's now create two classes that extend our Product class, one called Clothing, and
         * one called Television.
         *
         * Let's add properties "size", "color", and "gender" to the
         * Clothing class and create a constructor that takes the parameters "name", "price",
         * "brand", "size", "color", and "type", and "gender".  Use the parent class
         * constructor to set the
         * values of the first 3 properties and the child constructor to set the value of
         * the second 3.  Have the Clothing class implement the
         * "provideDescriptionForProductType" method by outputting "This is an article of
         * clothing.  It is a {brand} {color} {gender} {type} of size {size}.  It costs"
         *
         * Lets add properties "displayType" and "size" to the Television class and create a
         * constructor that takes the parameters "name", "price",
         * "brand", "displayType", and "size".  Use the parent class
         * constructor to set the values of the first 3 properties and the child constructor
         *  to set the value of the last 2  Have the Television class implement the
         * "provideDescriptionForProduct" type method to output "This is a {size} {brand}
         * {displayType} Television"
         *
         * Create The following products and echo their provideDescription methods.
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
         * Use the following documentation covering interfaces and abstract classes
         *
         * @see http://php.net/manual/en/language.oop5.interfaces.php
         * @see http://http://php.net/manual/en/language.oop5.abstract.php
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
        }
        
        class Television extends Product {
          protected $displayType;
          protected $size;
          
          public function __construct($name, $brand, $price, $displayType, $size){
            parent::__construct($name, $brand, $price);
            $this->displayType = $displayType;
            $this->size = $size;
          }
          
          public function provideDescriptionForProductType(){
            return "This is a " . $this->size . " " . $this->brand . " " . $this->displayType . " Television";
          }
        }
        
        class Clothing extends Product {
          protected $size;
          protected $type;
          protected $color;
          protected $gender;
          
          public function __construct($name, $brand, $price, $type, $size, $color, $gender){
            parent::__construct($name, $brand, $price);
            $this->size = $size;
            $this->type = $type;
            $this->color = $color;
            $this->gender = $gender;
          }
          
          public function provideDescriptionForProductType(){
            return "This is an article of clothing. It is a " . $this->brand . " " . $this->color . " " . $this->gender . " " . $this->type . " of size " . $this->size .  " it costs " . $this->price; 
          }
        }
        
        $buttonDownShirt = new Clothing("Button Down Shirt","J Peterman", 29.88, "shirt", "medium", "Eye-piercingly bright red", "Male");
        $kramericaTV = new Television("Giant TV", "Kramerica", 3900.90, "LED", "100in");
        
        echo $buttonDownShirt->provideDescription();
        echo "</br>";
        echo $kramericaTV->provideDescription();
        ?>
        
    </p>
  </body>
</html>