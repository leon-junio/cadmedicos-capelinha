function alertaLogin() {
    alert("Falha ao logar");
}

function alertaSessionLogin() {
    alert("Login necessário para acessar esse ambiente!");
}

function alertaCadLogin() {
    alert("Falha ao cadastrar, preencha todos os campos!");
}

function tempoAtual() {
    var tempo = getDate();
    document.write(tempo);
    alert(tempo);
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31 &&
        (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function acompanhante() {
    var a = document.getElementById("nome_ac");
    var b = document.getElementById("residencia_ac");
    var c = document.getElementById("telefone_ac");
    var d = document.getElementById("cep_ac");
    var e = document.getElementById("relacao_ac");
    var f = document.getElementById("data_nasc_ac");
    var g = document.getElementById("profissao_ac");
    var h = document.getElementById("identidade_ac");
    if (a.disabled == 1) {
        a.disabled = 0;
        b.disabled = 0;
        c.disabled = 0;
        d.disabled = 0;
        e.disabled = 0;
        f.disabled = 0;
        g.disabled = 0;
        h.disabled = 0;

    } else {
        a.disabled = 1;
        b.disabled = 1;
        c.disabled = 1;
        d.disabled = 1;
        e.disabled = 1;
        f.disabled = 1;
        g.disabled = 1;
        h.disabled = 1;
    }
}

function assistencial() {
    var a = document.getElementById("local_as");
    var b = document.getElementById("data_as");
    var c = document.getElementById("hora_as");
    var d = document.getElementById("endereco_as");
    if (a.disabled == 1) {
        a.disabled = 0;
        b.disabled = 0;
        c.disabled = 0;
        d.disabled = 0;

    } else {
        a.disabled = 1;
        b.disabled = 1;
        c.disabled = 1;
        d.disabled = 1;
    }
}

function openNav(local) {
    var chk = false;
    if (local == "alc") {
        if (document.getElementById("origem").value == "" || document.getElementById("sia").value == "" || document.getElementById("municipio").value == "" || document.getElementById("numero_pront").value == "" || document.getElementById("telefone_pac").value == "" || document.getElementById("numero_cons").value == "" || document.getElementById("identidade").value == "" || document.getElementById("data_nasc").value == "" || document.getElementById("nome_mae").value == "" || document.getElementById("nome").value == "" || document.getElementById("cep_pac").value == "" || document.getElementById("uf").value == "" || document.getElementById("cidade_casa").value == "" || document.getElementById("numero_casa").value == "" || document.getElementById("bairro").value == "" || document.getElementById("rua").value == "" || document.getElementById("cod_proc").value == "" || document.getElementById("proc_sol").value == "" || document.getElementById("cod_clinica").value == "" || document.getElementById("clinica").value == "" || document.getElementById("cid").value == "" || document.getElementById("diagnostico").value == "" || document.getElementById("just_clinica").value == "" || document.getElementById("cpf_med").value == "" || document.getElementById("crm_med").value == "" || document.getElementById("nome_med").value == "") {
            alert("Você possui dados sem preencher ou preenchidos incorretamente. Ao passar o mouse sobre os campos que necessitam revisão você verá uma mensagem 'Preencha os campos' e fique atento aos campos obrigatórios marcados com *");
        } else {
            alert('TRUE');
            console.log("TRUE");
            chk = true;
        }
    }
    if (local == "tfd") {
        chk = true;
    }
    if (local == "aih") {

    }
    if (chk) {
        document.getElementById("mySidenav").style.width = "100%";
        document.getElementById("contain").style.filter = "blur(2px)";
        document.getElementById("contain").style.pointerEvents = "none";
        chk = false;
        if (document.getElementById("anim1") != null) {
            document.getElementById("anim1").style.position = "absolute";
        }
    }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("contain").style.filter = "blur(0px)";
    document.getElementById("contain").style.pointerEvents = "all";
    if (document.getElementById("anim1") != null) {
        document.getElementById("anim1").style.top = "53%";
    }

}