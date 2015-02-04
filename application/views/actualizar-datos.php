
    <div class="login-body">

      <article class="container container-login">
        <div class="row ">
          <!-- PESTAÑAS "Actualizar Datos" y "Cambiar contraseña" -->
          <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tabbable tabs">
              <ul id="top-bar" class="nav nav-tabs nav-justified">
                <li class="active"><a href="<?= site_url('principal/actualizar') ?>" data-toggle="tab">Actualizar Datos</a></li>
                <li><a href="#recover-password-perfil" data-toggle="tab">Cambiar Contraseña</a></li>
              </ul>
            </div>             

            <section class="tab-content">

              <div id="actualizar-datos" class="tab-pane active">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2 Contenedor-General">
                          <div class="titulo-formulario">
                            <span>Si miras campos <strong>bloqueados</strong> es porque estas registrado por Redes Sociales</span>
                          </div>
                          <div class="subtitulo-formulario">
                            <span>*Todos los campos son obligatorios</span>
                          </div>

                          <div class="formulario">
                          <?php
                          if(isset($ex->email)){
 
                         echo form_open('principal/actualizar',array('class'=>'formulario','role'=>'form'));
                        ?>
                          <div class="container">
                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                      <span>Nombre</span>
                                                  </div>                              
                                              </div>

                          <?php

    echo '<div class="col-xs-9 col-sm-9 col-md-9">'.form_label(array('class'=>'col-xs-9 col-sm-9 col-md-9')).form_input(array('name'=>'nombre','id'=>'first-name','value'=>$ex->nombre,'class'=>'col-xs-9 col-sm-9 col-md-9')).'</div>';
  
    
    ?>


                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                      <span>Apellido</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="text" name="apellido" required="required" placeholder="<?php echo  $user['apellido']; ?>" id="family-name">
                                              </div>
                                        </div>


                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                      <span>Teléfono</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="phone" name="phone" required="required" placeholder=" " id="phone">
                                              </div>
                                        </div>


                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                    <span>Documento</span>
                                                  </div>                                            
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 ">
                                                  <div class="seccion-documento">                                                
                                                      <select id="documento" name="doc">
                                                        <option value="">C.I</option>
                                                        <option value="opc2">R.I.F</option>                                                  
                                                      </select>

                                                      <select id="documento2" name="doc2">
                                                        <option value="">V</option>
                                                        <option value="sex1">E</option>
                                                      </select>

                                                      <input type="text" name="documento-identidad" required="required" placeholder=" " id="documento-identidad">
                                                  </div>
                                              </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-8">
                                                <div class="btn-inscripcion">
                                                    <input type="submit" value="Actualizar" id="boton-inscribirme" onClick="boton_inscribirme()">
                                                </div>
                                            </div>   
                                        </div>
                                         <?php echo form_close(); ?>
                                  </div>
                            } 
                          </div> 
                              
                      </div>
                  </div>
              </div>

              

              <div id="recover-password-perfil" class="tab-pane">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2 Contenedor-General">
                          <div class="titulo-formulario">
                            <span>Cambia tu contraseña</span>
                          </div>

                          <div class="formulario">
                            <form action="inc/procesaformulario.php" method="POST">
                                    <div class="container">
                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                      <span>Email</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="email" name="email"  required="required" placeholder="<?php echo  $user['email']; ?>" id="email1">
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                      <span>Contraseña</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 contrasena">
                                                  <input type="password" name="password" required="required" placeholder="******" id="password1" >
                                                  <span>Usa entre 6 y 20 Caracteres</span>
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario">
                                                      <span>Confirma la contraseña</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 contrasena">
                                                  <input type="password" name="password" required="required" placeholder="******" id="password1" >
                                              </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-8">
                                                <div class="btn-inscripcion">
                                                    <input type="submit" value="Actualizar" id="boton-inscribirme" onClick="boton_inscribirme()">
                                                </div>
                                            </div>   
                                        </div>
                                  </div>
                            </form>   
                          </div>       
                      </div>
                  </div>
              </div> 
            </section>
            
          </section>
        </div>
    </article>
  </div>