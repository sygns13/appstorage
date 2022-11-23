<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista de Alumnos</h3>
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


                        <template v-if="verFormulario && registros != null && registros.niveles != undefined && registros.niveles != null">

                            <div class="col-md-12" v-for="(nivel, indexN) in registros.niveles">
                                <div class="card card-primary">
                                    <div class="card-header">
                    
                    
                                    <h3 class="card-title">Nivel @{{nivel.nombre}}</h3>
                    
                    
                                    </div>
                                    <form>
                                    <div class="card-body">

                    
                                        <div class="table-responsive p-0" v-if="nivel.listaGeneral.length > 0">
                                            <table class="table table-bordered table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="titles-table" style="width: 5%">#</th>
                                                        <th class="titles-table" style="width: 25%">Curso</th>
                                                        <th class="titles-table" style="width: 20%">Grado</th>
                                                        <th class="titles-table" style="width: 15%">Seccion</th>
                                                        <th class="titles-table" style="width: 10%">Turno</th>
                                                        <th class="titles-table" style="width: 10%">N° Matriculados</th>
                                                        <th class="titles-table" style="width: 15%">Gestión</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(registro, indexR) in nivel.listaGeneral">
                                                        <td class="rows-table">@{{indexR+1}}.</td>                                    
                                                        <td class="rows-table">@{{registro.curso}}</td>
                                                        <td class="rows-table">@{{registro.grado}}</td>
                                                        <td class="rows-table">@{{registro.sigla}}</td>
                                                        <td class="rows-table">@{{registro.turno}}</td>
                                                        <td class="rows-table">@{{registro.matriculados}}</td>
                                                        <td>
                                                            <center>
                                                            <x-adminlte-button @click="detalles(registro, nivel)" id="btnEdit" class="bg-gradient btn-sm" type="button" label="Ver Detalles" theme="info" icon="fas fa-list-ol"
                                                            data-placement="top" data-toggle="tooltip" title="Editar registro" style="margin-right: 5px;"/>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                    
                                        </div>
                                        <div v-else>
                                            <h6>No tiene cursos asignados en el Nivel @{{nivel.nombre}}</h6>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </template>

                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>


    </div>
</div>