<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div class="container">
        <section>
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>
            <form method="POST" action="processa.php">
                <input type="submit" value="Cadastrar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>
                Nome<br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus>
                Sobrenome<br>
                <input type="text" name="sobrenome" class="campo" maxlength="40" required>
                Email<br>
                <input type="email" name="email" class="campo" maxlength="40" required>
                Telefone<br>
                <input type="tel" name="telefone" class="campo" maxlength="40" required>
        </section>
    </div>
</body>
</html>



