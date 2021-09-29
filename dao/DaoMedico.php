<?php
require_once '../modelo/Conexao.php';
require_once '../modelo/Medico.php';
class DaoMedico
{

    public function __construct()
    {
    }
    public function getLista()
    {
        $sql = 'select * from medico;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if ($pst->execute()) {
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        return $lista;
    }

    public function getHoras()
    {
        $sql = 'call horaSistema();';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if ($pst->execute()) {
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        $dados = "";
        foreach($lista as $linha){
            $dados = $linha['now()'];
        }
        return $dados;
    }

    public function exames($id)
    {
        $sql = 'call findExamesTfd('.$id.');';
        $sql2 = 'call findExamesAlc('.$id.');';
        $sql3 = 'call findExamesAih('.$id.');';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if ($pst->execute()) {
                $lista += $pst->fetchAll(PDO::FETCH_ASSOC);
            }
            $pst = Conexao::getPreparedStatement($sql2);
            if ($pst->execute()) {
                $lista += $pst->fetchAll(PDO::FETCH_ASSOC);
            }
            $pst = Conexao::getPreparedStatement($sql3);
            if ($pst->execute()) {
                $lista += $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        return $lista;
    }

    public function Localizar($id)
    {
        $sql2 = 'select * from medico where id_med = '.$id.';';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql2);
            if ($pst->execute()) {
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        $obj = new Medico();
        
        if (count($lista) > 0) {
            foreach ($lista as $linha) {
                $obj->setId_med($linha['id_med']);
                $obj->setNome($linha['nome']);
                $obj->setCpf($linha['cpf']);
                $obj->setSenha($linha['senha']);
                $obj->setCns($linha['cns']);
                $obj->setData_nasc($linha['data_nasc']);
                $obj->setSexo($linha['sexo']);
                $obj->setEmail($linha['email']);
                $obj->setTelefone($linha['telefone']);
                $obj->setCnes($linha['cnes']);
                $obj->setCbo($linha['cbo']);
            }
        } else {
            $obj = null;
        }
        return $obj;
    }

    public function incluir($medico)
    {
        $sql = 'insert into medico (id_med,nome,cpf,senha,cns,data_nasc,sexo,email,telefone,cnes,cbo) values (?,?,?,md5(?),?,?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $medico->getId_med());
            $pst->bindValue(2, $medico->getNome());
            $pst->bindValue(3, $medico->getCpf());
            $pst->bindValue(4, $medico->getSenha());
            $pst->bindValue(5, $medico->getCns());
            $pst->bindValue(6, $medico->getData_nasc());
            $pst->bindValue(7, $medico->getSexo());
            $pst->bindValue(8, $medico->getEmail());
            $pst->bindValue(9, $medico->getTelefone());
            $pst->bindValue(10, $medico->getCnes());
            $pst->bindValue(11, $medico->getCbo());
            if ($pst->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
