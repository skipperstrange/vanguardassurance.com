<?php

include_once STATIC_DATA.'products.php';
$subHeaderTitle = '<h1>Our <strong>Products</strong></h1>';
$pageTitle = 'Products';

$productTags = $data['productTags'];

$personalLinesProducts = $data['products']['personal_lines'];
$corporateProducts = $data['products']['corporate'];
$products = $data['products'];