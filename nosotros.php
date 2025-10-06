<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
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
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
      <h1>Más sobre nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
            consequatur, sed, fugit culpa a, nesciunt placeat error assumenda
            dolore mollitia perspiciatis cum veritatis dolores eaque maxime at
            harum? Incidunt, porro.
          </p>
        </div>

        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
            consequatur, sed, fugit culpa a, nesciunt placeat error assumenda
            dolore mollitia perspiciatis cum veritatis dolores eaque maxime at
            harum? Incidunt, porro.
          </p>
        </div>

        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
            consequatur, sed, fugit culpa a, nesciunt placeat error assumenda
            dolore mollitia perspiciatis cum veritatis dolores eaque maxime at
            harum? Incidunt, porro.
          </p>
        </div>
      </div>
    </section>

<?php 
  include 'includes/templates/footer.php'; 
?>