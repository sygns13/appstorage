<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Mantenimiento de Años Escolares</h3>
                  <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                          <x-adminlte-button @click="nuevo()" id="btnNuevo" class="bg-gradient btn-sm" type="button" label="Nuevo Año Escolar" theme="primary" icon="fas fa-plus-square"/>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
        </div>

        @include('admin.ciclo.form')

        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Listado de Años Escolares</h3>
                </div>
                <form>
                  <div class="card-body">
                    <div class="col-md-12" style="margin-bottom:15px;">
                        <div class="input-group input-group-sm" style="max-width: 300px;">
                          <input type="text" name="table_search" class="form-control" placeholder="Buscar" v-model="buscar" @keyup.enter="buscarBtn()">
                          <span class="input-group-append">
                            <button type="submit" class="btn btn-default" @click.prevent="buscarBtn()"><i class="fa fa-search"></i></button>
                        </span>
                        </div>
                      </div>

                    <div class="table-responsive p-0" v-if="registros.length > 0">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th class="titles-table" style="width: 4%">#</th>
                                    <th class="titles-table" style="width: 5%">Año</th>
                                    <th class="titles-table" style="width: 10%">Nombre</th>
                                    <th class="titles-table" style="width: 10%">Sistema de Calificación</th>
                                    <th class="titles-table" style="width: 8%">Fecha de Inicio</th>
                                    <th class="titles-table" style="width: 9%">Fecha de Finalización</th>
                                    <th class="titles-table" style="width: 10%">Turnos</th>
                                    <th class="titles-table" style="width: 7%">Estado</th>
                                    <th class="titles-table" style="width: 9%">Estado de Matrícula</th>
                                    <th class="titles-table" style="width: 10%">Gestión Matrícula</th>
                                    <th class="titles-table" style="width: 10%">Cerrar Año Escolar</th>
                                    <th class="titles-table" style="width: 8%">Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(registro, indexS) in registrosFilters">
                                    <td class="rows-table">@{{indexS+pagination.from}}.</td>
                                    <td class="rows-table">@{{registro.year}}</td>
                                    <td class="rows-table">@{{registro.nombre}}</td>
                                    <td class="rows-table">
                                      <template v-if ="registro.opcion == '1'">
                                        Trimestral
                                      </template>
                                      <template v-if ="registro.opcion == '2'">
                                        Bimestral
                                      </template>
                                    </td>
                                    <td class="rows-table">@{{registro.fecha_ini}}</td>
                                    <td class="rows-table">@{{registro.fecha_fin}}</td>
                                    <td class="rows-table"> 
                                      <b>@{{registro.cicloNivelInicial.nombre}}: </b> @{{registro.cicloNivelInicial.turno}} <br>
                                      <b>@{{registro.cicloNivelPrimaria.nombre}}: </b> @{{registro.cicloNivelPrimaria.turno}} <br>
                                      <b>@{{registro.cicloNivelSecundaria.nombre}}: </b> @{{registro.cicloNivelSecundaria.turno}} <br>

                                    </td>
                                    <td class="rows-table" style="text-align: center;">
                                        <small style="font-size: 13px;" class="badge badge-success" v-if="registro.activo=='1'">Activo</small>
                                        <small style="font-size: 13px;" class="badge badge-warning" v-if="registro.activo=='0'">Cerrado</small>
                                    </td>
                                    <td class="rows-table" style="text-align: center;">
                                        <small style="font-size: 13px;" class="badge badge-success" v-if="registro.activo_matricula=='1'">Abierta</small>
                                        <small style="font-size: 13px;" class="badge badge-warning" v-if="registro.activo_matricula=='0'">Cerrada</small>
                                    </td>
                                    <td>
                                      <center>
                                        <x-adminlte-button v-if="registro.activo_matricula=='1'" @click="cerrarMatricula(registro)" id="btnCerrarMat" class="bg-gradient btn-sm" type="button" label="Cerrar Mat" theme="danger" icon="fas fa-arrow-circle-down"
                                        data-placement="top" data-toggle="tooltip" title="Cerrar Matrícula" style="margin-right: 5px;"/>

                                        <x-adminlte-button v-if="registro.activo_matricula=='0'" @click="abrirMatricula(registro)" id="btnAbrirMat" class="bg-gradient btn-sm" type="button" label="Abrir Mat" theme="primary" icon="fas fa-check-circle"
                                        data-placement="top" data-toggle="tooltip" title="Abrir Matrícula" style="margin-right: 5px;"/>
                                      </center>
                                    </td>
                                    <td>
                                      <center>
                                        <x-adminlte-button v-if="registro.activo=='1'" @click="cerrarCiclo(registro)" id="btnCerrarCiclo" class="bg-gradient btn-sm" type="button" label="Cerrar Año" theme="success" icon="fas fa-arrow-circle-down"
                                        data-placement="top" data-toggle="tooltip" title="Cerrar Año Escolar" style="margin-right: 5px;"/>
                                      </center>
                                    </td>
                                    <td>
                                        <center>
                                        {{-- <x-adminlte-button v-if="registro.activo=='1'" @click="baja(registro)" id="btnBaja" class="bg-gradient btn-sm" type="button" label="" theme="info" icon="fas fa-arrow-circle-down"
                                        data-placement="top" data-toggle="tooltip" title="Dar de baja registro" style="margin-right: 5px;"/>

                                        <x-adminlte-button v-if="registro.activo=='0'" @click="alta(registro)" id="btnAlta" class="bg-gradient btn-sm" type="button" label="" theme="success" icon="fas fa-check-circle"
                                        data-placement="top" data-toggle="tooltip" title="Dar de alta registro" style="margin-right: 5px;"/> --}}

                                        <x-adminlte-button @click="edit(registro)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                        data-placement="top" data-toggle="tooltip" title="Editar registro" style="margin-right: 5px;"/>

                                        <x-adminlte-button @click="borrar(registro)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                        data-placement="top" data-toggle="tooltip" title="Eliminar registro" />
                                        </center>
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
                        <h6>No existen registros de Años Escolares</h6>
                    </div>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>