<?php
for ( $i = 0 ; $i <= 10 ; $i++){
    echo $i;
}
?>


<?php

$deux = 40;

for ($prem = 0 ; $prem <= 20 ; $prem++ ){
    echo "<br>" . $prem * $deux;
}
?>
<?php
$var1 = 100;
$var2 = 25;

while ($var1 <= 10){
    echo "<br>" . $var1 * $var2;
    $var1--;
}


$i2 = 1;

while ( $i2 <= 10){
    echo "<br>" . $i2;
    $i2 += $i2 / 2;
}


for ($i = 1 ; $i <= 15 ; $i++) {
    echo "<br>" .  $i . " on y arrive presque ";
}

for ($i = 20 ; $i >= 0 ; $i--) {
    echo "<br>" . $i . " c'est presque bon";
}

$i3 = 1;
while ( $i3 <= 100 ) {
    echo "<br>" . $i3 . "on tient le bon bout";
    $i3 += 15 ;
}

for ($i4 = 200 ; $i4 >= 0 ; $i4 += -12  ){
    echo "<br>". $i4 . "enfin";
}
?>
