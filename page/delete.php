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
    
$judi = Utils::getJudiByGetId();

$dao = new JudiDao();
$dao->delete($judi->getId());
Flash::addFlash('RNC excluído com sucesso.');


redirecionar('1','index.php?page=credito&act=ver','AGUARDE');
//Utils::redirect('list', array('status' => $todo->getStatus()));

?>
