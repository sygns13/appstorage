<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">


          @if(!$cicloActivo)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Asistencia de Docentes</h3>
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

              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Registro de Asistencia de Docentes</h3>
                    <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                      Volver</a>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="txtfecha" class="col-sm-2 col-form-label">Fecha de Asistencia:</label>
                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="date" class="form-control" id="txtfecha" placeholder="dd/mm/yyyy" v-model="docentes_asistencias_dia.fecha" @change="cambioFecha">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12" v-if="docentes_asistencias_dia.fecha == null || docentes_asistencias_dia.fecha == ''">
                        <div class="form-group row">
                          <label for="txtfecha" class="col-sm-12 col-form-label" style="color:red; font-weight:bold;">Debe de ingresar una fecha Válida</label>
                        </div>
                      </div>

                      <div class="col-md-12" v-if="docentes_asistencias_dia != null && docentes_asistencias_dia.fecha != null && docentes_asistencias_dia.fecha != '' && docentes_asistencias_dia.id == 0">
                        <div class="form-group row">
                          <label for="txtfecha" class="col-sm-2 col-form-label">El Día de Asistencia no está Iniciado:</label>
                          <x-adminlte-button @click="nuevoDiaAsistencia()" id="btnNuevoDiaAsistencia" class="bg-gradient btn-sm" type="button" label="Iniciar Día de Asistencia" theme="primary" icon="fas fa-plus-square"/>
                        </div>
                      </div>

                      <div class="col-md-12" v-if="docentes_asistencias_dia != null && docentes_asistencias_dia.fecha != null && docentes_asistencias_dia.fecha != '' && docentes_asistencias_dia.id != 0">
                        <div class="form-group row">
                          <label for="txtfecha" class="col-sm-2 col-form-label">Tipo de Día:</label>
                          <label for="txtfecha" class="col-sm-10 col-form-label;" style="font-weight: bold;">
                          <template v-if="docentes_asistencias_dia.tipo == '1'">Día Laborable</template>
                          <template v-if="docentes_asistencias_dia.tipo == '2'">Día Feriado</template>
                          </label>
                        </div>
                        <div class="form-group row">
                          <label for="txtfecha" class="col-sm-2 col-form-label">Opciones:</label>
                          <x-adminlte-button @click="editDiaAsistencia(docentes_asistencias_dia)" id="btnEditDiaAsistencia" class="bg-gradient btn-sm" type="button" label="Editar Día de Asistencia" theme="warning" icon="fas fa-edit" style="margin-left: 5px; margin-right: 5px;"/>
                          <x-adminlte-button @click="borrarDiaAsistencia(docentes_asistencias_dia)" id="btnBorrarDiaAsistencia" class="bg-gradient btn-sm" type="button" label="Eliminar Día de Asistencia" theme="danger" icon="fas fa-trash" style="margin-left: 5px; margin-right: 5px;"/>
                        </div>
                      </div>


                    </div>
                  </form>
                </div>
          </div>


          <div class="col-md-12" v-if="docentes_asistencias_dia != null && docentes_asistencias_dia.fecha != null && docentes_asistencias_dia.fecha != '' && docentes_asistencias_dia.id != 0">
              <div class="card card-primary">
                  <div class="card-header">


                    <h3 class="card-title">Control de Asistencia de Docentes del Día: 
                      @{{docentes_asistencias_dia.fecha.substring(8,10)}}/
                      @{{docentes_asistencias_dia.fecha.substring(5,7)}}/
                      @{{docentes_asistencias_dia.fecha.substring(0,4)}}
                    </h3>


                  </div>
                  <form>
                    <div class="card-body">
                      <div class="table-responsive p-0" v-if="registros.length > 0">
                          <table class="table table-bordered table-sm">
                              <thead>
                                  <tr>
                                      <th class="titles-table" style="width: 5%">#</th>
                                      <th class="titles-table" style="width: 8%">Documento de Identidad</th>
                                      <th class="titles-table" style="width: 14%">Nombres y Apellidos</th>
                                      <th class="titles-table" style="width: 8%">Código de Plaza</th>
                                      <th class="titles-table" style="width: 7%">Teléfono</th>
                                      <th class="titles-table" style="width: 13%">Dirección</th>
                                      <th class="titles-table" style="width: 10%">Username</th>
                                      <th class="titles-table" style="width: 13%">Email</th>
                                      <th class="titles-table" style="width: 10%">Estado</th>
                                      <th class="titles-table" style="width: 13%">Acción</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr v-for="(registro, indexS) in registros">
                                      <td class="rows-table">@{{indexS+pagination.from}}.</td>      
                                      <td class="rows-table">@{{registro.tipo_documentos_sigla}}: @{{registro.num_documento}}</td>
                                      <td class="rows-table">@{{registro.nombre}} @{{registro.apellidos}}</td>
                                      <td class="rows-table">@{{registro.codigo_plaza}}</td>
                                      <td class="rows-table">@{{registro.telefono}}</td>
                                      <td class="rows-table">@{{registro.direccion}}</td>
                                      <td class="rows-table">@{{registro.users_name}}</td>
                                      <td class="rows-table">@{{registro.users_email}}</td>

                                      <td class="rows-table" style="text-align: center;">
                                        <small style="font-size: 13px;" class="badge badge-success" v-if="registro.estado_asistencia=='1'">Asistió</small>
                                        <small style="font-size: 13px;" class="badge badge-warning" v-if="registro.estado_asistencia=='2'">Tardanza</small>
                                        <small style="font-size: 13px;" class="badge badge-danger" v-if="registro.estado_asistencia=='0'">Falta</small>
                                      </td>
                                      <td>
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
                              </tbody>
                          </table>

                          <div style="padding: 15px;">
                              <div><h6>Registros por Página: @{{ pagination.per_page }}</h6></div>
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                <li class="page-item" v-if="pagination.current_page>1">
                                  <a class="page-link" href="#" @click.prevent="changePage(1)">
                                  <span><b>Inicio</b></span>
                                </a>
                              </li>
                            
                              <li class="page-item" v-if="pagination.current_page>1">
                                <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page-1)">
                                <span>Atras</span>
                              </a>
                            </li>
                            <li class="page-item" v-for="page in pagesNumber" v-bind:class="[page=== isActived ? 'active' : '']">
                              <a class="page-link" href="#" @click.prevent="changePage(page)">
                              <span>@{{ page }}</span>
                            </a>
                            </li>
                            <li class="page-item" v-if="pagination.current_page< pagination.last_page">
                              <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page+1)">
                              <span>Siguiente</span>
                            </a>
                            </li>
                            <li class="page-item" v-if="pagination.current_page< pagination.last_page">
                              <a class="page-link" href="#" @click.prevent="changePage(pagination.last_page)">
                              <span><b>Ultima</b></span>
                            </a>
                            </li>
                            </ul>
                            </nav>
                            <div><h6>Registros Totales: @{{ pagination.total }}</h6></div>
                            </div>
                      </div>
                      <div v-else>
                          <h6>No existen registros de Horas en el Turno @{{turnoNombre}}</h6>
                      </div>
                    </div>
                  </form>
                </div>
          </div>
        @endif
    </div>
</div>