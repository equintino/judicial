<style>
    .gravando{
        margin: 15% auto;
    }
</style>
<?php
    function redirecionar($tempo,$url, $mensagem){
        header("Refresh: $tempo; url=$url");
        echo "<div class=gravando>";
        echo '<center>'.$mensagem.  '</center><br/>';
        echo '<center><img src="../web/img/borracha.gif" alt="" height=50 /><br/><br/><tt><i>excluindo...</i></tt></center>';
        echo "</div>";
    }
//print_r($_GET);    
$judi = Utils::getJudiByGetId2();
$tabela=$_GET['tabela'];

$dao = new JudiDao();
$dao->delete2($judi->getId(),$tabela);
//echo "<pre>";
//print_r($dao);die;
Flash::addFlash('RNC excluído com sucesso.');


redirecionar('1','index.php?page=acaoJudicial&act=ver','AGUARDE');
//Utils::redirect('list', array('status' => $todo->getStatus()));

?>
