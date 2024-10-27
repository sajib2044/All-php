<!-- while loop  -->

<!-- <?php
$i = 1;
while($i < 6){
    echo $i;
    $i++;
}

?> -->

<!-- Do while loop  -->

<!-- <?php
$i = 1;
do{
    echo $i;
    $i++;
}while($i <6);

?> -->


<!-- For loop  -->

<!-- <?php
for($x = 0; $x <= 10; $x++){
    echo "The number is : $x <br>";
}

?> -->
<!-- 
foreach loop 
The most common use of the foreach loop, is to loop through the items of an array. -->

<!-- <?php
$colors = array("red","green","blue","yellow");

foreach ($colors as $x){
    echo "$x <br>";
}

?> -->

<!-- nested loop  -->
<?php
for($a = 1; $a<=100; $a = $a + 10){
    for($b = $a; $b < $a + 10; $b++){
        echo $b . " ";
    }
    echo "<br>";
}


?>






