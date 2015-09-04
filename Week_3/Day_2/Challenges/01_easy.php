<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a program that loops through numbers array and outputs
             * each number.
             *
             * But for multiples of three print “Fizz” instead of the number
             * and for the multiples of five print “Buzz”. For numbers which
             * are multiples of both three and five print “FizzBuzz”
             *
             */

             $inputs = array(
               array('numbers' => range(0, 100))
             );
            
            foreach($inputs as $arrayNum){
                foreach($arrayNum as $numsArray){
                    foreach($numsArray as $finalArray){
                        if((($finalArray % 3) == 0) and (($finalArray % 5) == 0)){
                            echo $finalArray . " FizzBuzz </br>";
                        }
                        elseif(($finalArray % 3) == 0){
                            echo $finalArray . " Fizz </br>";
                        }
                        elseif(($finalArray % 5) == 0){
                            echo $finalArray . " Buzz </br>";
                        }
                        else{
                            echo $finalArray . "</br>";
                        }
                    }
                }
            }

        ?>

    </p>

    </body>
</html>
