<?php
$name="iphone";
$price=3331;
$delivery=500;
echo 'название товара<br>';
echo "цена товара: $price <br>";
echo 'цена товара со скидкой: '.$price*0.2."<br>";
echo "цена товара с доставкой: ". $price*0.2+$delivery;

?>
