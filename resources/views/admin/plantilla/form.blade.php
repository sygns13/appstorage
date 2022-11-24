  <div class="col-md-12" v-if="divFormulario && !divFormularioDetalles && !divFormularioRev">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">@{{labelBtnSave}} Documento</h3>
      </div>

          <form class="form-horizontal">
            <div class="card-body">

              @if(Auth::user()->tipo_user_id == 1)
              <div class="form-group row">
                <label for="cbuarea_id" class="col-sm-2 col-form-label">Área De Elaboración de la Plantilla del Documento</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.area_id" id="cbuarea_id">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($areas as $dato)
                      <option value="{{$dato->id}}">{{$dato->siglas}} - {{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>
              @endif

              <div class="form-group row">
                <label for="cbutipo_documento_id" class="col-sm-2 col-form-label">Tipo de la Plantilla de Documento</label>
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
                <label for="txtfecha" class="col-sm-2 col-form-label">Fecha de Elaboración</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="txtfecha" placeholder="dd/mm/yyyy" v-model="fillobject.fecha">
                </div>
              </div>

              <div class="form-group row">
                <label for="txtnombre" class="col-sm-2 col-form-label">Nombre de la Plantilla del Documento</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="500">
                </div>
              </div>

              <div class="form-group row">
                <label for="txtcodigo" class="col-sm-2 col-form-label">Código de la Plantilla del Documento</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="txtcodigo" placeholder="Código" v-model="fillobject.codigo" maxlength="45">
                </div>
              </div>


              <div class="form-group row">
                <label for="cbudocumento_id" class="col-sm-2 col-form-label">Documento Relacionado</label>
                <div class="col-sm-10">
                  <select class="form-control" style="width: 100%;" v-model="fillobject.documento_id" id="cbudocumento_id">
                    <option value="0">Ninguno</option>
                    @foreach ($documentos as $dato)
                      <option value="{{$dato->id}}">{{$dato->nombre}} - {{$dato->codigo}}. Versión {{$dato->version_actual}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="txtobservacion" class="col-sm-2 col-form-label">Detalles de la Plantilla del Documento</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Ingrese Detalles ..." id="txtobservacion" v-model="fillobject.observacion"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="archivo" class="col-sm-2 col-form-label">Adjunte el Documento (Formato DOC, DOCX, XLS, XLSX)</label>
                <div class="col-sm-10">
                  <input v-if="uploadReady" name="archivo" type="file" id="archivo" class="archivo form-control" @change="getArchivo" accept=".doc, .DOC, .docx, .DOCX, .xls, .XLS, .xlsx, .XLSX"/>
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