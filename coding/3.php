<?php
for($i=1;$i<=6;$i++){
    for($j=1;$j<=$i;$j++){
        if($j%2==1){
            echo "*";
        }else{
            echo "#";
        }
    }
    echo "<br>";
}
?>