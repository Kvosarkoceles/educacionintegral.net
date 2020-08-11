 <!-- data table start -->

 <div class="col-12 mt-5">
                        <div class="card">

                            <div class="card-body">

                              <div class="col-md-12">
                                  <a href="<?php echo base_url();?>admin/usuarios/add" class="btn btn-outline-primary mb-3"><span class="fa fa-plus"></span> Agregar Usuario</a>
                              </div>


                                <h4 class="header-title">Usuarias</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                           <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>Usuario</th>
                                                <th>Rol</th>
                                                <th>editar</th>
                                                <th>eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($usuarios)):?>
                                                 <?php foreach($usuarios as $usuario):?>
                                                    <tr>
                                                        <td><?php echo $usuario->id;?></td>
                                                        <td><?php echo $usuario->nombre;?></td>
                                                        <td><?php echo $usuario->username;?></td>


                                                        <td><?php echo $usuario->rol;?></td>
                                                        <td>

                                                    <a href="<?php echo base_url()?>admin/usuarios/edit/<?php echo $usuario->id;?>" ><span class="fa fa-pencil"></span></a>




                                                </td>
                                                <td>
  <a href="<?php echo base_url();?>admin/usuarios/delete/<?php echo $usuario->id;?>"><span class="fa fa-remove"></span></a>
                                                </td>
                                                    </tr>
                                                <?php endforeach;?>
                                            <?php endif;?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
