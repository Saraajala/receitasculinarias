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
        if (strlen($senha) < 8) {
            echo "A senha deve ter pelo menos 8 caracteres.";
            return;
        }

        if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
            echo "A senha deve conter pelo menos uma letra maiúscula, uma minúscula e um número.";
            return;
        }

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $this->receitaModel->adicionarusuario($nome_usuario, $email, $senhaHash);

        echo "Usuário cadastrado com sucesso!";
    }


    public function login($email, $senha)
    {
        $usuario = $this->receitaModel->buscarUsuarioPorEmail($email);

        if ($usuario) {
            if (password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];

                header("Location: ../../blog.php");
                exit();
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "E-mail não encontrado!";
        }
    }

    public function listarusuarios()
    {
        $usuario = $this->receitaModel->listarUsuarios();
        include 'C:/aluno2/xampp/htdocs/receitasculinarias/view/usuario/listar.php';
    }

    public function adicionarreceita($nome_receita, $ingrediente, $modo_preparo)
    {
        $this->receitaModel->adicionarreceita($nome_receita, $ingrediente, $modo_preparo);
    }

    public function excluirReceita($id)
    {
        $this->receitaModel->excluirReceita($id);
    }
    
    public function atualizarReceita($id, $nome_receita, $ingrediente, $modo_preparo)
    {
        $this->receitaModel->atualizarReceita($id, $nome_receita, $ingrediente, $modo_preparo);
    }

    public function listarReceitaPorId($id)
    {
        return $this->receitaModel->listarReceitaPorId($id);
    }

    public function listarReceitas()
    {
        return $this->receitaModel->listarReceitas();
    }

    public function exibirListaReceitas()
    {
        $receitas = $this->listarReceitas();
        include 'C:/aluno2/xampp/htdocs/receitasculinarias/view/receita/listar2.php';
    }
}
