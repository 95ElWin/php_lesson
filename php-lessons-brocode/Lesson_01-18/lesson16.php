<?php
#region function01
    // function happy_birthday($first_name, $age){
    //     echo"Happy Birthday dear {$first_name}! <br>";
    //     echo"Happy Birthday to you! <br>";
    //     echo"Happy Birthday dear {$first_name}! <br>";
    //     echo"You are {$age} years old! <br><br>";
    // }

    // happy_birthday("Spongebob", 30);
    // happy_birthday("Patrick", 35);
    // happy_birthday("Squidward", 45);
#endregion

#region function02
    /*function is_even($number){
        $result = $number % 2;
        return $result;
    }*/
    // function is_even($number){
    //     return $number % 2;
    // }

    // echo is_even(10);
#endregion

#region function02

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(3, 4);

#endregion
?>