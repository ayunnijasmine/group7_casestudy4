

<?php

    $seat = array("Seat 1" => array ("single" => 10),
                  "Seat 2" => array ("window" => 5),
                  "Seat 3" => array ("aisle" => 5),
                  "Seat 4" => array ("single" => 10),
                  "Seat 5" => array ("window" => 5),
                  "Seat 6" => array ("aisle" => 5),
                  "Seat 7" => array ("single" => 10),
                  "Seat 8" => array ("window" => 5),
                  "Seat 9" => array ("aisle" => 5),
                  "Seat 10" => array ("single" => 10),
                  "Seat 11" => array ("window" => 5),
                  "Seat 12" => array ("aisle" => 5),
                  "Seat 13" => array ("single" => 10),
                  "Seat 14" => array ("window" => 5),
                  "Seat 15" => array ("aisle" => 5),
                  "Seat 16" => array ("single" => 10),
                  "Seat 17" => array ("window" => 5),
                  "Seat 18" => array ("aisle" => 5),
                  "Seat 19" => array ("single" => 10),
                  "Seat 20" => array ("window" => 5),
                  "Seat 21" => array ("aisle" => 5),
                  "Seat 22" => array ("single" => 10),
                  "Seat 23" => array ("window" => 5),
                  "Seat 24" => array ("aisle" => 5),
                  "Seat 25" => array ("single" => 10),
                  "Seat 26" => array ("window" => 5),
                  "Seat 27" => array ("aisle" => 5),
                  "Seat 28" => array ("single" => 10),
                  "Seat 29" => array ("window" => 5),
                  "Seat 30" => array ("aisle" => 5)
                );

                /*foreach ($seat as $key => $value) {
                    foreach ($value as $position => $price ) {
                      echo "{$key} ({$position}): RM{$price} <br>";
                    }
                  }*/

    $length = count($seat);

    for($i=0; $i < $length; $i++){
        $seat[$i] = 0;
    }

    $choice = $_POST['choice'];
    $seatnum = 0;

    if ($choice == 1) {
      $seatnum = bookWindow();

      if ($seatnum == -1){
        $seatnum = bookAisle();

          if ($seatnum != -1) {
            echo "sorry, we were not able to book a window seat. please have an aisle seat instead.";
            printTicket($seatnum);
            }
          }
          else {
            echo "we have a window seat available!";
            printTicket($seatnum);
          }
    }
    elseif ($choice == 2) {
        $seatnum = bookAisle();

          if ($seatnum == -1) {
            $seatnum = bookWindow();

            if ($seatnum != -1) {
                echo "sorry, we were not able to book an aisle seat. please have a window seat instead.";
                printTicket($seatnum);
              }
            }
            else {
              echo "we have an aisle seat available!";
              printTicket($seatnum);
            }
        }
        elseif ($choice == 3) {
          $seatnum = bookSingle();

            if ($seatnum == -1) {
              $seatnum = bookAisle();

              if ($seatnum != -1) {
                echo "sorry, there are no single seats available. please have an aisle seat instead.";
                printTicket($seatnum);
              }
            }
            else {
              echo "we have a single seat available!";
              printTicket($seatnum);
            }
        }
        else {
          echo "invalid choice made. please try again!";
          $choice = 0;
        }

        if ($seatnum == -1) {
          echo "sorry, there are no available seats left. <br>";
        }

        $choice = (int)readline("please enter 1 for window, 2 for aisle, 3 for single seat: ");



    function bookWindow() {
      for ($i=0; $i < 20; $i++) {
        if ($seat[i] == 0) {
          $seat[i] = 1;
          return i + 1;
        }
      }
      return -1;

    }

    function bookAisle() {
      for ($i=20; $i < 30; $i++) {
        if ($seat[$i] == 0){
          $seat[$i] = 1;
          return ($i + 1);
        }
      }
      return -1;

    }

    function bookSingle() {
      for ($i=0; $i < 10; $i++) {
        if ($seat[i] == 0) {
          $seat[i] = 1;
          return i + 1;
        }
      }
      return -1;

    }

    function printTicket($seatnum) {
      echo "<br>boarding pass for seat number: " . $seatnum;

    }


     ?>


  </body>
</html>
