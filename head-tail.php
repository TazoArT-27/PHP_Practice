<?php
    $head = 0;
    $tail = 0;
    for($i=1;$i<=100;$i++){
        $random_number = rand(1, 2);
       //echo $random_number; 
      
      if($random_number === 1){
          $head++;
          //echo "I win </br>";
      }else{
          $tail++;
          //echo "You win </br>";
      }
    }
    echo "There were {$head} heads and {$tail} tails.";
    echo "</br>";

    if($head > $tail){
        echo "Head Wins!";
    }elseif($head < $tail){
        echo "Tail Wins!";
    }else{
        echo "Draw!";
    }
      
?>