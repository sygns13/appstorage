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
              <label for="txtcodigo" class="col-sm-2 col-form-label">C??digo del Documento</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtcodigo" placeholder="C??digo" v-model="fillobject.codigo" maxlength="45" disabled>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbudocumento_relacionado_id" class="col-sm-2 col-form-label">Documento Relacionado</label>
              <div class="col-sm-10">
                <select class="form-control" style="width: 100%;" v-model="fillobject.documento_relacionado_id" id="cbudocumento_relacionado_id" disabled>
                  <option value="0">Ninguno</option>
                  @foreach ($documentos as $dato)
                    <option value="{{$dato->id}}" selected>{{$dato->nombre}} - {{$dato->codigo}}. Versi??n {{$dato->version_actual}}</option> 
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtobs_elaboracion" class="col-sm-2 col-form-label">Observaci??n del Registro del Documento</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" placeholder="Ingrese Observaci??n ..." id="txtobs_elaboracion" v-model="fillobject.obs_elaboracion" disabled></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtversion_actual" class="col-sm-2 col-form-label">Versi??n</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtversion_actual" placeholder="Versi??n" v-model="fillobject.version_actual" maxlength="45" disabled>
              </div>
              <label for="txtrevision" class="col-sm-2 col-form-label">Revisi??n</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtrevision" placeholder="Revisi??n" v-model="fillobject.revision" maxlength="45" disabled>
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
                  <option value="4">DOCUMENTO FIRMADO POR ??REA DE ELABORACI??N</option>
                  <option value="5">DOCUMENTO FIRMADO POR ??REA DE EVALUACI??N</option>
                  <option value="6">DOCUMENTO OBSERVADO POR ??REA DE EVALUACI??N</option>
                  <option value="7">DOCUMENTO FIRMADO POR ??REA DE APROBACI??N</option>
                  <option value="8">DOCUMENTO OBSERVADO POR ??REA DE APROBACI??N</option>
                  <option value="9">DOCUMENTO V??LIDO, VERSI??N EMITIDA</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cbuarea_id" class="col-sm-2 col-form-label">??rea de Elaboraci??n del Documento</label>
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
              <label for="cbuarea_revision_id" class="col-sm-2 col-form-label">??rea de Revisi??n del Documento</label>
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
              <label for="cbuarea_aprobacion_id" class="col-sm-2 col-form-label">??rea de Aprobaci??n del Documento</label>
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
              <label for="txtfecha_ela" class="col-sm-2 col-form-label">Fecha de Elaboraci??n</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtfecha_ela" placeholder="Fecha de Elaboraci??n" v-model="fillobject.fecha_ela" maxlength="45" disabled>
              </div>
              
              <label for="txtfecha_rev" class="col-sm-2 col-form-label">Fecha de Revisi??n</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtfecha_rev" placeholder="Documento No Revisado" v-model="fillobject.fecha_rev" maxlength="45" disabled>
              </div>

              <label for="txtfecha_apr" class="col-sm-2 col-form-label">Fecha de Aprobaci??n</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="txtfecha_apr" placeholder="Documento No Aprobado" v-model="fillobject.fecha_apr" maxlength="45" disabled>
              </div>
            </div>

           {{--  <div class="form-group row">
              <label for="txtobs_revision" class="col-sm-2 col-form-label">Observaci??n de Revisi??n del Documento</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" placeholder="" id="txtobs_revision" v-model="fillobject.obs_revision" disabled></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="txtobs_aprobacion" class="col-sm-2 col-form-label">Observaci??n de Aprobaci??n del Documento</label>
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