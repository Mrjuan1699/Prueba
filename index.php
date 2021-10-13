<?php

  require_once "php/conexion.php";
  $conexion=conectarBD();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de información</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="librerias/jquery.min.js"></script>
    <script src="js/form.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
   
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Gestionar información</h3>
                <caption>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAgregarPersona">Agregar persona
                            <span class="bi bi-plus-square mt-5"></span>
                        </button>
                    </caption>
                <table class="table table-hover table-condensed table-bordered mt-5" >
                   
                    <tr>
                        <td>DNI</td>
                        <td>Nombre</td>
                        <td>Fecha Nacimiento</td>
                        <td>Dirección</td>
                        <td>Teléfono</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                    <?php
                      $sql = "SELECT IdPersona,DNI, NOMBRE, FECNAC, DIR, TFNO from tbl_personas";
                      $resultado = mysqli_query($conexion,$sql);
                      while($mostrar=mysqli_fetch_row($resultado)){
                        $datos = $mostrar[0].
                        "||".$mostrar[1].
                        "||".$mostrar[2].
                        "||".$mostrar[3].
                        "||".$mostrar[4].
                        "||".$mostrar[5];
                        
                    ?>
                    <tr>
                       
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        <td>
                            <button class="btn btn-warning bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#ModalEditarPersona" onclick="mandardatosform('<?php echo $datos ?>')"></button>  
                        </td>
                        <td>
                            <button class="btn btn-danger bi bi-trash" onclick="PreguntaSiNo('<?php echo $mostrar[0] ?>')"></button>  
                        </td>
                    </tr>
                    <?php
                    };
                    ?>

                </table>
            </div>
        </div>
    </div>

<!-- Modal para agregar personas -->

<div class="modal fade" id="ModalAgregarPersona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="">DNI</label>
        <input type="text" id="dni" class="form-control input-sm">
        <label for="">Nombre</label>
        <input type="text" id="nombre" class="form-control input-sm">
        <label for="">Fecha Nacimiento</label>
        <input type="date" id="fecnac" class="form-control input-sm">
        <label for="">Dirección</label>
        <input type="text" id="dir" class="form-control input-sm">
        <label for="">Teléfono</label>
        <input type="text" id="telefono" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="guardarnuevo">Agregar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para agregar personas -->

<!-- Modal para editar personas -->

<div class="modal fade" id="ModalEditarPersona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar persona</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idpersona" name="">
        <label for="">DNI</label>
        <input type="text" id="dniEdit" class="form-control input-sm">
        <label for="">Nombre</label>
        <input type="text" id="nombreEdit" class="form-control input-sm">
        <label for="">Fecha Nacimiento</label>
        <input type="date" id="fecnacEdit" class="form-control input-sm">
        <label for="">Dirección</label>
        <input type="text" id="dirEdit" class="form-control input-sm">
        <label for="">Teléfono</label>
        <input type="text" id="telEdit" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="actualizarpersona">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para editar personas -->
</body>
<script>
   $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          dni=$('#dni').val();
          nombre=$('#nombre').val();
          fecnac=$('#fecnac').val();
          dir=$('#dir').val();
          telefono=$('#telefono').val();
            agregardatos(dni,nombre,fecnac,dir,telefono);
        });

        $('#actualizarpersona').click(function(){
          actualizarinformacion();
        });

    });
</script>
</html>