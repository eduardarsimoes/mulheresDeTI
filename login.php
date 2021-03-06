<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/base.css">
    <title>Tech Ladies: Login</title>
</head>

<header>
</header>

<body>
    <?php
        include("./estrutura/barra_direita.php");
    ?>

    <main class="o-main" style="text-align: center;">
        <div class="centro">
            <br><br><br><br>
            <h3 style="font-size: 33px;">OLÁ NOVAMENTE!</h3>
            <p>Não perca sua próxima oportunidade!<br>Entre para ficar por dentro das novidades na sua área.</p>
            <hr>
        
            <form method="POST" action="./funcoes/login.php">
                <br>
                <input type="email" class="input_css" name="email" placeholder="Email">
                <br><br>
                <input type="password" class="input_css" name="senha" placeholder="Senha">
                <p>
                    <a href="login.html" style="font-size: 12px;"><u>Esqueceu a senha?</u></a>
                </p>
                <input type="submit" class="botao" value="Entrar">
                <br>
            </form>
            <br>
            <hr>
            <p>Nova no TechLadies? 
                <a href="cadastro.php"> <u>Cadastre-se</u></a>
            </p>
        </div>
        <br><br><br><br><br><br>
    </main>
    <footer class="o-footer">
        <center>
            <a href="https://github.com/adudars/mulheresDeTI" target="_blank">
                <image src="./imagens/GitHub.png" alt="TechLadiesRepository"></image>
            </a>
        </center>
    </footer>
</body>



</html>