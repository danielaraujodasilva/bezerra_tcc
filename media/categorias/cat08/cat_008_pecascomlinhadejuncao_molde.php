<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>MOLDE</h4>
            <hr>
            <Br>
            
            <a href='<?php echo $possiveisSolucoes; ?>085_TEMPERATURA_DO_MOLDE_BAIXA.php'><div>TEMPERATURA DO MOLDE BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>091_ENTRADA_DO_MATERIAL_OU_PONTO_DE_INJECAO_PEQUENO.php'><div>ENTRADA DO MATERIAL OU PONTO DE INJEÇÃO PEQUENO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>092_FALTA_DE_BOLSA_DE_MATERIAL_POCO_FRIO.php'><div>FALTA DE BOLSA DE MATERIAL/POÇO FRIO.</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
