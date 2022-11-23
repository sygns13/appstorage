<div class="col-md-12" v-if="divFormularioAlumno">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">@{{labelBtnSaveAlumno}} Alumno
          <template v-if="alumno.type == 'U'">
            @{{alumno.fullNombre}}
          </template>
          </h3>
        </div>
        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#primero-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="primero-part" id="primero-part-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">Datos Personales</span>
                </button>
              </div>
              {{-- <div class="line"></div> --}}
              <div class="step" data-target="#lugar-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="lugar-part" id="lugar-part-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Lugar de Procedencia</span>
                </button>
              </div>
              <div class="step" data-target="#nacimiento-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="nacimiento-part" id="nacimiento-part-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label">Datos de Nacimiento</span>
                </button>
              </div>
              <div class="step" data-target="#psicomotriz-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="psicomotriz-part" id="psicomotriz-part-trigger">
                  <span class="bs-stepper-circle">4</span>
                  <span class="bs-stepper-label">Psicomotriz y Discapacidad</span>
                </button>
              </div>
              <div class="step" data-target="#apoderado-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="apoderado-part" id="apoderado-part-trigger">
                  <span class="bs-stepper-circle">5</span>
                  <span class="bs-stepper-label">Apoderados</span>
                </button>
              </div>
              <div class="step" data-target="#grado-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="grado-part" id="grado-part-trigger">
                  <span class="bs-stepper-circle">6</span>
                  <span class="bs-stepper-label">Grado Académico</span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <!-- your steps content here -->
              <div id="primero-part" class="content" role="tabpanel" aria-labelledby="primero-part-trigger">
                
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cbutipo_documento_id">Tipo de Documento de Identidad <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.tipo_documento_id" id="cbutipo_documento_id" @change="changeTipoDoc()" disabled>
                        <option value="0" selected="selected">Seleccione ...</option>
                        <template v-for="(tipoDoc, index) in tipoDocumentos">
                          <option v-bind:value="tipoDoc.id">@{{tipoDoc.nombre}}</option>
                        </template>
                      </select>
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtnum_documento">Número de @{{tipoDocSelect.sigla}} <spam style="color:red;">*</spam></label>
                      <input type="text" class="form-control" id="txtnum_documento" placeholder="Documento de Identidad" v-model="alumno.num_documento" v-bind:maxlength="tipoDocSelect.digitos" readonly>
                    </div>
                  </div>
      
                  <div class="col-md-4"></div>
      
      
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtapellido_paterno">Apellido Paterno<spam style="color:red;">*</spam></label>
                      <input type="text" class="form-control" id="txtapellido_paterno" placeholder="Apellido Paterno" v-model="alumno.apellido_paterno" maxlength="100">
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtapellido_materno">Apellido Materno<spam style="color:red;">*</spam></label>
                      <input type="text" class="form-control" id="txtapellido_materno" placeholder="Apellido Materno" v-model="alumno.apellido_materno" maxlength="100">
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtnombres">Nombres <spam style="color:red;">*</spam></label>
                      <input type="text" class="form-control" id="txtnombres" placeholder="Nombres" v-model="alumno.nombres" maxlength="250">
                    </div>
                  </div>
      
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtfecha_nacimiento">Fecha de Nacimiento <spam style="color:red;">*</spam></label>
                      <input type="date" class="form-control" id="txtfecha_nacimiento" placeholder="dd/mm/yyyy" v-model="alumno.fecha_nacimiento">
                    </div>
                  </div>
      
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="cbugenero">Género <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.genero" id="cbugenero">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtcorreo">Email <spam style="color:red;">*</spam></label>
                      <input type="text" class="form-control" id="txtcorreo" placeholder="Email" v-model="alumno.correo" maxlength="500">
                    </div>
                  </div>
      
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txttelefono">Teléfono</label>
                      <input type="text" class="form-control" id="txttelefono" placeholder="Telefono" v-model="alumno.telefono" maxlength="45">
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtdireccion">Dirección</label>
                      <input type="text" class="form-control" id="txtdireccion" placeholder="Dirección" v-model="alumno.direccion" maxlength="500">
                    </div>
                  </div>
      
                </div>
                <br>

                <button class="btn btn-primary" @click="siguienteNuevoAlumno()">Siguiente <span class="fas fa-angle-right right"></span></button>

                <button v-if="alumno.type == 'C'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumno()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
                <button v-if="alumno.type == 'U'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumnoEdit()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
              </div>




              <div id="lugar-part" class="content" role="tabpanel" aria-labelledby="lugar-part-trigger">

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cbupais">País <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.pais_id" id="cbupais" @change="changePais()">
                        <option value="0" disabled>Seleccione ...</option>
                        @foreach ($estados as $dato)
                        <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4" v-if="alumno.pais_id == '1'">
                    <div class="form-group">
                      <label for="cbudepartamento">Departamento <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.departamento_id" id="cbudepartamento" @change="changeDep()">
                        <option value="0" disabled>Seleccione ...</option>
                        @foreach ($departamentos as $dato)
                        <option value="{{$dato->id}}" v-if="alumno.pais_id == '{{$dato->estado_id}}'">{{$dato->nombre}}</option> 
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4" v-if="alumno.pais_id == '1'">
                    <div class="form-group">
                      <label for="cbuprovincia">Provincia <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.provincia_id" id="cbuprovincia" @change="changeProv()">
                        <option value="0" disabled>Seleccione ...</option>
                        @foreach ($provincias as $dato)
                        <option value="{{$dato->id}}" v-if="alumno.departamento_id == '{{$dato->departamento_id}}'">{{$dato->nombre}}</option> 
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4" v-if="alumno.pais_id == '1'">
                    <div class="form-group">
                      <label for="cbudistrito">Distrito <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.distrito_id" id="cbudistrito" >
                        <option value="0" disabled>Seleccione ...</option>
                        @foreach ($distritos as $dato)
                        <option value="{{$dato->id}}" v-if="alumno.provincia_id == '{{$dato->provincia_id}}'">{{$dato->nombre}}</option> 
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtlugar">Lugar</label>
                      <input type="text" class="form-control" id="txtlugar" placeholder="Lugar de Procedencia" v-model="alumno.lugar" maxlength="150">
                    </div>
                  </div>

                </div>

                <br>




                <button class="btn btn-primary" @click="atrasNuevoAlumno()" style="margin-right: 10px;"><span class="fas fa-angle-left right"></span> Atras</button>
                <button class="btn btn-primary" @click="siguienteNuevoAlumno()">Siguiente <span class="fas fa-angle-right right"></span></button>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                <button v-if="alumno.type == 'C'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumno()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
                <button v-if="alumno.type == 'U'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumnoEdit()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
              </div>

              <div id="nacimiento-part" class="content" role="tabpanel" aria-labelledby="nacimiento-part-trigger">

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="cbunacimiento">Nacimiento <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.nacimiento" id="cbunacimiento">
                        <option value="0">Normal</option>
                        <option value="1">Cesárea</option>
                        <option value="2">Con complicaciones</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="cbunacimiento_registrado">Nacimiento Registrado <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.nacimiento_registrado" id="cbunacimiento_registrado">
                        <option value="1">Si</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="txtobs_nacimiento">Observaciones de Nacimiento</label>
                      <input type="text" class="form-control" id="txtobs_nacimiento" placeholder="Observaciones" v-model="alumno.obs_nacimiento" maxlength="500">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtlengua_materna">Lengua Materna</label>
                      <input type="text" class="form-control" id="txtlengua_materna" placeholder="Castellano" v-model="alumno.lengua_materna" maxlength="100">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtsegunda_lengua">Segunda Lengua</label>
                      <input type="text" class="form-control" id="txtsegunda_lengua" placeholder="Quechua" v-model="alumno.segunda_lengua" maxlength="100">
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtnum_hermanos">Número de Hermanos</label>
                      <input id="txtnum_hermanos" name="txtnum_hermanos" type="text" placeholder="0" class="form-control" v-model="alumno.num_hermanos" maxlength="2" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtlugar_hermano">Lugar entre hermanos</label>
                      <input id="txtlugar_hermano" name="txtlugar_hermano" type="text" placeholder="0" class="form-control" v-model="alumno.lugar_hermano" maxlength="2" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtreligion">Religión</label>
                      <input type="text" class="form-control" id="txtreligion" placeholder="Religion" v-model="alumno.religion" maxlength="100">
                    </div>
                  </div>
                </div>

                <br>

                <button class="btn btn-primary" @click="atrasNuevoAlumno()" style="margin-right: 10px;"><span class="fas fa-angle-left right"></span> Atras</button>
                <button class="btn btn-primary" @click="siguienteNuevoAlumno()">Siguiente <span class="fas fa-angle-right right"></span></button>

                <button v-if="alumno.type == 'C'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumno()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
                <button v-if="alumno.type == 'U'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumnoEdit()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>

              </div>


              <div id="psicomotriz-part" class="content" role="tabpanel" aria-labelledby="psicomotriz-part-trigger">

                <h5>Aspecto Psicomotriz (En blanco si no aplica) A que edad en meses : </h5>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtlevanto_cabeza">Levantó la cabeza</label>
                      <input id="txtlevanto_cabeza" name="txtlevanto_cabeza" type="text" placeholder="0" class="form-control" v-model="alumno.levanto_cabeza" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtse_sento">Se sentó</label>
                      <input id="txtse_sento" name="txtse_sento" type="text" placeholder="0" class="form-control" v-model="alumno.se_sento" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtse_paro">Se paró</label>
                      <input id="txtse_paro" name="txtse_paro" type="text" placeholder="0" class="form-control" v-model="alumno.se_paro" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtse_camino">Caminó</label>
                      <input id="txtse_camino" name="txtse_camino" type="text" placeholder="0" class="form-control" v-model="alumno.se_camino" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtse_control_esfinter">Controló su esfinter</label>
                      <input id="txtse_control_esfinter" name="txtse_control_esfinter" type="text" placeholder="0" class="form-control" v-model="alumno.se_control_esfinter" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtse_primeras_palabras">Habló primeras palabras</label>
                      <input id="txtse_primeras_palabras" name="txtse_primeras_palabras" type="text" placeholder="0" class="form-control" v-model="alumno.se_primeras_palabras" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="txtse_hablo_fluido">Habló Fluido</label>
                      <input id="txtse_hablo_fluido" name="txtse_hablo_fluido" type="text" placeholder="0" class="form-control" v-model="alumno.se_hablo_fluido" maxlength="3" onkeypress="return soloNumeros(event);">
                    </div>
                  </div>

                </div>

                <h5>Discapacidades</h5>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="alumno.DI" value="1" id="checkboxDI">
                      <label class="form-check-label">Discapacidad Intelectual</label>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="alumno.DA" value="1" id="checkboxDA">
                      <label class="form-check-label">Discapacidad Auditiva</label>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="alumno.DV" value="1" id="checkboxDV">
                      <label class="form-check-label">Discapacidad Visual</label>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="alumno.DM" value="1" id="checkboxDM">
                      <label class="form-check-label">Discapacidad Motora</label>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="alumno.SC" value="1" id="checkboxSC">
                      <label class="form-check-label">Sordoceguera</label>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="alumno.OT" value="1" id="checkboxOT">
                      <label class="form-check-label">Otros</label>
                    </div>
                  </div>


                </div>

                <br>

                <button class="btn btn-primary" @click="atrasNuevoAlumno()" style="margin-right: 10px;"><span class="fas fa-angle-left right"></span> Atras</button>
                <button class="btn btn-primary" @click="siguienteNuevoAlumno()">Siguiente <span class="fas fa-angle-right right"></span></button>

                <button v-if="alumno.type == 'C'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumno()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
                <button v-if="alumno.type == 'U'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumnoEdit()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
              </div>

              <div id="apoderado-part" class="content" role="tabpanel" aria-labelledby="apoderado-part-trigger">

                <div class="card card-primary card-outline card-tabs">
                  <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-three-madre-tab" data-toggle="pill" href="#custom-tabs-three-madre" role="tab" aria-controls="custom-tabs-three-madre" aria-selected="true">Madre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-padre-tab" data-toggle="pill" href="#custom-tabs-three-padre" role="tab" aria-controls="custom-tabs-three-padre" aria-selected="false">Padre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-otroapoderado-tab" data-toggle="pill" href="#custom-tabs-three-otroapoderado" role="tab" aria-controls="custom-tabs-three-otroapoderado" aria-selected="false">Otro</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-three-madre" role="tabpanel" aria-labelledby="custom-tabs-three-madre-tab">
                         
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="cbutipo_documento_idM">Tipo de Documento de Identidad <spam style="color:red;">*</spam></label>
                              <select class="form-control" style="width: 100%;" v-model="apoderadoMadre.tipo_documento_id" id="cbutipo_documento_idM" @change="changeTipoDocM()">
                                <option value="0" disabled>Seleccione ...</option>
                                <template v-for="(tipoDoc, index) in tipoDocumentos">
                                  <option v-bind:value="tipoDoc.id">@{{tipoDoc.nombre}}</option>
                                </template>
                              </select>
                            </div>
                          </div>
            
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="txtnum_documentoM">Número de @{{tipoDocSelectM.sigla}} <spam style="color:red;">*</spam></label>
                              <input type="text" class="form-control" id="txtnum_documentoM" placeholder="Documento de Identidad" v-model="apoderadoMadre.num_documento" v-bind:maxlength="tipoDocSelectM.digitos">
                            </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtapellido_paternoM">Apellido Paterno<spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtapellido_paternoM" placeholder="Apellido Paterno" v-model="apoderadoMadre.apellido_paterno" maxlength="100">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtapellido_maternoM">Apellido Materno<spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtapellido_maternoM" placeholder="Apellido Materno" v-model="apoderadoMadre.apellido_materno" maxlength="100">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtnombresM">Nombres <spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtnombresM" placeholder="Nombres" v-model="apoderadoMadre.nombres" maxlength="250">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtfecha_nacimientoM">Fecha de Nacimiento <spam style="color:red;">*</spam></label>
                            <input type="date" class="form-control" id="txtfecha_nacimientoM" placeholder="dd/mm/yyyy" v-model="apoderadoMadre.fecha_nacimiento">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtcorreoM">Email <spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtcorreoM" placeholder="Email" v-model="apoderadoMadre.correo" maxlength="500">
                          </div>
                        </div>
            
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txttelefonoM">Teléfono</label>
                            <input type="text" class="form-control" id="txttelefonoM" placeholder="Telefono" v-model="apoderadoMadre.telefono" maxlength="45">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtdireccionM">Dirección</label>
                            <input type="text" class="form-control" id="txtdireccionM" placeholder="Dirección" v-model="apoderadoMadre.direccion" maxlength="500">
                          </div>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="cbuescolaridad_siglaM">Grado de Instrucción</label>
                            {{-- <input type="text" class="form-control" id="txtgrado_instruccionM" placeholder="Dirección" v-model="apoderadoMadre.grado_instruccion" maxlength="100"> --}}
                            <select class="form-control" style="width: 100%;" v-model="apoderadoMadre.escolaridad_sigla" id="cbuescolaridad_siglaM">
                              <option value="" disabled>Seleccione ...</option>
                              <option value="SE" >SIN ESCOLARIDAD</option>
                              <option value="P" >PRIMARIA COMPLETA</option>
                              <option value="PI" >PRIMARIA INCOMPLETA</option>
                              <option value="S" >SECUNDARIA COMPLETA</option>
                              <option value="SI" >SECUNDARIA INCOMPLETA</option>
                              <option value="SP" >SUPERIOR COMPLETA</option>
                              <option value="SPI" >SUPERIOR INCOMPLETA</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtocupacionM">Ocupación</label>
                            <input type="text" class="form-control" id="txtocupacionM" placeholder="Dirección" v-model="apoderadoMadre.ocupacion" maxlength="100">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtreligionM">Religión</label>
                            <input type="text" class="form-control" id="txtreligionM" placeholder="Dirección" v-model="apoderadoMadre.religion" maxlength="100">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoMadre.vive" value="1" id="checkboxMadreVive">
                            <label class="form-check-label">Vive</label>
                          </div>
                        </div>
      
                        <div class="col-md-12" v-if="apoderadoMadre.vive == '1'">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoMadre.vive_con_estudiante" value="1" id="checkboxMadreViveAlumno">
                            <label class="form-check-label">Vive con el Alumno</label>
                          </div>
                        </div>
      
                        <div class="col-md-12" v-if="apoderadoMadre.vive == '1'">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoMadre.principal" value="1" id="checkboxMadreApodPrincipal"
                            @change="selectApoPrincipalMadre()">
                            <label class="form-check-label">Es el apoderado Principal</label>
                          </div>
                        </div>
                      </div>



                      
                      </div>
                      <div class="tab-pane fade" id="custom-tabs-three-padre" role="tabpanel" aria-labelledby="custom-tabs-three-padre-tab">
                         
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="cbutipo_documento_idP">Tipo de Documento de Identidad <spam style="color:red;">*</spam></label>
                              <select class="form-control" style="width: 100%;" v-model="apoderadoPadre.tipo_documento_id" id="cbutipo_documento_idP" @change="changeTipoDocP()">
                                <option value="0" disabled>Seleccione ...</option>
                                <template v-for="(tipoDoc, index) in tipoDocumentos">
                                  <option v-bind:value="tipoDoc.id">@{{tipoDoc.nombre}}</option>
                                </template>
                              </select>
                            </div>
                          </div>
            
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="txtnum_documentoP">Número de @{{tipoDocSelectP.sigla}} <spam style="color:red;">*</spam></label>
                              <input type="text" class="form-control" id="txtnum_documentoP" placeholder="Documento de Identidad" v-model="apoderadoPadre.num_documento" v-bind:maxlength="tipoDocSelectP.digitos">
                            </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtapellido_paternoP">Apellido Paterno<spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtapellido_paternoP" placeholder="Apellido Paterno" v-model="apoderadoPadre.apellido_paterno" maxlength="100">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtapellido_maternoP">Apellido Materno<spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtapellido_maternoP" placeholder="Apellido Paterno" v-model="apoderadoPadre.apellido_materno" maxlength="100">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtnombresP">Nombres <spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtnombresP" placeholder="Nombres" v-model="apoderadoPadre.nombres" maxlength="250">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtfecha_nacimientoP">Fecha de Nacimiento <spam style="color:red;">*</spam></label>
                            <input type="date" class="form-control" id="txtfecha_nacimientoP" placeholder="dd/mm/yyyy" v-model="apoderadoPadre.fecha_nacimiento">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtcorreoP">Email <spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtcorreoP" placeholder="Email" v-model="apoderadoPadre.correo" maxlength="500">
                          </div>
                        </div>
            
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txttelefonoP">Teléfono</label>
                            <input type="text" class="form-control" id="txttelefonoP" placeholder="Telefono" v-model="apoderadoPadre.telefono" maxlength="45">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtdireccionP">Dirección</label>
                            <input type="text" class="form-control" id="txtdireccionP" placeholder="Dirección" v-model="apoderadoPadre.direccion" maxlength="500">
                          </div>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="cbuescolaridad_siglaP">Grado de Instrucción</label>
                            {{-- <input type="text" class="form-control" id="txtgrado_instruccionP" placeholder="Grado" v-model="apoderadoPadre.grado_instruccion" maxlength="100"> --}}
                            <select class="form-control" style="width: 100%;" v-model="apoderadoPadre.escolaridad_sigla" id="cbuescolaridad_siglaP">
                              <option value="" disabled>Seleccione ...</option>
                              <option value="SE" >SIN ESCOLARIDAD</option>
                              <option value="P" >PRIMARIA COMPLETA</option>
                              <option value="PI" >PRIMARIA INCOMPLETA</option>
                              <option value="S" >SECUNDARIA COMPLETA</option>
                              <option value="SI" >SECUNDARIA INCOMPLETA</option>
                              <option value="SP" >SUPERIOR COMPLETA</option>
                              <option value="SPI" >SUPERIOR INCOMPLETA</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtocupacioP">Ocupación</label>
                            <input type="text" class="form-control" id="txtocupacioP" placeholder="Ocupación" v-model="apoderadoPadre.ocupacion" maxlength="100">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtreligionP">Religión</label>
                            <input type="text" class="form-control" id="txtreligionP" placeholder="Religión" v-model="apoderadoPadre.religion" maxlength="100">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoPadre.vive" value="1" id="checkboxPadreVive">
                            <label class="form-check-label">Vive</label>
                          </div>
                        </div>
      
                        <div class="col-md-12" v-if="apoderadoPadre.vive == '1'">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoPadre.vive_con_estudiante" value="1" id="checkboxPadreViveAlumno">
                            <label class="form-check-label">Vive con el Alumno</label>
                          </div>
                        </div>
      
                        <div class="col-md-12" v-if="apoderadoPadre.vive == '1'">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoPadre.principal" value="1"  id="checkboxPadreApodPrincipal"
                            @change="selectApoPrincipalPadre()">
                            <label class="form-check-label">Es el apoderado Principal</label>
                          </div>
                        </div>
                      </div>




                      </div>
                      <div class="tab-pane fade" id="custom-tabs-three-otroapoderado" role="tabpanel" aria-labelledby="custom-tabs-three-otroapoderado-tab">
                         
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="txttipo_apoderadoO">Parentesco con Alumno</label>
                              <input type="text" class="form-control" id="txttipo_apoderadoO" placeholder="Parentesco" v-model="apoderadoOtro.tipo_apoderado" maxlength="100">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="cbutipo_documento_idO">Tipo de Documento de Identidad <spam style="color:red;">*</spam></label>
                              <select class="form-control" style="width: 100%;" v-model="apoderadoOtro.tipo_documento_id" id="cbutipo_documento_idO" @change="changeTipoDocO()">
                                <option value="0" disabled>Seleccione ...</option>
                                <template v-for="(tipoDoc, index) in tipoDocumentos">
                                  <option v-bind:value="tipoDoc.id">@{{tipoDoc.nombre}}</option>
                                </template>
                              </select>
                            </div>
                          </div>
            
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="txtnum_documentoO">Número de @{{tipoDocSelectO.sigla}} <spam style="color:red;">*</spam></label>
                              <input type="text" class="form-control" id="txtnum_documentoO" placeholder="Documento de Identidad" v-model="apoderadoOtro.num_documento" v-bind:maxlength="tipoDocSelectO.digitos">
                            </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtapellido_paternoO">Apellido Paterno<spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtapellido_paternoO" placeholder="Apellido Paterno" v-model="apoderadoOtro.apellido_paterno" maxlength="100">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtapellido_maternoO">Apellido Materno<spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtapellido_maternoO" placeholder="Apellido Materno" v-model="apoderadoOtro.apellido_materno" maxlength="100">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtnombresO">Nombres <spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtnombresO" placeholder="Nombres" v-model="apoderadoOtro.nombres" maxlength="250">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtfecha_nacimientoO">Fecha de Nacimiento <spam style="color:red;">*</spam></label>
                            <input type="date" class="form-control" id="txtfecha_nacimientoO" placeholder="dd/mm/yyyy" v-model="apoderadoOtro.fecha_nacimiento">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtcorreoO">Email <spam style="color:red;">*</spam></label>
                            <input type="text" class="form-control" id="txtcorreoO" placeholder="Email" v-model="apoderadoOtro.correo" maxlength="500">
                          </div>
                        </div>
            
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txttelefonoO">Teléfono</label>
                            <input type="text" class="form-control" id="txttelefonoO" placeholder="Telefono" v-model="apoderadoOtro.telefono" maxlength="45">
                          </div>
                        </div>
            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtdireccionO">Dirección</label>
                            <input type="text" class="form-control" id="txtdireccionO" placeholder="Dirección" v-model="apoderadoOtro.direccion" maxlength="500">
                          </div>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="cbuescolaridad_siglaO">Grado de Instrucción</label>
                            {{-- <input type="text" class="form-control" id="txtgrado_instruccionO" placeholder="Grado" v-model="apoderadoOtro.grado_instruccion" maxlength="100"> --}}
                            <select class="form-control" style="width: 100%;" v-model="apoderadoOtro.escolaridad_sigla" id="cbuescolaridad_siglaO">
                              <option value="" disabled>Seleccione ...</option>
                              <option value="SE" >SIN ESCOLARIDAD</option>
                              <option value="P" >PRIMARIA COMPLETA</option>
                              <option value="PI" >PRIMARIA INCOMPLETA</option>
                              <option value="S" >SECUNDARIA COMPLETA</option>
                              <option value="SI" >SECUNDARIA INCOMPLETA</option>
                              <option value="SP" >SUPERIOR COMPLETA</option>
                              <option value="SPI" >SUPERIOR INCOMPLETA</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtocupacioO">Ocupación</label>
                            <input type="text" class="form-control" id="txtocupacioO" placeholder="Ocupación" v-model="apoderadoOtro.ocupacion" maxlength="100">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="txtreligionO">Religión</label>
                            <input type="text" class="form-control" id="txtreligionO" placeholder="Religión" v-model="apoderadoOtro.religion" maxlength="100">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoOtro.vive" value="1" id="checkboxOtroVive">
                            <label class="form-check-label">Vive</label>
                          </div>
                        </div>
      
                        <div class="col-md-12" v-if="apoderadoOtro.vive == '1'">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoOtro.vive_con_estudiante" value="1" id="checkboxOtroViveAlumno">
                            <label class="form-check-label">Vive con el Alumno</label>
                          </div>
                        </div>
      
                        <div class="col-md-12" v-if="apoderadoOtro.vive == '1'">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="apoderadoOtro.principal" value="1"  id="checkboxOtroApodPrincipal" 
                            @change="selectApoPrincipalOtro()">
                            <label class="form-check-label">Es el apoderado Principal</label>
                          </div>
                        </div>
                      </div>





                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>


                <br>

                <button class="btn btn-primary" @click="atrasNuevoAlumno()" style="margin-right: 10px;"><span class="fas fa-angle-left right"></span> Atras</button>
                <button class="btn btn-primary" @click="siguienteNuevoAlumno()">Siguiente <span class="fas fa-angle-right right"></span></button>

                <button v-if="alumno.type == 'C'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumno()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
                <button v-if="alumno.type == 'U'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumnoEdit()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>

              </div>

              <div id="grado-part" class="content" role="tabpanel" aria-labelledby="grado-part-trigger">

                <h5>Grado que corresponde Matrícula al Alumno</h5>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cbunivel_actual">Nivel <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.nivel_actual" id="cbunivel_actual" @change="changeNivel()">
                        <option value="0" disabled>Seleccione ...</option>
                        @foreach ($niveles as $dato)
                        <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cbugrado_actual">Grado <spam style="color:red;">*</spam></label>
                      <select class="form-control" style="width: 100%;" v-model="alumno.grado_actual" id="cbugrado_actual">
                        <option value="0" disabled>Seleccione ...</option>
                        @foreach ($grados as $dato)
                        <option value="{{$dato->id}}" v-if="alumno.nivel_actual == '{{$dato->nivele_id}}'">{{$dato->nombre}}</option> 
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <br>
                <button class="btn btn-primary" @click="atrasNuevoAlumno()" style="margin-right: 10px;"><span class="fas fa-angle-left right"></span> Atras</button>

                <button style="margin-right:5px;" id="btnSave" type="button" class="btn btn-success" @click="procesarAlumno()"><span class="fas fa-save"></span> @{{labelBtnSaveAlumno}}</button>

                <button v-if="alumno.type == 'C'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumno()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
                <button v-if="alumno.type == 'U'" id="btnCerrarL" type="button" class="btn btn-danger" @click="cerrarFormAlumnoEdit()" style="float:right;"><span class="fas fa-power-off"></span> Cerrar</button>
              </div>


            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <h5><b><i>@{{labelFooterAlumno}}</i></b></h5>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>