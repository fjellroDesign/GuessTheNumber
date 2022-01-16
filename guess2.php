<?php
        function start() {  system('clear');
            $inside = readline ("Hello! Welcome to 'Guess The Number'\r\nPlease type 'yes' to start and 'no' to quit\r\nYou can also type 'score' to see the scoreboard\n");

            if ($inside == "yes") {
                echo "Awsome! The game is gonna start shortly";
            } elseif ($inside == "no") {
                echo "Hope to see you soon!\r\n";
            } elseif ($inside == "score") {
                echo "Here is the score board";
            } else {
                echo "Im sorry I didn't get that, please try again..\r\n";
            }

            return $inside;
        }


        function guess_game() {
            $start = start();
            system('clear');
             if ($start == "no") {} elseif ($start == "score") {
                echo "this is the score:\n";
                include 'score.txt';
                echo "\n\nYou will return to main menu after 7 sek\n";
                sleep (7);
             } else {
               $name = readline ("Choose your player name: ");
              $num = readline ("\r\nHow many numbers do you wanna choose from?\r\n");
              $try = $tries = readline ("How many tries do you want?\r\n");
              $number = rand(1, $num);

              do {
                  if ($try == "1") { $Try = "y"; }
                  else { $Try = "ies"; }
                  $guess = readline ("Please guess a number between 1 and ". $num . ".\r\nYou have " . $try-- . " tr" . $Try . " left\r\n" );
                  if ($guess < $number) {
                      echo "Go higher, ";
                  } elseif ($guess > $number) {
                      echo "Go lower, ";
                  }
              }   while ($try != "0" && $guess != $number);

              if ($guess == $number) {
                 echo "yess!! That is correct! ";
                 echo "your score is: ";
                 
                 echo (round($num / ($tries - ($try / "2"))));
                 $score = (round($num / ($tries - ($try / "2"))));
                 $myfile = fopen("score.txt", "a") or die("Unable to open file!");
                  $txt = $score;
                fwrite($myfile, "\nPlayer " . $name . ": " . $txt);
                fclose($myfile);
                
                 sleep (7);
             } else {
                  echo "You have no more tries left,\r\n";
             }
        }}
        ?>