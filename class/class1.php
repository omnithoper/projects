<?php

include 'product.php';

$book = new Product('book', 12.99); // this work if you have class method construct
$food = new Product('', '');
echo $book->getProductValue(), $book->getProductPrice(), '<br>'; // this is for method construct
$food->setProductValue('Food');
// echo $food->type, '<br>'; this will work if properties is public
echo $food->getProductValue(). '<br>';
echo $food->getProductBanana($banana); // this have a variable outside the class

/*
include 'calculate.php';

$calc = new calculator();

$calc->add(10);
$calc->subtract(5);
$calc->add(3);
 
echo $calc->getTotal();
*/
/*
include 'item.php';
include 'book.php';

 
$book = new Book(7.44);

echo $book->calculateItemVat();
 */
 phpinfo();
 ?>

