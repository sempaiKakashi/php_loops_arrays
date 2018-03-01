<table border = 1 align = "center" width = 500 height = 500>
    <?php
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    $lenght = count($colors);
    $rows = 5;
    $columns = 5;
    for($i = 0; $i < $rows; $i++){
        echo "<tr>";
        for($j = 0; $j < $columns; $j++){
            $v = rand(0, $lenght - 1);
            $number = rand(0, 9999);
            echo "<td bgcolor = " . $colors[$q] . ">" . $number . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>