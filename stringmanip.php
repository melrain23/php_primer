<?php
    $title = "String Manip";
    include 'includes/header.php';
?>
<h1>PHP String Manipulation</h1>
    <?php
        //concatenation of strings
        $phrase1 = "Students who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1;
        echo '<br/>';
        echo $phrase2;
        echo '<br/>';

        $name = "melissa rainford";

        echo $phrase1. ", named Tiffany ".$phrase2;
        echo '<br/>';
        echo '<hr/>';

        //string transformation
        echo 'Upper case first letter: ' .ucfirst($name). '<br/>';
        echo 'Upper case first letter of each word: ' .ucwords($name). '<br/>';
        echo 'Upper case: ' . strtoupper($name).'<br/>';
        echo 'Upper case: ' . strtolower("THIS WAS ALL UPPERCASE").'<br/>';
        echo'<hr/>';
        echo 'Repeat String: ' . str_repeat('a','10'). '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a','10')). '<br/>';
        echo 'Get a substring:' . substr($name, 3, 5). '<br/>';
        echo 'Get position of string: ' . strpos($name, 'w'). '<br/>';
        
        echo 'Find Character "R": ' . strchr($name, 'R'). '<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e'). '<br/>';
        echo 'Find Character "s": ' . strchr($name, 's'). '<br/>';
        echo 'Find Character "m": ' . strchr($name, 'm'). '<br/>';

        echo 'Find Length of string: ' . strlen($name). '<br/>';

        echo 'Without Trim: ' . "A". " B C D ". "E". '<br/>';
        echo 'Trim spaces on both sides: ' . "A". trim(" B C D "). "E". '<br/>';
        echo 'Trim spaces on the left: ' . "A". ltrim(" B C D "). "E". '<br/>';
        echo 'Trim spaces on the left: ' . "A". rtrim(" B C D "). "E". '<br/>';

        echo 'Replace string with another: ' . str_replace("stand","sit",$phrase2).'<br/>';
    ?>

<?php
    require 'includes/footer.php';
?>