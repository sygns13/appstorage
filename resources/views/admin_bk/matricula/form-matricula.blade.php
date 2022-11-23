<div v-if="!divFormularioAlumno && divFormularioCabecera && divFormularioMatricula">
    <br>
    <h5>Complete los Datos de Matrícula:</h5>
    <br>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="cbuciclo_seccion_id">Seccion del Alumno <spam style="color:red;">*</spam></label>
          <select class="form-control" style="width: 100%;" v-model="matricula.ciclo_seccion_id" id="cbuciclo_seccion_id">
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
                <input type="text" class="form-control" id="txtresponsable_matricula_nombres" placeholder="Apellidos y Nombres" v-model="matricula.responsable_matricula_nombres" maxlength="500">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="txtcargo_responsable">Cargo del Responsable <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtcargo_responsable" placeholder="Cargo" v-model="matricula.cargo_responsable" maxlength="200">
            </div>
        </div>
    </div>
    
    <div class="row" v-if="alumno.estado_grado == '0' || (alumno.type == 'U' && alumno.estado_grado == '1' && alumno.old_estado_grado == '0')">
        <div class="col-md-4">
            <div class="form-group">
              <label for="cbues_traslado">¿Es ingreso por traslado externo? <spam style="color:red;">*</spam></label>
              <select class="form-control" style="width: 100%;" v-model="matricula.es_traslado" id="cbues_traslado">
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
                <input type="text" class="form-control" id="txtcodigo_modular" placeholder="Código" v-model="traslado.codigo_modular" maxlength="7" onkeypress="return soloNumeros(event);">
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="txtie_nombre">Nombre de la IE donde Proviene <spam style="color:red;">*</spam></label>
                <input type="text" class="form-control" id="txtie_nombre" placeholder="Nombre de la IE" v-model="traslado.ie_nombre" maxlength="250">
            </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
              <label for="txtres_traslado">Resolución de Traslado <spam style="color:red;">*</spam></label>
              <input type="text" class="form-control" id="txtres_traslado" placeholder="Nombre de la Resolución" v-model="traslado.res_traslado" maxlength="100">
          </div>
      </div>

      <div class="col-md-6">

        <div class="form-group">
          <label for="txtnombrefile">Adjunte Resolución: (pdf)</label>
             <input v-if="uploadReady" name="archivo2" type="file" id="archivo2" class="archivo form-control" @change="getArchivo" accept=".pdf, .PDF"/>      
           </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
              <label for="txtmotivo">Motivo de Traslado <spam style="color:red;">*</spam></label>
              <input type="text" class="form-control" id="txtmotivo" placeholder="Motivo" v-model="traslado.motivo" maxlength="250">
          </div>
      </div>
      
      </div>

      <div class="card-footer">
        <button id="btnSaveMatricula"  type="button" class="btn btn-success" @click="procesarMatricula()" style="margin-right:5px;"><span class="fas fa-save"></span> @{{labelBtnMatricula}}</button>
        <button id="btnAtrasMatricula" type="button" class="btn btn-danger" @click="atrasMatricula()" style="margin-right: 10px;"><span class="fas fa-times"></span> Atras</button>
      </div>
  </div>