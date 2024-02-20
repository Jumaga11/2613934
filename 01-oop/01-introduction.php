<?php
    
    #Linear Programing
    $num1 = 54;
    $num2 = 32;

    echo "{$num1} * {$num2} = " . ($num1 * $num2);

    #Structured Programing
    $num1 = 54;
    $num2 = 32;

    echo "{$num1} * {$num2} = " . ($num1 * $num2);
    echo "<br>";
    
    $string = "hola";
    echo "{$string} = " .md5($string);
    echo "<br>";
    echo "PASSWORD_HASH({$string}) = " . password_hash($string, PASSWORD_DEFAULT);
    echo"<br>";
    $hash= password_hash($string, PASSWORD_DEFAULT);

    if(password_verify($string, $hash)){
        echo "verified successfull!";
    }
    ?>
    //#Object Orioented Programing