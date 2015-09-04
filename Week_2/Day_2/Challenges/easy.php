<?php
    /**
     * Write a function called "add" that adds all the numbers in an array and
     * returns the result.
     */
    function add($array){
        return array_sum($array);
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>