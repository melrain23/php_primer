<?php
    $title = "Date & Time Manip";
    include 'includes/header.php';
?>
    <h1>Date and Time Manipulation</h1>
    <?php
        $datenow = getdate();
        echo "Todays Date: <br/>";
        echo $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year'].'<br/>';

        echo "Today's Date: " . $datenow['mday'] . '/' .$datenow['mon'] . '/' . $datenow['year']. '<br/>';

        echo time(). '<br/>';

        print date("d/m/y G.i:s<br>", time()). '<br/>';
        print "Today is ";
        print date("j F Y, \a\\t g.i a", time());
    ?>
    
    <?php
        require 'includes/footer.php';
    ?>