<div class="col-md-12" v-if="divFormularioDetalles">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Vista de Detalles de Documento</h3>

      <a v-if="divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="javascript:void(0);" @click="cerrarModal()"><i class="fa fa-reply-all" aria-hidden="true"></i> 
        Volver</a>
    </div>

        <form class="form-horizontal">
          <div class="card-body">

            <div class="form-group row">
              <label for="txtobs_aprobacion" class="col-sm-12 col-form-label">Contenido del Documento</label>
              <div class="col-sm-12">
                <iframe v-bind:src="'{{ asset('/visorpdf//pdfjs/web/viewer.html')}}?file={{ asset('/repositorio/')}}'+'/'+fillobject.ubicacion_electronica+'/'+fillobject.nombre_electronico" 
                frameborder="0" style="overflow:hidden;height:800px;width:100%" height="800px;" width="100%"></iframe>

                {{-- <iframe src="http://colegio.test/pruebapdf/pdfjs/web/viewer.html?file=http://repositorio.csjan.gob.pe/repositorio/borrador/doc_1_01-11-2022-17-29-10.pdf" height="500" 
                width="1100"></iframe> --}}

                {{-- <iframe src="http://repositorio.csjan.gob.pe/visorpdf/pdfjs/web/viewer.html?file=http://repositorio.csjan.gob.pe/repositorio/borrador/doc_1_01-11-2022-17-29-10.pdf" height="500" 
                width="1100"></iframe> --}}
              </div>
            </div>
            
            <hr>

            <h5 style="font-weight: bold">Detalles del Documento</h5>

            <div class="form-group row">
              <label for="cbutipo_documento_id" class="col-sm-2 col-form-label">Tipo de  Documento</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.tipo_documento_id" id="cbutipo_documento_id" disabled>
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
                <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="500" disabled>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtcodigo" class="col-sm-2 col-form-label">Código del Documento</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtcodigo" placeholder="Código" v-model="fillobject.codigo" maxlength="45" disabled>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbudocumento_relacionado_id" class="col-sm-2 col-form-label">Documento Relacionado</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.documento_relacionado_id" id="cbudocumento_relacionado_id" disabled>
                  <option value="0">Ninguno</option>
                  @foreach ($documentos as $dato)
                    <option value="{{$dato->id}}" selected>{{$dato->nombre}} - {{$dato->codigo}}. Versión {{$dato->version_actual}}</option> 
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtobs_elaboracion" class="col-sm-2 col-form-label">Observación del Registro del Documento</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" placeholder="Ingrese Observación ..." id="txtobs_elaboracion" v-model="fillobject.obs_elaboracion" disabled></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtversion_actual" class="col-sm-2 col-form-label">Versión</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtversion_actual" placeholder="Versión" v-model="fillobject.version_actual" maxlength="45" disabled>
              </div>
              <label for="txtrevision" class="col-sm-2 col-form-label">Revisión</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtrevision" placeholder="Revisión" v-model="fillobject.revision" maxlength="45" disabled>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbuestado" class="col-sm-2 col-form-label">Estado del Documento</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.estado" id="cbuestado" disabled>
                  <option value="0">BORRADOR GENERADO</option>
                  <option value="1">BORRADOR APROBADO POR RED</option>
                  <option value="2">BORRADOR OBSERVADO POR RED</option>
                  <option value="3">BORRADOR CORREGIDO</option>
                  <option value="4">DOCUMENTO FIRMADO POR ÁREA DE ELABORACIÓN</option>
                  <option value="5">DOCUMENTO FIRMADO POR ÁREA DE EVALUACIÓN</option>
                  <option value="6">DOCUMENTO OBSERVADO POR ÁREA DE EVALUACIÓN</option>
                  <option value="7">DOCUMENTO FIRMADO POR ÁREA DE APROBACIÓN</option>
                  <option value="8">DOCUMENTO OBSERVADO POR ÁREA DE APROBACIÓN</option>
                  <option value="9">DOCUMENTO VÁLIDO, VERSIÓN EMITIDA</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbuarea_id" class="col-sm-2 col-form-label">Área de Elaboración del Documento</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.area_id" id="cbuarea_id" disabled>
                  <option value="0" disabled>No Configurada</option>
                  @foreach ($areas as $dato)
                    <option value="{{$dato->id}}" selected>{{$dato->nombre}} - {{$dato->siglas}}</option> 
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbuarea_revision_id" class="col-sm-2 col-form-label">Área de Revisión del Documento</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.area_revision_id" id="cbuarea_revision_id" disabled>
                  <option value="0" disabled>No Configurada</option>
                  @foreach ($areas as $dato)
                  <option value="{{$dato->id}}" selected>{{$dato->nombre}} - {{$dato->siglas}}</option> 
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbuarea_aprobacion_id" class="col-sm-2 col-form-label">Área de Aprobación del Documento</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.area_aprobacion_id" id="cbuarea_aprobacion_id" disabled>
                  <option value="0" disabled>No Configurada</option>
                  @foreach ($areas as $dato)
                  <option value="{{$dato->id}}" selected>{{$dato->nombre}} - {{$dato->siglas}}</option> 
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtfecha_ela" class="col-sm-2 col-form-label">Fecha de Elaboración</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtfecha_ela" placeholder="Fecha de Elaboración" v-model="fillobject.fecha_ela" maxlength="45" disabled>
              </div>
              
              <label for="txtfecha_rev" class="col-sm-2 col-form-label">Fecha de Revisión</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtfecha_rev" placeholder="Documento No Revisado" v-model="fillobject.fecha_rev" maxlength="45" disabled>
              </div>

              <label for="txtfecha_apr" class="col-sm-2 col-form-label">Fecha de Aprobación</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtfecha_apr" placeholder="Documento No Aprobado" v-model="fillobject.fecha_apr" maxlength="45" disabled>
              </div>
            </div>

           {{--  <div class="form-group row">
              <label for="txtobs_revision" class="col-sm-2 col-form-label">Observación de Revisión del Documento</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" placeholder="" id="txtobs_revision" v-model="fillobject.obs_revision" disabled></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtobs_aprobacion" class="col-sm-2 col-form-label">Observación de Aprobación del Documento</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" placeholder="" id="txtobs_aprobacion" v-model="fillobject.obs_aprobacion" disabled></textarea>
              </div>
            </div> --}}

            

          </div>
          <!-- /.card-body -->
        </form>


        <div class="card-footer">
          <button id="btnCloseModal" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarModal()"><span class="fas fa-power-off"></span> Cerrar</button>
        </div>

      </form>
  </div>
</div>