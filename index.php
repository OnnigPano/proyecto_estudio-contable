
<?php include_once 'includes/templates/header.php'; ?>


    <main>

        <div class="contenido">
          <section class="seccion">
            <h2>El Estudio</h2>
            <p>Nuestro estudio contable ofrece una amplia gama de servicios en forma personalizada para brindar la solución a las necesidades y objetivos de cada cliente con alto nivel de responsabilidad y calidad.</p>
            <p>Nos especializamos en personas físicas y jurídicas en sus diversas ramas de la actividad comercial e industrial ayudando a la organización y crecimiento de su negocio.</p>
            <p>Nuestra frecuente capacitación en materia contable e impositiva nos permite responder a los constantes cambios en materia tributaria, fiscal y societaria orientando al cliente e impulsarlo en sus objetivos y crecimiento con la tranquilidad que le da nuestro respaldo.</p>

            
            
          </section>

        </div><!--Fin contenido-->

        <div class="contenido imagen-fondo">
          <div class="contenedor-bloques clearfix">
            <div class="bloque">
              <h3>Monotributistas</h3>
            </div>
            <div class="bloque">
              <h3>Asesoramiento Impositivo</h3>
            </div>
            <div class="bloque">
              <h3>Servicios contables</h3>
            </div>
            <div class="bloque">
              <h3>Asesoramiento societario</h3>
            </div>
            <div class="bloque">
              <h3>Liquidación de sueldos y cargas sociales</h3>
            </div>
            <div class="bloque">
              <h3>Atención personalizada</h3>
            </div>
          </div><!--Fin contenedor-bloques-->
        </div>

        <div class="contenido seccion">
            <ul class="servicios">
              <ul class="servicio">
                <h3>Monotributistas</h3>
                <li>Armado de carpeta</li>
                <li>Adhesión, recategorización, planes de pago de deudas por monotributo.</li>
                <li>Realización de declaraciones juradas</li>
                <li>Planes de pago de deudas por monotributo.</li>
              </ul>

              <ul class="servicio">
                <h3>Impuestos</h3>
                <li>Asesoramiento y planeamiento integral impositivo. Análisis del encuadre impositivo más conveniente para su negocio.</li>
                <li>Control de cumplimiento de normas referentes a retenciones y formales sobre facturación, registración, información y procedimiento fiscal.</li>
                <li>Asesoramiento e información permanente sobre modificaciones y novedades impositivas. Atención de inspecciones y representación ante los organismos de contralor.</li>
              </ul>

              <ul class="servicio">
                <h3>Servicios Contables</h3>
                <li>Asesoramiento e información permanente sobre modificaciones y novedades impositivas. Atención de inspecciones y representación ante los organismos de contralor.</li>
                <li>Trabajos de contabilidad general con procesamiento de datos en el Estudio o en la empresa</li>
              </ul>

              <ul class="servicio">
                <h3>Sociedades</h3>
                <li>Constitución, modificación y adecuación de sociedades, asociaciones civiles y fundaciones.</li>
                <li>Elección del tipo societario acorde al emprendimiento y ponderando el impacto impositivo tanto en la sociedad como en sus integrantes.</li>
                <li>Confección de Libros Legales</li>
              </ul>

              <ul class="servicio">
                <h3>Laboral y Previsional</h3>
                <li>Liquidaciones de sueldos y jornales y confección de recibos de haberes, Libro especial de sueldos y jornales, y Declaraciones juradas y boletas para el pago de las cargas sociales de la empresa.</li>
                <li>Control del pago de las categorías adecuadas de jubilaciones de Autónomos.</li>
                <li>Categorización y empadronamiento en el régimen nacional de trabajadores autónomos.</li>
                <li>Atención de inspecciones y trámites ante los organismos oficiales</li>
              </ul>

            </ul>
        </div>

        <div id="map" class="contenido">
          <h2>Ubicación</h2>
          <div id="mapa">
          

          </div>
        </div><!--Fin contenido-->

        <div class="contenido contenedor-cita">
          <h2>El Equipo</h2>
          <ul class="citas">
            <li class="cita">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sint dolore nemo quidem natus harum quisquam et asperiores eveniet eum aspernatur.</p>
                  <img src="img/invitado1.jpg" alt="imagen cita">
                  <cite>Dr. Garo Alexis Panossian</cite>
                </blockquote>
            </li>
            <li class="cita">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sint dolore nemo quidem natus harum quisquam et asperiores eveniet eum aspernatur.</p>
                  <img src="img/invitado3.jpg" alt="imagen cita">
                  <cite>Dr. Ruber Daniel Ayoroa</cite>
                </blockquote>
            </li>
            <li class="cita ">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sint dolore nemo quidem natus harum quisquam et asperiores eveniet eum aspernatur.</p>
                  <img src="img/invitado5.jpg" alt="imagen cita">
                  <cite>Dr. Juan Carlos Baños</cite>
                </blockquote>
            </li>
          </ul> 
        </div><!--Fin contenedor-cita-->  


      
        <div id="formulario" class="contenido">
          <section class="seccion">
            <h2>Contacto</h2>
            <div class="contenedor-formulario clearfix">
                <form id="formulario_consulta" autocomplete="on" action="#">
                  <div class="campo">
                      <label for="nombre">Nombre: </label>
                      <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
                  </div>
                  <div class="campo">
                      <label for="telefono">Teléfono: </label>
                      <input type="tel" id="telefono" name="telefono" placeholder="Ingrese un teléfono" required>
                  </div>
                  <div class="campo">
                      <label for="email">E-mail: </label>
                      <input type="email" name="email" id="email" placeholder="email@example.com" required>
                  </div>    
                  <div id="error" class="campo">
                  </div>
                  <div id="error2" class="campo">
                  </div>
                  <div class="campo">
                      <label for="consulta">Su Consulta:</label>
                      <textarea name="consulta" id="consulta" cols="30" rows="10" placeholder="Ingrese su consulta en este campo"></textarea>
                  </div>
                  <div class="campo button">
                      <input type="submit" id="boton" name="boton" value="ENVIAR">
                  </div>    
                </form>
            </div><!--Fin contenedor-formulario-->
          </section> 
        </div><!--Fin contenido-->
  
        <div id="scrollup">
            <a onclick="$('html').animatescroll({scrollSpeed:2000,easing:'easeOutSine'});"><i class="fas fa-chevron-circle-up"></i></a>
        </div>
    </main>

 <?php include_once 'includes/templates/footer.php'; ?>