<div v-if="!divFormularioAlumno && divFormularioCabecera && divSectionMatricula && !divFormularioMatricula && !divFormularioGestionAlumno">
    <br>
    <h5>Datos de Matrícula Realizada:</h5>
    <br>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="cbuciclo_seccion_id">Seccion del Alumno <spam style="color:red;">*</spam></label>
          <select class="form-control" style="width: 100%;" v-model="matricula.ciclo_seccion_id" id="cbuciclo_seccion_id" disabled>
            <option value="0" disabled>Seleccione ...</option>
            <template v-for="(seccion, index) in secciones">
              <option v-bind:value="seccion.id">@{{seccion.nombre}}</option>
            </template>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
            <label for="txtTurno">Turno <spam style="color:red;">*</spam></label>
            <input type="text" class="form-control" id="txtTurno" placeholder="Turno" v-model="turnoNivel" maxlength="50" readonly>
        </div>
    </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="txtresponsable_matricula_nombres">Responsable de Matrícula <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtresponsable_matricula_nombres" placeholder="Apellidos y Nombres" v-model="matricula.responsable_matricula_nombres" maxlength="500" readonly>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="txtcargo_responsable">Cargo del Responsable <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtcargo_responsable" placeholder="Cargo" v-model="matricula.cargo_responsable" maxlength="200" readonly>
            </div>
        </div>
    </div>
    
    <div class="row" v-if="alumno.estado_grado == '0'">
        <div class="col-md-4">
            <div class="form-group">
              <label for="cbues_traslado">¿Es ingreso por traslado externo? <spam style="color:red;">*</spam></label>
              <select class="form-control" style="width: 100%;" v-model="matricula.es_traslado" id="cbues_traslado" disabled>
                <option value="0">No</option>
                <option value="1">Si</option>
              </select>
            </div>
          </div>
    </div>

    <div class="row" v-if="matricula.es_traslado == '1'">

        <div class="col-md-4">
            <div class="form-group">
                <label for="txtcodigo_modular">Código Modular de la IE donde Proviene <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtcodigo_modular" placeholder="Código" v-model="traslado.codigo_modular" maxlength="7" readonly>
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="txtie_nombre">Nombre de la IE donde Proviene <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtie_nombre" placeholder="Nombre de la IE" v-model="traslado.ie_nombre" maxlength="250" readonly>
            </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
              <label for="txtres_traslado">Resolución de Traslado <spam style="color:red;">*</spam></label>
              <input type="text" class="form-control" id="txtres_traslado" placeholder="Nombre de la Resolución" v-model="traslado.res_traslado" maxlength="100" readonly>
          </div>
      </div>

      <div class="col-md-6">

        <div class="form-group">
          <label for="txtnombrefile">Descargar Resolución: (pdf)</label>
          <a v-bind:href="'{{ asset('/web/matricula/traslados')}}'+'/'+traslado.resolucion_traslado"  class="btn btn-primary btn-xs" download> Descargar</a>
           </div>
        </div>
      
      </div>
      
      <div class="card-footer">
        <button id="btnSaveMatricula"  type="button" class="btn btn-success" @click="imprimirMatricula()" style="margin-right:5px;"><span class="fas fa-print"></span> Imprimir Ficha de Matrícula</button>
        <button id="btnEditMat" type="button" class="btn btn-warning" @click="editarMatricula()" style="margin-right: 10px;"><span class="fas fa-edit"></span> Editar Matrícula</button>
        <button id="btnAnularMat" type="button" class="btn btn-danger" @click="anularMatricula()" style="margin-right: 10px;"><span class="fas fa-trash"></span> Anular Matrícula</button>
        <button id="btnEditAlu" type="button" class="btn btn-warning" @click="editAlumnoGestion()" style="margin-right: 10px;"><span class="fas fa-edit"></span> Editar Datos Personales</button>
        <button id="btnAtrasMatricula" type="button" class="btn btn-danger" @click="cerrarMatricula()" style="margin-right: 10px;"><span class="fas fa-times"></span> Cerrar</button>
      </div>

  </div>
