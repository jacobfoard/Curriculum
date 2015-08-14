<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php
            $i = 0;
            while($i < 7){
              $i = rand(1,7);
              echo "$i</br>";
            }
          	    // code goes here ...

            ?>
        </p>
	</body>
</html>