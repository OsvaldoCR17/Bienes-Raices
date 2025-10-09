<?php 
  require 'includes/funciones.php'; 
  incluirTemplate('header');
?>

    <main class="contenedor seccion">
      
      <h2><?php echo $propiedad['titulo'];?></h2>

      <?php 
        $limite = 1;
        include 'includes/templates/anuncios.php';
      ?>
    </main>

<?php 
  incluirTemplate('footer');
?>