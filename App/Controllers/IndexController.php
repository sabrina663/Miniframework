<?php

    namespace App\Controllers;

    use MF\Controllers\Action;
    use MF\Model\Container;
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action{
        
        public function index(){
            $produto = Container::getModel('Produto');
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;
            $this->render('index');
        } 
        public function sobre(){
            $info = Container::getModel('Info');
            $informacao = $info->getInfo();
            $this->view->dados = $informacao;
            $this->render('sobre');
        }
        
    }