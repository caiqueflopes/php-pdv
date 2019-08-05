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
$page_title = "Produtos";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
    // PARA MOSTRAR OS PRODUTOS CADASTRADOS
        // read all users from the database
        $stmt = $prod->readPaging($from_record_num, $records_per_page);
        // count retrieved users
        $num = $stmt->rowCount();
        // to identify page for paging
        $page_url="new_prod.php?";
    //END MOSTRAR PRODUTOS CADASTRADOS

    echo'<button type="button" class="btn btn-success" data-toggle="modal" data-target="#newprod" data-whatever="@getbootstrap">Novo Produto</button>';
    // include products table HTML template
    include_once "create_prod.php";
    include_once "read_prods.php";
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>