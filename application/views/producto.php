
    
    <section class="titulo-principal-categoria text-center">
        <h2>Temporada <?= $producto->temporada?></h2>
    </section>

    <section class="detalles-producto">
        
        <div class="container">
            <div class="row Producto-contenido">

                <!--
                    IMAGENES PRINCIPALES
                -->
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <article id="slide-detalles-producto" class="carousel slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1 col-lg-1" id="malditas-columnas-caga-anchos">
                                    <ol class="carousel-indicators" id="indicators-productos">
                                    <?php 
                                            for($i =0; $i < 4; $i++):
                                                $row = $imagenes->row($i);
                                                if($i == 0 ):?>   <li data-target="#slide-detalles-producto" data-slide-to ="<?= $i ?>" class="active"> <?php
                                                else: ?> <li data-target="#slide-detalles-producto" data-slide-to = "<?= $i ?>"><?php
                                                endif;

                                        ?>
                                       
                                            <img src="<?=$recursos.$row->imagen?>" >
                                        </li>                                                                     
                                         <?php endfor; ?>
                                       
                                    </ol>
                                </div>

                               

                                <div class="col-md-4 col-lg-4">
                                    <div id="imagenes-ppal-detalles" class="carousel-inner">
                                       
                                        <?php 
                                            for($i =0; $i < 4; $i++):
                                                $row = $imagenes->row($i);
                                                if($i == 0 ):?>  <div class="item active"> <?php
                                                else: ?> <div class="item"> <?php
                                                endif;

                                        ?>
                                            <img src="<?=$recursos.$row->imagen?>" class="adaptar">
                                        </div>
                                    <?php endfor; ?>
                                       
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>  
                </div>

                <!--
                    Detalles de la información
                -->
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class=" datos-generales-producto" id="descripcion">
                            <div class="datos-articulo-carrito" >
                              <span><strong>Temporada:</strong> <?= $producto->temporada?></span>
                              <span><strong>Modelo:</strong> <?= $producto->tipo?></span>
                              <span ><strong>Precio:</strong><strong id="precio-carrito"> <?= $producto->precio?></strong></span>
                              <span>Cantidad: </span>
                                 <form method="POST" action="<?=site_url('principal/carrito')?>">
                                    <!-- SUMADOR -->
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn data-dwn">
                                        <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                    </span>
                                    <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-unidades" name="cantidad">
                                    <span class="input-group-btn data-up">
                                        <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                    </span>
                                </div>  
                                <!-- FIN SUMADOR -->                        
                            </div> 
                           
                            <div class="botones-producto-detalles">
                                   
                                        
                                        <button type="submit" name="producto" value="<?= $producto->codigo ?>" class="btn btn-primary" id="agregar-al-carrito"><img src="<?=$recursos?>/img/agregar-al-carrito-icon.png" id="icon-agregar-carrito" >Agregar al carrito</button>
                                    </form>
                                    <button class="btn btn-primary" data-toggle="modal" data-target=".modal-comprar" id="boton-comprar">Comprar</button>
                                    
                                    <!--
                                      MODAL: COMPRAR - TIPO DE PAGO 
                                    -->

                                    <div class="modal fade modal-comprar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-ingresar">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-right cerrar-ventana" data-dismiss="modal" id="boton-cerrar-modal">Cerrar</button>
                                            </div>

                                            <div class="titulo-compra">
                                              <span id="compra-title"><?= $this->session->userdata('nombre')?>, confirma tu compra</span>
                                            </div>

                                            <div class="row">
                                                  <div class="col-sm-5 col-md-5 text-center">
                                                      <div class="imagen-producto-comprar">
                                                          <figure><img src="<?=$recursos.$producto->imagen?>" alt=""></figure>
                                                          <span>Temporada <?=$producto->temporada?><br><?=$producto->tipo?></span>
                                                          <span id="precio-comprar-modal">Bs.F. <?= $producto->precio?></span>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-7 col-md-7">
                                                    <span class="ola-ke-ase">Cantidad:</span>
                                                    <div class="cantidad-ventana-comprar">
                                                        
                                                        <!-- SUMADOR -->
                                                        <div class="input-group number-spinner">
                                                            <span class="input-group-btn data-dwn">
                                                                <button class="btn btn-default btn-info ke-ase-dwn" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                            </span>
                                                            <input type="text" class="form-control text-center" value="1" min="1" max="40" id="sumador-modal-producto">
                                                            <span class="input-group-btn data-up">
                                                                <button class="btn btn-default btn-info ke-ase-up" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                            </span>
                                                        </div>  
                                                        <!-- FIN SUMADOR -->  
                                                    </div>

                                                    <div class="email-ventana-comprar">
                                                        <span id="email-title">Email:</span>
                                                        <span id="correo-usuario-comprar">comandos@comandosgroup.com.ve</span>
                                                    </div>

                                                    <div class="botones-confirmar-compra">
                                                        <button>Pagar con MercadoPago</button>
                                                        <button>Confirmar Compra</button>
                                                    </div>

                                                    
                                                  </div>
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                    <!-- FIN COMPONENTE MODAL -->
                            </div>
                    </div>
                    <div class="follow-producto text-center">
                        <div class="titulo-sociales-producto">
                            <span>¿Te gustó? <br> ¡Compartelo en las redes sociales!</span>
                        </div>
                        
                        <div id="facebook-producto">
                            <a href="#"><img src="<?=$recursos?>/img/facebook-icon-producto.png" ><span>Compartir</span></a>
                            
                        </div>
                        
                        <div id="twitter-producto">
                            <a href="#"><img src="<?=$recursos?>/img/twitter-icon-producto.png" ><span>Twittear</span></a>
                            
                        </div>
                        <div id="google-producto">
                            <a href="#"><img src="<?=$recursos?>/img/google-icon-producto.png"><span>Compartir</span></a>
                            
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

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

         $total = $recomendados->num_rows(); 


         ?>


            <div class="carousel slide" data-ride="carousel" id="carousel-recomendados-producto">
                <div class="carousel-inner col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="item active">
                        <div class="container listado-productos">
                            <div class="row">

                            <?php 
                                $i = 0;
                                for($i =0; $i < 4; $i++): 
                                
                              
                                $row = $recomendados->row($i);
                             ?>
                                <!-- PRODUCTO 1 -->
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <div class="etiqueta-nuevo">
                                            <span>NUEVO</span>
                                        </div>
                                        <a href="<?= site_url('principal/producto/'.$row->codigo)?>"><figure><img src="<?=$recursos.$row->imagen?>"></figure></a>
                                        <span class="temporada">Temporada <strong><?= $row->temporada?></strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda"><?= $row->tipo?></span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.<?=$row->precio?></span>
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
                                for($i =4; $i < 8; $i++): 
                                
                              
                                $row = $recomendados->row($i);
                             ?>
                       
                              
                                <div class="col-sm-3 col-md-3 col-lg-3 producto">
                                    <div class="empaquetado">
                                        <div class="etiqueta-nuevo">
                                            <span>NUEVO</span>
                                        </div>
                                        <a href="<?= site_url('principal/producto/'.$row->codigo)?>"><figure><img src="<?=$recursos.$row->imagen?>"></figure></a>
                                        <span class="temporada">Temporada <strong>Julio-Agosto</strong></span>
                                        <div class="prenda-stock">
                                            <span class="prenda">Pulsera Mod-01</span>
                                            <span class="stock-etiqueta">STOCK</span>
                                        </div>
                                        <span class="precio">Bs.<?= $row->precio?></span>
                                    </div>
                                </div>
                                  <?php endfor; ?> 

                              
                            </div>         
                        </div>
                    </div>
                </div>
            </div>               
        </div>
    </section> 

    <!-- IR AL CIELO -->
    <span class="ir-arriba glyphicon glyphicon-chevron-up"></span>      

  </body>

