<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Mantenimiento de Horas</h3>
                  <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                    Volver</a>
                </div>
                <form>
                  <div class="card-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <x-adminlte-button @click="nuevo()" id="btnNuevo" class="bg-gradient btn-sm" type="button" label="Nuevo Registro" theme="primary" icon="fas fa-plus-square"/>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="cbuturno_id" class="col-sm-2 col-form-label">Turno:</label>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select class="form-control" name="cbuturno_id" id="cbuturno_id" v-model="fillobject.turno_id" @change="cambioTurno">
                            <option value="">Seleccione un Turno</option>
                            @foreach($turnos as $turno)
                              <option value="{{$turno->id}}">{{$turno->nombre}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
        </div>

        @include('admin.hora.form')

        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">


                  <h3 class="card-title">Listado de Horas del Turno @{{turnoNombre}}</h3>


                </div>
                <form>
                  <div class="card-body">
                    {{-- <div class="col-md-12" style="margin-bottom:15px;">
                        <div class="input-group input-group-sm" style="max-width: 300px;">
                          <input type="text" name="table_search" class="form-control" placeholder="Buscar" v-model="buscar" @keyup.enter="buscarBtn()">
                          <span class="input-group-append">
                            <button type="submit" class="btn btn-default" @click.prevent="buscarBtn()"><i class="fa fa-search"></i></button>
                        </span>
                        </div>
                      </div> --}}

                    <div class="table-responsive p-0" v-if="registros.length > 0">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th class="titles-table" style="width: 5%">#</th>
                                    <th class="titles-table" style="width: 25%">Hora de Inicio</th>
                                    <th class="titles-table" style="width: 25%">Hora de Finalización</th>
                                    <th class="titles-table" style="width: 30%">Tipo</th>
                                    <th class="titles-table" style="width: 15%">Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(registro, indexS) in registros">
                                    <td class="rows-table">@{{indexS+pagination.from}}.</td>                                    
                                    <td class="rows-table">@{{registro.horaini}}</td>
                                    <td class="rows-table">@{{registro.horafin}}</td>
                                    <td class="rows-table" style="text-align: center;">
                                      <small style="font-size: 13px;" class="badge badge-success" v-if="registro.tipo=='1'">Hora Lectiva</small>
                                      <small style="font-size: 13px;" class="badge badge-warning" v-if="registro.tipo=='0'">Hora de Recreo</small>
                                    </td>
                                    <td>
                                        <center>
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
                        <h6>No existen registros de Horas en el Turno @{{turnoNombre}}</h6>
                    </div>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>