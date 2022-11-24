  <div class="col-md-12" v-if="divFormulario && !divFormularioDetalles && !divFormularioRev">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">@{{labelBtnSave}} Documento</h3>
      </div>

          <form class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label for="cbuarea_id" class="col-sm-2 col-form-label">Área De Elaboración del Documento</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.area_id" id="cbuarea_id">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($areas as $dato)
                      <option value="{{$dato->id}}">{{$dato->siglas}} - {{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="cbuarea_revision_id" class="col-sm-2 col-form-label">Área de Revisión del Documento</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.area_revision_id" id="cbuarea_revision_id">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($areas as $dato)
                      <option value="{{$dato->id}}">{{$dato->siglas}} - {{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="cbuarea_aprobacion_id" class="col-sm-2 col-form-label">Área de Aprobación del Documento</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.area_aprobacion_id" id="cbuarea_aprobacion_id">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($areas as $dato)
                      <option value="{{$dato->id}}">{{$dato->siglas}} - {{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="cbutipo_documento_id" class="col-sm-2 col-form-label">Tipo de  Documento</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.tipo_documento_id" id="cbutipo_documento_id">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($tipoDocumentos as $dato)
                      <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>


              <div class="form-group row">
                <label for="txtfecha_elaboracion" class="col-sm-2 col-form-label">Fecha de Elaboración</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="txtfecha_elaboracion" placeholder="dd/mm/yyyy" v-model="fillobject.fecha_elaboracion">
                </div>

                <label for="txtfecha_revision" class="col-sm-2 col-form-label">Fecha de Revisión</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="txtfecha_revision" placeholder="dd/mm/yyyy" v-model="fillobject.fecha_revision">
                </div>

                <label for="txtfecha_aprobacion" class="col-sm-2 col-form-label">Fecha de Aprobación</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="txtfecha_aprobacion" placeholder="dd/mm/yyyy" v-model="fillobject.fecha_aprobacion">
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
                <label for="txtversion_actual" class="col-sm-2 col-form-label">Versión Actual</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="txtversion_actual" placeholder="Versión" v-model="fillobject.version_actual" maxlength="20" onkeypress="return soloNumeros(event);">
                </div>
                <label for="txtrevision" class="col-sm-2 col-form-label">Revisión Actual</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="txtrevision" placeholder="Código" v-model="fillobject.revision" maxlength="20" onkeypress="return soloNumeros(event);">
                </div>
              </div>


              <div class="form-group row">
                <label for="cbudocumento_relacionado_id" class="col-sm-2 col-form-label">Documento Relacionado</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.documento_relacionado_id" id="cbudocumento_relacionado_id">
                    <option value="0">Ninguno</option>
                    @foreach ($documentos as $dato)
                      <option value="{{$dato->id}}">{{$dato->nombre}} - {{$dato->codigo}}. Versión {{$dato->version_actual}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="txtobs_elaboracion" class="col-sm-2 col-form-label">Observación del Documento</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Ingrese Observación ..." id="txtobs_elaboracion" v-model="fillobject.obs_elaboracion"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="archivo" class="col-sm-2 col-form-label">Adjunte el Documento (Formato PDF)</label>
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