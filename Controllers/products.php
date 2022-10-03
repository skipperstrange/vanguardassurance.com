<?php

include_once STATIC_DATA.'products.php';
$subHeaderTitle = '<h1>Our <strong>Products</strong></h1>';
$pageTitle = 'Products';
$jumboTitle = $pageTitle;
$jumboDescription = "A solution for all your needs.";
$jumboBackground = IMAGES_URL."boat.jpg";

$productTags = $data['productTags'];

$personalLinesProducts = $data['products']['personal_lines'];
$corporateProducts = $data['products']['corporate'];
$products = $data['products'];