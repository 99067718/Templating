<?php
include("variables.php");
echo($Name. " " .$LastName. "<br>");
for ($i = 0; $i < count(array_filter($FruitInABasket)); $i++){
    echo($FruitInABasket[$i])."<br>";
}

?>
