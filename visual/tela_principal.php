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
    <title>Pagina Inicial</title>
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
    require '../html/navigation.html';
    require_once "../modelo/Medico.php";
    require_once "../dao/DaoMedico.php";
    $medico = new Medico();
    $daom = new DaoMedico();
    $medico = $daom->localizar($_SESSION['id_med']);
    if ($medico == null) {
        header('Location:../user/verificador.php?login=nosession');
    }
    $_SESSION['nome'] = $medico->getNome();
    ?>
    <div class="main">
        <div class="container">
            <br>
            <?php
            echo '<h1 style="font-size:20px;"> Usuário: ' . $_SESSION['nome'] . '</h1>';
            $today = $daom->getHoras();
            echo '<h1 style="font-size:15px;"> Estado do Sistema: Conectado em ' . $today . '</h1>';
            ?>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex flex-column bd-highlight mb-3" style="width: 50%;margin-left: 80px;">
                        <br>
                        <br>
                        <div class="p-2 bd-highlight">
                            <hr>
                            <a href="tela_tfd.php"><button type="button" style="box-shadow: 5px 5px black;border-radius: 25px;background-color: rgba(212, 41, 41, 0.851);width:100%;" class="btn btn-outline-dark">Exame TFD</button></a><br>
                            <hr>
                        </div>

                        <div class="p-2 bd-highlight">
                            <a href="tela_alc.php"><button type="button" style="box-shadow: 5px 5px black;border-radius: 25px;background-color: rgba(41, 115, 212, 0.851);width:100%;" class="btn btn-outline-dark">Exame de Alto custo</button></a><br>
                            <hr>
                        </div>

                        <div class="p-2 bd-highlight">
                            <a href="tela_aih.php"><button type="button" style="box-shadow: 5px 5px black;border-radius: 25px;background-color: rgba(41, 212, 78, 0.851);width:100%;" class="btn btn-outline-dark">Exame AIH</button></a><br>
                            <hr>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-sm">
                    <div class="d-flex justify-content-end" style="width:100%;overflow-y: scroll; height:400px;border: 1px rgba(41, 41, 41, 0.351);border-style:solid;border-radius:5px;">
                        <div class="d-flex flex-column bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <form style="width: 100%;height: 100%;" action='user/find.php' method="post">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-center">
                                            <input type="text" name="find" id="find" placeholder="Nome ou exame" style="box-shadow: 2px 2px #555555;"><br>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" style="border-radius: 5%;box-shadow: 2px 2px #555555;" class="btn btn-outline-dark">🔎</button><br>
                                            <hr>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                            <?php
                            require_once '../dao/DaoMedico.php';
                            $daom = new DaoMedico();
                            $lista =  array();
                            $lista = $daom->exames($_SESSION['id_med']);
                            if (count($lista) > 0) {
                                echo '<h1>Card + nome</h1>';
                            } else {
                                require_once '../html/card.html';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <hr>
                <hr>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-start" style="width: 50%;margin-left: 50px;">
                    <div class="col-sm">
                        <a href="../index.php"><button type="button" style="border-radius: 25px;color: red;width:100%; box-shadow: 5px 5px #555555;" class="btn btn-outline-dark">Sair</button></a><br>
                        <br>
                    </div>
                    <div class="col-sm">
                        <a href="info.php"><button type="button" style="border-radius: 25px;width:100%; box-shadow: 5px 5px #555555;" class="btn btn-outline-dark">Informações</button></a><br>
                    </div>
                </div>
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
<script src="../vendor/jquery/jquery.min.js "></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css " integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">

</html>