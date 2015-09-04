<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * OVERVIEW:
         * Let's attempt to build a clone of Amazon.com
         *
         * First thing we need are some products to sell.  In order to sell them though,
         * we need to be able to provide a description to our customers.  Sounds easy, but we
         * want different products to provide different types of descriptions based on their
         * category.  We do not want to have to use an if statement to do this either.
         *
         * INSTRUCTIONS:
         * Create an interface called Describable that contains one method: provideDescription
         *
         * Create a class called Product that contains protected properties "name", "price",
         * "brand", and "description". Create a constructor for Product that takes all of these as
         * parameters and initialize the property values. Product should also implement the
         * Describable interface. Have the method that you need to implement from the Describable
         * interface return the description of the product.
         *
         * Now, create a few products and echo out their description.
         *
         * Name: "Hawaiian shirt"
         * Brand: "Hang 10"
         * Price: "23.99"
         * Description: "Shirt With Flowers And Red in Color.  Size is Large.  Men Only."
         *
         * Name: "4K Television"
         * Brand: "TVs Unlimited"
         * Price: "$100.00"
         * Description: "Small Televison (19 inches).  Has resolution of 4k"
         *
         * Name: "3D TV"
         * Brand: "LV"
         * Price "100 dollars and 99 cents"
         * Description: "Does not come with glasses"
         *
         * Name: "Hawaiian Skirt"
         * Brand: "Hang 10"
         * Price: "25"
         * Description: "Womens Skirt...Size 6"
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
        
        class Product implements Describable{
          protected $name;
          protected $price;
          protected $brand;
          protected $description;
          
          public function __construct($name, $brand, $price, $description){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->description = $description;
          }
          
          public function provideDescription(){
            return $this->description;
          }
        }
        
        $hawaiianShirt = new Product("Hawaiian Shirt", "Hang 10", 23.99, "Shirt With Flowers And Red in Color.  Size is Large.  Men Only.");
        
        //echo $hawaiianShirt->provideDescription();
        ?>
         Name: Button Down Shirt
         * Price: $29.88
         * Brand: J Peterman
         * Color: Eye-piercingly bright red
         * Type: Shirt
         * Gender: Male
    </p>
  </body>
</html>