<?php include("../../config.php"); ?>
<?php include('../inputs/descricoes.php'); ?>
<?php include('../includes/header.php'); ?>
<?php include('../includes/top.php'); ?>


<div class="content">
    <div class="container" style='margin-bottom: 100px;'>
        <div class="sixteen columns link">

            <div class="tituloDesc"><h3><?php echo $tit_pecaschupadas ?></h3></div>
            <div class="imageContainer"><img src="<?php echo $img_pecaschupadas ?>" alt="" /></div>
            <div class="descricao"><p><?php echo $desc_pecaschupadas ?></p></div>
            <div class="solucoes"><a href="../categorias/cat05/"><button>SOLUÇÕES</button></a></div>

        </div> 
    </div>
</div>



<?php include('../includes/footer.php'); ?>