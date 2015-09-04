<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Some functions in PHP take a parameter called a "callback".
         * A callback is a function that will be run somehow inside the
         * function that is calling it.
         * @see http://php.net/manual/en/function.array-filter.php
         */

        // Modify the function in our previous example to return "true" if
        // the score is greater than 5, and "false" if it is not.
        function score($name){
            
            $name = ucwords(strtolower(trim($name))); //Sanitize name
            $explodedNames = explode(" ", $name); //Creates array of exploded name
            $score = (stripos($name, "a") * strlen($explodedNames[count($explodedNames) -1])) / str_word_count($name); //Calculates score
            //echo "$name = $score </br>"; //Outputs name and score
            
            return ($score > 5);

        }

        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names, "JACob foarD  ");
        array_push($names, "Eric staAl");

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        $filteredArray = array_filter($names, 'score');

        // Without writing a loop, print out the winners separated by a comma and a space
            echo implode(', ', $filteredArray);

        // Question: Do the names look right?


        ?>

    </p>

    </body>
</html>