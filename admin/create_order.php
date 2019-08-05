<?php
if(!isset($_SESSION["return_search"])){
    $_SESSION["return_search"]="";
}
echo'<div class="row">';
   
echo'</div>';
echo'<div class="row">';
    echo'<div class="col-md-9 col-sm-12">';
        echo'<h6 class="text-success">*pequisando em branco poderá ver todos os produtos</h6>';
        echo '<h3>Nome do produto</h3>';
        echo'<form action="../product/search.php" method="GET" class="form-group">
            <div class="col-sm-10"><input class="form-control mr-sm-2" type="search" name="s" value="" placeholder="Nome do produto" aria-label="Search"></div>
            <div class="col-sm-2 "><button class="btn btn-success my-2 my-sm-0">Buscar</button></div>
        </form>';
        echo "<br/><br/>";
        echo '<div class="row">';
        if ($_SESSION["return_search"]!="")
        {
            $search_itens=json_decode($_SESSION["return_search"]);
          
            foreach ($search_itens->records as $key => $busca)
            {
            //     echo'2--';
            //  echo $busca->name;
             echo'<div class="card col-md-4" style="width: 20rem; margim ">';
                echo'<div class="card-body">';
                     echo'<h5 class="card-title">'. $busca->name .'</h5>';
                     echo'<p class="card-text">'. $busca->description .'</p>';
                     echo'<p class="card-text">'. $busca->category_name .'</p>';
                     echo'<a name="'.$busca->name.'" id="prods"class="btn btn-success"onclick="addCart()">Comprar</a>';
                    echo'<div><br/><br/></div>';
                 echo'</div>';
             echo'</div>';
            }
           
        }else{
            echo'<h3>Nenhum produto encontrado!</h3>';
        }
        echo'</div>';
    echo'</div>';
    echo'<div class="col-md-3 col-sm-12">';
        echo'<h4 class="text-center">Checkout</h4>';
        echo'<div id="prod">'; 
        echo'</div>';
        echo'<div><br/><br/><br/></div>';
        echo'<div id="payments">';
            echo'<h4>Formas de pagamento</h4>';
            echo'<div><a class="btn btn-primary" data-toggle="modal" data-target=".printModal">Boleto</a></div>';
            echo'<div><br/></div>';
            echo'<div><a disabled class="btn btn-success">Cartão de debito</a></div>';
            echo'<div><br/></div>';
            echo'<div><a disabled class="btn btn-success">Cartão de Credito</a></div>';
        echo'</div>';
    echo'</div>';
echo'</div>';
include_once "print.php";
?>
<script>
    function addCart(){
        nome=$("#prods").attr("name");
        $("#prod").append("<div><p><strong>Produto</strong> " + nome + " <strong>Qtd</strong> 1 </p> </div>");

    }
</script>
