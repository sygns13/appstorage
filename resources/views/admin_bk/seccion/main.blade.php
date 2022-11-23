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
                            <a data-toggle="pill" role="tab" aria-selected="true"
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
                                                <a data-toggle="pill" role="tab" aria-selected="true"
                                                    v-bind="{ 'class': indexG == 0 ? 'nav-link active' : 'nav-link', 'id': 'vert-tabs-gra' + nivel.siglas + grado.orden + '-tab', 'href': '#vert-tabs-gra' + nivel.siglas + grado.orden, 'aria-controls': 'vert-tabs-gra' + nivel.siglas + grado.orden }">@{{ grado.nombre }}</a>
                                            </template>
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-9">
                                        <div class="tab-content" id="vert-tabs-tabContent">
                                            <template v-for="(grado, indexG) in nivel.grados">
                                                <div role="tabpanel"
                                                    v-bind="{ 'class': indexG == 0 ? 'tab-pane text-left fade show active' : 'tab-pane fade', 'id': 'vert-tabs-gra' + nivel.siglas + grado.orden, 'aria-labelledby': 'vert-tabs-gra' + nivel.siglas + grado.orden + '-tab' }">
                                                    <h4>Listado de Secciones</h4>

                                                    <div class="table-responsive p-0" v-if="grado.seccions.length > 0">
                                                        <table class="table table-bordered table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 5%">#</th>
                                                                    <th style="width: 20%">SIGLAS</th>
                                                                    <th style="width: 60%">Nombre</th>
                                                                    <th style="width: 15%">Gestión</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr v-for="(seccion, indexS) in grado.seccions">
                                                                    <td>@{{indexS + 1}}.</td>
                                                                    <td>@{{seccion.sigla}}</td>
                                                                    <td>@{{seccion.nombre}}</td>
                                                                    <td>
                                                                        <center>
                                                                        <x-adminlte-button @click="edit(seccion)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="" theme="warning" icon="fas fa-edit"
                                                                        data-placement="top" data-toggle="tooltip" title="Editar registro" style="margin-right: 5px;"/>

                                                                        <x-adminlte-button @click="borrar(seccion)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                                                        data-placement="top" data-toggle="tooltip" title="Eliminar registro" style="margin-left: 5px;"/>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div v-else>
                                                        <h6>No se tiene registro de secciones registradas en el grado</h6>
                                                    </div>

                                                    <x-adminlte-button @click="nuevo(grado.id)" id="btnNuevo" class="bg-gradient" type="button" label="Nueva Sección" theme="primary" icon="fas fa-plus-square"/>

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
        </div>
    </div>
</div>