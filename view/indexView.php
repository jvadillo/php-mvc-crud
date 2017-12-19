<?php include_once 'header.php';?>

    <body>
        <div class="container">

          <a class="btn btn-primary btn-nueva" href="index.php?controller=bodega&action=nueva"><b>+</b> Añadir Bodega                                    </a>
          <table class="table table-bordered grocery-crud-table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Localización</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($datos["bodegas"] as $bodega) { ?>
              <tr>
                <td>
                  <?php echo $bodega["nombre"]; ?>
                </td>
                <td>
                  <?php echo $bodega["direccion"]; ?>
                </td>
                <td>
                  <?php echo $bodega["telefono"]; ?>
                </td>
                <td>
                  <?php echo $bodega["email"]; ?>
                </td>
                <td>
                  <a class="btn btn-outline-primary" href="index.php?controller=bodega&action=detalle&id=<?php echo $bodega['id']; ?>">Entrar</a>
                  <a class="btn btn-outline-danger" href="index.php?controller=bodega&action=borrar&id=<?php echo $bodega['id'] ?>">Borrar</a> </td>

              </tr>
              <?php } ?>
            </tbody>
          </table>

          <?php include_once 'footer.php';?>


