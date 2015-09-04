<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * PHP comes bundled with a ton of useful functions so you don't have
         * to reinvent the wheel.  Let's use some of those in the exercise below.
         *
         * Use the following function documentation to help find the relevant functions:
         * @see http://php.net/manual/en/ref.strings.php
         * @see http://php.net/manual/en/ref.array.php
         * @see http://php.net/manual/en/ref.math.php
         */

        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Ensure proper capitalization of the following names
        // by looping through and modifying the $names array.
        // Also remove any leading or trailing whitespace from the name.
            for($i = 0; $i < count($names); $i++){
                $names[$i] = ucwords(strtolower(trim($names[$i])));
            }
           // print_r($names);
        // Pick a random name from the array
        $name = $names[rand(0,count($names) - 1)];
        echo "$name </br>";
        // Multiply the position of the letter 'a' (case insensitive) in the name by the
        // length of the last name divided by the number of words in the string
        $explodedNames = explode(" ", $name);
        
        $score = (stripos($name, "a") * strlen($explodedNames[count($explodedNames) -1])) / str_word_count($name);

        // Print out the person's name and their "score"
        echo "Score = $score";
        ?>

    </p>

    </body>
</html>