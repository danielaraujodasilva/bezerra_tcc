<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MOLDE</h4>
            <hr>
            <Br>

            
            <a href='<?php echo $possiveisSolucoes; ?>009_AUMENTAR_A_TEMPERATURA_DO_MOLDE.php'><div>TEMPERATURA DO MOLDE BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>020_VAZAMENTO_DE_AGUA_NO_MOLDE.php'><div>VAZAMENTO DE ÁGUA NO MOLDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>021_GASES_DO_MATERIAL_NA_CAVIDADE_DO_MOLDE.php'><div>GASES DO MATERIAL NA CAVIDADE DO MOLDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>022_FALTA_DE_POLIMENTO_NA_CAVIDADE.php'><div>FALTA DE POLIMENTO NA CAVIDADE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>023_MOLDE_CONDENSANDO.php'><div>MOLDE CONDENSANDO</div></a><hr>
            
            
            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
