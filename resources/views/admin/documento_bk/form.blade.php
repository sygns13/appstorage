  <div class="col-md-12" v-if="divFormulario && !divFormularioDetalles">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">@{{labelBtnSave}} Documento</h3>
      </div>

          <form class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="cbutipo_documento_id" class="col-sm-2 col-form-label">Tipo de  Documento</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.tipo_documento_id" id="cbutipo_documento_id">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($tipoDocumentos as $dato)
                      <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="txtnombre" class="col-sm-2 col-form-label">Nombre del Documento</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="500">
                </div>
              </div>

              <div class="form-group row">
                <label for="txtcodigo" class="col-sm-2 col-form-label">Código del Documento</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="txtcodigo" placeholder="Código" v-model="fillobject.codigo" maxlength="45">
                </div>
              </div>

              <div class="form-group row">
                <label for="cbudocumento_relacionado_id" class="col-sm-2 col-form-label">Documento Relacionado</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.documento_relacionado_id" id="cbudocumento_relacionado_id">
                    <option value="0">Ninguno</option>
                    @foreach ($documentos as $dato)
                      <option value="{{$dato->id}}" selected>{{$dato->nombre}} - {{$dato->codigo}}. Versión {{$dato->version_actual}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="txtobs_elaboracion" class="col-sm-2 col-form-label">Observación del Registro del Borrador del Documento</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Ingrese Observación ..." id="txtobs_elaboracion" v-model="fillobject.obs_elaboracion"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="archivo" class="col-sm-2 col-form-label">Adjunte Borrador del Documento (Formato PDF)</label>
                <div class="col-sm-10">
                  <input v-if="uploadReady" name="archivo" type="file" id="archivo" class="archivo form-control" @change="getArchivo" accept=".pdf, .PDF"/>
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