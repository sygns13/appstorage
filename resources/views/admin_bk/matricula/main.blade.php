<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            @if(!$cicloActivo)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Matrícula</h3>
                        <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                            Volver</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <h4 class="text-danger">No existe Año Escolar Activo, para registrar matrículas es necesario que un Año Escolar se encuentre Activo con Proceso de Matrícula Activo.</h4>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            @elseif(intval($cicloActivo->activo_matricula) == 0)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Matrícula</h3>
                        <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                            Volver</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <h3>Año Escolar: {{$cicloActivo->nombre}}</h3>
                            <h4 class="text-danger">El presente Año escolar tiene el Proceso de Matrícula Cerrado, para registrar matrículas es necesario que un Año Escolar se encuentre Activo con Proceso de Matrícula Activo.</h4>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            @else

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registro de Matrícula</h3>
                    <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('admin')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
                        Volver</a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form v-on:submit.prevent="buscarAlumno">
                    <div class="card-body">

                        <h3>Año Escolar: {{$cicloActivo->nombre}}</h3>

                        {{-- Formulario para buscar al alumno --}}
                        <h4 v-if="!divFormularioAlumno && !divFormularioCabecera">Realize la búsqueda del Alumno para Matricular:</h4><br>

                        <div class="row" v-if="!divFormularioAlumno && !divFormularioCabecera">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="cbutipo_documento_id">Tipo de Documento de Identidad <spam style="color:red;">*</spam></label>
                                <select class="form-control" style="width: 100%;" v-model="alumno.tipo_documento_id" id="cbutipo_documento_id" @change="changeTipoDoc()">
                                  <option value="0" disabled>Seleccione ...</option>
                                  <template v-for="(tipoDoc, index) in tipoDocumentos">
                                    <option v-bind:value="tipoDoc.id">@{{tipoDoc.nombre}}</option>
                                  </template>
                                </select>
                              </div>
                            </div>
              
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="txtnum_documento">Número de @{{tipoDocSelect.sigla}} <spam style="color:red;">*</spam></label>
                                <input type="text" class="form-control" id="txtnum_documento" placeholder="Documento de Identidad" v-model="alumno.num_documento" v-bind:maxlength="tipoDocSelect.digitos">
                              </div>
                            </div>
                        </div>

                        <div class="card-footer" v-if="!divFormularioAlumno && !divFormularioCabecera">
                            <button style="margin-right:5px;" id="btnBuscar" type="button" class="btn btn-primary" @click="buscarAlumno()"><span class="fas fa-search"></span> Buscar Alumno</button>
                            {{-- <button id="btnCerrarL" type="button" class="btn btn-success" @click="imprimirMatricula()" style="float:right;"><span class="fas fa-power-off"></span> Test impresion</button> --}}
                        </div>


                        {{-- Formulario para registrar la cabecera de la matrícula --}}
                        <h4 v-if="!divFormularioAlumno && divFormularioCabecera && !divSectionMatricula">Realizar la Matrícula del Alumno:</h4><br>
                        <h4 v-if="!divFormularioAlumno && divFormularioCabecera && divSectionMatricula">Alumno Matriculado:</h4><br>

                        <div class="row" v-if="!divFormularioAlumno && divFormularioCabecera">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="cbutipo_documento_id">Tipo de Documento de Identidad <spam style="color:red;">*</spam></label>
                                <select class="form-control" style="width: 100%;" v-model="alumno.tipo_documento_id" id="cbutipo_documento_id"  disabled>
                                  <option value="0" disabled>Seleccione ...</option>
                                  <template v-for="(tipoDoc, index) in tipoDocumentos">
                                    <option v-bind:value="tipoDoc.id">@{{tipoDoc.nombre}}</option>
                                  </template>
                                </select>
                              </div>
                            </div>
              
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="txtnum_documento">Número de @{{tipoDocSelect.sigla}} <spam style="color:red;">*</spam></label>
                                <input type="text" class="form-control" id="txtnum_documento" placeholder="Documento de Identidad" v-model="alumno.num_documento" v-bind:maxlength="tipoDocSelect.digitos" readonly>
                              </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="txtapellido_paterno">Alumno (a):<spam style="color:red;">*</spam></label>
                                  <input type="text" class="form-control" id="txtapellido_paterno" placeholder="Alumno" v-model="alumno.fullNombre" readonly>
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="cbunivel_actualRead">Nivel <spam style="color:red;">*</spam></label>
                                  <select class="form-control" style="width: 100%;" v-model="alumno.nivel_actual" id="cbunivel_actual" disabled>
                                    <option value="0" disabled>Seleccione ...</option>
                                    @foreach ($niveles as $dato)
                                    <option value="{{$dato->id}}" selected>{{$dato->nombre}}</option> 
                                    @endforeach
                                  </select>
                                </div>
                              </div>
            
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="cbugrado_actualRead">Grado <spam style="color:red;">*</spam></label>
                                  <select class="form-control" style="width: 100%;" v-model="alumno.grado_actual" id="cbugrado_actualRead" disabled>
                                    <option value="0" disabled>Seleccione ...</option>
                                    @foreach ($grados as $dato)
                                    <option value="{{$dato->id}}" v-if="alumno.nivel_actual == '{{$dato->nivele_id}}'">{{$dato->nombre}}</option> 
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                        </div>

                        <div class="card-footer" v-if="!divFormularioAlumno && divFormularioCabecera && !divFormularioMatricula && !divSectionMatricula">
                            <button style="margin-right:5px;" id="btnIniMat" type="button" class="btn btn-primary" @click="matriAlumno()"><span class="fas fa-chalkboard-teacher"></span> Iniciar Matrícula</button>
                            <button v-if="alumno.estado_grado === 0" style="margin-right:5px;" id="btnEditMat" type="button" class="btn btn-warning" @click="editAlumno()"><span class="fas fa-edit"></span> Editar Datos Personales</button>
                            <button v-if="alumno.estado_grado !== 0" style="margin-right:5px;" id="btnEditMat" type="button" class="btn btn-warning" @click="editAlumnoGestion()"><span class="fas fa-edit"></span> Editar Datos Personales</button>
                            <button style="margin-right:5px;" id="btnCancelMat" type="button" class="btn btn-danger" @click="cancelAlumno()"><span class="fas fa-times"></span> Cancelar</button>
                        </div>

                        
                        @include('admin.matricula.form-matricula')
                        @include('admin.matricula.section-matricula')



                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            @endif
        </div>
    </div>


    

    
</div>