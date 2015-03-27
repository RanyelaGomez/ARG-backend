

        <!-- Franja color -->
    
    <section class="franja-no-encontrado"> </section>
    
    <!--
        MENSAJE
    -->
    <section class="section-mensaje-noencontrado">
        <div class="container">        
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 contenedor-mensaje">
                    <h3 id="lo-sentimos">Felicidades, <br>su solicitud de compra ha sido procesada satisfactoriamente</h3>
                </div>
            </div>
        </div>

    </section>

    <!--
        RECOMENDADOS
    -->
    <section class="productos-recomendados hidden-xs">
        <div class="container">
            <div class="row">
                <!--
                    TITULO RECOMENDADOS
                -->
                <div class="col-md-12 col-lg-12">
                    <div class="recomendados-titulo">
                        <span>Recomendados</span>
                    </div>
                    
                    <div class="controles-recomendados">
                        <a href="#carousel-recomendados-producto" data-slide="prev"><span class="glyphicon glyphicon-chevron-left control-left"></span></a>
                        <a href="#carousel-recomendados-producto" data-slide="next"><span class="glyphicon glyphicon-chevron-right control-right"></span></a>
                    </div>
                </div>
            </div>

            <!--
                GALERIA PRODUCTOS
            -->
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
                                <?php if($row->nuevo == 1): ?>
                                    <div class="etiqueta-nuevo">
                                        <span>NUEVO</span>
                                    </div>
                                <?php endif; ?>
                                    <a href="<?= site_url('principal/producto/'.$row->codigo)?>"><figure><img src="<?=$recursos.$row->imagen?>"></figure></a>
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

    <!-- IR AL CIELO -->
    <span class="ir-arriba glyphicon glyphicon-chevron-up"></span>  
  </body>