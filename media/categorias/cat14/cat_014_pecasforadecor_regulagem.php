<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>REGULAGEM</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>151_TEMPERATURA_DO_MATERIAL_ALTA.php'><div>TEMPERATURA DO MATERIAL ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>152_VELOCIDADE_DA_ROSCA_ALTA.php'><div>VELOCIDADE DA ROSCA ALTA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>153_EXCESSO_DE_CONTRA_PRESSAO.php'><div>EXCESSO DE CONTRA-PRESSÃO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>154_EXCESSO_DE_COLCHAO_OU_ALMOFADA.php'><div>EXCESSO DE COLCHÃO OU ALMOFADA</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
