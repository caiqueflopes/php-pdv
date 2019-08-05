<style>
.printable {
    display: none;
}
/* print styles*/
@media print {
    .printable {
        display: block;
    }
    .screen {
        display: none;
    }
}
</style>
<?php
echo'<div class="modal fade printModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">';
    echo'<div  class="modal-dialog modal-xl">';
        echo'<div class="modal-content">';
            echo'<div  id="modalprint" class="modal-body">';
                echo'<div class="container-fluid">';
                     echo'<div class="row">';
                        echo'<div class="col-md-12 text-center"><strong>NOME DA LOJA</strong></div>';
                       
                        echo'<div><hr/></div>';

                        echo'<div class="col-md-6 text-center"><strong>Nome cliente</strong></div>';
                        echo'<div class="col-md-6 text-center"><strong>telefone cliente</strong></div>';
                        echo'<div class="col-md-12 text-center"><strong>Endereço do cliente com nuemro</strong><br/></div>';

                        echo'<div><hr/></div>';

                        echo'<div class="col-md-6"><h4>Produto:</h4>NOME DO PRODUTO</div>';
                        echo'<div class="col-md-6"><h4>Quantidade:</h4>1</div>';
                        echo'<div class="col-md-6"><h4>Produto: </h4> NOME DO PRODUTO</div>';
                        echo'<div class="col-md-6"><h4>Quantidade: </h4> 1</div>';
                        echo'<div class="col-md-6"><h4>Produto: </h4> NOME DO PRODUTO</div>';
                        echo'<div class="col-md-6"><h4>Quantidade: </h4> 1</div>';
                        
                        echo'<div><hr/></div>';
                       
                        echo'<div class="col-md-12 text-center"><strong>TAXAS E IMPOSTOS</strong> </div>';
                        echo'<div><br/><br/></div>';
                        echo'<div class="col-md-6 text-center"><strong>TAXAS</strong>';
                            echo'<div class="col-md-12">porcentagem: 13%</div>';
                            echo'<div class="col-md-12">porcentagem: 11%</div>';
                        echo'</div>';
                        echo'<div class="col-md-6 text-center"><strong>IMPOSTOS</strong>';
                            echo'<div class="col-md-12">porcentagem: 32%</div>';
                            echo'<div class="col-md-12">porcentagem: 45%</div>';
                        echo'</div>';

                        echo'<div><hr/></div>';

                        echo'<div><a id="print" class="btn btn-primary" data-toggle="modal" data-target=".printModal" >Imprimir</a></div>';
                    echo'</div>';
                echo'</div>';
            echo'</div>';
        echo'</div>';
    echo'</div>';
echo'</div>';
?>
<script>
document.getElementById('print').onclick = function() {
    // $(".printable").html($("#modalprint").html());
    // $(".printable").printThis();
    window.print();
};
  
</script>