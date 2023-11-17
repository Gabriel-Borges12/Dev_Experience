<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_equipe = $_POST['nome_equipe'];
    $nome_integrantes = $_POST['nome_integrantes'];
    $idade_integrantes = $_POST['idade_integrantes'];
    $cpf_integrantes = $_POST['cpf_integrantes'];
    $email_integrantes = $_POST['email_integrantes'];

    // Prepare a query para inserção no banco de dados
    $sql = "INSERT INTO inscricao (nome_equipe, nome_integrantes, idade_integrantes, cpf_integrantes, email_integrantes) VALUES (?, ?, ?, ?, ?)";
    
    // Preparar a declaração SQL
    $stmt = $conn->prepare($sql);

    // Verificar se a preparação foi bem-sucedida
    if ($stmt) {
        // Bind dos parâmetros e execução da declaração
        $stmt->bind_param("ssiss", $nome_equipe, $nome_integrantes, $idade_integrantes, $cpf_integrantes, $email_integrantes);
        $stmt->execute();

        // Redirecionar para alguma página após o envio bem-sucedido
        header('Location: index.php');
        exit();
    } else {
        // Se ocorrer um erro, você pode redirecionar para uma página de erro
        header('Location: index.php');
        exit();
    }
};
