<?php
$page = isset($_GET['page'])?$_GET['page']:'order';
$page.='.php';
include "php/".$page;

?>