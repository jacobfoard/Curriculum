<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * So we want to create a feature that allows you to store your movies in our 'cloud'.
         *
         * We want to make sure that you can find and catalog your movies correctly, so we
         * would like to give users the ability to provide a description of these movies.
         *
         * We want users to also see any products they have ordered on the same page.
         *
         * Create a class called CloudMovieFile that also implements the Describable interface.  Use your imagination on
         * how this should describe itself.  Create an instance of Cloud movie.  Now create a Clothing object and a
         * Television object from the classes you built in the previous exercise.  Put these 3 objects in an array
         * names $customerItems.
         *
         * Create a new class called ItemDescriber.  Item describer should contain a method called
         * outputDescription.  This method should take an object that implements the Describable interface
         * as a parameter.  If the parameter does not implement the Describable interface, throw an exception
         * Otherwise, the outputDescription method should printout the description of the object that is passed in.
         *
         * @see  http://php.net/manual/en/language.operators.type.php
         *
         * For each object in the array, use the ItemDescriber to print out the description of all of your Describable
         * objects.
         *
         * Note that we can treat anything that wants to implment describable exactly the same, whether it is a
         * Product or a CloudMovieFile.  You could even create a Person class that implements Describable and
         * run it through the ItemDescriber method.
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
            if(!(empty($this->name))){
              return $this->name;
            } else{
            throw new Exception("Empty value found for name");
            }
          }
          public function getPrice(){
            if($this->price){
              if(is_numeric($this->price)){
                return $this->price;
              } else{
                throw new Exception("Invalid price");
              }
            } else {
            throw new Exception("Empty value found for price");
            }
          }
          public function getBrand(){
            if(!(empty($this->brand))){
              return $this->brand;  
            } else {
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
            if(!(empty($this->displayType))){
              return $this->displayType;
            } else{
              throw new Exception("Empty value found for display type");
            }
          }

          public function getSize(){
            if(!(empty($this->size))){
              return $this->size;
            } else{
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
            if(!(empty($this->size))){
              return $this->size;
            } else{
              throw new Exception("Empty value found for size");
            }
          }
          public function getType(){
            if(!(empty($this->type))){
              return $this->type;
            } else{
              throw new Exception("Empty value found for type");
            }
          } 
          public function getColor(){
            if(!(empty($this->color))){
              if(($this->color == "red") or ($this->color == "blue") or ($this->color == "green") or ($this->color == "black") or ($this->color == "white") or ($this->color == "yellow")){
                  return $this->color;
              } else{
                throw new Exception("Invalid color");
              }
            } else{
              throw new Exception("Empty value found for color");
            }
          }
          public function getGender(){
           if(!(empty($this->gender))){
            return $this->gender;
           } else {
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

        class CloudMovieFile implements Describable{
            protected $title;
            protected $director;
            protected $genre;

            public function __construct($title, $director, $genre){
                $this->title = $title;
                $this->director = $director;
                $this->genre = $genre;
            }

            public function getTitle(){
                return $this->title;
            }
            public function getDirector(){
                return $this->director;
            }
            public function getGenre(){
                return $this->genre;
            }
            public function provideDescription(){
                return $this->getTitle() . " is a " . $this->getGenre() . " movie directed by " . $this->getDirector();
            }
        }
        
        class ItemDescriber {
            public function outputDescription($Product){
                if($Product instanceof Describable){
                    return $Product->provideDescription();
                }
                else {
                    throw new Exception("Item is not describable");
                }
            }
        }

        $kramericaTV = new Television("Giant TV", "Kramerica", 3900.90, "LED", "100in");
        $shirt = new Clothing("Button Down Shirt", "J Peterman", '29.88', "shirt","medium", "red", "male");
        $pulpFiction = new CloudMovieFile("Pulp Fiction", "Quentin Tarantino", "Drama");
        $describer = new ItemDescriber();
        $objects = array($shirt, $kramericaTV, $pulpFiction);

        try{
            foreach($objects as $object){
                echo $describer->outputDescription($object);
                echo "</br>";
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

    ?>
    </p>
  </body>
</html>