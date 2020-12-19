<?php
require 'header.php';
?>
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Afiliado <button class="btn btn-success" id="btnAgregar" onclick="mostrarForm(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->

                    <div id="listadoRegistros" class="panel-body table-responsive">
                        <table id="tablaListado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <tr>
                                   <th>chart</th>
                                   <th>id</th>
                                    <th>documento</th>
                                    <th>nombre</th>
                                    <th>nombre secundario</th>
                                    <th>apellido</th>
                                    <th>apellido secundario</th>
                                    <th>sexo</th>
                                    <th>correo</th>
                                    <th>telefono</th>
                                    <th>direccion</th>
                                    <th>estado civil</th>
                                    <th>nivel educativo</th>
                                    <th>fecha nacimiento</th>
                                    <th>nivel fisico</th>
                                    <th>ciudadFK</th>

                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="formularioRegistros" class="panel-body" style="height: 600px;">
                        <form id="formulario" name="formulario" method="post" enctype="multipart/form-data">


                            <div>
                                <label>Documento</label>
                                <input type="number" name="documento_afiliado" id="documento_afiliado" placeholder="Ingrese su Documento" />
                            </div>

                            <div>
                                <label> Primer Nombre</label>
                                <input type="text" name="nombre1_afiliado" id="nombre1_afiliado" placeholder="Ingrese su primer nombre" />
                            </div>

                            <div>
                                <label> Segundo Nombre</label>
                                <input type="text" name="nombre2_afiliado" id="nombre2_afiliado" placeholder="Ingrese su segundo nombre" />
                            </div>

                            <div>
                                <label> Primer Apellido</label>
                                <input type="text" name="apellido1_afiliado" id="apellido1_afiliado" placeholder="Ingrese su primer apellido" />
                            </div>

                            <div>
                                <label> Segundo Apellido</label>
                                <input type="text" name="apellido2_afiliado" id="apellido2_afiliado" placeholder="Ingrese su segundo apellido" />
                            </div>

                            <div>
                                <label>Sexo</label>
                                <select name="sexo_afiliado" id="select_sexo">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                            <div>
                                <label>Correo</label>
                                <input type="email" name="correo_afiliado" id="correo_afiliado" placeholder="Ingrese su correo electrónico" />
                            </div>

                            <div>
                                <label> Telefono</label>
                                <input type="number" name="telefono_afiliado" id="telefono_afiliado" placeholder="Ingrese su telefono" />
                            </div>

                            <div>
                                <label> Direccion</label>
                                <input type="text" name="direccion_afiliado" id="direccion_afiliado" placeholder="Ingrese su direccion" />
                            </div>

                            <div>
                                <label>Estado civil</label>
                                <select name="estado_civil_afiliado" id="select_estado_civil">
                                    <option value="Soltero">Solter@</option>
                                    <option value="Casado">Casad@</option>
                                    <option value="Union libre">Union libre</option>
                                </select>
                            </div>

                            <div>
                                <label>Nivel Educativo</label>
                                <select name="nivel_educativo_afiliado" id="select_nivel_educativo">
                                    <option value="primaria">primaria</option>
                                    <option value="bachiller">bachiller</option>
                                    <option value="tecnico">tecnico</option>
                                    <option value="tecnologo">tecnologo</option>
                                    <option value="Profesional">Profesional</option>
                                    <option value="Especializacion">Especializacion</option>
                                    <option value="Doctorado">Doctorado</option>
                                </select>
                            </div>

                            <div>
                                <label>Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento_afiliado" id="fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento" />
                            </div>

                            <div>
                                <label>Nivel entrenamiento</label>
                                <select name="nivel_fisico_afiliado" id="nivel_entrenamiento">
                                    <option value="Principiante">Principiante</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                </select>
                            </div>


                            <label> Departamento</label>
                            <select name="id_departamento" id="id_departamento">

                            </select>
                            <div>
                                <label> ciudad</label>
                                <select name="ciudadFK" id="select_ciudad">

                                </select>
                            </div>
                    </div>




                    <hr />

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>guardar</button>
                        <button class="btn btn-danger" type="button" id="btnCancelar" onclick="cancelarForm()"><i class="fa fa-arrow-circle-left">cancelar</button>
                    </div>
                    </form>
                </div>
               
                <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->


<!-- Fin modal -->
<?php
require 'footer.php';
?>
<script src="js/afiliado.js"></script>
