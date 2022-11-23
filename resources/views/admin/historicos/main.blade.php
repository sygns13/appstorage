<div class="container-fluid">
    <div class="row">

        <div class="col-md-12" v-if="!divFormularioDetalles">
            <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Consulta de Versiones Históricas de Documentos</h3>

                  <a v-if="!divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>

                  <a v-if="divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="javascript:void(0);" @click="cerrarModal()"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body">

                    <h5 style="font-weight: bold">Filtros de Búsqueda</h5>


                    <div class="form-group row">
                      <label for="cbuarea_id" class="col-sm-2 col-form-label" style="font-size: 13px;">Área De Elaboración del Documento</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-sm">
                          <select class="form-control" style="width: 100%;" v-model="fillobject.area_id" id="cbuarea_id" @change="buscarBtn">
                            <option value="0" >TODAS</option>
                            @foreach ($areas as $dato)
                              <option value="{{$dato->id}}">{{$dato->siglas}} - {{$dato->nombre}}</option> 
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="cbutipo_documento_id" class="col-sm-2 col-form-label" style="font-size: 13px;">Tipo de  Documento</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-sm">
                          <select class="form-control" style="width: 100%;" v-model="fillobject.tipo_documento_id" id="cbutipo_documento_id" @change="buscarBtn">
                            <option value="0">TODOS</option>
                            @foreach ($tipoDocumentos as $dato)
                              <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
                            @endforeach
                          </select>
                      </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="cbutipo_documento_id" class="col-sm-2 col-form-label" style="font-size: 13px;">Criterio de Búsqueda</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-sm">
                          <input type="text" name="table_search" class="form-control" placeholder="Buscar" v-model="buscar" @keyup.enter="buscarBtn()">
                          <span class="input-group-append">
                            <button type="submit" class="btn btn-default" @click.prevent="buscarBtn()"><i class="fa fa-search"></i></button>
                        </span>
                        </div>
                      </div>
                    </div>


                      <hr>

                      <h5 style="font-weight: bold">Resultados de Búsqueda</h5>

                    <div class="table-responsive p-0" v-if="registros.length > 0">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th class="titles-table" style="width: 5%">#</th>
                                    <th class="titles-table" style="width: 15%">Área del Documento</th>
                                    <th class="titles-table" style="width: 15%">Tipo de Documento</th>
                                    <th class="titles-table" style="width: 15%">Nombre del Documento</th>
                                    <th class="titles-table" style="width: 10%">Código</th>
                                    <th class="titles-table" style="width: 8%">Versión</th>
                                    <th class="titles-table" style="width: 8%">Revisión</th>
                                    <th class="titles-table" style="width: 8%">Estado</th>
                                    <th class="titles-table" style="width: 10%">Fecha de Elaboración</th>
                                    <th class="titles-table" style="width: 10%">Fecha de Revisión</th>
                                    <th class="titles-table" style="width: 10%">Fecha de Aprobación</th>
                                    <th class="titles-table" style="width: 15%">Ver Contenido</th>
                                </tr>
                            </thead>
                            <tbody>
                              <template v-for="(registro, indexS) in registrosFilters">
                                <tr>
                                    <td class="rows-table" :rowspan="registro.historicos.length + 1">@{{indexS+pagination.from}}.</td>
                                    <td class="rows-table" :rowspan="registro.historicos.length + 1">@{{registro.areas_nombre}} - @{{registro.areas_siglas}}</td>
                                    <td class="rows-table" :rowspan="registro.historicos.length + 1">@{{registro.tipo_documentos_nombre}}</td>
                                    <td class="rows-table" :rowspan="registro.historicos.length + 1">@{{registro.nombre}}</td>
                                    <td class="rows-table" :rowspan="registro.historicos.length + 1">@{{registro.codigo}}</td>
                                    
                                    <td class="rows-table" style="font-weight: bold">@{{registro.version_actual}}</td>
                                    <td class="rows-table" style="font-weight: bold">@{{registro.revision}}</td>
                                    <td class="rows-table" style="font-weight: bold">
                                      <template v-if="registro.estado == '0'">BORRADOR GENERADO</template>
                                      <template v-if="registro.estado == '1'">BORRADOR APROBADO POR RED</template>
                                      <template v-if="registro.estado == '2'">BORRADOR OBSERVADO POR RED</template>
                                      <template v-if="registro.estado == '3'">BORRADOR CORREGIDO</template>
                                      <template v-if="registro.estado == '4'">DOCUMENTO FIRMADO POR ÁREA DE ELABORACIÓN</template>
                                      <template v-if="registro.estado == '5'">DOCUMENTO FIRMADO POR ÁREA DE EVALUACIÓN</template>
                                      <template v-if="registro.estado == '6'">DOCUMENTO OBSERVADO POR ÁREA DE EVALUACIÓN</template>
                                      <template v-if="registro.estado == '7'">DOCUMENTO FIRMADO POR ÁREA DE APROBACIÓN</template>
                                      <template v-if="registro.estado == '8'">DOCUMENTO OBSERVADO POR ÁREA DE APROBACIÓN</template>
                                      <template v-if="registro.estado == '9'">VERSIÓN VÁLIDA</template>
                                      <template v-if="registro.estado == '10'">VERSIÓN OBSOLETA</template>
                                    </td>


                                    <td class="rows-table" style="font-weight: bold">@{{registro.fecha_ela}}</td>
                                    <td class="rows-table" style="font-weight: bold">@{{registro.fecha_rev}}</td>
                                    <td class="rows-table" style="font-weight: bold">@{{registro.fecha_apr}}</td>
                                    <td>
                                        <center>

                                          <x-adminlte-button @click="detalles(registro)" id="btnDetalles" class="bg-gradient btn-sm" type="button" label="" theme="info" icon="fas fa-search"
                                            data-placement="top" data-toggle="tooltip" title="Ver Documento" style="margin-left: 5px;"/>
                                        </center>
                                    </td>
                                </tr>

                                <tr v-for="(registroVersion, indexV) in registro.historicos">
                                  
                                  <td class="rows-table">@{{registroVersion.version_actual}}</td>
                                  <td class="rows-table">@{{registroVersion.revision}}</td>
                                  <td class="rows-table">
                                    <template v-if="registroVersion.estado == '0'">BORRADOR GENERADO</template>
                                    <template v-if="registroVersion.estado == '1'">BORRADOR APROBADO POR RED</template>
                                    <template v-if="registroVersion.estado == '2'">BORRADOR OBSERVADO POR RED</template>
                                    <template v-if="registroVersion.estado == '3'">BORRADOR CORREGIDO</template>
                                    <template v-if="registroVersion.estado == '4'">DOCUMENTO FIRMADO POR ÁREA DE ELABORACIÓN</template>
                                    <template v-if="registroVersion.estado == '5'">DOCUMENTO FIRMADO POR ÁREA DE EVALUACIÓN</template>
                                    <template v-if="registroVersion.estado == '6'">DOCUMENTO OBSERVADO POR ÁREA DE EVALUACIÓN</template>
                                    <template v-if="registroVersion.estado == '7'">DOCUMENTO FIRMADO POR ÁREA DE APROBACIÓN</template>
                                    <template v-if="registroVersion.estado == '8'">DOCUMENTO OBSERVADO POR ÁREA DE APROBACIÓN</template>
                                    <template v-if="registroVersion.estado == '9'">VERSIÓN VÁLIDA</template>
                                    <template v-if="registroVersion.estado == '10'">VERSIÓN OBSOLETA</template>
                                  </td>

                                  <td class="rows-table">@{{registroVersion.fecha_ela}}</td>
                                  <td class="rows-table">@{{registroVersion.fecha_rev}}</td>
                                  <td class="rows-table">@{{registroVersion.fecha_apr}}</td>

                                  <td>
                                      <center>

                                        <x-adminlte-button @click="detallesV(registro, registroVersion)" id="btnDetalles" class="bg-gradient btn-sm" type="button" label="" theme="info" icon="fas fa-search"
                                          data-placement="top" data-toggle="tooltip" title="Ver Documento" style="margin-left: 5px;"/>
                                      </center>
                                  </td>
                              </tr>


                              </template>
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