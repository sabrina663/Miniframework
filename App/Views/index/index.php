<h1 class="display-5">Aqui é:</h1>
<hr>
<?php
    foreach($this->view->dados as $key => $value){
        echo $value['id'] . " - " . $value['descricao'] . " - " . $value['preco'];
        echo '<br/>';
    }
