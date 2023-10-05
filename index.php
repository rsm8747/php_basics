<?php
    echo "Age Limit for driver to drive";
    echo"<br>";
    $age=100;
    if($age>=25 && $age<=65){
        echo"Drive";
    }
    else{
        echo"Not drive";
    }
    echo"<br>";
    echo"None of above";
    echo"<br>";

    if($age>=77){
        echo"Drive";
        
    }elseif($age<=65){
        echo"Drive a";
    }
    else{
        echo"Not drive";
    }

?>