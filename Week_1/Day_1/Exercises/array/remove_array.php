<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
      <p>
        <?php
        /**
         * you have array and lets say we got this data from the DB so we cant change it when getting it from the DB 
         * so writing the correct syntax to remove the teachers that are not suppoes to be there
         */
        $teachers = [
            "Josph Backer",
            "Tim Berners-Lee", // creator of html
            "Aric Schwartzenegger",
            "Brendan Eich", // creator of javascript
            "James Dallas",
            "Rasmus Lerdorf" // creator of php
        ];
        
        unset($teachers[1]);
        unset($teachers[3]);
        unset($teachers[5]);

        print_r($teachers);
        
      ?>
      </p>
	</body>
</html>