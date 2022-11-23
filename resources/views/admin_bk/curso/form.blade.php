<div class="modal" id="modalFormulario">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">@{{labelBtnSave}} Sección</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="txtnombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="200">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="txtorden" class="col-sm-2 col-form-label">Orden de Impresión</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="txtorden" placeholder="1" v-model="fillobject.orden" maxlength="10">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button id="btnGuardar" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarForm()"><span class="fas fa-power-off"></span> Cerrar</button>
          <button id="btnClose" type="button" class="btn btn-primary" @click="procesar()"><span class="fas fa-save"></span> @{{labelBtnSave}}</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->




  <div class="modal" id="modalFormularioC">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">@{{labelBtnSave}} Competencia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="txtnombreC" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtnombreC" placeholder="Nombre" v-model="fillobject2.nombre" maxlength="1000">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="txtordenC" class="col-sm-2 col-form-label">Orden de Impresión</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="txtordenC" placeholder="1" v-model="fillobject2.orden" maxlength="10">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button id="btnGuardarC" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarFormC()"><span class="fas fa-power-off"></span> Cerrar</button>
          <button id="btnCloseC" type="button" class="btn btn-primary" @click="procesarC()"><span class="fas fa-save"></span> @{{labelBtnSave}}</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->