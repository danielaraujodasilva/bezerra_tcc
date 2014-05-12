<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MÁQUINA</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>007_DESOBSTRUIR_O_BICO_DE_INJECAO.php'><div>BICO ENTUPIDO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>010_VERIFICAR_RESISTENCIA_ELETRICA.php'><div>RESISTÊNCIA ELÉTRICA QUEIMADA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>011_VERIFICAR_A_CAUSA_DO_VAZAMENTO_E_ELIMINA_LO.php'><div>VAZAMENTO ENTRE O BICO DE INJEÇÃO E A BUCHA DO MOLDE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>012_TROCAR_BICO_DE_INJECAO_COM_DIAMETRO_MAIOR.php'><div>DIÂMETRO DO FURO DO BICO PEQUENO</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>

 
        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
