  <div class="col-md-12" v-if="divFormulario">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">@{{labelBtnSave}} Área</h3>
      </div>

          <form class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="cbunivel" class="col-sm-2 col-form-label">Tipo de Área</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.nivel" id="cbunivel">
                    <option value="0" disabled>Seleccione ...</option>
                    <option value="1">RED</option> 
                    <option value="2">Alta Dirección</option> 
                    <option value="3">Áreas Operativas</option> 
                    <option value="4">Áreas de Apoyo</option> 
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="txtnombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="500">
                </div>
              </div>
              <div class="form-group row">
                <label for="txtcodigo" class="col-sm-2 col-form-label">Código</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtcodigo" placeholder="Código" v-model="fillobject.codigo" maxlength="20">
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