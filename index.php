<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>
            Quisque massa justo, auctor vel mi in, pellentesque sollicitudin diam. Integer consectetur nisi neque, eget malesuada risus finibus sed. Morbi sapien metus, facilisis in rutrum in, tristique eget est. Praesent ultricies nisl et venenatis molestie. Phasellus
            ornare fringilla nisl ac varius. Ut sodales laoreet egestas. Aliquam dictum augue eget orci laoreet, molestie suscipit massa placerat. Curabitur at efficitur lacus, vel fringilla diam.
        </p>

    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop muted poster="../img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>
        <!--contenedor video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3, JavaScript</h3>
                            <p><i class="fas fa-clock"></i> 16:00</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Germán Denaro Curutchet</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-clock"></i> 20:00</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Germán Denaro Curutchet</p>
                        </div>
                        <a href="#" class="boton float-right">Ver Todos</a>
                    </div>
                    <!--talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser Freelancer</h3>
                            <p><i class="fas fa-clock"></i> 10:00</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologias del Futuro</h3>
                            <p><i class="fas fa-clock"></i> 17:00</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Susan Sanchez</p>
                        </div>
                        <a href="#" class="boton float-right">Ver Todos</a>
                    </div>
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para móviles</h3>
                            <p><i class="fas fa-clock"></i> 17:00</p>
                            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fas fa-user"></i> Harold Garcia</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fas fa-clock"></i> 10:00</p>
                            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fas fa-user"></i> Susan Rivera</p>
                        </div>
                        <a href="#" class="boton float-right">Ver Todos</a>
                    </div>
                </div>
                <!--programa-evento-->
            </div>
            <!--contenedor-->
        </div>
        <!--contenido-programa-->
    </section>
    <!--programa-->
    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen invitado">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen invitado">
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen invitado">
                    <p>Gregorio Sanchez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen invitado">
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen invitado">
                    <p>Harold Garcia</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen invitado">
                    <p>Susan Sanchez</p>
                </div>
            </li>

        </ul>
    </section>

    <div class="contador parallax">
        <div class="contendor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p> Invitados</li>
                <li>
                    <p class="numero"></p> Talleres</li>
                <li>
                    <p class="numero"></p> Días</li>
                <li>
                    <p class="numero"></p> Conferencias</li>
            </ul>
        </div>

    </div>

    <section class="precios">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por Día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los Días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 Días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Donec dapibus tincidunt justo, vitae varius ex pretium at. Phasellus posuere odio nisl, mollis facilisis augue ultricies ac. Morbi eget odio eu ligula fringilla bibendum aliquam molestie arcu.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!-- Testimonial -->
            <div class="testimonial">
                <blockquote>
                    <p>Donec dapibus tincidunt justo, vitae varius ex pretium at. Phasellus posuere odio nisl, mollis facilisis augue ultricies ac. Morbi eget odio eu ligula fringilla bibendum aliquam molestie arcu.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!-- Testimonial -->
            <div class="testimonial">
                <blockquote>
                    <p>Donec dapibus tincidunt justo, vitae varius ex pretium at. Phasellus posuere odio nisl, mollis facilisis augue ultricies ac. Morbi eget odio eu ligula fringilla bibendum aliquam molestie arcu.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!-- Testimonial -->
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter:</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="boton transparente">Registro</a>
        </div>
        <!--Contenido-->
    </div>
    <!--Newsletter-->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="cuenta">
                <li>
                    <p class="numero" id="dias"></p>
                    <p class="tiempo">Días</p>
                </li>
                <li>
                    <p class="numero" id="horas"></p>
                    <p class="tiempo">Horas</p>
                </li>
                <li>
                    <p class="numero" id="minutos"></p>
                    <p class="tiempo">Minutos</p>
                </li>

                <li>
                    <p class="numero" id="segundos"></p>
                    <p class="tiempo">Segundos</p>
                </li>

            </ul>
        </div>
    </section>

    <?php include_once 'includes/templates/footer.php'; ?>

    