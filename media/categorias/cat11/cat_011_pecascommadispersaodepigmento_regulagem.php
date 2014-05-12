<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>REGULAGEM</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>119_CONTRA_PRESSAO_BAIXA.php'><div>CONTRA-PRESSÃO BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>120_VELOCIDADE_DA_ROSCA_BAIXA.php'><div>VELOCIDADE DA ROSCA BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>121_TEMPERATURA_DO_MATERIAL_BAIXA.php'><div>TEMPERATURA DO MATERIAL BAIXA</div></a><hr>
       
            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
