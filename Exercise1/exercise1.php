<?php
    echo "<table>";
        for ($x = 0; $x <= 100; $x++) {
            echo "<tr>";
            for ($y = 0; $y <= 100; $y++) {
                if($x == 0 and $y == 0){
                    echo "<th> </th>";
                }
                else if($x == 0){
                    echo "<th>$y</th>";
                } 
                else if ($y == 0){
                    echo "<th>$x</th>";
                } 
                else {
                    echo "<td>" . ($x * $y) . "</td>";
                }
            } 
            echo "</tr>";
        } 
    echo "</table>"
?>