<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="lista-post.php" method="POST">
        <p> Nome: <input type = "text" name="nome" /> </p>
        <p> idade: <input type = "number" name="idade" /> </p>
        <p> Endereço: <input type = "text" name="endereco" required/> </p>
        <p> cpf: <input type = "number" name="cpf" required /> </p>
        <p> <input type = "submit" name="enviar" /> </p>
    </form>
    
</body>
</html>