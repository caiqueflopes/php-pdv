<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// set page title
$page_title="Area do admin";
 
// include page header HTML
include 'layout_head.php';
 
    echo "<div class='col-md-12'>";
 
        // get parameter values, and to prevent undefined index notice
        $action = isset($_GET['action']) ? $_GET['action'] : "";
 
        // tell the user he's already logged in
        if($action=='already_logged_in'){
            echo "<div class='alert alert-info'>";
                echo "Faça o login.";
            echo "</div>";
        }
 
        else if($action=='logged_in_as_admin'){
            echo "<div class='alert alert-info'>";
                echo "<strong>Você</strong> está logado como admim.";
            echo "</div>";
        }
 
        echo "<div class='alert alert-info'>";
            echo "DASH DO ADMIM VEM AQUI.";
        echo "</div>";
 
    echo "</div>";
 
// include page footer HTML
include_once 'layout_foot.php';
?>