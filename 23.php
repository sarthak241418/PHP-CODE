<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++){
        echo $i;
    	echo "\t";
    }
    
    /* example 2 */
echo "<br>";
    echo "\nAnother Way\t";

    for ($i = 1; ; $i++){
        if ($i > 10){
            break;
        }
        echo $i;
    	echo "\t";
    }
echo "<br>";
echo "Program by Diya Bhutani(2220100243)";

?>