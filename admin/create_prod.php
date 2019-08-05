<?php

echo'<div class="modal fade" id="newprod" tabindex="-1" role="dialog" aria-labelledby="newprod" aria-hidden="true">';
    echo'<div class="modal-dialog" role="document">';
        echo'<div class="modal-content">';
            echo'<div class="modal-header">';
                echo'<h5 class="modal-title" id="newprod">Novo Produto</h5>';
                echo'<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                    echo'<span aria-hidden="true">&times;</span>';
                echo'</button>';
            echo'</div>';
            echo'<div>';
                echo'<form action="../product/create.php" method="post">';
                    echo'<div class="col-md-6 xs-12 form-group">';
                        echo'<label for="recipient-name" class="col-form-label">Nome:</label>';
                        echo'<input type="text" class="form-control" name="name" id="recipient-name">';
                    echo'</div>';

                    echo'<div class="col-md-6 form-group">';
                        echo'<label for="recipient-name" class="col-form-label">Preço:</label>';
                        echo'<input type="text" class="form-control" name="price" id="recipient-price">';
                    echo'</div>';

                    echo'<div class="col-md-12 form-group">';
                        echo'<label for="message-text" class="col-form-label">Descrição:</label>';
                        echo'<textarea class="form-control" name="description" id="message-text"></textarea>';
                    echo'</div>';
                echo'</form>';
            echo'</div>';
            echo'<div class="modal-footer">';
                echo'<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>';
                echo'<button onclick="newprods()" type="submit" class="btn btn-success">Cadastrar</button>';
            echo'</div>';
        echo'</div>';
    echo'</div>';
echo'</div>';
?>
<script type="text/javascript">
    function newprods()
	{
		var name = $("#recipient-name").val();
		var price = $("#recipient-price").val();
		var description = $("#message-text" ).val();
		
		if(name !="" && price !="")
		{
			$.post("../product/create.php",
			{
              name:name,
			  price: price,
			  description: description
			});
			
		}else
		{
			alert("É preciso Nome e o valor!");
		}
		location.reload();
	}
</script>