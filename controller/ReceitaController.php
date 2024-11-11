<?php
require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/model/ReceitaModel.php';

class ReceitaController
{
    private $receitaModel;

    public function __construct($pdo)
    {
        $this->receitaModel = new ReceitaModel($pdo);
    }

    public function adicionarusuario($nome_usuario, $email, $senha)
    {
        // Validação da senha
        if (strlen($senha) < 8) {
            echo "A senha deve ter pelo menos 8 caracteres.";
            return;
        }

        if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
            echo "A senha deve conter pelo menos uma letra maiúscula, uma minúscula e um número.";
            return;
        }

        // Criptografa a senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Chama o modelo para adicionar o usuário
        $this->receitaModel->adicionarusuario($nome_usuario, $email, $senhaHash);

        echo "Usuário cadastrado com sucesso!";
    }

    // Função para o login
    public function login($email, $senha)
    {
        // Verifica as credenciais no banco de dados
        $usuario = $this->receitaModel->buscarUsuarioPorEmail($email);

        if ($usuario) {
            // Verifica se a senha fornecida corresponde à senha criptografada
            if (password_verify($senha, $usuario['senha'])) {
                // Inicia a sessão do usuário
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];

                // Redireciona o usuário para a página de boas-vindas ou painel
                header("Location: ../index.php");
                exit();
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "E-mail não encontrado!";
        }
    }

    public function adicionarreceita($nome_receita, $ingrediente, $modo_preparo)
    {
        $this->receitaModel->adicionarreceita($nome_receita, $ingrediente, $modo_preparo);
    }

    public function listarReceitas()
    {
        return $this->receitaModel->listarReceitas();
    }

    public function exibirListaReceitas()
    {
        $receitas = $this->listarReceitas();
        include 'C:/aluno2/xampp/htdocs/receitasculinarias/view/listar.php';
    }
}
