<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MOLDE</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>003_AUMENTAR_TEMPERATURA_DO_MATERIAL.php'><div>TEMPERATURA DO MATERIAL BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>009_AUMENTAR_A_TEMPERATURA_DO_MOLDE.php'><div>MOLDE MUITO FRIO</div></a><hr>
            
            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
