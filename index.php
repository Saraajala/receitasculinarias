<?php

require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

$receitaController = new ReceitaController($pdo);
$receitaController->exibirListaReceitas();


?>