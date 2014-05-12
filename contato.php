<?php include("config.php"); ?>
<?php include('media/includes/header.php'); ?>
<?php include('media/includes/top.php'); ?>

<div class="content">


    <div class="container">
        <div class="sixteen columns">
            
            <form id="form1" name="form1" method="post" action="envia.php">
            <fieldset id="user-details">    
                <label for="name">Nome:</label>
                <input type="text" name="nomeremetente" value="" id="nome" style="width:90%;" /> 
                <label for="email">E-mail:</label> 
                <input type="email" name="emailremetente" value=""  id="email"  style="width:90%;" /> 
                <label for="message">Mensagem:</label> 
                <textarea name="mensagem" rows="0" cols="0"  id="mensagem" style="width:90%;"></textarea> 
                <input type="submit" value="Enviar Mensagem!" name="Submit" class="submit"/>        
            </fieldset><!-- end user-message -->
        </form>
            
        </div>
    </div>

</div>


<?php include('media/includes/footer.php'); ?>
