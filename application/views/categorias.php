    <section class="titulo-principal-categoria text-center">
        <h2>Temporada <?= substr($this->uri->slash_segment(4) , 0,-1)?></h2>
    </section>

    <section class="titulo-categoria text-center">
        <!--
            TITULO DE LA CATEGORIA
        -->
        <div class="container">

                    <!--
                PASADORES DE SECCIONES
            -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="categorias-categorias">
                        <li id="primero-categoria"><a href="<?= site_url('principal').$this->uri->slash_segment(2, 'leading').$this->uri->slash_segment(3, 'leading').$this->uri->slash_segment(4, 'leading')?>">TODOS</a></li>
                        <li><a href="<?= site_url('principal').$this->uri->slash_segment(2, 'leading').$this->uri->slash_segment(3, 'leading').$this->uri->slash_segment(4, 'leading').'/300'?>">Hasta 300Bs</a></li>
                        <li><a href="<?= site_url('principal').$this->uri->slash_segment(2, 'leading').$this->uri->slash_segment(3, 'leading').$this->uri->slash_segment(4, 'leading').'/300/700'?>">Entre 300Bs y 700Bs</a></li>
                        <li id="ultimo-categoria"><a href="<?= site_url('principal').$this->uri->slash_segment(2, 'leading').$this->uri->slash_segment(3, 'leading').$this->uri->slash_segment(4, 'leading').'/700/1500'?>">Hasta 1500Bs</a></li>
                    </ul>
                </div>
            </div>
        </div>

            
            

            <!--
                PRODUCTOS
            -->
          <?php
            $total = $productos->num_rows(); 
            if($total == 0){
                echo "<h1> No hay disponibilidad en este momento </h1>";
            }
            $i = 0;
            for($i =0; $i < $total; $i++):
            $row = $productos->row($i);
         
            if($i % 4 == 0){
                echo "</div>";
                echo "<div class=\"row \">";
            }

         ?>


            
            

                
        <div class="container listado-productos productos-group-cat">
            <div class="row">
                <!-- PRODUCTO 1 -->
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 producto producto-categoria">
                    <div class="empaquetado">
                        <?php if($row->nuevo == 1): ?>
                            <div class="etiqueta-nuevo">
                                <span>NUEVO</span>
                            </div
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


               

        <nav>
          <ul class="pagination">
            <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
          </ul>
        </nav>

    </section>
    <!-- IR AL CIELO -->
    <span class="ir-arriba glyphicon glyphicon-chevron-up"></span>