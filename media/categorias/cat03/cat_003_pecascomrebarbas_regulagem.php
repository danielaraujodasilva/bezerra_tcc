<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>REGULAGEM</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>061_PONTEIRA_DA_ROSCA_ANELA_DE_BLOQUEIO_GASTO.php'><div>PRESSÃO DE INJEÇÃO ALTA</div></a><hr>
			<a href='<?php echo $possiveisSolucoes; ?>026_TEMPERATURA_DO_MATERIAL_ALTA.php'><div>TEMPERATURA DO MATERIAL ALTA</div></a><hr>
			<a href='<?php echo $possiveisSolucoes; ?>027_VELOCIDADE_DE_INJECAO_ALTA.php'><div>VELOCIDADE DE INJEÇÃO ALTA</div></a><hr>
			<a href='<?php echo $possiveisSolucoes; ?>028_FORCA_DE_FECHAMENTO_INSUFICIENTE.php'><div>FORÇA DE FECHAMENTO INSUFICIENTE</div></a><hr>
			<a href='<?php echo $possiveisSolucoes; ?>030_RECALQUE_MAL_RECULADO.php'><div>RECALQUE MAL REGULADO</div></a><hr>
			
            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
