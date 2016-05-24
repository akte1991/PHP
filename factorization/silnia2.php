   <?php
      function silnia($n)
      {
        if ($n===0) return 1; 
        else if($n===1) return 1;
        else return silnia($n-1)*$n;
      }
      
      if (!isset($_post['oblicz'])) exit;
      $n=$_post['liczba'];
      
      if (!is_numeric($n)) echo 'Podaj liczbę całkowitą!';
      else if ((float)$n-(int)$n>0) echo 'Podaj liczbę całkowitą!';
      else if ((int)$n<0) echo 'Podaj liczbę dodatnią!';
      else echo 'Silnia liczby '.$n.' wynosi '.silnia((int)$n);
    ?> 