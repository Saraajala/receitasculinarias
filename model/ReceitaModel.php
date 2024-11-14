<?php
class ReceitaModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function adicionarusuario($nome_usuario, $email, $senha)
    {
        $sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_usuario, $email, $senha]);
    }

    public function buscarUsuarioPorEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function listarUsuarios() {
        $sql = "SELECT nome_usuario, email, senha FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function adicionarreceita($nome_receita, $ingrediente, $modo_preparo)
    {
        $sql = "INSERT INTO receitas (nome_receita, ingrediente, modo_preparo) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_receita, $ingrediente, $modo_preparo]);
    }

    public function excluirReceita($id)
    {
        $sql = "DELETE FROM receitas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function atualizarReceita($id, $nome_receita, $ingrediente, $modo_preparo)
    {
        $sql = "UPDATE receitas SET nome_receita = ?, ingrediente = ?, modo_preparo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_receita, $ingrediente, $modo_preparo, $id]);
    }

    public function listarReceitaPorId($id)
    {
        $sql = "SELECT * FROM receitas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function listarReceitas()
    {
        $sql = "SELECT * FROM receitas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
