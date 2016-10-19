    <?php
    include ('incompletos.php');
	incompletos();
	?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>CREAR PROYECTO</title>
        <meta charset="utf-8">
        <?php
            include("top-manager.php");
        ?>

        
        <div id="upload" class="col-md-12">
            <form action="uploads.php" class="dropzone col-md-6 col-md-offset-3">
                <div class="dz-message needsclick">
                    Arrastra aqui las imagenes o haz click para buscar en tu equipo.
                </div>
            </form>
            <div class="btn btn-default col-md-1 col-md-offset-4 btnUp"><span class="glyphicon glyphicon-remove"></span>Cancelar</div>
            <div class="btn btn-default col-md-1 col-md-offset-2 btnUp"><span class="glyphicon glyphicon-ok"></span>Aceptar</div>
        </div>
        <div class="container main-admin">
            <div class="col-md-9 col-md-offset-2" id="div_crear_proyecto">
                <h2 class="col-sm-6 col-sm-offset-4">Crear un Proyecto</h2>
                <form class="form-horizontal" action="grabar_proyecto.php" nombre="nuevoProyecto" id="crear" method="post" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="nombre" class="col-md-3 col-sm-10 control-label">Nombre:</label>
                        <div class="col-md-7 col-sm-10">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre del Proyecto" name="nombre">
                        </div>
                        <div class="alerta col-md-7 col-md-offset-3" id="al_nombre">Debe asignar un nombre al proyecto</div>
                    </div>
                    <div class="form-group">
                        <label for="anio" class="col-md-3 col-sm-10 control-label">Año:</label>
                        <div class="col-md-2 col-sm-10">
                            <input type="text" class="form-control" id="anio" placeholder="Año" name="anio">
                        </div>
                        <div class="alerta col-md-7 col-md-offset-3" id="al_anio">Debe ingresar un año valido</div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="col-md-3 col-sm-10 control-label">Ubicación:</label>
                        <div class="col-md-7 col-sm-10">
                            <input type="text" class="form-control" id="descripcion" placeholder="Descripción" name="descripcion">
                        </div>
                        <div class="alerta col-md-7 col-md-offset-3" id="al_descripcion">Debe ingresar una descripción</div>
                    </div>
                    <div class="form-group">
                        <label for="tipo" class="col-md-3 col-sm-10 control-label">Tipo de Proyecto:</label>
                        <div class="col-md-3 col-sm-10">
                            <select class="form-control" name="tipo" id="form-tipo">
                                <option value="Vivienda">Vivienda</option>
                                <option value="Clinico">Clinico</option>
                                <option value="Renovación">Renovación</option>
                                <option value="Turistico">Turistico</option>
                            </select>
                        </div>
                    </div>



                    <input type="hidden" class="form-control" id="descripcimportanciaion" placeholder="Importancia" name="importancia" value="1000">



                    <div class="form-group">
                        <label for="estado" class="col-md-3 col-sm-10 control-label">Estado del Proyecto:</label>
                        <div class="col-md-3 col-sm-10">
                            <select class="form-control" name="estado" id="form-estado">
                                <option value="Terminada">Terminado</option>
                                <option value="En Ejecucion">En Ejecución</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="constructor" class="col-md-3 col-sm-10 control-label">Constructor:</label>
                        <div class="col-md-7 col-sm-10">
                            <input type="text" class="form-control" id="constructor" placeholder="Constructor" name="constructor">
                        </div>
                        <div class="alerta col-md-7 col-md-offset-3" id="al_constructor">Debe indicar un constructor</div>
                    </div>
                    <div class="form-group">
                        <label for="superficie" class="col-md-3 col-sm-10 control-label">Superficie en Mts&sup2;:</label>
                        <div class="col-md-2 col-sm-10">
                            <input type="number" class="form-control" id="superficie" placeholder="Superficie" name="superficie" maxlength="4">
                        </div>
                        <div class="alerta col-md-7 col-md-offset-3" id="al_superficie">Debe ingresar un superficie valida</div>
                    </div>
                    <div class="btn btn-default col-md-6 col-md-offset-3 " id="agregarImg">
                        <span class="glyphicon glyphicon-plus"></span> Agregar Imagenes al Proyecto
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-5 col-md-6">
                            <button type="submit" class="btn btn-default" id="btn_grabar">Grabar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

        <script>
        $(document).ready(function() {
            var ok = 0;

            $('#anio').keyup(function() {
                this.value = (this.value + '').replace(/[^0-9]/g, '');
                if ($('#anio').val().trim() === '') {
                    $('#al_anio').css('display', 'inline');
                } else {
                    $('#al_anio').css('display', 'none');
                }
            });
            $('#superficie').keyup(function() {
                $('#superficie').value($('#superficie').value().substr(0, 4));
            });
            $('#nombre').keyup(function() {
                if ($('#nombre').val().trim() === '') {
                    $('#al_nombre').css('display', 'inline');
                } else {
                    $('#al_nombre').css('display', 'none');
                }
            });
            $('#descripcion').keyup(function() {
                if ($('#descripcion').val().trim() === '') {
                    $('#al_descripcion').css('display', 'inline');
                } else {
                    $('#al_descripcion').css('display', 'none');
                }
            });
            $('#constructor').keyup(function() {
                if ($('#constructor').val().trim() === '') {
                    $('#al_constructor').css('display', 'inline');
                } else {
                    $('#al_constructor').css('display', 'none');
                }
            });

            $("#btn_grabar").click(function() {
                ok = 0;

                if ($('#nombre').val().trim() === '') {
                    $('#al_nombre').css('display', 'inline');
                    ok = ok - 1;
                } else {
                    $('#al_nombre').css('display', 'none');
                    ok = ok + 1;
                }
                if ($('#anio').val().trim() === '') {
                    $('#al_anio').css('display', 'inline');
                    ok = ok - 1;
                } else {
                    $('#al_anio').css('display', 'none');
                    ok = ok + 1;
                }
                if ($('#descripcion').val().trim() === '') {
                    $('#al_descripcion').css('display', 'inline');
                    ok = ok - 1;
                } else {
                    $('#al_descripcion').css('display', 'none');
                    ok = ok + 1;
                }
                if ($('#constructor').val().trim() === '') {
                    $('#al_constructor').css('display', 'inline');
                    ok = ok - 1;
                } else {
                    $('#al_constructor').css('display', 'none');
                    ok = ok + 1;
                }
            });

            $('#crear').submit(function(e) {
                if (ok != 4) {
                    e.preventDefault();
                }
            });

            $('#agregarImg').click(function() {
                $('#upload').css("display", "inline");
            });
            $('.btnUp').click(function() {
                $('#upload').css("display", "none");
            });
        });
        </script>
    </body>

    </html>
