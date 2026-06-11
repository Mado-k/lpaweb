<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        echo "Olá, $nome!";
    }
?>

<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        echo "Olá, $nome!<br>";
        echo "Email: $email<br>";
        echo "Assunto: $assunto<br>";
        echo "Mensagem: $mensagem<br>";
    }
?>

<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        echo "<h2>Dados do Formulário</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Assunto:</strong> $assunto</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    }
?>