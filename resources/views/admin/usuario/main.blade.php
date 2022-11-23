<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Gestión de Usuarios</h3>
                  <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                          <x-adminlte-button @click="nuevo()" id="btnNuevo" class="bg-gradient btn-sm" type="button" label="Nuevo Usuario" theme="primary" icon="fas fa-plus-square"/>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
        </div>

        @include('admin.usuario.form')

        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Listado de Usuarios</h3>
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
                                    <th class="titles-table" style="width: 12%">Area</th>
                                    <th class="titles-table" style="width: 12%">Nombres y Apellidos</th>
                                    <th class="titles-table" style="width: 8%">DNI</th>
                                    <th class="titles-table" style="width: 9%">Teléfono</th>
                                    <th class="titles-table" style="width: 12%">Dirección</th>
                                    <th class="titles-table" style="width: 10%">Tipo de Usuario</th>
                                    <th class="titles-table" style="width: 10%">Username</th>
                                    <th class="titles-table" style="width: 13%">Email</th>
                                    <th class="titles-table" style="width: 10%">Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(registro, indexS) in registros">
                                    <td class="rows-table">@{{indexS+pagination.from}}.</td>
                                    <td class="rows-table">@{{registro.areas_nombre}}</td>
                                    <td class="rows-table">@{{registro.nombres}} @{{registro.apellidos}}</td>
                                    <td class="rows-table">@{{registro.dni}}</td>
                                    <td class="rows-table">@{{registro.telefono}}</td>
                                    <td class="rows-table">@{{registro.direccion}}</td>
                                    <td class="rows-table">@{{registro.tipo_users_nombre}}</td>
                                    <td class="rows-table">@{{registro.name}}</td>
                                    <td class="rows-table">@{{registro.email}}</td>
                                    <td>
                                        <center>
                                          <x-adminlte-button v-if="registro.activo=='1'" @click="baja(registro)" id="btnBaja" class="bg-gradient btn-sm" type="button" label="" theme="info" icon="fas fa-arrow-circle-down"
                                          data-placement="top" data-toggle="tooltip" title="Dar de baja usuario" style="margin-right: 5px;"/>
  
                                          <x-adminlte-button v-if="registro.activo=='0'" @click="alta(registro)" id="btnAlta" class="bg-gradient btn-sm" type="button" label="" theme="success" icon="fas fa-check-circle"
                                          data-placement="top" data-toggle="tooltip" title="Dar de alta usuario" style="margin-right: 5px;"/>
  
                                          <x-adminlte-button @click="edit(registro)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                          data-placement="top" data-toggle="tooltip" title="Editar usuario" style="margin-right: 5px;"/>
  
                                          <x-adminlte-button @click="borrar(registro)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                          data-placement="top" data-toggle="tooltip" title="Eliminar usuario" />
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
                        <h6>No existen registros de Usuarios</h6>
                    </div>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>