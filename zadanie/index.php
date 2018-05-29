<?php

require '../libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->debugging = true;

$smarty->assign('base_dir', '/frontend/zadanie/');
$smarty->assign('title', 'Nowe produkty');
$smarty->assign('subtitle', 'Poznaj produkty z najnowszej kolekcji naszej marki');

$smarty->assign("products", array(array("price" => "200", "link" => "/tshirts/1-faded-short-sleeves-tshirt.html", "image" => "img/product1.jpg", "prod-title" => "Faded Short Sleeves T-Shirt summer edition"),
                                  array("price" => "1200", "link" => "/blouses/2-blouse.html", "image" => "img/product2.jpg", "prod-title" => "Blouse", "discount" => "26"),
                                  array("price" => "200", "link" => "/summer-dresses/7-printed-chiffon-dress.html", "image" => "img/product3.jpg", "prod-title" => "Printed Chiffon Dress"),
                                  array("price" => "100", "link" => "/evening-dresses/4-printed-dress.html", "image" => "img/product4.jpg", "prod-title" => "Printed Dress"),
                                  array("price" => "700", "link" => "/evening-dresses/6-dress.html", "image" => "img/product5.jpg", "prod-title" => "Dress"),
                                  array("price" => "900", "link" => "/evening-dresses/8-sleeves-tshirt.html", "image" => "img/product6.jpg", "prod-title" => "sleeves-tshirt","discount" => "15")
    ));


$smarty->display('index.tpl');