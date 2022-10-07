<?php

include_once STATIC_DATA.'products.php';
$headerTitle = '<h1>Our <strong>Products</strong></h1>';
$pageTitle = 'Products';
$headerDescription = "A solution for all your needs.";
$headerBackground = IMAGES_URL."ship-banner.jpg";

$productTags = $data['productTags'];

$personalLinesProducts = $data['products']['personal_lines'];
$corporateProducts = $data['products']['corporate'];
$products = $data['products'];