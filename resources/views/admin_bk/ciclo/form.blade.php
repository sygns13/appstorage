  <div class="col-md-12" v-if="divFormulario">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">@{{labelBtnSave}} Año Escolar</h3>
      </div>

      <form>
        <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="txtyear">Año <spam style="color:red;">*</spam></label>
                  <input type="number" class="form-control" id="txtyear" placeholder="Año Escolar" v-model="fillobject.year">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="txtnombre">Nombre <spam style="color:red;">*</spam></label>
                  <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" v-model="fillobject.nombre" maxlength="100">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="txtfecha_ini_clases">Fecha de Inicio de Clases <spam style="color:red;">*</spam></label>
                  <input type="date" class="form-control" id="txtfecha_ini_clases" placeholder="dd/mm/yyyy" v-model="fillobject.fecha_ini_clases">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="txtfecha_fin_clases">Fecha de Fin de Clases <spam style="color:red;">*</spam></label>
                  <input type="date" class="form-control" id="txtfecha_fin_clases" placeholder="dd/mm/yyyy" v-model="fillobject.fecha_fin_clases">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="cbuopcion">Sistema de Calificación <spam style="color:red;">*</spam></label>
                  <select class="form-control" style="width: 100%;" v-model="fillobject.opcion" id="cbuopcion">
                    <option value="1">Trimestral</option>
                    <option value="2">Bimestral</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cbuturno_id1">Turno Habilitado del Nivel Inicial <spam style="color:red;">*</spam></label>
                  <select class="form-control" style="width: 100%;" v-model="cicloNivelInicial.turno_id" id="cbuturno_id1">
                    @foreach ($turnos as $dato)
                      <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cbuturno_id2">Turno Habilitado del Nivel Primaria <spam style="color:red;">*</spam></label>
                  <select class="form-control" style="width: 100%;" v-model="cicloNivelPrimaria.turno_id" id="cbuturno_id2">
                    @foreach ($turnos as $dato)
                      <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cbuturno_id3">Turno Habilitado del Nivel Secundaria <spam style="color:red;">*</spam></label>
                  <select class="form-control" style="width: 100%;" v-model="cicloNivelSecundaria.turno_id" id="cbuturno_id3">
                    @foreach ($turnos as $dato)
                      <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>

          <div class="card-footer">
            <button style="margin-right:5px;" id="btnClose" type="button" class="btn btn-primary" @click="procesar()"><span class="fas fa-save"></span> @{{labelBtnSave}}</button>
            <button id="btnGuardar" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarForm()"><span class="fas fa-power-off"></span> Cerrar</button>
          </div>

        </form>
    </div>
</div>