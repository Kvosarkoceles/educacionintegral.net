<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>admin/pagina/logo/imagenStore/1" method="POST" enctype="multipart/form-data">
   
    <div class="card">

      <div class="card-body">
        <h3 class="header-title">Cambiar Slider</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="form-group">
              <label for="imagen">Imagen:</label>
              <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png" >
            </div>
            <div class="col-lg-12 col-md-6 col-sm-6">
              <div class="form-group" align="center" >
                 <img id="imgSalida" src="<?php echo base_url();?><?php echo $slider->imagen; ?>"width="100" height="100"/>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>
