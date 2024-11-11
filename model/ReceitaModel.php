<?php
class ReceitaModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function adicionarReceita($nome_usuario, $email, $senha, $nome_receita, $ingrediente, $modo_preparo){
        $sql = "INSERT INTO receita_culinaria(nome_usuario, email, senha, nome_receita, ingrediente, modo_preparo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_usuario, $email, $senha, $nome_receita, $ingrediente, $modo_preparo]);
    }

    public function listarReceitas(){
        $sql = "SELECT * FROM receita_culinaria";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}

?>