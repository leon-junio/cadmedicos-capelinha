<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../user/verificador.php?login=nosession');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALC</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="shortcut icon" href="favicon.png">
    <script src="../js/front.js "></script>
    <script src="../js/main.js"></script>
</head>

<body>
    <?php
    require '../html/navaih.html';
    ?>
    <div class="main">
        <hr>
        <div class="container">
            <div class="row">
                <h1 style="font-size: 25px;">
                    Cadastro de Exame AIH
                </h1>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="formularios" style="margin: auto;">
                    <form action="alc.php" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="user">Usuário</label><br>
                                    <input type="text" name="user" id="user" style="box-shadow: 2px 2px black;"><br>
                                    <br>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" style="border-radius: 20px;box-shadow: 2px 2px black;" class="btn btn-outline-dark">Salvar</button><br>
                                        <hr>
                                        <hr>
                                        <a href="tela_principal.php"><button type="button" style="border-radius: 20px;box-shadow: 2px 2px black;" class="btn btn-outline-dark">Cancelar</button></a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    </div>
</body>
<footer>
    <div class="bg-darker py-4">
        <div class="container text-center">
            <p class="mb-0 text-muted text-small">&copy; Todos os direitos reservados. Desenvolvido por <a href="https://www.instagram.com/leonjrmartins/?hl=pt-br">Leon</a> e <a href="https://www.instagram.com/asevedoraiane/?hl=pt-br">Raiane</a> 2021.</p>
        </div>
    </div>
</footer>
<script src="../vendor/jquery/jquery.min.js "></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css " integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">

</html>