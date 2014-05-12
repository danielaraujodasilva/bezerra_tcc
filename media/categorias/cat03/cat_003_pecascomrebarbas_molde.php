<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MOLDE</h4>
            <hr>
            <Br>
            
            <a href='<?php echo $possiveisSolucoes; ?>024_SUJEIRA_NO_MOLDE.php'><div>SUJEIRA NO MOLDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>029_TEMPERATURA_DO_MOLDE_ALTA.php'><div>TEMPERATURA DO MOLDE ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>035_MOLDE_AMSSADO.php'><div>MOLDE AMASSADO</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
