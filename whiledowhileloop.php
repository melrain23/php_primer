<?php
    $title = "While do-while Loop";
    include 'includes/header.php';
?>
    <h1>While Loops</h1>
    <?php
        $grade = 0;
        //Infinite Loop
        //while($grade < 10)
        //echo '<p>I AM LESS THAN 10!</p>';

        //Pre-condition loop
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP!';

    ?>

    <h1>Do While Loops</h1>
    <?php
        //Post-condition Loop
        $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }
        while ($grade < 10);
        echo 'EXIT LOOP!';
    ?>

<?php
    require 'includes/footer.php';
?>