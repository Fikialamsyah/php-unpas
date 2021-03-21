<?php
// Pengulangan
// for
// while
// do..while
// for each: pengulangan khusus array

for($i = 0;$i < 10 ; $i++){
    echo "Hello World ! (for) <br/>";
}

echo "<br/>";

$i = 0;
while($i < 10){
    echo "Hello World ! (While) <br/>";
    $i++;
}

echo "<br/>";

do{
    echo "Hello World ! (do While) <br/>";
    $i++;
}while($i < 10);
?>