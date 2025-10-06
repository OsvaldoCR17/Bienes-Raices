<?php 
  require 'includes/funciones.php'; 
  incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p>4</p>
              </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nullam scelerisque aliquam odio et faucibus. Nulla rhoncus feugiat eros quis consectetur.
                Morbi neque ex, condimentum dapibus congue et, vulputate ut ligula. 
                Vestibulum sit amet urna turpis. Mauris euismod elit et nisi ultrices, ut faucibus orci tincidunt. Duis a quam nec dui luctus rutrum. 
                Nunc in aliquet nisi, at convallis erat. In hac habitasse platea dictumst.
            </p>
            <p>
                Curabitur ac leo nunc. Vestibulum et mauris vel ante finibus maximus nec ut leo. 
                Integer consectetur luctus nisi, a mollis justo sodales nec. Donec at felis vel ligula facilisis bibendum. 
                Proin a dolor vel est tempor dignissim. Phasellus euismod libero in neque molestie et elementum arcu convallis. 
                Quisque pulvinar, justo at imperdiet gravida, urna ligula hendrerit turpis, eget fringilla sapien justo nec nisi.
            </p>
    </main>

<?php 
  incluirTemplate('footer'); 
?>