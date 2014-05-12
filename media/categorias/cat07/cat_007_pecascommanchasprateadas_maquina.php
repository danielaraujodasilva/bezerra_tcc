<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MÁQUINA</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>081_PECA_PEQUENA_MAQUINA_GRANDE.php'><div>PEÇA PEQUENA / MÁQUINA GRANDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>177_PIROMETRO_MAL_AFERIDO.php'><div>PIRÔMETRO MAL AFERIDO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>083_CABO_TERMOPAR_SOLTO.php'><div>CABO TERMOPAR SOLTO</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
