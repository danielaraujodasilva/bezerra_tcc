<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MÁQUINA</h4>
            <hr>
            <Br>

                 <a href='<?php echo $possiveisSolucoes; ?>126_RELACAO_L_D_INADEQUADA.php'><div>RELAÇÃO L/D INADEQUADA</div></a><hr>
                 <a href='<?php echo $possiveisSolucoes; ?>127_TAXA_DE_COMPRESSAO_DA_ROSCA_INADEQUADA.php'><div>TAXA DE COMPRESSÃO DA ROSCA INADEQUADA</div></a><hr>
                 <a href='<?php echo $possiveisSolucoes; ?>128_FALTA_DE_ZONA_DE_MISTURA.php'><div>FALTA DE ZONA DE MISTURA</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
