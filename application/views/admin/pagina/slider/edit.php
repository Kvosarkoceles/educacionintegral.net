<section class="content">
    <div class="container-fluid">
        <div class="row">

            <!-- right column -->
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edita Slider</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 my-1">
                                    <div class="form-group" align="center">
                                        <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $slider->imagen; ?>" width="100%" height="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $slider->nombre; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $slider->idStatus; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..."><?php echo $slider->descripcion; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..."><?php echo $slider->observaciones; ?></textarea>
                                    </div>
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control">
                                            <option>Activado</option>
                                            <option>Desactivado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6  my-1 ">
                                    <div class="form-group">
                                        <label for="imagen">Imagen:</label>
                                        <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png">
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>