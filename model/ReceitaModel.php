<?php
class ReceitaModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Método para adicionar um novo usuário ao sistema
    public function adicionarusuario($nome_usuario, $email, $senha) {
        $sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_usuario, $email, $senha]);
    }

    // Método para adicionar uma nova receita
    public function adicionarreceita($nome_receita, $ingrediente, $modo_preparo) {
        $sql = "INSERT INTO receitas (nome_receita, ingrediente, modo_preparo) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_receita, $ingrediente, $modo_preparo]);
    }

    // Método para listar todas as receitas
    public function listarReceitas() {
        $sql = "SELECT * FROM receitas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
