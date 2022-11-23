const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Registro de Asistencia de Alumnos",
            subtituloHeader: "Módulo de Control",
            subtitulo2Header: "Registro de Asistencia de Alumnos",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            alumnos: [],
            data: {},
            errors: [],

            asistencia_dia: {
                'type':'C',
                'id': 0,
                'fecha': '',
                'ciclo_seccion_id': '',
                'ciclo_escolar_id': '',
                'ciclo_curso_id': '',
                'horario_id': '',
                'tema': '',
                'curso': '',
                'seccion': '',
                'grado': '',
                'turno': '',
                'horaIni': '',
                'horaFin': '',
                'diaNumero': '',
                'nivel': '',
            },
            fillobject: {
                'type':'C',
                'id': '',
                'fecha': '',
                'alumno_id': '',
                'ciclo_escolar_id': '',
                'ciclo_seccion_id': '',
                'estado': '1',
                'observacion': '',
                'asistencia_id': '',
                'nombre': '',
                'apellidos': '',
                'tipo_documentos_sigla': '',
                'num_documento': '',
                'ciclo_curso_id': '',
                'horario_id': '',
                'tema': '',
            },

            labelBtnSave: 'Registrar',
            turnoNombre : '',


            divloaderNuevo: false,

            indexRegistro : 0,
            indexNivel : 0,


            tomarAsistencia: false,

            keyNivel_bk: 0,
            keyCurso_bk: 0,

        }
    },
    created: function() {
        this.asistencia_dia.fecha = fechaHoy;
        this.asistencia_dia.ciclo_escolar_id = ciclo_escolar_id;
        this.getDatos(this.thispage);
    },
    mounted: function() {
        console.log("mounted");
    },
    computed: {
        isActived: function() {
            return this.pagination.current_page;
        },
        pagesNumber: function() {
            if (!this.pagination.to) {
                return [];
            }

            var from = this.pagination.current_page - this.offset
            var from2 = this.pagination.current_page - this.offset
            if (from < 1) {
                from = 1;
            }

            var to = from2 + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }

            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    methods: {

        cambioFecha: function() {
            
            if (this.asistencia_dia.fecha != null && this.asistencia_dia.fecha != ""){
                this.getDatos();
            }
        },
        getDatos: function() {
            let fecha = this.asistencia_dia.fecha;
            let url = 'reasistencia?fecha=' + fecha;
            axios.get(url).then(response => {
                this.data= response.data;

                if(!this.data.error){
                    if(this.keyNivel_bk > 0 && this.keyCurso_bk > 0){ 
                        this.asistenciaCurso(this.keyNivel_bk, this.keyCurso_bk);
                    }

                }
            })
        },

        asistenciaCurso: function (keyNivel, keyCurso) {

            let nivel = this.data.niveles[keyNivel];
            let curso = nivel.cursos[keyCurso];

            this.keyNivel_bk = keyNivel;
            this.keyCurso_bk = keyCurso;

            if(curso.cantAlumnos == 0){
                //toastr.error("No puede registrar la asistencia de esta sección, ya que no cuenta con alumnos matriculados");
                Swal.fire({
                    icon: 'info',
                    title: '',
                    text: 'No puede registrar la asistencia de este curso - sección, ya que no cuenta con alumnos matriculados',
                    confirmButtonText: 'Aceptar',
                  })
                return;
            }


            this.asistencia_dia.id = curso.idAsistencia;

            if(this.asistencia_dia.id != 0 && curso.asistencia != null){
                this.asistencia_dia.tema = curso.asistencia.tema;
                this.asistencia_dia.type = 'U';
            }

            this.asistencia_dia.ciclo_seccion_id = curso.ciclo_seccion_id;
            this.asistencia_dia.ciclo_curso_id = curso.idcurso;
            this.asistencia_dia.horario_id = curso.idhorario;
            this.asistencia_dia.curso = curso.curso;
            this.asistencia_dia.seccion = curso.sigla;
            this.asistencia_dia.grado = curso.grado;
            this.asistencia_dia.turno = curso.turno;
            this.asistencia_dia.horaIni = curso.hora_ini;
            this.asistencia_dia.horaFin = curso.hora_fin;
            this.asistencia_dia.diaNumero = curso.dia_semana;
            this.asistencia_dia.nivel = nivel.nombre;

            this.alumnos = curso.matriculas;

            this.$nextTick(() => {
                this.tomarAsistencia = true;
                $('#txttema').focus();
            });
    
        },

        cerrarFormDiaAsistencia: function () {
            this.tomarAsistencia = false;
            this.keyNivel_bk = 0;
            this.keyCurso_bk = 0;
            this.cancelFormDiaAsistencia();
        },
        cancelFormDiaAsistencia: function () {
            this.asistencia_dia.tema = '';
            this.asistencia_dia.type = 'C';

            this.$nextTick(() => {
                $('#txttema').focus();
            });
        },
        procesarDiaAsistencia: function() {
            if(this.asistencia_dia.type == 'C'){
                this.confirmRegistrarDiaAsistencia();
            }
            if(this.asistencia_dia.type == 'U'){
                this.confirmActualizarDiaAsistencia();
            }
        },
        confirmRegistrarDiaAsistencia:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar el Registro del Tema del Día de Asistencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    this.createDiaAsistencia();
                }

            }).catch(swal.noop);
        },
        createDiaAsistencia:function () {
            var url='reasistencia';
            $("#btnGuardarDiaAsistencia").attr('disabled', true);
            $("#btnCloseDiaAsistencia").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, this.asistencia_dia).then(response=>{

                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.thispage = '1';
                    this.getDatos(this.thispage);
                    this.errors=[];
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
            })
        },

        confirmActualizarDiaAsistencia:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar el Registro del Tema del Día de Asistencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.updateDiaAsistencia();
                }

            }).catch(swal.noop);
        },
        updateDiaAsistencia: function () {

            var url="reasistencia/"+this.asistencia_dia.id;
            $("#btnGuardarDiaAsistencia").attr("disabled");
            $("#btnCloseDiaAsistencia").attr("disabled");
            this.divloaderEdit=true;

            axios.put(url, this.asistencia_dia).then(response=>{


                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
                this.divloaderEdit=false;
                
                if(response.data.result=='1'){
                    this.getDatos(this.thispage);
                    this.errors=[];
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }

            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
            })
        },  
        borrarDiaAsistencia:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Eliminar el registro del Día de Asistencia. Nota: Se eliminarán todas las asistencias de Alumnos registradas en este Día",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    this.deleteDiaAsistencia(dato);
                }

            }).catch(swal.noop);
        },
        deleteDiaAsistencia:function (dato) {
            var url = 'reasistencia/'+dato.id;
            axios.delete(url).then(response=>{//eliminamos

                if(response.data.result=='1'){
                    this.thispage = '1';
                    this.getDatos(this.thispage);
                    this.errors=[];
                    toastr.success(response.data.msj);
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            });
        },



        createDiaAsistenciaDefault:function () {
            var url='reasistencia';
            $("#btnGuardarDiaAsistencia").attr('disabled', true);
            $("#btnCloseDiaAsistencia").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, this.asistencia_dia).then(response=>{

                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.thispage = '1';
                    this.getDatosDefault(this.thispage);
                    this.errors=[];
                    //toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
            })
        },

        getDatosDefault: function() {
            let fecha = this.asistencia_dia.fecha;
            let url = 'reasistencia?fecha=' + fecha;
            axios.get(url).then(response => {
                this.data= response.data;

                if(!this.data.error){
                    if(this.keyNivel_bk > 0 && this.keyCurso_bk > 0){ 
                        this.asistenciaCursoDefault(this.keyNivel_bk, this.keyCurso_bk);
                    }

                }
            })
        },

        asistenciaCursoDefault: function (keyNivel, keyCurso) {

            let nivel = this.data.niveles[keyNivel];
            let curso = nivel.cursos[keyCurso];

            this.keyNivel_bk = keyNivel;
            this.keyCurso_bk = keyCurso;

            this.asistencia_dia.id = curso.idAsistencia;

            if(this.asistencia_dia.id != 0 && curso.asistencia != null){
                this.asistencia_dia.tema = curso.asistencia.tema;
                this.asistencia_dia.type = 'U';
            }

            this.asistencia_dia.ciclo_seccion_id = curso.ciclo_seccion_id;
            this.asistencia_dia.ciclo_curso_id = curso.idcurso;
            this.asistencia_dia.horario_id = curso.idhorario;
            this.asistencia_dia.curso = curso.curso;
            this.asistencia_dia.seccion = curso.sigla;
            this.asistencia_dia.grado = curso.grado;
            this.asistencia_dia.turno = curso.turno;
            this.asistencia_dia.horaIni = curso.hora_ini;
            this.asistencia_dia.horaFin = curso.hora_fin;
            this.asistencia_dia.diaNumero = curso.dia_semana;
            this.asistencia_dia.nivel = nivel.nombre;

            this.alumnos = curso.matriculas;

            this.$nextTick(() => {
                this.tomarAsistencia = true;
                $('#txttema').focus();
            });

            
            this.fillobject.fecha = this.asistencia_dia.fecha;
            this.fillobject.ciclo_seccion_id = this.asistencia_dia.ciclo_seccion_id;
            this.fillobject.asistencia_id = this.asistencia_dia.id;
            this.fillobject.ciclo_curso_id = this.asistencia_dia.ciclo_curso_id;
            this.fillobject.horario_id = this.asistencia_dia.horario_id;
            this.fillobject.tema = this.asistencia_dia.tema;


            this.create();
    
        },




        nuevo:function (type, alumno) {
            this.cancelForm();

            this.fillobject.estado = type;
            this.fillobject.alumno_id = alumno.alumno_id;
            this.fillobject.nombre = alumno.nombres_alu;
            this.fillobject.apellidos = alumno.apellido_paterno_alu + ' ' + alumno.apellido_materno_alu;
            this.fillobject.tipo_documentos_sigla = alumno.sigla_tipodoc;
            this.fillobject.num_documento = alumno.num_documento_alu;

            if(type == '0'){
                this.labelBtnSave = 'Registrar Falta del Alumno';
            }
            if(type == '1'){
                this.labelBtnSave = 'Registrar Asistencia del Alumno';
            }
            if(type == '2'){
                this.labelBtnSave = 'Registrar Tardanza del Alumno';
            }
            
            this.fillobject.type = 'C';

            /* $("#modalFormulario").modal('show');
            this.$nextTick(() => {
                $('#txtobservacion').focus();
            }); */
            this.procesar();
        },
        cerrarForm: function () {
            $("#modalFormulario").modal('hide');
            this.cancelForm();
        },
        cancelForm: function () {

            this.fillobject.type = 'C';
            this.fillobject.id = '';
            this.fillobject.fecha = this.asistencia_dia.fecha;
            this.fillobject.ciclo_escolar_id = ciclo_escolar_id;
            this.fillobject.ciclo_seccion_id = this.asistencia_dia.ciclo_seccion_id;
            this.fillobject.estado = '1';
            this.fillobject.observacion = '';
            this.fillobject.asistencia_id = this.asistencia_dia.id;
            this.fillobject.alumno_id = '';
            this.fillobject.nombre = '';
            this.fillobject.apellidos = '';
            this.fillobject.tipo_documentos_sigla = '';
            this.fillobject.num_documento = '';
            this.fillobject.ciclo_curso_id = this.asistencia_dia.ciclo_curso_id;
            this.fillobject.horario_id = this.asistencia_dia.horario_id;
            this.fillobject.tema = this.asistencia_dia.tema;

            /* this.$nextTick(() => {
                $('#txtobservacion').focus();
            }); */
        },

        procesar: function() {
            if(this.fillobject.type == 'C'){
                this.confirmRegistrar();
            }
            if(this.fillobject.type == 'U'){
                this.confirmActualizar();
            }
        },
        confirmRegistrar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar el Registro de la Asistencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {

                    if(this.asistencia_dia.id == '0'){
                        this.createDiaAsistenciaDefault();
                    }
                    else{
                        this.create();
                    }
                    
                }

            }).catch(swal.noop);
        },
        create:function () {
            var url='reasistencia-alumno';
            $("#btnGuardar").attr('disabled', true);
            $("#btnClose").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, this.fillobject).then(response=>{

                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarForm();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
            })
        },
        edit:function (type, alumno) {

            this.cancelForm();
            this.fillobject.id=alumno.id_asistencia;

            this.fillobject.estado = type;
            this.fillobject.alumno_id = alumno.alumno_id;
            this.fillobject.nombre = alumno.nombres_alu;
            this.fillobject.apellidos = alumno.apellido_paterno_alu + ' ' + alumno.apellido_materno_alu;
            this.fillobject.tipo_documentos_sigla = alumno.sigla_tipodoc;
            this.fillobject.num_documento = alumno.num_documento_alu;

            if(type == '0'){
                this.labelBtnSave = 'Registrar Falta del Alumno';
            }
            if(type == '1'){
                this.labelBtnSave = 'Registrar Asistencia del Alumno';
            }
            if(type == '2'){
                this.labelBtnSave = 'Registrar Tardanza del Alumno';
            }

            this.fillobject.type = 'U';

            /* $("#modalFormulario").modal('show');
            this.$nextTick(() => {
                $('#txtobservacion').focus();
            }); */
            this.procesar();

        },
        confirmActualizar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Actualización del Registro de la Asistencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.update();
                }

            }).catch(swal.noop);
        },
        update: function () {

            var url="reasistencia-alumno/"+this.fillobject.id;
            $("#btnGuardar").attr("disabled");
            $("#btnClose").attr("disabled");
            this.divloaderEdit=true;

            axios.put(url, this.fillobject).then(response=>{


                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderEdit=false;
                
                if(response.data.result=='1'){
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarForm();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }

            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
            })
        },  
        borrar:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Eliminar el registro de Asistencia del Alumno",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    this.delete(dato);
                }

            }).catch(swal.noop);
        },
        delete:function (dato) {
            var url = 'reasistencia-alumno/'+dato.id;
            axios.delete(url).then(response=>{//eliminamos

                if(response.data.result=='1'){
                    this.getDatos(this.thispage);//listamos
                    toastr.success(response.data.msj);//mostramos mensaje
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            });
        },
    }
}).mount('#app')