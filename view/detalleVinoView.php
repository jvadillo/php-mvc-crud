<?php include_once 'header.php';?>

        <div class="thin-panel">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Detalle vino</h3>
                </div>
                <div>
                    <?php
                      $volverURL = "index.php?controller=bodega&action=detalle&id=" . $data['bodega'];
                      $borrarURL = "index.php?controller=bodega&action=borrar&id=" . $datos['vino']->id . "&bodega=" . $data['bodega'];
                    ?>
                    <a href="#" id="editarBtn" class="btn btn-outline-warning"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;Editar</a>
                    <a href="<?php echo $volverURL ?>" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Volver</a>
                    <a class="btn btn-outline-danger" href="<?php echo $borrarURL ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Borrar</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=vino&action=actualizar" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["vino"]->id ?>"/>
              <input type="hidden" name="bodega" value="<?php echo $datos["bodega"] ?>"/>
              
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input disabled type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $data['vino']->nombre ?>">
              </div>

              <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea disabled class="form-control" name="descripcion" id="descripcion" rows="3"><?php echo $datos['vino']->descripcion ?></textarea>
              </div>

              <div class="form-group">
                <label for="ano">Año</label>
                <input  disabled type="text" name="ano" class="form-control" id="ano" value="<?php echo $data['vino']->ano ?>">
              </div>

              <div class="form-group">
                <label for="alcohol">Alcohol</label>
                <input disabled type="text" name="alcohol" class="form-control" id="alcohol" value="<?php echo $data['vino']->alcohol ?>">
              </div>

              <div class="form-group">
                <label for="tipo">Tipo de vino</label>
                <select disabled class="form-control" id="tipo" name="tipo">
                  <option value="tinto" <?php echo $data['vino']->tipo == 'tinto'? 'selected' : '' ?>>Tinto</option>
                  <option value="blanco" <?php echo $data['vino']->tipo == 'blanco'? 'selected' : '' ?>>Blanco</option>
                  <option value="rosado" <?php echo $data['vino']->tipo == 'rosado'? 'selected' : '' ?>>Rosado</option>
                </select>
              </div>
              

              <button disabled type="submit" class="btn btn-primary">Actualizar Vino</button>
            </form>
        </div>    





<?php include_once 'footer.php';?>

