<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Gestión de Horarios</h3>
                    <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                        Volver</a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="cbuAnioEscolar" class="col-sm-2 col-form-label">Seleccione Año Escolar</label>
                            <div class="col-sm-3">
                                <select class="form-control" style="width: 100%;" v-model="ciclo_id" id="cbuAnioEscolar" @change="changeCiclo">
                                    <option value="0" disabled>Seleccione ...</option>
                                    @foreach ($ciclos as $dato)
                                    <option value="{{$dato->id}}">{{$dato->year}}</option> 
                                    @endforeach
                                  </select>
                            </div>
                        </div>




                        <div class="card card-primary card-tabs" v-if="verFormulario">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                    <li class="pt-2 px-3">
                                        <h3 class="card-title">Niveles:</h3>
                                    </li>
                                    <li class="nav-item" v-for="(nivel, index) in registros.niveles">
                                        <a data-toggle="pill" role="tab" aria-selected="true" @click="cerrarHorario()"
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
                                                            <a data-toggle="pill" role="tab" @click="cerrarHorario()"
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

                                                              <div class="form-group row">
                                                                <label for="cbuTurno" class="col-sm-2 col-form-label">Seleccione Turno</label>
                                                                <div class="col-sm-10" v-if="turnos.length > 0">
                                                                    <select class="custom-select rounded-0" id="cbuTurno" v-model="turnoSeleccionado" @change="cambioTurno">
                                                                        <option value="0">Seleccione Turno</option>
                                                                        <template v-for="(turno, indexS) in turnos">
                                                                            <option v-bind:value="turno.id" v-if="turno.id == nivel.turno_id">@{{turno.nombre}}</option>
                                                                        </template>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-10" v-else>
                                                                    <h6>No se tiene registro de Turnos registrados</h6>
                                                                </div>
                                                              </div>

                                                              <div v-if="grado.seccions.length > 0 && seccionSeleccionada > 0 && turnoSeleccionado != '0'">
                                                                <h6>Horario:</h6>

                                                                <div class="table-responsive p-0">
                                                                    <table class="table table-bordered table-sm">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="width: 10%">HORA</th>
                                                                                <th style="width: 18%">Lunes</th>
                                                                                <th style="width: 18%">Martes</th>
                                                                                <th style="width: 18%">Miercoles</th>
                                                                                <th style="width: 18%">Jueves</th>
                                                                                <th style="width: 18%">Viernes</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <template v-for="(hora, indexHora) in horas">
                                                                                <tr v-if ="hora.turno_id == turnoSeleccionado">
                                                                                    <td>@{{hora.horaini}} - @{{hora.horafin}}</td>
                                                                                    <td>
                                                                                        <template v-if="hora.tipo == 1">
                                                                                            <template v-if="horario.lunes[hora.id] != '0'">
                                                                                                <template v-for="(curso, index) in grado.cursos">
                                                                                                    <template v-if="curso.id == horario.lunes[hora.id]">
                                                                                                        @{{curso.nombre}}
                                                                                                    </template>
                                                                                                </template>
                                                                                            </template>
                                                                                        </template>
                                                                                        <template v-else>
                                                                                            RECREO
                                                                                        </template>
                                                                                    </td>                               
                                                                                    <td>
                                                                                        <template v-if="hora.tipo == 1">
                                                                                            <template v-if="horario.martes[hora.id] != '0'">
                                                                                                <template v-for="(curso, index) in grado.cursos">
                                                                                                    <template v-if="curso.id == horario.martes[hora.id]">
                                                                                                        @{{curso.nombre}}
                                                                                                    </template>
                                                                                                </template>
                                                                                            </template>
                                                                                        </template>
                                                                                        <template v-else>
                                                                                            RECREO
                                                                                        </template>
                                                                                    </td>                               
                                                                                    <td>
                                                                                        <template v-if="hora.tipo == 1">
                                                                                            <template v-if="horario.miercoles[hora.id] != '0'">
                                                                                                <template v-for="(curso, index) in grado.cursos">
                                                                                                    <template v-if="curso.id == horario.miercoles[hora.id]">
                                                                                                        @{{curso.nombre}}
                                                                                                    </template>
                                                                                                </template>
                                                                                            </template>
                                                                                        </template>
                                                                                        <template v-else>
                                                                                            RECREO
                                                                                        </template>
                                                                                    </td>                               
                                                                                    <td>
                                                                                        <template v-if="hora.tipo == 1">
                                                                                            <template v-if="horario.jueves[hora.id] != '0'">
                                                                                                <template v-for="(curso, index) in grado.cursos">
                                                                                                    <template v-if="curso.id == horario.jueves[hora.id]">
                                                                                                        @{{curso.nombre}}
                                                                                                    </template>
                                                                                                </template>
                                                                                            </template>
                                                                                        </template>
                                                                                        <template v-else>
                                                                                            RECREO
                                                                                        </template>
                                                                                    </td>                               
                                                                                    <td>
                                                                                        <template v-if="hora.tipo == 1">
                                                                                            <template v-if="horario.viernes[hora.id] != '0'">
                                                                                                <template v-for="(curso, index) in grado.cursos">
                                                                                                    <template v-if="curso.id == horario.viernes[hora.id]">
                                                                                                        @{{curso.nombre}}
                                                                                                    </template>
                                                                                                </template>
                                                                                            </template>
                                                                                        </template>
                                                                                        <template v-else>
                                                                                            RECREO
                                                                                        </template>
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
                                            <div class="card-footer" v-if="seccionSeleccionada > 0 && horas.length > 0 && turnoSeleccionado != '0'">
                                                <button style="margin-right:5px;" id="btnGuardar" type="button" class="btn btn-success" @click="imprimir()"><span class="fas fa-save"></span> @{{labelBtnSave}}</button>
                                                {{-- <button id="btnGuardar" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarForm()"><span class="fas fa-power-off"></span> Cerrar</button> --}}
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
        </div>
    </div>
</div>