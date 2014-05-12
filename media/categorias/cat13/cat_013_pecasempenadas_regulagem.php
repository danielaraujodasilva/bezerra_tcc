<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>REGULAGEM</h4>
            <hr>
            <Br>
                	
                	
            <a href='<?php echo $possiveisSolucoes; ?>140_TEMPERATURA_DO_MATERIAL_ALTA.php'><div>TEMPERATURA DO MATERIAL ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>142_TEMPO_DE_RESFRIAMENTO_BAIXO.php'><div>TEMPO DE RESFRIAMENTO BAIXO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>143_PRESSAO_DE_INJECAO_ALTA.php'><div>PRESSÃO DE INJEÇÃO ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>144_PRESSAO_DE_RECALQUE_ALTA.php'><div>PRESSÃO DE RECALQUE ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>145_VELOCIDADE_DE_EXTRACAO_ALTA.php'><div>VELOCIDADE DE EXTRAÇÃO ALTA</div></a><hr>
           
            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
