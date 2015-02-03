
<section class="SlideShow_principal">
        <article id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                        <li data-target="#miSlide" data-slide-to ="0" class="active"></li>
                        <li data-target="#miSlide" data-slide-to ="1"></li>
                        <li data-target="#miSlide" data-slide-to ="2"></li>
                        <li data-target="#miSlide" data-slide-to ="3"></li>
                </ol>

                <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?= $recursos ?>/img/slide1.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="<?= $recursos ?>/img/slide2.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="<?= $recursos ?>/img/slide1.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="<?= $recursos ?>/img/slide2.jpg" class="adaptar">
                        </div>
                </div>

                <!--
                    PASADORES
                -->
                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left "></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </article>  
    </section>

    <section class="mas-visitados text-center">
        <!--
            TITULO DE CUERPO ARTICULOS
        -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 titulo-index">
                    <h1>Ser autentica es nuestro mayor acierto</h1>
                </div>
            </div>

            <!--
                PASADORES DE SECCIONES
            -->
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <ul class="categorias-index">
                        <li id="primero-categoria"><a href="#">TODOS</a></li>
                        <li><a href="#">MEJOR VENDIDO</a></li>
                        <li id="ultimo-categoria"><a href="#">MÃS VISITADOS</a></li>
                    </ul>

                    <div class="controles-index">
                        <a href="#carousel-productos-index" id="control-prev" data-slide="prev"><span class="glyphicon glyphicon-chevron-left control-left"></span></a>
                        <a href="#carousel-productos-index" data-slide="next"><span class="glyphicon glyphicon-chevron-right control-right"></span></a>
                    </div>
                </div>
            </div>
        </div>

            <!--
                PRODUCTOS
            -->
        <div class="carousel" data-ride="carousel" id="carousel-productos-index">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container listado-productos">
                        <div class="row">
                            <!-- PRODUCTO 1 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto1.jpg"></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-01</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.300</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 2 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto2.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-02</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.450</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 3 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto3.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Gargantilla Mod-01</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.600</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 4 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto prod-oculto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto4.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Gargantilla Mod-02</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.530</span>
                                </div>
                            </div>
                        </div>

                        <div class="row hidden-xs">
                            <!-- PRODUCTO 5 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto5.jpg"></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-03</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.550</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 6 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto6.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-04</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.300</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 7 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto7.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-05</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.400</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 8 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto prod-oculto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto8.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Gargantilla Mod-03</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.450</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container listado-productos">
                        <div class="row">
                            <!-- PRODUCTO 9 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto4.jpg"></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-01</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.300</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 10 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto5.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-02</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.450</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 11 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto8.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Gargantilla Mod-01</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.600</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 12 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto prod-oculto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto7.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Gargantilla Mod-02</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.530</span>
                                </div>
                            </div>
                        </div>

                        <div class="row hidden-xs">
                            <!-- PRODUCTO 13 -->
                            <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto6.jpg"></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-03</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.550</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 14 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto4.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-04</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.300</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 15 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto3.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Pulsera Mod-05</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.400</span>
                                </div>
                            </div>

                            <!-- PRODUCTO 16 -->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?= $recursos ?>/img/producto2.jpg" alt=""></figure></a>
                                    <span class="temporada">Temporada <strong>Septiembre-Octubre</strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda">Gargantilla Mod-03</span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio">Bs.450</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
    </section>
    
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="letritas">
                        <h3>Porque lucir bellas y originales es una ciencia</h3>
                    </div>
                    <div class="formulario-newsletter">
                        <form action="//accesoriosranyelagomez.us10.list-manage.com/subscribe/post?u=6061cbb67fbad5bd115e37b66&amp;id=24ec7451a8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                           
                            <input type="email" name="email" placeholder="@Email" required="required" id="email3">
                            <input type="submit" value="Subscribe" name="subscribe" id="boton-suscribir" onClick="boton_suscribir()">
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="imagen-ciencia">
                        <img src="<?= $recursos ?>/img/img-newsletter.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
