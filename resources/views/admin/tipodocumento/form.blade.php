  <div class="col-md-12" v-if="divFormulario">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">@{{labelBtnSave}} Tipo de Documento</h3>
      </div>

          <form class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="txtnombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="500">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </form>


          <div class="card-footer">
            <button style="margin-right:5px;" id="btnGuardar" type="button" class="btn btn-primary" @click="procesar()"><span class="fas fa-save"></span> @{{labelBtnSave}}</button>
            <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarForm()"><span class="fas fa-power-off"></span> Cerrar</button>
          </div>

        </form>
    </div>
</div>