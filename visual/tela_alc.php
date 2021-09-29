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
    <title>AIH</title>
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
    require '../html/navalc.html';
    ?>
    <div class="main">
        <hr>
        <div class="container">
            <div class="row">
                <h1 style="font-size: 25px;">
                    Cadastro de Exame de Alto Custo
                </h1>
            </div>
        </div>
        <div id="contain">
            <div class="container">
                <div class="row">
                    <ul class="nav nav-pills mb-3" id="myTab" role="tablist" style="background-color: whitesmoke;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados Unidade/Município</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="paciente-tab" data-toggle="tab" href="#paciente" role="tab" aria-controls="paciente" aria-selected="false">Dados do Paciente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="conclusao-tab" data-toggle="tab" href="#conclusao" role="tab" aria-controls="conclusao" aria-selected="false">Conclusão</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container" style="background-color: whitesmoke;border-radius: 20px;">
                <div class="row">
                    <div class="formularios" style="margin: auto;">
                        <form method="post" autocomplete="off">
                            <div class="container">
                                <div class="row">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 100px;padding: 0px;">
                                                    <div class="col-sm">
                                                        <label for="origem">Origem</label><br>
                                                        <input required type="text" placeholder="Origem" name="origem" id="origem" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 100px;padding: 0px;">
                                                    <div class="col-sm">
                                                        <label for="sia">CÓDIGO/SIA</label><br>
                                                        <input required type="text" placeholder="Código/sia solicitante" name="sia" id="sia" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 100px;padding: 0px;">
                                                    <div class="col-sm">
                                                        <label for="municipio">Município</label><br>
                                                        <input required type="text" placeholder="Cidade/UF" name="municipio" id="municipio" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 100px;padding: 0px;">
                                                    <div class="col-sm">
                                                        <label for="numero_pront">Número do Prontuário</label><br>
                                                        <input required type="number" placeholder="00000" name="numero_pront" id="numero_pront" style="box-shadow: 2px 2px #555555;width: 60%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="paciente" role="tabpanel" aria-labelledby="paciente-tab">
                                            <div class="row">
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 60%;">
                                                    <div class="col-sm">
                                                        <p>Dados Paciente</p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="nome">Nome</label><br>
                                                        <input required placeholder="Nome do paciente" type="text" name="nome" id="nome" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="nome_mae">Nome da Mãe</label><br>
                                                        <input required placeholder="Nome da mãe" type="text" name="nome_mae" id="nome_mae" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="data_nasc">Data de nascimento</label><br>
                                                        <input required type="date" name="data_nasc" id="data_nasc" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="identidade">Identidade/Orgão Emissor</label><br>
                                                        <input required placeholder="Numero + orgão emissor" type="text" name="identidade" id="identidade" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="numero_cons">Número da Consulta</label><br>
                                                        <input required placeholder="00000" type="number" name="numero_cons" id="numero_cons" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="telefone_pac">Telefone</label><br>
                                                        <input required placeholder="(xx)9xxxx-xxxx" type="tel" name="telefone_pac" id="telefone_pac" style="box-shadow: 2px 2px #555555;" onkeypress="return isNumberKey(event)"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="identidade">Sexo</label><br>
                                                        <input type="radio" name="gender" value="Masculino">Masculino
                                                        <input type="radio" name="gender" value="Femino">Femino
                                                        <input type="radio" name="gender" value="Outro">Outro
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 60%;">
                                                    <div class="col-sm">
                                                        <p>Endereço</p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="rua">Rua</label><br>
                                                        <textarea required placeholder="Rua X" type="text" minlength="5" maxlength="120" name="rua" id="rua" style="box-shadow: 2px 2px #555555;" cols="55" rows="3"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="bairro">Bairro</label><br>
                                                        <input required placeholder="Bairro X" type="text" minlength="5" maxlength="50" name="bairro" id="bairro" style="box-shadow: 2px 2px #555555;width: 60%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="numero_casa">Número</label><br>
                                                        <input required placeholder="00000" type="number" name="numero_casa" id="numero_casa" style="box-shadow: 2px 2px #555555;width: 30%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cidade_casa">Município</label><br>
                                                        <input required placeholder="Cidade" type="text" minlength="5" maxlength="50" name="cidade_casa" id="cidade_casa" style="box-shadow: 2px 2px #555555;width: 60%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="uf">UF</label><br>
                                                        <input required placeholder="UF" type="text" maxlength="2" name="uf" id="uf" style="box-shadow: 2px 2px #555555;width: 20%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cep_pac">CEP</label><br>
                                                        <input required placeholder="XXXXX-XXX" type="text" name="cep_pac" id="cep_pac" style="box-shadow: 2px 2px #555555;" onkeypress="return isNumberKey(event)"><br>
                                                        <br>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="conclusao" role="tabpanel" aria-labelledby="conclusao-tab">
                                            <div class="row">
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="just_clinica">Justificativa clínica</label><br>
                                                        <textarea placeholder="Justifique o motivo da solicitação.(Mínimo de 200 caracteres)." required minlength="200" maxlength="1000" type="text" cols="105" rows="10" name="just_clinica" id="just_clinica" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="diagnostico">Diagnóstico</label><br>
                                                        <textarea placeholder="Descreva o diagnóstico.(Mínimo de 50 caracteres)." required minlength="50" maxlength="250" type="text" cols="105" rows="5" name="diagnostico" id="diagnostico" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cid">CID-10</label><br>
                                                        <input required placeholder="CID do diagnóstico" type="text" name="cid" id="cid" style="box-shadow: 2px 2px #555555;width: 20%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="clinica">Clínica Solicitante</label><br>
                                                        <input required placeholder="Clínica responsável" type="text" name="clinica" id="clinica" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cod_clinica">Código Clínica</label><br>
                                                        <input required placeholder="Código da Clínica" type="text" name="cod_clinica" id="cod_clinica" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="proc_sol">Procedimento Solicitado</label><br>
                                                        <input required placeholder="Procedimento solicitado" type="text" name="proc_sol" id="proc_sol" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cod_proc">Código do procedimento</label><br>
                                                        <input required placeholder="Código do procedimento" type="text" name="cod_proc" id="cod_proc" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <?php require '../modelo/Medico.php';
                                                $med = new Medico(); ?>
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="nome_med">Nome do médico solicitante</label><br>
                                                        <input placeholder="Nome do médico" type="text" name="nome_med" id="nome_med" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="crm_med">CRM Médico</label><br>
                                                        <input required placeholder="Preencha o CRM" type="text" name="crm_med" id="crm_med" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cpf_med">CPF Médico</label><br>
                                                        <input required placeholder="CPF do médico" type="text" name="cpf_med" id="cpf_med" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <?php require '../user/login.php'; ?>
                                                    <script>
                                                        function autoPre() {
                                                            <?php $var = new Login();
                                                            $med = $var->getConfigs();
                                                            ?>
                                                            var a = "<?php echo "" . $med->getNome(); ?>";
                                                            var b = "<?php echo "" . $med->getCpf(); ?>";
                                                            document.getElementById('nome_med').value = a;
                                                            document.getElementById('cpf_med').value = b;
                                                        }
                                                    </script>
                                                    <div class="col-sm">
                                                        <button onclick="return autoPre();" type="button" style="border-radius: 5px;background-color: orangered;color: white;" class="btn btn-outline-light">Usar meus dados</button><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <hr>
                                                    <button type="button" style="border-radius: 5px;background-color: #007bff;color: white;" class="btn btn-outline-light" onclick="openNav('alc');">Concluir</button><br>
                                                    <hr>
                                                    <a href="tela_alc.php"><button type="button" style="border-radius: 5px;background-color: orangered;color: white;" class="btn btn-outline-light">Limpar</button></a><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <hr>
                    <script>
                        function confVoltar(url) {
                            var a = confirm('Deseja abandonar os dados desse formulario ?');
                            if (a) {
                                document.location.href = url;
                            }
                        }
                    </script>
                    <a onclick="confVoltar('tela_principal.php')" style="width: 30%;"> <button type="button" style="border-radius: 5px;background-color: red;color: white;" class="btn btn-outline-light">Voltar</button>
                        <p style="color: red;">Ao fazer isso todos os dados serão perdidos!</p>
                    </a>
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
<?php
require '../html/sidefinal.html';
?>

</html>