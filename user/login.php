<?php
require_once '../modelo/Conexao.php';
require_once '../dao/DaoMedico.php';
require_once '../modelo/Medico.php';
class Login
{
    public function __construct()
    {
    }
    public function doLogin($user, $senha)
    {
        $senha = md5($senha);
        $sql = 'call login("' . $user . '","' . $senha . '");';
        $id = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if ($pst->execute()) {
                $id = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        if (count($id) > 0) {
            session_start();
            $_SESSION['user'] = "1";
            foreach ($id as $linha) {
                $num = $linha['id'];
                $_SESSION['id_med'] = $num;
            }
            header('Location:../visual/tela_principal.php');
        } else {
            header('Location:verificador.php?login=0');
        }
    }
    public static function getConfigs()
    {
        if (!isset($_SESSION['user']) || $_SESSION['id_med'] == null) {
            header('Location:verificador.php?login=nosession');
        } else {
            $daom = new DaoMedico();
            $medico = new Medico();
            $medico = $daom->Localizar($_SESSION['id_med']);
            return $medico;
        }
    }
}
