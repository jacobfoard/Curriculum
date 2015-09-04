<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * If you can't find a function you need in PHP, you can create it!
         * Let's modify our previous exercise to print the score for every name.
         */

        // Create a function to clean the name and 
        // print out the person's name and their "score"

        function score($name){
            $name = ucwords(strtolower(trim($name)));
            $explodedNames = explode(" ", $name);
            $score = (stripos($name, "a") * strlen($explodedNames[count($explodedNames) -1])) / str_word_count($name);
            echo "$name = $score </br>";

        }

        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names, "  Bob ArK");
        array_push($names, "JAcoB foArD");
        sort($names);
        // loop through our names and call our function
        foreach($names as $name){
            echo score($name);
        }

        ?>

    </p>

    </body>
</html>