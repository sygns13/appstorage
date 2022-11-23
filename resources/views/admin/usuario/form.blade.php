<div class="col-md-12" v-if="divFormulario">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">@{{labelBtnSave}} Usuario</h3>
    </div>

    <form>
      <div class="card-body">

          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label for="cbuarea_id">Área del Usuario <spam style="color:red;">*</spam></label>
                  <select class="form-control" style="width: 100%;" v-model="fillobject.area_id" id="cbuarea_id" @change="changeArea">
                    <option value="0" disabled>Seleccione ...</option>
                    @foreach ($areas as $dato)
                      <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
              </div>
            </div>
            @foreach ($areas as $dato)
            <input type="hidden" value="{{$dato->nivel}}" id="txtareanivel-{{$dato->id}}" name="txtareanivel-{{$dato->id}}" />
            @endforeach

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtdni">Número de DNI <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtdni" placeholder="Documento de Identidad" v-model="fillobject.dni" maxlength="8">
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="txtapellidos">Apellidos <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtapellidos" placeholder="Apellidos" v-model="fillobject.apellidos" maxlength="250">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="txtnombres">Nombres <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtnombres" placeholder="Nombres" v-model="fillobject.nombres" maxlength="250">
              </div>
            </div>


            <div class="col-md-2">
              <div class="form-group">
                <label for="txttelefono">Teléfono</label>
                <input type="text" class="form-control" id="txttelefono" placeholder="Telefono" v-model="fillobject.telefono" maxlength="45">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtdireccion">Dirección</label>
                <input type="text" class="form-control" id="txtdireccion" placeholder="Dirección" v-model="fillobject.direccion" maxlength="500">
              </div>
            </div>

          </div>

          
          <div class="col-md-12">
            <hr>
          </div>
          <h5 style="font-weight: bold;">Datos de Usuario del Sistema:</h5>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="cbutipo_user_id">Tipos de Usuarios <spam style="color:red;">*</spam></label>
                  <select class="form-control" style="width: 100%;" v-model="fillobject.tipo_user_id" id="cbutipo_user_id">
                    {{-- <option value="0" disabled>Seleccione ...</option> --}}
                    @foreach ($tipoUsers as $dato)
                      <option value="{{$dato->id}}" selected v-if="fillobject.nivel ==  '{{$dato->id}}'">{{$dato->nombre}}</option> 
                    @endforeach
                  </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="txtemail">Email <spam style="color:red;">*</spam></label>
                <input type="email" class="form-control" id="txtemail" placeholder="Email" v-model="fillobject.email" maxlength="255" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="txtname">Username <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtname" placeholder="Username" v-model="fillobject.name" maxlength="255">
              </div>
            </div>
          </div>

          <div class="row" v-if="fillobject.type=='U'">
            <div class="col-md-6">
              <div class="form-group">
                <label for="cbumodifPsw">¿Modificar Password? <spam style="color:red;">*</spam></label>
                <select class="form-control" style="width: 100%;" v-model="fillobject.modifPsw" id="cbumodifPsw">
                  <option value="0">No</option>
                  <option value="1">Si</option>
                </select>
              </div>
            </div>
          </div>


          <div class="row" v-if="parseInt(fillobject.modifPsw)==1 || fillobject.type=='C'">
            <div class="col-md-6">
              <div class="form-group">
                <label for="txtpassword">Password <spam style="color:red;">*</spam></label>
                <input type="password" class="form-control" id="txtpassword" placeholder="Password" v-model="fillobject.password" maxlength="255">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="cbuactivo">Estado de la Cuenta de Usuario <spam style="color:red;">*</spam></label>
                <select class="form-control" style="width: 100%;" v-model="fillobject.activo" id="cbuactivo">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
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