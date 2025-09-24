<?php 
    $start_time = microtime(true);
    $num1 = rand(0, 100000);
    $end_time = microtime(true);
    $start_time2 = microtime(true);
    $num2 = mt_rand(0, 100000);
    $end_time2 = microtime(true);
    $start_time3 = microtime(true);
    $num3 = random_int(0, 100000);
    $end_time3 = microtime(true);

    $current_time = ($end_time - $start_time);
    $current_time2 = ($end_time2 - $start_time2);
    $current_time3 = ($end_time3 - $start_time3);
    echo "<br>O tempo 1 foi de ". number_format($current_time, 8, ",", ".")." ms <br>O tempo 2 foi de ".number_format($current_time2, 8, ",", ".")." ms <br>O tempo 3 foi de ".number_format($current_time3, 8, ",", ".")." ms <br>";
?>