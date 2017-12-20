<?php include_once 'header.php';?>
    <div class="row justify-content-between">
        <div class="col-lg-6">  
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Datos bodega</h3>
                </div>
                <div>
                    <a href="#" id="editarBtn" class="btn btn-outline-warning"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Editar</a>
                    <a href="index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Volver</a>
                    <a href="index.php?controller=bodega&action=borrar&id=<?php echo $datos['bodega']->id ?>" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Eliminar</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=bodega&action=actualizar" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["bodega"]->id ?>"/>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input disabled type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $datos["bodega"]->nombre ?>">
              </div>

              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input disabled type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $datos['bodega']->direccion ?>">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input disabled type="email" name="email" class="form-control" id="email" value="<?php echo $datos['bodega']->email ?>">
              </div>
              
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input disabled type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $datos['bodega']->telefono ?>">
              </div>

              <div class="form-group">
                <label for="contacto">Persona de contacto</label>
                <input disabled type="text" name="contacto" class="form-control" id="contacto" value="<?php echo $datos['bodega']->contacto ?>">
              </div>

              <div class="form-group">
                <label for="fecha">Año de fundación</label>
                <input disabled type="text" name="fecha" class="form-control" id="fecha" value="<?php echo $datos['bodega']->fecha ?>">
              </div>
              
              <fieldset class="form-group">
                <legend>¿Dispone de restaurante?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="restaurante" id="restaurante" value="1" <?php echo $datos['bodega']->restaurante == 1 ? 'checked' : '' ?>>
                    Sí
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="restaurante" id="restaurante2" value="0" <?php echo $datos['bodega']->restaurante == 0 ? 'checked' : '' ?>>
                    No
                  </label>
                </div>
              </fieldset>

              <fieldset class="form-group">
                <legend>¿Dispone de hotel?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="hotel" id="hotel" value="1" <?php echo $datos['bodega']->hotel == 1 ? 'checked' : '' ?>>
                    Sí
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="hotel" id="hotel2" value="0" <?php echo $datos['bodega']->hotel == 0 ? 'checked' : '' ?>>
                    No
                  </label>
                </div>
              </fieldset>
              

              <button type="submit" class="btn btn-primary hide">Guardar</button>
            </form>
        </div> 
        <div class="col-6"> 
          <div class="d-flex justify-content-between">
              <div>
                  <h3>Vinos disponibles</h3>
              </div>
              <div>
                  <a href="index.php?controller=vino&action=nuevo&bodega=<?php echo $datos['bodega']->id ?>" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Añadir vino</a>
              </div>
          </div>
          <hr/>
          <table class="table table-bordered grocery-crud-table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($datos["vinos"] as $vino) { ?>
              <tr>
                <td>
                  <?php echo $vino["nombre"]; ?>
                </td>
                <td>
                  <?php echo $vino["tipo"]; ?>
                </td>
                <td>
                  <a class="btn btn-outline-primary" href="index.php?controller=vino&action=detalle&id=<?php echo $vino['id']; ?>&bodega=<?php echo $datos["bodega"]->id ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Ver</a>
                  <a class="btn btn-outline-danger" href="index.php?controller=vino&action=borrar&id=<?php echo $vino['id'] ?>&bodega=<?php echo $datos["bodega"]->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Borrar</a> </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>  
        </div>  
    </div> 


<?php include_once 'footer.php';?>