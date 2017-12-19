<?php include_once 'header.php';?>
    <div class="row justify-content-between">
        <div class="col-lg-6">  
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Datos bodega</h3>
                </div>
                <div>
                    <a href="index.php" class="btn btn-outline-warning">Editar</a>
                    <a href="index.php" class="btn btn-outline-primary">Volver</a>
                    <a href="index.php?controller=bodega&action=borrar&id=<?php echo $datos['bodega']->id ?>" class="btn btn-outline-danger">Eliminar</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=bodega&action=actualizar" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["empleado"]->id ?>"/>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $datos["bodega"]->nombre ?>">
              </div>

              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $datos['bodega']->direccion ?>">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $datos['bodega']->email ?>">
              </div>
              
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $datos['bodega']->telefono ?>">
              </div>

              <div class="form-group">
                <label for="contacto">Persona de contacto</label>
                <input type="text" name="contacto" class="form-control" id="contacto" value="<?php echo $datos['bodega']->contacto ?>">
              </div>

              <div class="form-group">
                <label for="fecha">Año de fundación</label>
                <input type="text" name="fecha" class="form-control" id="fecha" value="<?php echo $datos['bodega']->fecha ?>">
              </div>
              
              <fieldset class="form-group">
                <legend>¿Dispone de restaurante?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="restaurante" id="restaurante" value="1">
                    Sí
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="restaurante" id="restaurante2" value="0" checked>
                    No
                  </label>
                </div>
              </fieldset>

              <fieldset class="form-group">
                <legend>¿Dispone de hotel?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="hotel" id="hotel" value="1">
                    Sí
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="hotel" id="hotel2" value="0" checked>
                    No
                  </label>
                </div>
              </fieldset>
              

              <button type="submit" class="btn btn-primary hide">Guardar</button>
            </form>
        </div> 
        <div class="col-5"> 
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Vinos disponibles</h3>
                </div>
                <div>
                    <a href="index.php?controller=vino&action=alta&bodega=<?php echo $datos['bodega']->id ?>" class="btn btn-outline-primary"><b>+</b> Añadir vino</a>
                </div>
            </div>
            <hr/>  
        </div>  
    </div> 


<?php include_once 'footer.php';?>