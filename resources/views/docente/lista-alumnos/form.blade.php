  <div class="modal" id="modalFormulario">
    <div class="modal-dialog modal-lg" style="max-width: 80%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Listado de Alumnos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table style="width: 100%;">
            <tr>
                <td style="width: 15%; font-weight:bold;">Nivel:</td>
                <td style="width: 35%;">@{{nivel.nombre}}</td>
                <td style="width: 15%; font-weight:bold;">Grado:</td>
                <td style="width: 35%;">@{{headerLista.grado}}</td>
            </tr>

            <tr>
              <td style="font-weight:bold;">Sección:</td>
              <td>@{{headerLista.sigla}}</td>
              <td style="font-weight:bold;">Turno:</td>
              <td>@{{headerLista.turno}}</td>
            </tr>

            <tr>
              <td style="font-weight:bold;">Curso:</td>
              <td>@{{headerLista.curso}}</td>
              <td style="font-weight:bold;">Docente:</td>
              <td>@{{headerLista.apeDocente}} @{{headerLista.nomDocente}}</td>
            </tr>
          </table>


          <div class="table-responsive p-0" v-if="matriculas.length > 0" style="margin-top: 30px;">
            <hr>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th class="titles-table" style="font-size:14px; width: 5%; vertical-align: middle; text-align: center;">N°</th>
                        <th class="titles-table" style="font-size:14px; width: 20%; vertical-align: middle; text-align: center;">DNI o Código del Estudiante</th>
                        <th class="titles-table" style="font-size:14px; width: 35%; vertical-align: middle; text-align: center;">Apellidos y Nombres</th>
                        <th class="titles-table" style="font-size:14px; width: 15%; vertical-align: middle; text-align: center;">Fecha de Nacimiento</th>
                        <th class="titles-table" style="font-size:14px; width: 10%; vertical-align: middle; text-align: center;">Sexo</th>
                        <th class="titles-table" style="font-size:14px; width: 15%; vertical-align: middle; text-align: center;">Situación de Matrícula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(registro, indexS) in matriculas">
                        <td class="rows-table">@{{indexS+1}}.</td>
                        <td class="rows-table">@{{registro.sigla_tipodoc}}: @{{registro.num_documento_alu}}</td>
                        <td class="rows-table">@{{registro.apellido_paterno_alu}} @{{registro.apellido_materno_alu}}, @{{registro.nombres_alu}}</td>
                        <td class="rows-table">@{{registro.fecha_nacimiento_alu}}</td>
                        <td class="rows-table">@{{registro.genero_alu}}</td>
                        <td class="rows-table">
                          <template v-if="registro.old_estado_grado_alu=='0'">
                              Ingresante
                          </template>
                          <template v-if="registro.old_estado_grado_alu=='2'">
                              Promovido
                          </template>
                          <template v-if="registro.old_estado_grado_alu=='3'">
                              Permanece en el Grado
                          </template>
                          <template v-if="registro.old_estado_grado_alu=='4'">
                              Reentrante
                          </template>
                      </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div v-else style="margin-top: 30px;">
            <hr>
            <h6>No existen registros de Alumnos Matriculados</h6>
        </div>
            
        </div>
        <div class="modal-footer justify-content-between">
          <button id="btnGuardar" type="button" class="btn btn-default" data-dismiss="modal" @click="cerrarForm()"><span class="fas fa-power-off"></span> Cerrar</button>
          {{-- <button id="btnClose" type="button" class="btn btn-primary" @click="procesar()"><span class="fas fa-save"></span> @{{labelBtnSave}}</button> --}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->