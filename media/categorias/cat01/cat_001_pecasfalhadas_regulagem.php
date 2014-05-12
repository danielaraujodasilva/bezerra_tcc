<?php include("../../../config.php"); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/top.php'); ?>


<div class="content">


    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">
            <h4>REGULAGEM</h4>
            <hr>
            <Br>

            <a href='<?php echo $possiveisSolucoes; ?>001_AUMENTAR_CURSO_DE_SOSAGEM.php'><div>CURSO DE DOSAGEM INSUFICIENTE</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>002_AUMENTAR_PRESSAO_DE_INJECAO.php'><div>PRESSÃO DE INJEÇÃO BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>004_AUMENTAR_VELOCIDADE_DE_INJECAO.php'><div>VELOCIDADE INJEÇÃO BAIXA</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>005_VERIFICAR_O_RECALQUE.php'><div>RECALQUE MAL REGULADO</div></a><hr>
            <a href='<?php echo $possiveisSolucoes; ?>006_AUMENTAR_TEMPO_DE_INJECAO.php'><div>TEMPO DE INJEÇÃO BAIXO</div></a><hr>

            <span class='botaoVoltar' onClick="history.go(-1)">Voltar</span>


        </div>
    </div>

</div>


<?php include('../../includes/footer.php'); ?>
