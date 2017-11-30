<?php
$page = isset($_GET['page'])?$_GET['page']:'category';
$page.='.php';
// include "php/category.php";
include "php/".$page;


?>