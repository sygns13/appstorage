<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario de Actualización de Datos de la Institución Educativa</h3>
                  <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="txtcodigo_modular">Código Modular</label>
                      <div class="input-group mb-3">
                        <!-- /btn-group -->
                        <input id="txtcodigo_modular" name="txtcodigo_modular" type="text" class="form-control" v-model="fillobjectEdit.codigo_modular" maxlength="8" onkeypress="return soloNumeros(event);">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-success editClass" @click="confirmUpdate(1)"><i class="fas fa-edit"></i> Actualizar</button>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtnombre">Nombre</label>
                      <div class="input-group mb-3">
                        <!-- /btn-group -->
                        <input id="txtnombre" name="txtnombre" type="text" class="form-control" v-model="fillobjectEdit.nombre" maxlength="500">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-success editClass" @click="confirmUpdate(2)"><i class="fas fa-edit"></i> Actualizar</button>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtresolucion_creacion">Resolución de Creación</label>
                      <div class="input-group mb-3">
                        <!-- /btn-group -->
                        <input id="txtresolucion_creacion" name="txtresolucion_creacion" type="text" class="form-control" v-model="fillobjectEdit.resolucion_creacion" maxlength="100">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-success editClass" @click="confirmUpdate(3)"><i class="fas fa-edit"></i> Actualizar</button>
                          </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
        </div>
    </div>
</div>