<div class="container-fluid">
    <div class="row">

        <div class="col-md-12" v-if="!divFormularioDetalles">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Repositorio de Plantillas de Documentos</h3>

                  <a v-if="!divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>

                  <a v-if="divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="javascript:void(0);" @click="cerrarModal()"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body">

                    <h5 style="font-weight: bold">Filtros de Búsqueda</h5>


                    <div class="form-group row">
                      <label for="cbuarea_id" class="col-sm-2 col-form-label" style="font-size: 13px;">Área De Elaboración de la Plantilla</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-sm">
                          <select class="form-control" style="width: 100%;" v-model="area_id" id="cbuarea_id" @change="buscarBtn">
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
                          <select class="form-control" style="width: 100%;" v-model="tipo_documento_id" id="cbutipo_documento_id" @change="buscarBtn">
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
                                  <th class="titles-table" style="width: 14%">Área</th>
                                  <th class="titles-table" style="width: 14%">Tipo de Documento</th>
                                  <th class="titles-table" style="width: 13%">Nombre</th>
                                  <th class="titles-table" style="width: 8%">Código</th>
                                  <th class="titles-table" style="width: 7%">Fecha</th>
                                  <th class="titles-table" style="width: 12%">Documento Relacionado</th>
                                  <th class="titles-table" style="width: 15%">Detalles</th>
                                  <th class="titles-table" style="width: 12%">Descargar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(registro, indexS) in registrosFilters">
                                  <td class="rows-table">@{{indexS+pagination.from}}.</td>
                                  <td class="rows-table">@{{registro.areas_nombre}} - @{{registro.areas_siglas}}</td>
                                  <td class="rows-table">@{{registro.tipo_documentos_nombre}}</td>
                                  <td class="rows-table">@{{registro.nombre}}</td>
                                  <td class="rows-table">@{{registro.codigo}}</td>
                                  <td class="rows-table">@{{registro.fecha_ela}}</td>
                                  <td class="rows-table">@{{registro.observacion}}</td>
                                  <td class="rows-table">@{{registro.nombre_documento_relacionado}}</td>
                                    <td>
                                        <center>
                                          <a :href="'{{ asset('/plantillas/')}}'+'/'+registro.ubicacion_electronica+'/'+registro.nombre_electronico" download>
                                            <x-adminlte-button  id="btnDescargar" class="bg-gradient btn-sm" type="button" label="Descargar" theme="info" icon="fas fa-download"
                                              data-placement="top" data-toggle="tooltip" title="Descargar Plantilla de Documento" style="margin-left: 5px;"/> </a>
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