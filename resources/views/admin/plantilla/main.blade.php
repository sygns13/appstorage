<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  @if(Auth::user()->tipo_user_id == 1)
                    <h3 class="card-title">Gestión de Plantillas de Documentos</h3>
                  @else
                    <h3 class="card-title">Gestión de Plantillas de Documentos del Área: {{$area->nombre}} - {{$area->codigo}}</h3>
                  @endif
                  <a v-if="!divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>

                  <a v-if="divFormularioDetalles" style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="javascript:void(0);" @click="cerrarModal()"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body" v-if="!divFormularioDetalles">
                    <div class="col-md-12">
                        <div class="form-group">
                          <x-adminlte-button @click="nuevo()" id="btnNuevo" class="bg-gradient btn-sm" type="button" label="Nuevo Documento" theme="primary" icon="fas fa-plus-square"/>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
        </div>

        @include('admin.plantilla.form')


        <div class="col-md-12" v-if="!divFormularioDetalles">
            <div class="card card-primary">
                <div class="card-header">
                  @if(Auth::user()->tipo_user_id == 1)
                    <h3 class="card-title">Listado de Plantillas de Documentos</h3>
                  @else
                    <h3 class="card-title">Listado de Plantillas de Documentos del Área: {{$area->nombre}} - {{$area->codigo}}</h3>
                  @endif
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
                                    <th class="titles-table" style="width: 15%">Área</th>
                                    <th class="titles-table" style="width: 15%">Tipo de Documento</th>
                                    <th class="titles-table" style="width: 15%">Nombre</th>
                                    <th class="titles-table" style="width: 10%">Código</th>
                                    <th class="titles-table" style="width: 8%">Fecha</th>
                                    <th class="titles-table" style="width: 15%">Documento Relacionado</th>
                                    <th class="titles-table" style="width: 15%">Gestión</th>
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
                                    <td class="rows-table">@{{registro.nombre_documento_relacionado}}</td>
                                    <td class="rows-table">
                                        <center>

                   
                                          <a :href="'{{ asset('/plantillas/')}}'+'/'+registro.ubicacion_electronica+'/'+registro.nombre_electronico" download>
                                          <x-adminlte-button  id="btnDescargar" class="bg-gradient btn-sm" type="button" label="" theme="info" icon="fas fa-download"
                                            data-placement="top" data-toggle="tooltip" title="Descargar Plantilla de Documento" style="margin-left: 5px;"/> </a>

                                            <x-adminlte-button @click="edit(registro)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                            data-placement="top" data-toggle="tooltip" title="Editar Documento" style="margin-left: 5px;"/>

                                            <x-adminlte-button @click="borrar(registro)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                            data-placement="top" data-toggle="tooltip" title="Eliminar Documento" style="margin-left: 5px;"/>
                                          
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