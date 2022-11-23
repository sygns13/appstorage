<div class="modal" id="modalFormulario">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">@{{labelBtnSave}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="txtcurso" class="col-sm-2 col-form-label">Curso</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtcurso" placeholder="SIGLAS" v-model="cursolbl" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cbudocente_id" class="col-sm-2 col-form-label">Seleccione Docente</label>
                  <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" v-model="fillobject.docente_id" id="cbudocente_id">
                      <option value="0" disabled>Seleccione ...</option>
                      @foreach ($docentesActivos as $dato)
                        <option value="{{$dato->id}}">{{$dato->apellidos}}, {{$dato->nombre}}</option> 
                      @endforeach
                    </select>
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