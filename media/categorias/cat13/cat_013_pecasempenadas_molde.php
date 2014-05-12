<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MOLDE</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>141_TEMPERATURA_DO_MOLDE_ALTA.php'><div>TEMPERATURA DO MOLDE ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>146_MOLDE_EMPENADO.php'><div>MOLDE EMPENADO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>147_EXTRACAO_MAL_PROJETADA.php'><div>EXTRAÇÃO MAL PROJETADA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>148_PECAS_COM_ESPESSURA_DE_PAREDE_DIFERENTE.php'><div>PEÇAS COM ESPESSURA DE PAREDE DIFERENTE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>149_REFRIGERACAO_DESBALANCIADA.php'><div>REFRIGERAÇÃO DESBALANCIADA</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
