<?php
require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/model/ReceitaModel.php';

class ReceitaController {
    private $receitaModel;

    public function __construct($pdo) {
        $this->receitaModel = new ReceitaModel($pdo);
    }

    public function adicionarReceita($nome_usuario, $email, $senha, $nome_receita, $ingrediente, $modo_preparo) {
        $this->receitaModel->adicionarreceita($nome_usuario, $email, $senha, $nome_receita, $ingrediente, $modo_preparo);
    }

    public function ListarReceitas() {
        return $this->receitaModel->ListarReceitas();
    }
    
    public function exibirListaReceitas() {
        $receitas = $this->ListarReceitas();
        include 'C:/aluno2/xampp/htdocs/receitasculinarias/view/listar.php';
    }
}
?>