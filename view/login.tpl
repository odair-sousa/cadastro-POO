<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Login</title>

        <link rel="stylesheet" type="text/css" href="../view/css/estilos.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="../view/scripts.js"></script>
    </head>
    <body class="bg">
        <div class="form">
            <form method="POST" class="login">
                <input type="text" name="usuario" placeholder="usuario" >
                <input type="password" name="senha" placeholder="senha" >
                <input type="hidden" name="acao" value="entrar">
                <button>Entrar</button>
            </form>
            <p class="novo">Ainda não possui cadastro?
                    <a href="jogador_cadastro.php">Crie uma conta!</a>
            </p>
        </div>
    </body>
</html>
