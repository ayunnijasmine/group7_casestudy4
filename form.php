<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation System</title>
  </head>
  <body>
    <form action="reservation.php" method="post">
        <center>
        Welcome to Bus Seat Reservation System <br><br>
        The price for single seat is RM10. <br>
        The price for double seat is RM5. <br><br>
        Please enter 1 for window, 2 for aisle, 3 for single seat:<br><br>

        <input type="number" name="choice" value="" />
        <input type="submit" name="submit" value="Submit" />
        </center>
    </form>
  <?php
  $seat = array("Seat 1" => array ("window" => 5),
                "Seat 2" => array ("window" => 5),
                "Seat 3" => array ("window" => 5),
                "Seat 4" => array ("window" => 5),
                "Seat 5" => array ("window" => 5),
                "Seat 6" => array ("window" => 5),
                "Seat 7" => array ("window" => 5),
                "Seat 8" => array ("window" => 5),
                "Seat 9" => array ("window" => 5),
                "Seat 10" => array ("window" => 5),
                "Seat 11" => array ("aisle" => 5),
                "Seat 12" => array ("aisle" => 5),
                "Seat 14" => array ("aisle" => 5),
                "Seat 13" => array ("aisle" => 5),
                "Seat 15" => array ("aisle" => 5),
                "Seat 16" => array ("aisle" => 5),
                "Seat 17" => array ("aisle" => 5),
                "Seat 18" => array ("aisle" => 5),
                "Seat 19" => array ("aisle" => 5),
                "Seat 20" => array ("aisle" => 5),
                "Seat 21" => array ("single" => 10),
                "Seat 22" => array ("single" => 10),
                "Seat 23" => array ("single" => 10),
                "Seat 24" => array ("single" => 10),
                "Seat 25" => array ("single" => 10),
                "Seat 26" => array ("single" => 10),
                "Seat 27" => array ("single" => 10),
                "Seat 28" => array ("single" => 10),
                "Seat 29" => array ("single" => 10),
                "Seat 30" => array ("single" => 10)
              );


              foreach ($seat as $key => $value) {
                  foreach ($value as $position => $price ) {
                    echo "<br>{$key} ({$position}): RM{$price} <br>";
                  }
                }


   ?>

  </body>
</html>
