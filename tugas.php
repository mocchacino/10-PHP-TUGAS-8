<?php    
    echo "<table>";
    for($row=1; $row<=2; $row++){
        echo "<tr>";
            for($col = 1; $col <= 9; $col++){
                echo "<td>";
                $bintang = 10;
                $strip = $bintang - 1;
                for($i =0; $i <= $bintang; $i++){
                    for($j = 0; $j <= $strip+1; $j++){
                        echo "_";
                    }
                    $strip = $strip - 1;
                    for($j = 1; $j <= $i; $j++){
                        echo "**";
                    }
                    echo "<br/>";
                }
            
                $strip= 1;
            
                for($i = $bintang; $i >= 0; $i--){
                    for($j = $strip-1; $j >= 0; $j--){
                        echo "_";
                    }
                    $strip = $strip + 1;
                    for($j = 1; $j <= $i; $j++){
                        echo "**";
                    }
                    echo "<br/>";
                }
                echo "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    
?>