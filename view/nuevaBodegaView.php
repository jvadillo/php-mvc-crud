<?php include_once 'header.php';?>

        <div class="thin-panel">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Nueva bodega</h3>
                </div>
                <div>
                    <a href="index.php" class="btn btn-info">Volver</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=bodega&action=alta" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["empleado"]->id ?>"/>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>

              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
              </div>

              <div class="form-group">
                <label for="contacto">Persona de contacto</label>
                <input type="text" name="contacto" class="form-control" id="contacto" placeholder="Persona de contacto">
              </div>

              <div class="form-group">
                <label for="fecha">Año de fundación</label>
                <input type="text" name="fecha" class="form-control" id="fecha" placeholder="Año de fundación">
              </div>

              <div class="form-group">
                <label for="exampleTextarea">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
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
              

              <button type="submit" class="btn btn-primary">Añadir</button>
            </form>
        </div>    





<?php include_once 'footer.php';?>