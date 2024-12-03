<div>
    <header>
         <img src="images/biorelais.png" alt="Logo Biorelais">
		<?php include 'vue/vueHaut.php' ;?>
	</header>
    <?php
        $menuProduit->afficherFormulaire();
        echo $itemLienPanier;
    ?>
    
    <footer>
		<?php include 'vue/vueBas.php' ;?>
    </footer>
</div>