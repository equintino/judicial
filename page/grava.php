<style>
    .gravando{
        margin: 20% auto;
        #position: absolute;
        #top: 50px;
        #left: 50px;
    }
</style>
<?php
    function redirecionar($tempo,$url, $mensagem){
        header("Refresh: $tempo; url=$url");
        echo "<div class=gravando>";
        echo '<center>'.$mensagem.  '</center><br/>';
        echo '<center><img src="../web/img/escrevendo.gif" alt="" height=50 /><br/><br/><tt><i>gravando...</i></tt></center>';
        echo "</div>";
    }
    $errors = array();
    $judi = null;
    $edit = array_key_exists('id', $_GET);
    
    
    if ($edit) {
        $judi = Utils::getOdbcByGetId();
    } else {
        // set defaults
        $judi = new Judi();
        //$odbc->setPriority(Todo::PRIORITY_MEDIUM);
        $alteracao = new DateTime("+0 day", new DateTimeZone('America/Sao_Paulo'));
        $alteracao=(mktime(0,date("H")));
        //$dueOn->setTime(0, 0, 0);
        $judi->setAlteracao($alteracao);
        //echo "<pre>";
        //print_r($judi);die;
        //$odbc->setEliminacao($todo->getCreatedOn());
        //$todo->setEliminacao_novo($todo->getCreatedOn());
        //$odbc->setEficazData($odbc->getCreatedOn());
    }
    
    //echo "<pre>";
    //print_r($_POST);
    $judi->setNumero_CNJ_Antigo($_POST['Numero_CNJ_Antigo']);
    $judi->setNatureza($_POST['Natureza']);
    $judi->setUF($_POST['UF']);
    $judi->setParte_contraria($_POST['Parte_contraria']);
    $judi->setSegurado($_POST['Segurado']);
    $judi->setVlr_deferido($_POST['Vlr_deferido']);
    $judi->setVlr_da_causa($_POST['Vlr_da_causa']);
    $judi->setVlr_condenacao($_POST['Vlr_condenacao']);
    $judi->setHonorarios($_POST['Honorarios']);
    $judi->setVlr_certidao_de_credito($_POST['Vlr_certidao_de_credito']);
    $judi->setAba($_POST['Aba']);
    @$judi->setid($_POST['id']);
    //@$judi->setAlteracao($_POST['Alteracao']);
    //print_r($judi);die;
    
    $Tododao=new TodoDao();
    $Judidao=new JudiDao();
    
    //print_r($judi);die;
    
    $Judidao->saveJd($judi);
    
    //print_r(mysql_affected_rows()); 
    redirecionar('1','index.php?page=credito2&act=cadastro','AGUARDE');
    //echo "<img src='../web/carregando.gif' />";
    //echo "Cadastro realizado com sucesso";
    //sleep(10);
    //echo "<script>history.go(-1)</script>";
    die;
?>

