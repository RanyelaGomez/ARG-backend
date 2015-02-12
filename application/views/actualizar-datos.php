<div class="login-body">
      <article class="container container-login">
        <div class="row ">
          <!-- PESTAÑAS "Actualizar Datos" y "Cambiar contraseña" -->
          <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tabbable tabs">
              <ul id="top-bar" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#actualizar-datos" data-toggle="tab">Actualizar Datos</a></li>
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
                            <span>Todos los campos son obligatorios</span>
                          </div>

                          <div class="formulario">
                            <form action="<?=site_url('principal/actualizar')?>" method="POST">
                                    <div class="container">
                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Nombre</span>
                                                  </div>                              
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="text" name="nombre" required="required" placeholder="Ranyela" id="first-name" value="<?= $ex->nombre ?>">
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Apellido</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="text" name="apellido" required="required" placeholder="Gómez" id="family-name" value="<?= $ex->apellido ?>">
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Email</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="email" name="email"  required="required" placeholder="info@accesoriosranyelagomez.com.ve" id="email1" value="<?= $ex->email?>" disabled>
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Teléfono</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="phone" name="phone" required="required" placeholder="0414-234.214" id="phone" value="<?= $ex->telefono ?>">
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Contraseña</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 contrasena-inscripcion">
                                                  <input type="password" name="password" required="required" placeholder="" id="password1" value="<?= $ex->contrasena ?>">
                                                  <span>Usa entre 6 y 20 Caracteres</span>
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                    <span>Documento</span>
                                                  </div>                                            
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 ">
                                                  <div class="seccion-documento">                                                
                                                      <select id="documento" name="doc1">
                                                        <?php if($ex->doc1 === "C.I"): ?>
                                                          <option selected value="C.I">C.I</option>
                                                        <?php else: ?>
                                                            <option value="C.I">C.I</option>
                                                       <?php endif; ?> 
                                                       <?php if($ex->doc1 === "R.I.F"): ?>      
                                                          <option selected value="R.I.F">R.I.F</option>       
                                                        <?php else: ?>
                                                            <option value="R.I.F">R.I.F</option>
                                                       <?php endif; ?>                          
                                                      </select>

                                                       <select id="documento" name="doc2">
                                                        <?php if($ex->doc1 === "V"): ?>
                                                          <option selected value="V">V</option>
                                                        <?php else: ?>
                                                            <option value="V">V</option>
                                                       <?php endif; ?> 
                                                       <?php if($ex->doc1 === "E"): ?>      
                                                          <option selected value="E">E</option>       
                                                        <?php else: ?>
                                                            <option value="E">E</option>
                                                       <?php endif; ?>                          
                                                      </select>

                                                      <input type="text" name="documento-identidad" required="required" placeholder="1.324.689" id="documento-identidad" value="<?= $ex->doc3 ?>">
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
                                  </div>
                            </form>   
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
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Email</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9">
                                                  <input type="email" name="email"  required="required" placeholder="info@accesoriosranyelagomez.com.ve" id="email1">
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Contraseña</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 contrasena-inscripcion">
                                                  <input type="password" name="password" required="required" placeholder="******" id="password1" >
                                                  <span>Usa entre 6 y 20 Caracteres</span>
                                              </div>
                                        </div>

                                        <div class="row form-inscrib">
                                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                  <div class="etiqueta-formulario-formalizar">
                                                      <span>Confirma la contraseña</span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-9 col-sm-9 col-md-9 contrasena-inscripcion">
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