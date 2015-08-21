<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?
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
    ?>
    </p>
  </body>
</html>