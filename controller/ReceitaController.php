<?php
require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/model/ReceitaModel.php';

class ReceitaController {
    private $receitaModel;

    public function __construct($pdo) {
        $this->receitaModel = new ReceitaModel($pdo);
    }

    public function adicionarusuario($nome_usuario, $email, $senha) {
        // Verificação básica da senha
        if (strlen($senha) < 8) {
            echo "A senha deve ter pelo menos 8 caracteres.";
            return;
        }
        
        if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
            echo "A senha deve conter pelo menos uma letra maiúscula, uma minúscula e um número.";
            return;
        }

        // Criptografa a senha para segurança
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Chama o modelo para inserir o usuário com a senha criptografada
        $this->receitaModel->adicionarusuario($nome_usuario, $email, $senhaHash);
        
        echo "Usuário cadastrado com sucesso!";
    }

    public function adicionarreceita($nome_receita, $ingrediente, $modo_preparo) {
        $this->receitaModel->adicionarreceita($nome_receita, $ingrediente, $modo_preparo);
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
