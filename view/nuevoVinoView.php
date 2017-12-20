<?php include_once 'header.php';?>

        <div class="thin-panel">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Nueva vino</h3>
                </div>
                <div>
                    <a href="index.php" class="btn btn-info">Volver</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=vino&action=alta" method="post">
              <input type="hidden" name="bodega" value="<?php echo $datos["bodega"] ?>"/>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>

              <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="ano">Año</label>
                <input type="text" name="ano" class="form-control" id="ano" placeholder="Año">
              </div>

              <div class="form-group">
                <label for="alcohol">Alcohol</label>
                <input type="text" name="alcohol" class="form-control" id="alcohol" placeholder="Porcentaje de alcohol">
              </div>

              <div class="form-group">
                <label for="tipo">Tipo de vino</label>
                <select class="form-control" id="tipo" name="tipo">
                  <option value="tinto">Tinto</option>
                  <option value="blanco">Blanco</option>
                  <option value="rosado">Rosado</option>
                </select>
              </div>
              

              <button type="submit" class="btn btn-primary">Añadir Vino</button>
            </form>
        </div>    





<?php include_once 'footer.php';?>