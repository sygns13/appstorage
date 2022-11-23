<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Gestión de Documentos del Área: {{$area->nombre}} - {{$area->codigo}}</h3>
                  <a v-if="!divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>

                  <a v-if="divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="javascript:void(0);" @click="cerrarModal()"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body" v-if="!divFormularioDetalles">
                    <div class="col-md-12">
                        <div class="form-group">
                          <x-adminlte-button @click="nuevo()" id="btnNuevo" class="bg-gradient btn-sm" type="button" label="Nuevo Borrador" theme="primary" icon="fas fa-plus-square"/>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
        </div>

        @include('admin.documento.form')

        <div class="col-md-12" v-if="!divFormularioDetalles">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Listado de Documentos</h3>
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
                                    <th class="titles-table" style="width: 5%">#</th>
                                    <th class="titles-table" style="width: 15%">Área del Documento</th>
                                    <th class="titles-table" style="width: 15%">Nombre del Documento</th>
                                    <th class="titles-table" style="width: 10%">Código</th>
                                    <th class="titles-table" style="width: 8%">Versión Actual</th>
                                    <th class="titles-table" style="width: 8%">Revisión Actual</th>
                                    <th class="titles-table" style="width: 14%">Estado</th>
                                    <th class="titles-table" style="width: 10%">Fecha de Elaboración</th>
                                    <th class="titles-table" style="width: 15%">Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(registro, indexS) in registrosFilters">
                                    <td class="rows-table">@{{indexS+pagination.from}}.</td>
                                    <td class="rows-table">@{{registro.areas_nombre}} - @{{registro.areas_siglas}}</td>
                                    <td class="rows-table">@{{registro.nombre}}</td>
                                    <td class="rows-table">@{{registro.codigo}}</td>
                                    <td class="rows-table">@{{registro.version_actual}}</td>
                                    <td class="rows-table">@{{registro.revision}}</td>
                                    <td class="rows-table" style="font-weight: bold;">
                                      <template v-if="registro.estado == '0'">BORRADOR GENERADO</template>
                                      <template v-if="registro.estado == '1'">BORRADOR APROBADO POR RED</template>
                                      <template v-if="registro.estado == '2'">BORRADOR OBSERVADO POR RED</template>
                                      <template v-if="registro.estado == '3'">BORRADOR CORREGIDO</template>
                                      <template v-if="registro.estado == '4'">DOCUMENTO FIRMADO POR ÁREA DE ELABORACIÓN</template>
                                      <template v-if="registro.estado == '5'">DOCUMENTO FIRMADO POR ÁREA DE EVALUACIÓN</template>
                                      <template v-if="registro.estado == '6'">DOCUMENTO OBSERVADO POR ÁREA DE EVALUACIÓN</template>
                                      <template v-if="registro.estado == '7'">DOCUMENTO FIRMADO POR ÁREA DE APROBACIÓN</template>
                                      <template v-if="registro.estado == '8'">DOCUMENTO OBSERVADO POR ÁREA DE APROBACIÓN</template>
                                      <template v-if="registro.estado == '9'">DOCUMENTO VÁLIDO, VERSIÓN EMITIDA</template>

                                    </td>

                                    <td class="rows-table">@{{registro.fecha_ela}}</td>
                                    {{-- <td class="rows-table">
                                      <template v-if="registro.id_documento_relacionado != '0'">
                                        @{{registro.nombre_documento_relacionado}} - @{{registro.codigo_documento_relacionado}} Ver @{{registro.version_actual_documento_relacionado}} Rev @{{registro.revision_documento_relacionado}}
                                      </template>
                                    </td> --}}
                                    <td>
                                        <center>
                                          <template v-if="registro.estado == '0'">
                                            <x-adminlte-button @click="edit(registro)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                            data-placement="top" data-toggle="tooltip" title="Editar Borrador de Documento"/>

                                            <x-adminlte-button @click="borrar(registro)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                            data-placement="top" data-toggle="tooltip" title="Eliminar Borrador de Documento" style="margin-left: 5px;"/>
                                          </template>

                                          <x-adminlte-button @click="detalles(registro)" id="btnDetalles" class="bg-gradient btn-sm" type="button" label="" theme="info" icon="fas fa-search"
                                            data-placement="top" data-toggle="tooltip" title="Ver Detalles de Documento" style="margin-left: 5px;"/>
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
                        <h6>No existen registros de Documentos</h6>
                    </div>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>