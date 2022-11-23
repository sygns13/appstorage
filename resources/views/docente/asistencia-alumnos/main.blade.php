<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">


          @if(!$cicloActivo)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Asistencia de Alumnos</h3>
                        <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                            Volver</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <h4 class="text-danger">No existe Año Escolar Activo, para gestionar horarios es necesario que un Año Escolar se encuentre Activo.</h4>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            @else

              <div class="card card-primary" v-if="!tomarAsistencia">
                  <div class="card-header">
                    <h3 class="card-title">Registro de Asistencia de Alumnos</h3>
                    <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                      Volver</a>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="txtfecha" class="col-sm-2 col-form-label">Día de Asistencia:</label>
                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="date" class="form-control" id="txtfecha" placeholder="dd/mm/yyyy" v-model="asistencia_dia.fecha" @change="cambioFecha">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12" v-if="asistencia_dia.fecha == null || asistencia_dia.fecha == ''">
                        <div class="form-group row">
                          <label for="txtfecha" class="col-sm-12 col-form-label" style="color:red; font-weight:bold;">Debe de ingresar una fecha Válida</label>
                        </div>
                      </div>


                    </div>
                  </form>
                </div>


              <div class="card card-primary" v-if="!tomarAsistencia">
                  <div class="card-header">
                    <h3 class="card-title">Cursos Habilitados Para Registro de Asistencia</h3>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="row">

                        <template v-for="(nivel, indexZ) in data.niveles">

                        <template v-if="nivel.nivel_id == 1">
                          <div class="col-md-3 col-sm-6 col-12" v-for="(curso, indexS) in nivel.cursos" >
                            <div class="info-box bg-info" style="margin-bottom: 0px; border-radius: 0.25rem 0.25rem 0px 0px;">
                              <span class="info-box-icon"><i class="fas fa-book"></i></span>
                
                              <div class="info-box-content col-12" style="line-height: 1.5;">
                                <span class="info-box-text" style="font-size: 20px;">@{{curso.curso}}</span>
                                <span class="info-box-number">@{{curso.cantAlumnos}} Alumnos</span>
                
                                <div class="progress">
                                  <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                  @{{curso.grado}} de Nivel @{{nivel.nombre}} <br> Sección @{{curso.sigla}}: @{{curso.hora_ini}} - @{{curso.hora_fin}}
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <div class="small-box bg-info" style="border-radius: 0px 0px 0.25rem 0.25rem;">
                              <a href="#" class="small-box-footer" @click.prevent="asistenciaCurso(indexZ, indexS)">
                                Registrar Asistencia <i class="fas fa-arrow-circle-right"></i>
                              </a>
                            </div>
                            <!-- /.info-box -->
                          </div>
                        </template>

                      <template v-if="nivel.nivel_id == 2">
                        <div class="col-md-3 col-sm-6 col-12" v-for="(curso, indexS) in nivel.cursos" >
                          <div class="info-box bg-primary" style="margin-bottom: 0px; border-radius: 0.25rem 0.25rem 0px 0px;">
                            <span class="info-box-icon"><i class="fas fa-book"></i></span>
              
                            <div class="info-box-content col-12" style="line-height: 1.5;">
                              <span class="info-box-text" style="font-size: 20px;">@{{curso.curso}}</span>
                              <span class="info-box-number">@{{curso.cantAlumnos}} Alumnos</span>
              
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                @{{curso.grado}} de Nivel @{{nivel.nombre}} <br> Sección @{{curso.sigla}}: @{{curso.hora_ini}} - @{{curso.hora_fin}}
                              </span>
                            </div>
                            <!-- /.primary-box-content -->
                          </div>
                          <div class="small-box bg-primary" style="border-radius: 0px 0px 0.25rem 0.25rem;">
                            <a href="#" class="small-box-footer" @click.prevent="asistenciaCurso(indexZ, indexS)">
                              Registrar Asistencia <i class="fas fa-arrow-circle-right"></i>
                            </a>
                          </div>
                          <!-- /.primary-box -->
                        </div>
                      </template>

                      <template v-if="nivel.nivel_id == 3">
                        <div class="col-md-3 col-sm-6 col-12" v-for="(curso, indexS) in nivel.cursos" >
                          <div class="info-box bg-success" style="margin-bottom: 0px; border-radius: 0.25rem 0.25rem 0px 0px;">
                            <span class="info-box-icon"><i class="fas fa-book"></i></span>
              
                            <div class="info-box-content col-12" style="line-height: 1.5;">
                              <span class="info-box-text" style="font-size: 20px;">@{{curso.curso}}</span>
                              <span class="info-box-number">@{{curso.cantAlumnos}} Alumnos</span>
              
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                @{{curso.grado}} de Nivel @{{nivel.nombre}} <br> Sección @{{curso.sigla}}: @{{curso.hora_ini}} - @{{curso.hora_fin}}
                              </span>
                            </div>
                            <!-- /.success-box-content -->
                          </div>
                          <div class="small-box bg-success" style="border-radius: 0px 0px 0.25rem 0.25rem;">
                            <a href="#" class="small-box-footer" @click.prevent="asistenciaCurso(indexZ, indexS)">
                              Registrar Asistencia <i class="fas fa-arrow-circle-right"></i>
                            </a>
                          </div>
                          <!-- /.success-box -->
                        </div>
                      </template>

                      </template>


                        
                      </div>



                    </div>
                  </form>
                </div>
          </div>





          <div class="col-md-12" v-if="tomarAsistencia">
              <div class="card card-primary">
                  <div class="card-header">


                    <h3 class="card-title">
                      @{{asistencia_dia.grado}} de Nivel @{{asistencia_dia.nivel}} 
                      <br> Sección @{{asistencia_dia.seccion}}
                      <br> Fecha:
                      @{{asistencia_dia.fecha.substring(8,10)}}/
                      @{{asistencia_dia.fecha.substring(5,7)}}/
                      @{{asistencia_dia.fecha.substring(0,4)}}
                      <br>
                      Horario: @{{asistencia_dia.horaIni}} - @{{asistencia_dia.horaFin}}
                      <br> <br> 
                      Asistencia del Curso: @{{asistencia_dia.curso}} 
                    </h3>

                    <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="#" @click.prevent="cerrarFormDiaAsistencia"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                      Volver</a>
                  </div>
                  <form>
                    <div class="card-body">

                      <form class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="txtsiglas" class="col-sm-2 col-form-label">Tema</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="txtsiglas" placeholder="Tema de la clase" v-model="asistencia_dia.tema" maxlength="250">
                            </div>
                            <div class="col-sm-2">
                              <button id="btnSaveZero" type="button" class="btn btn-primary" @click="procesarDiaAsistencia()"><span class="fas fa-save"></span> Registrar</button>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </form>





                      <div class="table-responsive p-0" v-if="alumnos.length > 0">
                          <table class="table table-bordered table-sm">
                            <thead>
                              <tr>
                                  <th class="titles-table" style="font-size:14px; width: 5%; vertical-align: middle; text-align: center;">N°</th>
                                  <th class="titles-table" style="font-size:14px; width: 20%; vertical-align: middle; text-align: center;">DNI o Código del Estudiante</th>
                                  <th class="titles-table" style="font-size:14px; width: 35%; vertical-align: middle; text-align: center;">Apellidos y Nombres</th>
                                  <th class="titles-table" style="font-size:14px; width: 10%; vertical-align: middle; text-align: center;">Sexo</th>  
                                  <th class="titles-table" style="font-size:14px; width: 15%; vertical-align: middle; text-align: center;">Asistencia</th>
                                  <th class="titles-table" style="font-size:14px; width: 15%; vertical-align: middle; text-align: center;">Acción</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr v-for="(registro, indexS) in alumnos">
                                  <td class="rows-table">@{{indexS+1}}.</td>
                                  <td class="rows-table">@{{registro.sigla_tipodoc}}: @{{registro.num_documento_alu}}</td>
                                  <td class="rows-table">@{{registro.apellido_paterno_alu}} @{{registro.apellido_materno_alu}}, @{{registro.nombres_alu}}</td>
                                  <td class="rows-table">@{{registro.genero_alu}}</td>
                                  <td class="rows-table" style="text-align: center;">
                                    <small style="font-size: 13px;" class="badge badge-success" v-if="registro.estado_asistencia=='1'">Asistió</small>
                                    <small style="font-size: 13px;" class="badge badge-warning" v-if="registro.estado_asistencia=='2'">Tardanza</small>
                                    <small style="font-size: 13px;" class="badge badge-danger" v-if="registro.estado_asistencia=='0'">Falta</small>
                                  </td>
                                  <td class="rows-table">
                                    <template v-if="registro.id_asistencia == '0'">
                                      <center>
                                        <x-adminlte-button @click="nuevo('1', registro)" id="btnNuevo1" class="bg-gradient btn-sm" type="button" label="A" theme="success"
                                        data-placement="top" data-toggle="tooltip" title="Registrar Asistencia" style="margin-right: 5px;"/>

                                        <x-adminlte-button @click="nuevo('2', registro)" id="btnNuevo2" class="bg-gradient btn-sm" type="button" label="T" theme="warning"
                                        data-placement="top" data-toggle="tooltip" title="Registrar Tardanza" style="margin-right: 5px;"/>

                                        <x-adminlte-button @click="nuevo('0', registro)" id="btnNuevo3" class="bg-gradient btn-sm" type="button" label="F" theme="danger"
                                        data-placement="top" data-toggle="tooltip" title="Registrar Asistencia" />
                                        </center>
                                    </template>
                                    <template v-else>
                                      <center>
                                        <x-adminlte-button @click="edit('1', registro)" id="btnNuevo1" class="bg-gradient btn-sm" type="button" label="A" theme="success"
                                        data-placement="top" data-toggle="tooltip" title="Registrar Asistencia" style="margin-right: 5px;"/>

                                        <x-adminlte-button @click="edit('2', registro)" id="btnNuevo2" class="bg-gradient btn-sm" type="button" label="T" theme="warning"
                                        data-placement="top" data-toggle="tooltip" title="Registrar Tardanza" style="margin-right: 5px;"/>

                                        <x-adminlte-button @click="edit('0', registro)" id="btnNuevo3" class="bg-gradient btn-sm" type="button" label="F" theme="danger"
                                        data-placement="top" data-toggle="tooltip" title="Registrar Asistencia" />
                                        </center>
                                    </template>
                                </td>
                              </tr>
                          </table>
                      </div>
                      <div v-else>
                          <h6>No existen alumnos matriculados en esta sección</h6>
                      </div>
                    </div>
                  </form>
                </div>
          </div>

        @endif
    </div>
</div>