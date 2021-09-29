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
    <title>TFD</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="shortcut icon" href="favicon.png">
</head>

<body>
    <?php
    require '../html/navtfd.html';
    ?>
    <div class="main">
        <hr>
        <div class="container">
            <div class="row">
                <h1 style="font-size: 25px;">
                    Cadastro de Exames TFD
                </h1>
            </div>
        </div>
        <hr>
        <div id="contain">
            <div class="container">
                <div class="row">
                    <ul class="nav nav-pills mb-3" id="myTab" role="tablist" style="background-color: whitesmoke;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados Básicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="exame-tab" data-toggle="tab" href="#exame" role="tab" aria-controls="exame" aria-selected="false">Dados do Exame</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="just-tab" data-toggle="tab" href="#justificativa" role="tab" aria-controls="just" aria-selected="false">Justificativas</a>
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
                        <form action="tfd.php" method="post" autocomplete="off">
                            <div class="container">
                                <div class="row">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 40%;padding: 0px;">
                                                    <div class="col-sm">
                                                        <p>Exame</p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="municipio_origem">Município de Origem</label><br>
                                                        <input required type="text" placeholder="Cidade/UF" name="municipio_origem" id="municipio_origem" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="DRS">DRS</label><br>
                                                        <input required type="text" placeholder="DRS do exame" name="DRS" id="DRS" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="numero">Número</label><br>
                                                        <input required type="number" placeholder="00000" name="numero" id="numero" style="box-shadow: 2px 2px #555555;width: 90%;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;height: 60%;">
                                                    <div class="col-sm">
                                                        <p>Paciente</p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="nome">Nome</label><br>
                                                        <input required placeholder="Nome do paciente" type="text" name="nome" id="nome" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="identidade">Identidade</label><br>
                                                        <input required placeholder="Identidade do paciente" type="text" name="identidade" id="identidade" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="telefone_pac">Telefone</label><br>
                                                        <input required placeholder="(xx)9xxxx-xxxx" type="tel" name="telefone_pac" id="telefone_pac" style="box-shadow: 2px 2px #555555;" onkeypress="return isNumberKey(event)"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="residencia_pac">Endereço</label><br>
                                                        <textarea required placeholder="Rua X bairro ABC num y" type="text" name="residencia_pac" id="residencia_pac" style="box-shadow: 2px 2px #555555;" cols="25" rows="5"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="cep_pac">CEP</label><br>
                                                        <input required placeholder="XXXXX-XXX" type="text" name="cep_pac" id="cep_pac" style="box-shadow: 2px 2px #555555;" onkeypress="return isNumberKey(event)"><br>
                                                        <br>
                                                    </div>
                                                </div>

                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 10px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <p>Acompante</p>
                                                        <button type="button" style="border-radius: 5px;background-color: #007bff;color: white;" class="btn btn-outline-light" onclick="acompanhante();">Adicionar acompanhate</button><br>
                                                        <hr>
                                                    </div>
                                                    <div id='ac'>
                                                        <div class="col-sm">
                                                            <label for="nome_ac">Nome</label><br>
                                                            <input disabled placeholder="Nome do Acompanhante" type="text" name="nome_ac" id="nome_ac" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="profissao_ac">Profissão</label><br>
                                                            <input disabled placeholder="Profissão - Acompanhante" type="text" name="profissao_ac" id="profissao_ac" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="identidade_ac">Identidade</label><br>
                                                            <input disabled placeholder="Identidade" type="text" name="identidade_ac" id="identidade_ac" style="box-shadow: 2px 2px #555555;width: 80%;"><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="Data_nasc_ac">Data de nascimento</label><br>
                                                            <input disabled type="date" name="data_nasc_ac" id="data_nasc_ac" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="telefone_ac">Telefone</label><br>
                                                            <input disabled placeholder="(xx)9xxxx-xxxx" type="tel" name="telefone_ac" id="telefone_ac" style="box-shadow: 2px 2px #555555;" onkeypress="return isNumberKey(event)"><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="residencia_ac">Endereço</label><br>
                                                            <textarea disabled placeholder="Rua X bairro ABC num y" type="text" cols="25" rows="5" name="residencia_ac" id="residencia_ac" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="cep_ac">CEP</label><br>
                                                            <input disabled placeholder="XXXXX-XXX" type="text" name="cep_ac" id="cep_ac" style="box-shadow: 2px 2px #555555;width: 70%;"><br>
                                                            <br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label for="relecao_ac">Relação</label><br>
                                                            <textarea disabled placeholder="Relação do Acompanhate com o paciente" type="text" cols="25" rows="5" name="relacao_ac" id="relacao_ac" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                                <lottie-player id="anim1" src="https://assets9.lottiefiles.com/packages/lf20_pk5mpw6j.json" background="transparent" speed="1" style="width: 500px; height: 500px;position: absolute;z-index: 0;margin:0px;padding:0px;right:55%;top: 120%;" loop autoplay></lottie-player>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="exame" role="tabpanel" aria-labelledby="exame-tab">
                                            <div class="row">
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="historico">Histórico da Doença Atual</label><br>
                                                        <textarea placeholder="Relate o histórico da doença atual com muitas palavras.(Mínimo de 250 caracteres)." required minlength="250" maxlength="1350" type="text" cols="105" rows="10" name="historico" id="historico" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="exame_fisico">Exame Físico</label><br>
                                                        <textarea placeholder="Relate o exame físico.(Mínimo de 150 caracteres)." required minlength="150" maxlength="1050" type="text" cols="105" rows="7" name="exame_fisico" id="exame_fisico" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="diagnostico">Diagnóstico</label><br>
                                                        <textarea placeholder="Descreva o diagnóstico.(Mínimo de 100 caracteres)." required minlength="100" maxlength="750" type="text" cols="105" rows="5" name="diagnostico" id="diagnostico" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="diagnostico">CID</label><br>
                                                        <input placeholder="CID do Diagnóstico" required type="text" name="cid" id="cid" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="exame_comp">Exame(s) Complementar(es)</label><br>
                                                        <textarea placeholder="Liste os exames complementares. (Deve-se anexar posteriormente os mesmos já impressos.)" maxlength="350" type="text" cols="105" rows="5" name="exame_comp" id="exame_comp" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="trat_real">Tratamentos Realizados</label><br>
                                                        <textarea placeholder="Descreva os tratamentos realizados.(Mínimo de 100 caracteres)." required minlength="100" maxlength="550" type="text" cols="105" rows="6" name="trat_real" id="trat_real" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="trat_real">Tratamentos/Exames indicados</label><br>
                                                        <textarea placeholder="Indique tratamentos ou exames." maxlength="350" type="text" cols="105" rows="4" name="diagnostico" id="diagnostico" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="justificativa" role="tabpanel" aria-labelledby="just-tab">
                                            <div class="row">
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="just_imp">Justificar as razões que impossibilitam a realização do tratamento /Exame na localidade</label><br>
                                                        <textarea placeholder="Justifique tais razões.(Mínimo de 50 caracteres)." required minlength="50" maxlength="250" type="text" cols="105" rows="5" name="just_imp" id="just_imp" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="just-urg">Justificar em caso de necessidade de encaminhamento Urgente</label><br>
                                                        <textarea placeholder="Relate o motivo de urgência.(Mínimo de 70 caracteres)." minlength="70" maxlength="350" type="text" cols="105" rows="5" name="just-urg" id="just-urg" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="just_ac">Justificar em caso de necessidade de acompanhante</label><br>
                                                        <textarea placeholder="Descreva o motivo de ter acompanhate.(Mínimo de 70 caracteres)." minlength="70" maxlength="350" type="text" cols="105" rows="5" name="just_ac" id="just_ac" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="transporte">Transporte Recomendável. Justifique</label><br>
                                                        <textarea placeholder="Diga qual transporte e justifique." required maxlength="350" type="text" cols="105" rows="5" name="transporte" id="transporte" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="observacoes">Observações e Anotações</label><br>
                                                        <textarea placeholder="Anotações e Observações podem ser digitados aqui." maxlength="1250" type="text" cols="105" rows="10" name="observacoes" id="observacoes" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="conclusao" role="tabpanel" aria-labelledby="conclusao-tab">
                                            <div class="row">
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <label for="localidade">Cidade</label><br>
                                                        <input required placeholder="Local onde foi preenchido. Cidade/UF" type="text" name="localidade" id="localidade" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="data_atual">Data atual</label><br>
                                                        <input required type="date" name="data_atual" id="data_atual" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="tipo_transporte">Tipo de transporte</label><br>
                                                        <input required placeholder="Ex: Ônibus X" type="text" name="tipo_transporte" id="tipo_transporte" style="box-shadow: 2px 2px #555555;"><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="separador" id="separador-ac" style="background-color: lightblue;border-radius: 20px;margin: 20px;box-shadow: 5px 2px #555555;">
                                                    <div class="col-sm">
                                                        <p>Unidade assistencial</p>
                                                        <button type="button" style="border-radius: 5px;background-color: #007bff;color: white;" class="btn btn-outline-light" onclick="assistencial();">Vai comparecer</button><br>
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="local_as">Local</label><br>
                                                        <input disabled placeholder="Local da assistência." type="text" name="local_as" id="local_as" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="data_as">Data</label><br>
                                                        <input disabled type="date" name="data_as" id="data_as" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="hora_as">Horas</label><br>
                                                        <input disabled type="time" name="hora_as" id="hora_as" style="box-shadow: 2px 2px #555555;width: 100%;"><br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm">
                                                        <label for="endereco_as">Endereço</label><br>
                                                        <textarea disabled placeholder="Endereço da assistência. Rua x Bairro Z num Y" name="endereco_as" id="endereco_as" cols="10" rows="5" style="box-shadow: 2px 2px #555555;width: 100%;"></textarea><br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <hr>
                                                    <button type="button" style="border-radius: 5px;background-color: #007bff;color: white;" class="btn btn-outline-light" onclick="openNav('tfd');">Concluir</button><br>
                                                    <hr>
                                                    <a href="tela_tfd.php"><button type="button" style="border-radius: 5px;background-color: orangered;color: white;" class="btn btn-outline-light">Limpar</button></a><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<?php
require '../html/sidefinal.html';
?>
<script src="../vendor/jquery/jquery.min.js "></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css " integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">
<script src="../js/front.js"></script>
<script src="../js/main.js">
    device();
    listenerEvt();
</script>
<script>
    window.onload = device();
    window.onload = listenerEvt();
</script>

</html>