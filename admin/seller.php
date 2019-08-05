<?php
// core configuration
include_once "../config/core.php";
include_once "login_checker.php";
include_once '../config/database.php';
include_once '../objects/product.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$prod = new Product($db);
 
// set page title
$page_title = "Vendas";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='container'>";

include_once "create_order.php";

echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>