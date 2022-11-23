<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">Niveles:</h3>
                        </li>
                        <li class="nav-item" v-for="(nivel, index) in registros.niveles">
                            <a data-toggle="pill" role="tab" aria-selected="true" @click="cerrarComeptencia()"
                                v-bind="{ id: 'custom-tabs-two-' + nivel.siglas+'-tab', 'class': index == 0 ? 'nav-link active' : 'nav-link', 'href': '#custom-tabs-two-' + nivel.siglas, 'aria-controls': 'custom-tabs-two-' + nivel.siglas }">@{{ nivel.nombre }}</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-two-tabContent">

                        <template v-for="(nivel, index) in registros.niveles">
                            <div role="tabpanel"
                                v-bind="{ 'class': index == 0 ? 'tab-pane fade show active' : 'tab-pane fade', 'id': 'custom-tabs-two-' + nivel.siglas, 'aria-labelledby': 'custom-tabs-two-' + nivel.siglas + '-tab' }">

                                {{-- @{{ nivel.nombre }} --}}

                                <div class="row">
                                    <div class="col-5 col-sm-3">
                                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <template v-for="(grado, indexG) in nivel.grados">
                                                <a data-toggle="pill" role="tab" aria-selected="true" @click="cerrarComeptencia()"
                                                    v-bind="{ 'class': indexG == 0 ? 'nav-link active' : 'nav-link', 'id': 'vert-tabs-gra' + nivel.siglas + grado.orden + '-tab', 'href': '#vert-tabs-gra' + nivel.siglas + grado.orden, 'aria-controls': 'vert-tabs-gra' + nivel.siglas + grado.orden }">@{{ grado.nombre }}</a>
                                            </template>
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-9">
                                        <div class="tab-content" id="vert-tabs-tabContent">
                                            <template v-for="(grado, indexG) in nivel.grados">
                                                <div role="tabpanel"
                                                    v-bind="{ 'class': indexG == 0 ? 'tab-pane text-left fade show active' : 'tab-pane fade', 'id': 'vert-tabs-gra' + nivel.siglas + grado.orden, 'aria-labelledby': 'vert-tabs-gra' + nivel.siglas + grado.orden + '-tab' }">
                                                    <h4>Listado de Cursos</h4>

                                                    <div class="table-responsive p-0" v-if="grado.cursos.length > 0">
                                                        <table class="table table-bordered table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 5%">#</th>
                                                                    <th style="width: 60%">Nombre</th>
                                                                    <th style="width: 20%">Orden</th>
                                                                    <th style="width: 15%">Gestión</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr v-for="(curso, indexS) in grado.cursos">
                                                                    <td>@{{indexS + 1}}.</td>
                                                                    <td>@{{curso.nombre}}</td>
                                                                    <td>@{{curso.orden}}</td>
                                                                    <td>
                                                                        <center>
                                                                        <x-adminlte-button @click="competencia(curso)" id="btnCompetencia" class="bg-gradient btn-sm" type="button" label="" theme="primary" icon="fas fa-list"
                                                                        data-placement="top" data-toggle="tooltip" title="Gestionar Competencias"/>

                                                                        <x-adminlte-button @click="edit(curso)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                                                        data-placement="top" data-toggle="tooltip" title="Editar registro" style="margin-right: 5px; margin-left: 5px;"/>

                                                                        <x-adminlte-button @click="borrar(curso)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                                                        data-placement="top" data-toggle="tooltip" title="Eliminar registro"/>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div v-else>
                                                        <h6>No se tiene registro de Cursos registradas en el grado</h6>
                                                    </div>

                                                    <x-adminlte-button @click="nuevo(grado.id)" id="btnNuevo" class="bg-gradient" type="button" label="Nuevo Curso" theme="primary" icon="fas fa-plus-square"/>

                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </template>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <div class="card card-primary" v-if="verCompetencias">
                <div class="card-header">
                  <h3 class="card-title">Gestión de Competencias del Curso @{{fillobject.nombre}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">

                    <x-adminlte-button @click="nuevoC(fillobject.id)" id="btnNuevoC" class="bg-gradient" type="button" label="Nueva Competencia" theme="primary" icon="fas fa-plus-square"/>

                    <h4>Listado de Competencias</h4>
                    <div class="table-responsive p-0" v-if="registros2.length > 0">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th style="width: 60%">Nombre</th>
                                    <th style="width: 20%">Orden</th>
                                    <th style="width: 15%">Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(competencia, indexS) in registros2">
                                    <td>@{{indexS + 1}}.</td>
                                    <td>@{{competencia.nombre}}</td>
                                    <td>@{{competencia.orden}}</td>
                                    <td>
                                        <center>
                                        <x-adminlte-button @click="editC(competencia)" id="btnEditC" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                        data-placement="top" data-toggle="tooltip" title="Editar registro" style="margin-right: 5px;"/>

                                        <x-adminlte-button @click="borrarC(competencia)" id="btnBorrarC" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                        data-placement="top" data-toggle="tooltip" title="Eliminar registro" style="margin-left: 5px;"/>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div v-else>
                        <h6>No se tiene registro de Competencias registradas en el curso</h6>
                    </div>
                  </div>
                  <!-- /.card-body -->
  

                </form>
              </div>

        </div>
    </div>
</div>