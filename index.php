<?php
function coin_toss($tosses = 100) {
    $heads = 0;
    $tails = 0;
    
    for($i = 1; $i <= $tosses; $i++) {
        $toss = rand(0,1);
        echo "Attempt #" . $i . ": Throwing a coin...";
        if($toss == 0) {
            $heads++;
            echo " It's Heads! ";
        } else {
            $tails++;
            echo " It's Tails! ";
        }
        echo "You got " . $heads . " head(s) and " . $tails . " tail(s) so far<br />";
    }
}

coin_toss(10000);