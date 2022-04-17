<h1 class="display-5">Aqui é:</h1>
<hr>
<?php
    foreach($this->view->dados as $key => $value){?>
        <h1><?= $value['titulo'];?></h1>
        <br/>
        <p><?= $value['descricao']?></p>
        <hr>

<?php } ?>