<?php
#region &&
    // $temp = 15;

    // if ($temp >= 0 && $temp <= 30) {
    //     echo"The weather is good.";
    // }
    // else {
    //     echo"The weather is bad.";
    // }
#endregion

#region ||
// $temp = 15;
// $cloudy = false;

// if ($temp < 0 || $temp > 30) {
//     echo"The weather is bad.<br>";
// }
// else {
//     echo"The weather is good.<br>";
// }

// if (!$cloudy) {
//     echo"It's sunny.";
// }
// else{
//     echo"It's cloudy.";
// }
#endregion

#region &&02
    // $age = 18;
    // $citizen = false;

    // if ($age >= 18 && $citizen) {
    //     echo"You can vote";
    // }
    // else {
    //     echo"You cannot vote";
    // }
#endregion

#region ||02
// $age = 18;
// $citizen = false;

// if (!$age >= 18 || !$citizen) {
//     echo"You cannot vote";
// }
// else {
//     echo"You can vote";
// }
#endregion

#region ||03
    $child = false;
    $senior =true;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";
#endregion
?>