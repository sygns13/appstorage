<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            @if(!$cicloActivo)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Asignación de Cursos</h3>
                        <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                            Volver</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <h4 class="text-danger">No existe Año Escolar Activo, para asignar cursos es necesario que un Año Escolar se encuentre Activo.</h4>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            @else

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Asignación de Cursos</h3>
                    <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                        Volver</a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">

                        <h3>Año Escolar: {{$cicloActivo->nombre}}</h3>

                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                    <li class="pt-2 px-3">
                                        <h3 class="card-title">Niveles:</h3>
                                    </li>
                                    <li class="nav-item" v-for="(nivel, index) in registros.niveles">
                                        <a data-toggle="pill" role="tab" aria-selected="true" @click="cerrarPanel()"
                                            v-bind="{ id: 'custom-tabs-two-' + nivel.siglas+'-tab', 'class': index == 0 ? 'nav-link active' : 'nav-link', 'href': '#custom-tabs-two-' + nivel.siglas, 'aria-controls': 'custom-tabs-two-' + nivel.siglas }">@{{ nivel.nombre }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-two-tabContent">
                                    <template v-for="(nivel, index) in registros.niveles">
                                        <div role="tabpanel"
                                            v-bind="{ 'class': index == 0 ? 'tab-pane fade show active' : 'tab-pane fade', 'id': 'custom-tabs-two-' + nivel.siglas, 'aria-labelledby': 'custom-tabs-two-' + nivel.siglas + '-tab' }">
                                            <div class="card-header p-0 pt-1 border-bottom-0">
                                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                                    <template v-for="(grado, indexG) in nivel.grados">
                                                        <li class="nav-item">
                                                            <a data-toggle="pill" role="tab" @click="cerrarPanel()"
                                                            v-bind="{ 'class': indexG == 0 ? 'nav-link active' : 'nav-link', 'id': 'custom-tabs-gra' + nivel.siglas + grado.orden + '-tab', 'href': '#custom-tabs-gra' + nivel.siglas + grado.orden, 'aria-controls': 'custom-tabs-gra' + nivel.siglas + grado.orden, 'aria-selected': indexG == 0 ? 'true' : 'false' }">@{{ grado.nombre }}</a>
                                                        </li>
                                                    </template>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                                    <template v-for="(grado, indexG) in nivel.grados">
                                                        <div role="tabpanel"
                                                            v-bind="{ 'class': indexG == 0 ? 'tab-pane fade show active' : 'tab-pane fade', 'id': 'custom-tabs-gra' + nivel.siglas + grado.orden, 'aria-labelledby': 'custom-tabs-gra' + nivel.siglas + grado.orden + '-tab' }">

                                                            <div class="form-group row">
                                                                <label for="cbuseccion" class="col-sm-2 col-form-label">Seleccione Sección</label>
                                                                <div class="col-sm-10" v-if="grado.seccions.length > 0">
                                                                    <select class="custom-select rounded-0" id="cbuseccion" v-model="seccionSeleccionada" @change="cambioSeccion">
                                                                        <option value="0">Seleccione Sección</option>
                                                                        <template v-for="(seccion, indexS) in grado.seccions">
                                                                            <option v-bind:value="seccion.id">@{{seccion.nombre}}</option>
                                                                        </template>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-10" v-else>
                                                                    <h6>No se tiene registro de secciones registradas en el grado</h6>
                                                                </div>
                                                              </div>

                                                              <div v-if="grado.seccions.length > 0 && seccionSeleccionada > 0">
                                                                <h6>Listado de Cursos:</h6>

                                                                <div class="table-responsive p-0">
                                                                    <table class="table table-bordered table-sm">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="width: 5%">#</th>
                                                                                <th style="width: 40%">Curso</th>
                                                                                <th style="width: 40%">Docente Asignado</th>
                                                                                <th style="width: 15%">Gestión</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <template v-for="(curso, indexS) in seccionSelect.cursos">
                                                                                <tr  v-if="curso.ciclo_grado_id == grado.id">
                                                                                    <td>@{{curso.orden}}</td>
                                                                                    <td>@{{curso.nombre}}</td>
                                                                                    <td>
                                                                                        <template v-if="curso.asignacion != null">
                                                                                            @{{curso.asignacion.docente.apellidos}} @{{curso.asignacion.docente.nombre}}
                                                                                        </template>
                                                                                        <template v-else>
                                                                                            <b>Sin Docente Asignado</b>
                                                                                        </template>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <x-adminlte-button @click="asignarDocente(curso)" id="btnAsignar" class="bg-gradient btn-sm" type="button" label="Asignar Docente" theme="primary" icon="fas fa-user-secret"
                                                                                            data-placement="top" data-toggle="tooltip" title="Asignar Docente" v-if="curso.asignacion == null" style="margin-right: 5px;"/>

                                                                                            <x-adminlte-button @click="asignarDocente(curso)" id="btnAsignar" class="bg-gradient btn-sm" type="button" label="Asignar Docente" theme="warning" icon="fas fa-user-secret"
                                                                                            data-placement="top" data-toggle="tooltip" title="Modificar Asignación" v-if="curso.asignacion != null" style="margin-right: 5px;"/>

                                                                                            <x-adminlte-button @click="borrarAsignacion(curso)" id="btnBorrar" class="bg-gradient btn-sm" type="button" label="" theme="danger" icon="fas fa-trash"
                                                                                            data-placement="top" data-toggle="tooltip" title="Eliminar Asignación de Docente" v-if="curso.asignacion != null" style="margin-left: 5px;"/>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                            </template>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            @endif
        </div>
    </div>
</div>