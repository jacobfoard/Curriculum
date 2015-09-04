<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
    <p>
      <?php
      /**
      * the below code doesn't render what I want... how would we fix it?
      */

      switch (10) {
        // fruits
        case 1:
        case 2:
        case 3:
        case 4:
          echo "I am between 1 - 4";
          break;
        case 5:
        case 6:
        case 7:
        case 8:
          echo "I am between 5 - 8";
          break;
        default:
          echo "I am greater than 8";
      }

      ?>
    </p>
	</body>
</html>