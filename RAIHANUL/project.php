
<center>

<br><br><br>
<?php



if(isset($_POST['submit'])) {

$choice = $_POST['choice'];
$seats = array();
for ($i = 0; $i < 20; $i++) {
    $seats[$i] = "empty";
}
$seats_non = array();
for ($i = 0; $i < 10; $i++) {
    $seats_non[$i] = "empty";
}
$counter = 1;
$counter1 = 1;
$time=date("Y-m-d h:i:sa");

if ($choice == 1) {

    foreach ($seats as $open) {
        if ($open == "empty") {

            echo "You are in luck, we have a window seat available!.\n $time <BR><BR>";
            echo "This ticket is non-refundable and non-transferable.<BR><BR>";
            echo"Please be courteous, do not smoke. Enjoy your trip.<BR><br>";
            $open = "booked";
            $counter = 2;

            {echo"Do you Want to book again ? <BR><BR>";
                echo"<a href='input.html'><BR>Back ";}
            break;
        }
    }
    if ($counter != 2) {

        echo "Sorry, we were not able to book an aisle seat. But do have a window seat.\n";
    }


}
elseif ($choice == 2) {

    foreach ($seats_non as $close) {
        if ($close == "empty") {
            echo "You are in luck, we have an aisle seat available!\n $time <BR><BR>";
            echo "This ticket is non-refundable and non-transferable.\n <BR><BR>";
            echo"Please be courteous, do not smoke. Enjoy your trip.\n <BR><BR>";
            $open = "booked";
            $counter1 = 2;
            {echo"Do you Want to book again ? <BR><BR>";
                echo"<a href='input.html'><BR>Back ";}
            break;
        }
    }
    if ($counter1 != 2) {

        echo "We are sorry, there are no window or aisle seats available.<BR><BR> \n";
    }


}
else{

    {echo"Do you Want to try again ?<BR><BR>";
        echo"<a href='input.html'><BR>Yes ";}
}

}

?>

</center>
