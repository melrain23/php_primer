<?php
    $title = "Index";
    include 'includes/header.php';
?>

    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>
    <br/>
    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP!';
        //You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
     
        //declare variable
        $name = 'Melissa Rainford';
        $age = 30;

        //echo variable 
        echo $name;
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';

        //echo using double quotes and interpolation
        echo "<h1>My name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>

    <?php
        require 'includes/footer.php';
    ?>