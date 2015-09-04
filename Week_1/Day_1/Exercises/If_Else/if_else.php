<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <!-- 
            You can rent a car if you are 25 years of age or older put an if statement in
            to render "You are old enough to rent a car! Yay!" when you are old enough
          -->
          <?php
          $age =26;
          if ($age < 25){
            echo "You are not old enough to rent a car.";
          } elseif($age = 25) {
            echo "You are old enough to rent a car! Yay!";
          }
          else{
          	echo "You are old enough to rent a car! Yay!";
          }
          ?>
        </p>
	</body>
</html>