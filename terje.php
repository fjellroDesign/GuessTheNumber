<?php

require_once 'guess2.php';
require_once 'adventure/main.php';

function menu() {
  do {   system('clear');
      echo "Hello! Welcome to my games\r\n";
      echo"Type the number of the game you wanna play:\r\n";
      echo"1 = Guess The Number\r\n";
      echo"2 = Adventure Game\r\n";

      $game = readline ("enter number: ");
      If ($game == "1") {
        guess_game();
      } elseif ($game == "2") {
        adventure();
      } else {
        echo "something seems to have gone wrong, \r\nplease try again\r\n";
      } 
  } while ($game == "1" or $game == "2");
}
menu();
?>