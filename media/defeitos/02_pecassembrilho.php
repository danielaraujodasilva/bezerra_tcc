<?php include("../../config.php"); ?>
<?php include('../includes/header.php'); ?>
<?php include('../includes/top.php'); ?>

<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>Possíveis causas.</h4>
            <Br>


            <a href='<?php echo $possiveisSolucoes; ?>013_TEMPERATURA_DO_MOLDE_BAIXA.php'><div>TEMPERATURA DO MOLDE BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>014_TEMPERATURA_DO_MATERIAL_BAIXA.php'><div>TEMPERATURA DO MATERIAL BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>015_VELOCIDADE_DE_INJECAO_BAIXA.php'><div>VELOCIDADE DE INJEÇÃO BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>016_PRESSAO_DE_INJECAO_BAIXA.php'><div>PRESSÃO DE INJEÇÃO BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>017_VELOCIDADE_DA_ROSCA_BAIXA.php'><div>VELOCIDADE DA ROSCA BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>018_UMIDADE_NO_MATERIAL.php'><div>UMIDADE NO MATERIAL</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>019_MATERIAL_COM_MELT_INDEX_MENOR_QUE_O_PADRAO.php'><div>MATERIAL COM MELT INDEX MENOR QUE O PADRÃO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>020_VAZAMENTO_DE_AGUA_NO_MOLDE.php'><div>VAZAMENTO DE ÁGUA NO MOLDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>021_GASES_DO_MATERIAL_NA_CAVIDADE_DO_MOLDE.php'><div>GASES DO MATERIAL NA CAVIDADE DO MOLDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>022_FALTA_DE_POLIMENTO_NA_CAVIDADE.php'><div>FALTA DE POLIMENTO NA CAVIDADE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>023_MOLDE_CONDENSANDO.php'><div>MOLDE CONDENSANDO</div></a><hr>
            
            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../includes/footer.php'); ?>
