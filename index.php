<?php
if (isset($_GET['login'])) {
    if ($_GET['login'] == "0") {
        echo '<script>alert("Erro ao logar, verifique seus dados e tente denovo. Se você esqueceu sua senha entre em contato com o suporte.");</script>';
    }
    if ($_GET['login'] == "nosession") {
        echo '<script>alert("Você não tem permissão pra acessar essa área ou está desconectado.");</script>';
    }
    if ($_GET['login'] == "1") {
        echo '<script>alert("Acesso inválido nesse contexto.");</script>';
    }
}
session_start();
session_destroy();
unset($_SESSION['id_med']);
$_SESSION['id_med'] = null;
unset($_SESSION['user']);
$_SESSION['user'] = null;
unset($_SESSION['nome']);
$_SESSION['nome'] = null;
session_commit();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="robots" content="all,follow">
    <title>Docs Capelinha</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    
    <link rel="shortcut icon" href="favicon.png">
    <script src="js/front.js "></script>
    <script src="js/main.js "></script>
</head>

<body>
    <div class="main">
        <div>
            <h1 class="text-center" style="font-family:monospace;text-shadow: bisque;">
                Documentos Saúde Capelinha
            </h1>
        </div>
        <div class="d-flex justify-content-center">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_4FGi6N.json" background="transparent" speed="1" style="width: 300px; height: 250px;" loop autoplay></lottie-player>
        </div>

        <div class="d-flex justify-content-center">
            <div class="formularios" style="margin: auto;">
                <form action='user/verificador.php?login=1' method="post">
                    <div class="d-flex justify-content-center">
                        <label for="user">Usuário</label><br>
                    </div>
                    <input type="text" name="user" id="user" style="box-shadow: 2px 2px black;"><br>
                    <br>
                    <div class="d-flex justify-content-center">
                        <label for="senha">Senha</label><br>
                    </div>
                    <input type="password" name="senha" id="senha" style="box-shadow: 2px 2px black;"><br>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <button type="submit" style="border-radius: 25px;box-shadow: 5px 5px black;" class="btn btn-outline-dark">Login</button><br>
                        <hr>
                        <a href="suporte.php"><button type="button" style="border-radius: 25px;box-shadow: 5px 5px black;" class="btn btn-outline-dark">Suporte</button></a><br>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>

</body>
<footer>
    <div class="bg-darker py-4">
        <div class="container text-center">
            <p class="mb-0 text-muted text-small">&copy; Todos os direitos reservados. Desenvolvido por <a href="https://www.instagram.com/leonjrmartins/?hl=pt-br">Leon</a> e <a href="https://www.instagram.com/asevedoraiane/?hl=pt-br">Raiane</a> 2021.</p>
        </div>
    </div>
</footer>
<script src="vendor/jquery/jquery.min.js "></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css " integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">

</html>