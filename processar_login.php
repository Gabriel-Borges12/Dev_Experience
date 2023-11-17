<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario_nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $linha = $resultado->fetch_assoc();
        $senha_bd = $linha['usuario_senha'];

        if ($senha === $senha_bd) {
            $_SESSION['usuario_nome'] = $linha['usuario_nome'];
            $_SESSION['id_user'] = $linha['id_user'];
            header('Location: inscrever.php');
            exit();
        } else {
            // Se a autenticação falhar, redirecione de volta para a página de login
            header('Location: inscrever.php');
            exit();
        }
    }

}
?>