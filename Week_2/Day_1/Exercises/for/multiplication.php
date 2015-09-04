<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>

            <?php

                // Create the multiplication table for integers 1 thru 12
                // i.e.
                // 1 x 1 = 1
                // 1 x 2 = 2
                // etc
                
                
                for($i = 1; $i <= 12; $i++){
                    for($j = 1; $j <= 12; $j++ ){
                    
                        $total = $i * $j;
                        echo "{$i} x {$j} = {$total} </br>";
                    }
                    
                }
        
            ?>

        </p>
	</body>
</html>