
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
                            <img src="<?= $recursos ?>/img/slide3.jpg" class="adaptar">
                        </div>
                        <div class="item">
                            <img src="<?= $recursos ?>/img/slide4.jpg" class="adaptar">
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
                        <li id="m-j"><a href="#">MÁS VENDIDO</a></li>
                        <li id="ultimo-categoria"><a href="#">MÁS NUEVO</a></li>
                    </ul>

                    <div class="controles-index">
                        <a href="#carousel-productos-index" id="control-prev" data-slide="prev"><span class="glyphicon glyphicon-chevron-left control-left"></span></a>
                        <a href="#carousel-productos-index" data-slide="next"><span class="glyphicon glyphicon-chevron-right control-right"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <?php

         $total = $productos->num_rows(); 


         ?>
        <div class="carousel slide container" data-ride="carousel" id="carousel-productos-index">
            <div class="carousel-inner col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="item active">
                    <div class="container listado-productos">
                        <div class="row">
                            <!-- PRODUCTO 1 -->
                               
                             <?php 
                                $i = 0;
                                for($i =0; $i < 8; $i++): 
                                
                                if($i % 4 == 0){
                                    echo "</div>";
                                    echo "<div class=\"row hidden-xs\">";
                                }
                                $row = $productos->row($i);
                             ?>

                            
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?=$recursos.$row->imagen?>"></figure></a>
                                    <span class="temporada">Temporada <strong><?= $row->temporada?></strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda"><?= $row->tipo ?></span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio"><?= $row->precio ?></span>
                                </div>
                            </div>
                            <?php endfor; ?>                                         
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container listado-productos">
                        <div class="row">
                              
                             <?php 
                                $i = 0;
                                for($i =8; $i < 16; $i++): 
                         
                                if($i % 4==0){
                                    echo "</div>";
                                    echo "<div class=\"row hidden-xs\">";
                                }
                                 $row = $productos->row($i);
                                
                             ?>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto">
                                <div class="empaquetado">
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                    <a href="#"><figure><img src="<?=$recursos.$row->imagen?>"></figure></a>
                                    <span class="temporada">Temporada <strong><?= $row->temporada?></strong></span>
                                    <div class="prenda-stock">
                                        <span class="prenda"><?= $row->tipo ?></span>
                                        <span class="stock-etiqueta">STOCK</span>
                                    </div>
                                    <span class="precio"><?= $row->precio ?></span>
                                </div>
                            </div>
                             <?php endfor; ?>  
                           

                           
                          
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
                            <input type="submit" value="SUSCRIBETE" id="boton-suscribir" onClick="boton_suscribir()">
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

    <!-- IR AL CIELO -->
    <span class="ir-arriba glyphicon glyphicon-chevron-up"></span>