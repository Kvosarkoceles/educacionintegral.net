<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url(); ?>admin/profesores/profesores/imagenupdate/1" method="POST" enctype="multipart/form-data">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Cambiar foto (690px * 520px)</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-12 my-1 ">

            <div class="col-lg-12 col-md-6 col-sm-6">
              <div class="form-group" align="center">
              <input type="hidden" class="form-control" value="<?php echo $profesor->imagen; ?>" id="imagenold" name="imagenold">
              <input type="hidden" class="form-control" value="<?php echo $profesor->id; ?>" id="id" name="id">
              <input type="hidden" class="form-control" value="<?php echo $profesor->nombre; ?>" id="nombre" name="nombre">
              <input type="hidden" class="form-control" value="<?php echo $profesor->primerApellido; ?>" id="primerApellido" name="primerApellido">
                <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $profesor->imagen; ?>" />
              </div>
            </div>

          </div>
          <div class="container">
            <div class="row">
              <div class="col align-self-end col-sm-6 my-1 ">
                <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".png, .jpg, .jpeg">
                </div>
              </div>
            </div>
            <div class="row justify-content-between float-right">
              <div class="col align-self-start">
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>
</div>