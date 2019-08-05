<?php
// display the table if the number of users retrieved was greater than zero
if($num>0){
    echo "<br/><br/>";
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrição</th>";
        echo "<th>Preço</th>";
        echo "<th>Categoria</th>";
    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        // display user details
        echo "<tr>";
            echo "<td>{$name}</td>";
            echo "<td>{$description}</td>";
            echo "<td>{$price}</td>";
            echo "<td>{$category_name}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="new_prod.php?";
    $total_rows = $prod->count();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>Nenhum produto encontrado.</strong>
    </div>";
}
?>