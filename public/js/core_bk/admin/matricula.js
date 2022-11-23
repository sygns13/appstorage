const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Registro de Matrículas",
            subtituloHeader: "Gestión Académica",
            subtitulo2Header: "Registro de Matrículas",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            errors: [],

            pagination: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'from': 0,
                'to': 0
            },
            offset: 9,

            buscar: '',
            divNuevo: false,
            divEdit: false,

            divloaderNuevo: false,
            divloaderEdit: false,

            mostrarPalenIni: true,

            thispage: '1',
            divprincipal: false,

            labelBtnSaveAlumno: 'Registrar Nuevo',
            labelBtnSave: 'Registrar Matrícula',

            labelFooterAlumno: 'Nuevo Alumno',

            seccionSeleccionada: 0,

            tipoDocumentos: [],

            alumno:{
                'type':'C',
                'id' : '',
                'tipo_documento_id' : 1,
                'num_documento' : '',
                'apellido_paterno' : '',
                'apellido_materno' : '',
                'nombres' : '',
                'fecha_nacimiento' : '',
                'genero' : 'M',
                'grado_actual' : 0,
                'nivel_actual' : 0,
                'telefono' : '',
                'direccion' : '',
                'correo' : '',
                'pais' : '',
                'sigla_pais' : '',
                'departamento' : '',
                'provincia' : '',
                'distrito' : '',
                'lugar' : '',
                'lengua_materna' : '',
                'segunda_lengua' : '',
                'num_hermanos' : '',
                'lugar_hermano' : '',
                'religion' : '',
                'DI' : '',
                'DA' : '',
                'DV' : '',
                'DM' : '',
                'SC' : '',
                'OT' : '',
                'nacimiento' : 0,
                'nacimiento_registrado' : 1,
                'obs_nacimiento' : '',
                'levanto_cabeza' : '',
                'se_sento' : '',
                'se_paro' : '',
                'se_camino' : '',
                'se_control_esfinter' : '',
                'se_primeras_palabras' : '',
                'se_hablo_fluido' : '',
                'activo' : '1',
                'tipoDocumento':{},
                'apoderados':[],
                'traslados':[],
                'situacionLaborals':{},
                'registroSalud':{},
                'controles':[],
                'domicilios':[],
                'pais_id': 1,
                'departamento_id': 2,
                'provincia_id': 8,
                'distrito_id': 86,
                'fullNombre': '',
                'anio_ingreso': null,
                'codigo_modular': null,
                'numero_matricula': null,
                'flag': null,
                'estado_grado': 0,
            },

            apoderadoMadre: {
                'id': '',
                'apellido_materno': '',
                'apellido_paterno': '',
                'nombres': '',
                'vive': 1,
                'fecha_nacimiento': '',
                'grado_instruccion': '',
                'ocupacion': '',
                'vive_con_estudiante': 1,
                'religion': '',
                'tipo_apoderado': 'Madre',
                'tipo_documento_id': 1,
                'alumno_id': 0,
                'num_documento': '',
                'telefono': '',
                'direccion': '',
                'correo': '',
                'tipo_apoderado_id': 1,
                'principal': 1,
                'activo': 1,
                'escolaridad_sigla': '',

            },

            apoderadoPadre: {
                'id': '',
                'apellido_materno': '',
                'apellido_paterno': '',
                'nombres': '',
                'vive': 1,
                'fecha_nacimiento': '',
                'grado_instruccion': '',
                'ocupacion': '',
                'vive_con_estudiante': 1,
                'religion': '',
                'tipo_apoderado': 'Padre',
                'tipo_documento_id': 1,
                'alumno_id': 0,
                'num_documento': '',
                'telefono': '',
                'direccion': '',
                'correo': '',
                'tipo_apoderado_id': 2,
                'principal': 0,
                'activo': 1,
                'escolaridad_sigla': '',

            },

            apoderadoOtro: {
                'id': '',
                'apellido_materno': '',
                'apellido_paterno': '',
                'nombres': '',
                'vive': 0,
                'fecha_nacimiento': '',
                'grado_instruccion': '',
                'ocupacion': '',
                'vive_con_estudiante': 0,
                'religion': '',
                'tipo_apoderado': '',
                'tipo_documento_id': 1,
                'alumno_id': 0,
                'num_documento': '',
                'telefono': '',
                'direccion': '',
                'correo': '',
                'tipo_apoderado_id': 3,
                'principal': 0,
                'activo': 1,
                'escolaridad_sigla': '',

            },

            tipoDocSelect: {
                'id': '',
                'nombre': 'Documento',
                'sigla': '',
                'digitos': '0',
            },

            tipoDocSelectM: {
                'id': '',
                'nombre': 'Documento',
                'sigla': '',
                'digitos': '0',
            },

            tipoDocSelectP: {
                'id': '',
                'nombre': 'Documento',
                'sigla': '',
                'digitos': '0',
            },

            tipoDocSelectO: {
                'id': '',
                'nombre': 'Documento',
                'sigla': '',
                'digitos': '0',
            },

            turnos:[],
            turnoSeleccionado: 0,
            horas:[],

            divFormularioAlumno: false,
            divFormularioCabecera: false,
            divFormularioMatricula: false,

            stepper: null,

            alumnoBD_BK : {},

            //Matriculas
            matricula: {
                'type':'C',
                'id': 0,
                'alumno_id': 0,
                'ciclo_escolar_id': 0,
                'fecha': '',
                'estado': 0,
                'es_traslado': 0,
                'tiene_discapacidad': 0,
                'DI' : 0,
                'DA' : 0,
                'DV' : 0,
                'DM' : 0,
                'SC' : 0,
                'OT' : 0,
                'vive_madre' : 1,
                'vive_padre' : 1,
                'responsable_matricula_nombres' : '',
                'cargo_responsable' : '',
                'ciclo_seccion_id' : 0,
                'trabaja' : 0,
                'activo': 1,
            },
            secciones:[],

            //
            traslado: {
                'id': '',
                'fecha': '',
                'motivo': '',
                'codigo_modular': '',
                'ie_nombre': '',
                'alumno_id': '',
                'activo': '',
                'borrado': '',
                'created_at': '',
                'updated_at': '',
                'res_traslado': '',
                'resolucion_traslado': '',
                'matricula_id': '',
            },

            
            archivo : null,
            uploadReady: true,

            oldFile:'',
            file:'',

            labelBtnMatricula: 'Registrar Matrícula',
            divSectionMatricula: false,

            divFormularioGestionAlumno: false,

            turnoNivel: '',
        }
    },
    created: function() {
        this.getDatos(this.thispage);
        console.log("created");
    },
    mounted: function() {
        /* $("#divtitulo").show('slow');
        this.divloader0=false;
        this.divprincipal=true; */
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
        changeTipoDoc: function() {
            this.tipoDocumentos.forEach((element) => {
                if(element.id == this.alumno.tipo_documento_id){
                    this.tipoDocSelect = element;
                }
            });
            this.alumno.num_documento = '';
        },
        changeTipoDocM: function() {
            this.tipoDocumentos.forEach((element) => {
                if(element.id == this.apoderadoMadre.tipo_documento_id){
                    this.tipoDocSelectM = element;
                }
            });
            this.apoderadoMadre.num_documento = '';
        },
        changeTipoDocP: function() {
            this.tipoDocumentos.forEach((element) => {
                if(element.id == this.apoderadoPadre.tipo_documento_id){
                    this.tipoDocSelectP = element;
                }
            });
            this.apoderadoPadre.num_documento = '';
        },
        changeTipoDocO: function() {
            this.tipoDocumentos.forEach((element) => {
                if(element.id == this.apoderadoOtro.tipo_documento_id){
                    this.tipoDocSelectO = element;
                }
            });
            this.apoderadoOtro.num_documento = '';
        },
        getDatos: function(page) {
            var busca = this.buscar;
            var url = 'rematricula?page=' + page + '&busca=' + busca;

            axios.get(url).then(response => {
                this.tipoDocumentos= response.data;
                this.changeTipoDoc();
                this.changeTipoDocM();
                this.changeTipoDocP();
                this.changeTipoDocO();
            })
        },

        buscarAlumno: function() {
            
            if(this.alumno.num_documento.trim() == ''){
                toastr.error('Ingrese un número de documento');
                return;
            }
            var url = 'realumnobuscar/buscar/' + this.alumno.tipo_documento_id + '/' + this.alumno.num_documento;

            axios.get(url).then(response => {
                if(response.data.result=='1'){


                    if(response.data.resultFound){
                        this.alumno = response.data.alumno;
                        this.alumnoBD_BK = response.data.alumno;
                        this.errors=[];
                        toastr.success(response.data.msj);
                        this.divFormularioCabecera = true;

                        this.alumno.apoderados.forEach(apoderado => {
                            if(apoderado.tipo_apoderado_id == 1){
                                this.apoderadoMadre = Object.assign({}, apoderado);
                            }
                            if(apoderado.tipo_apoderado_id == 2){
                                this.apoderadoPadre = Object.assign({}, apoderado);
                            }
                            if(apoderado.tipo_apoderado_id == 3){
                                this.apoderadoOtro = Object.assign({}, apoderado);
                            }
                        });

                        if(this.alumno.estado_grado == "1"){
                            this.datosMatriculaSecciones();
                            this.buscarMatricula();
                        }

                    }else{
                        //toastr.info("Alumno no encontrado en el sistema, ¿Desea registrarlo?");
                        this.confirmRegistrar();
                    }
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            })
        },

        confirmRegistrar:function () {
            swal.fire({
                title: 'Alumno no encontrado',
                text: "¿Desea Registrar al Nuevo Alumno?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Registrar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.nuevoAlumno();
                }

            }).catch(swal.noop);
        },

        nuevoAlumno:function () {
            this.cancelFormAlumno();
            this.labelBtnSave = 'Registrar';
            this.alumno.type = 'C';

            this.divFormularioAlumno=true;

            this.$nextTick(() => {
                $('#txtapellido_paterno').focus();
                this.stepper = new Stepper(document.querySelector('.bs-stepper'));
            });
        },
        cerrarFormAlumno: function () {
            this.divFormularioAlumno=false;
            this.cancelFormAlumno();
        },
        cancelFormAlumno: function () {

            this.labelBtnSaveAlumno = 'Registrar Nuevo';
            this.labelFooterAlumno = 'Nuevo Alumno';
            this.alumno = {
                'type':'C',
                'id' : '',
                'tipo_documento_id' : this.alumno.tipo_documento_id,
                'num_documento' : this.alumno.num_documento,
                'apellido_paterno' : '',
                'apellido_materno' : '',
                'nombres' : '',
                'fecha_nacimiento' : '',
                'genero' : 'M',
                'grado_actual' : 0,
                'nivel_actual' : 0,
                'telefono' : '',
                'direccion' : '',
                'correo' : '',
                'pais' : '',
                'sigla_pais' : '',
                'departamento' : '',
                'provincia' : '',
                'distrito' : '',
                'lugar' : '',
                'lengua_materna' : '',
                'nacimiento_registrado' : 1,
                'segunda_lengua' : '',
                'num_hermanos' : '',
                'lugar_hermano' : '',
                'religion' : '',
                'DI' : '',
                'DA' : '',
                'DV' : '',
                'DM' : '',
                'SC' : '',
                'OT' : '',
                'nacimiento' : 0,
                'obs_nacimiento' : '',
                'levanto_cabeza' : '',
                'se_sento' : '',
                'se_paro' : '',
                'se_camino' : '',
                'se_control_esfinter' : '',
                'se_primeras_palabras' : '',
                'se_hablo_fluido' : '',
                'activo' : '1',
                'tipoDocumento':{},
                'apoderados':[],
                'traslados':[],
                'situacionLaborals':{},
                'registroSalud':{},
                'controles':[],
                'domicilios':[],
                'pais_id': 1,
                'departamento_id': 2,
                'provincia_id': 8,
                'distrito_id': 86,
                'fullNombre':'',
                'anio_ingreso': null,
                'codigo_modular': null,
                'numero_matricula': null,
                'flag': null,
                'estado_grado': 0,
            };

            this.apoderadoMadre = {
                'id': '',
                'apellido_materno': '',
                'apellido_paterno': '',
                'nombres': '',
                'vive': 1,
                'fecha_nacimiento': '',
                'grado_instruccion': '',
                'ocupacion': '',
                'vive_con_estudiante': 1,
                'religion': '',
                'tipo_apoderado': 'Madre',
                'tipo_documento_id': 1,
                'alumno_id': 0,
                'num_documento': '',
                'telefono': '',
                'direccion': '',
                'correo': '',
                'tipo_apoderado_id': 1,
                'principal': 1,
                'activo': 1,
                'escolaridad_sigla': '',

            };
            
            this.apoderadoPadre = {
                'id': '',
                'apellido_materno': '',
                'apellido_paterno': '',
                'nombres': '',
                'vive': 1,
                'fecha_nacimiento': '',
                'grado_instruccion': '',
                'ocupacion': '',
                'vive_con_estudiante': 1,
                'religion': '',
                'tipo_apoderado': 'Padre',
                'tipo_documento_id': 1,
                'alumno_id': 0,
                'num_documento': '',
                'telefono': '',
                'direccion': '',
                'correo': '',
                'tipo_apoderado_id': 2,
                'principal': 0,
                'activo': 1,
                'escolaridad_sigla': '',

            };

            this.apoderadoOtro = {
                'id': '',
                'apellido_materno': '',
                'apellido_paterno': '',
                'nombres': '',
                'vive': 0,
                'fecha_nacimiento': '',
                'grado_instruccion': '',
                'ocupacion': '',
                'vive_con_estudiante': 0,
                'religion': '',
                'tipo_apoderado': '',
                'tipo_documento_id': 1,
                'alumno_id': 0,
                'num_documento': '',
                'telefono': '',
                'direccion': '',
                'correo': '',
                'tipo_apoderado_id': 3,
                'principal': 0,
                'activo': 1,
                'escolaridad_sigla': '',

            };

            this.$nextTick(() => {
                $('#txtapellido_paterno').focus();
                $("#checkboxMadreVive").prop("checked", true);
                $("#checkboxMadreViveAlumno").prop("checked", true);
                $("#checkboxMadreApodPrincipal").prop("checked", true);

                $("#checkboxPadreVive").prop("checked", true);
                $("#checkboxPadreViveAlumno").prop("checked", true);

                $('#txtnum_documento').focus();
            });
        },

        siguienteNuevoAlumno: function () {
            this.stepper.next();
        },

        atrasNuevoAlumno: function () {
            this.stepper.previous();
        },

        changePais: function () {
            this.alumno.departamento_id = 0;
            this.alumno.provincia_id = 0;
            this.alumno.distrito_id = 0;
        },

        changeDep: function () {
            this.alumno.provincia_id = 0;
            this.alumno.distrito_id = 0;
        },

        changeProv: function () {
            this.alumno.distrito_id = 0;
        },

        changeNivel: function () {
            this.alumno.grado_actual = 0;
        },

        selectApoPrincipalMadre: function () {
            this.apoderadoPadre.principal = 0;
            this.apoderadoOtro.principal = 0;
        },

        selectApoPrincipalPadre: function () {
            this.apoderadoMadre.principal = 0;
            this.apoderadoOtro.principal = 0;
        },

        selectApoPrincipalOtro: function () {
            this.apoderadoMadre.principal = 0;
            this.apoderadoPadre.principal = 0;
        },

        procesarAlumno: function() {
            if(this.alumno.type == 'C'){
                this.confirmRegistrarAlumno();
            }
            if(this.alumno.type == 'U'){
                this.confirmActualizarAlumno();
            }
        },

        confirmRegistrarAlumno:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Confirmar el Registro del Alumno?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.createAlumno();
                }

            }).catch(swal.noop);
        },
        createAlumno:function () {
            var url='remalumno';
            $("#btnSave").attr('disabled', true);
            $("#btnCerrarL").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, {alumno: this.alumno, apoderadoMadre: this.apoderadoMadre, apoderadoPadre: this.apoderadoPadre , apoderadoOtro: this.apoderadoOtro}).then(response=>{

                $("#btnSave").removeAttr("disabled");
                $("#btnCerrarL").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.buscarAlumno(this.thispage);
                    this.errors=[];
                    this.cerrarFormAlumno();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnSave").removeAttr("disabled");
                $("#btnCerrarL").removeAttr("disabled");
            })
        },
        confirmActualizarAlumno:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Confirmar la Modificación del Alumno?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.updateAlumno();
                }

            }).catch(swal.noop);
        },
        cancelAlumno:function () {
            this.divFormularioCabecera = false;
            this.cerrarFormAlumno();
        },
        editAlumno:function () {
            this.labelBtnSaveAlumno = 'Editar';
            this.labelFooterAlumno = 'Modificar Alumno';

            this.labelBtnSave = 'Editar';
            this.alumno.type = 'U';

            this.divFormularioAlumno=true;

            this.$nextTick(() => {
                $('#txtapellido_paterno').focus();
                this.stepper = new Stepper(document.querySelector('.bs-stepper'));
                this.renderChecksAlumno();
                
                
            });
        },
        updateAlumno:function () {
            var url='remalumno/'+this.alumno.id;
            $("#btnSave").attr('disabled', true);
            $("#btnCerrarL").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.put(url, {alumno: this.alumno, apoderadoMadre: this.apoderadoMadre, apoderadoPadre: this.apoderadoPadre , apoderadoOtro: this.apoderadoOtro}).then(response=>{

                $("#btnSave").removeAttr("disabled");
                $("#btnCerrarL").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.buscarAlumno(this.thispage);
                    this.errors=[];
                    this.cerrarFormAlumnoEdit();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnSave").removeAttr("disabled");
                $("#btnCerrarL").removeAttr("disabled");
            })
        },
        cerrarFormAlumnoEdit:function () {
            this.divFormularioAlumno=false;
            this.alumno = Object.assign({}, this.alumnoBD_BK);

            this.alumnoBD_BK.apoderados.forEach(apoderado => {
                if(apoderado.tipo_apoderado_id == 1){
                    this.apoderadoMadre = Object.assign({}, apoderado);
                }
                if(apoderado.tipo_apoderado_id == 2){
                    this.apoderadoPadre = Object.assign({}, apoderado);
                }
                if(apoderado.tipo_apoderado_id == 3){
                    this.apoderadoOtro = Object.assign({}, apoderado);
                }
            });
        },
        renderChecksAlumno:function () {

            //Checks Discapacidades
            if(this.alumno.DI == 1){
                $("#checkboxDI").prop("checked", true);
            } else {
                $("#checkboxDI").prop("checked", false);
            }

            if(this.alumno.DA == 1){
                $("#checkboxDA").prop("checked", true);
            } else {
                $("#checkboxDA").prop("checked", false);
            }

            if(this.alumno.DV == 1){
                $("#checkboxDV").prop("checked", true);
            } else {
                $("#checkboxDV").prop("checked", false);
            }

            if(this.alumno.DM == 1){
                $("#checkboxDM").prop("checked", true);
            } else {
                $("#checkboxDM").prop("checked", false);
            }

            if(this.alumno.SC == 1){
                $("#checkboxSC").prop("checked", true);
            } else {
                $("#checkboxSC").prop("checked", false);
            }

            if(this.alumno.OT == 1){
                $("#checkboxOT").prop("checked", true);
            } else {
                $("#checkboxOT").prop("checked", false);
            }


            //Checks Apoderados
            if(this.apoderadoMadre.vive == 1){
                $("#checkboxMadreVive").prop("checked", true);
            } else {
                $("#checkboxMadreVive").prop("checked", false);
            }

            if(this.apoderadoMadre.vive_con_estudiante == 1){
                $("#checkboxMadreViveAlumno").prop("checked", true);
            } else {
                $("#checkboxMadreViveAlumno").prop("checked", false);
            }

            if(this.apoderadoMadre.principal == 1){
                $("#checkboxMadreApodPrincipal").prop("checked", true);
            } else {
                $("#checkboxMadreApodPrincipal").prop("checked", false);
            }

            if(this.apoderadoPadre.vive == 1){
                $("#checkboxPadreVive").prop("checked", true);
            } else {
                $("#checkboxPadreVive").prop("checked", false);
            }

            if(this.apoderadoPadre.vive_con_estudiante == 1){
                $("#checkboxPadreViveAlumno").prop("checked", true);
            } else {
                $("#checkboxPadreViveAlumno").prop("checked", false);
            }

            if(this.apoderadoPadre.principal == 1){
                $("#checkboxPadreApodPrincipal").prop("checked", true);
            } else {
                $("#checkboxPadreApodPrincipal").prop("checked", false);
            }

            if(this.apoderadoOtro.vive == 1){
                $("#checkboxOtroVive").prop("checked", true);
            } else {
                $("#checkboxOtroVive").prop("checked", false);
            }

            if(this.apoderadoOtro.vive_con_estudiante == 1){
                $("#checkboxOtroViveAlumno").prop("checked", true);
            } else {
                $("#checkboxOtroViveAlumno").prop("checked", false);
            }

            if(this.apoderadoOtro.principal == 1){
                $("#checkboxOtroApodPrincipal").prop("checked", true);
            } else {
                $("#checkboxOtroApodPrincipal").prop("checked", false);
            }

        },
        matriAlumno:function () {
            var url = 'rematricula/getCicloSeccion/'+this.alumno.grado_actual;

            axios.get(url).then(response => {
                this.secciones= response.data.secciones;
                this.turnoNivel= response.data.turno;
                this.matricula.ciclo_seccion_id = 0;
                this.divFormularioMatricula = true;
                this.limpiarFormMatricula();

                this.labelBtnMatricula = 'Registrar Matrícula';
            })

        },
        datosMatriculaSecciones:function () {
            var url = 'rematricula/getCicloSeccion/'+this.alumno.grado_actual;

            axios.get(url).then(response => {
                this.secciones= response.data.secciones;
                this.turnoNivel= response.data.turno;
            })
        },
        getArchivo(event){
            //Asignamos la imagen a  nuestra data

            if (!event.target.files.length)
            {
              this.archivo=null;
            }
            else{
            this.archivo = event.target.files[0];
            }
        },
        limpiarFormMatricula:function () {

            this.matricula = {
                'type':'C',
                'id': 0,
                'alumno_id': this.alumno.id,
                'ciclo_escolar_id': 0,
                'fecha': '',
                'estado': 0,
                'es_traslado': 0,
                'tiene_discapacidad': 0,
                'DI' : 0,
                'DA' : 0,
                'DV' : 0,
                'DM' : 0,
                'SC' : 0,
                'OT' : 0,
                'vive_madre' : 1,
                'vive_padre' : 1,
                'responsable_matricula_nombres' : '',
                'cargo_responsable' : '',
                'ciclo_seccion_id' : 0,
                'trabaja' : 0,
                'activo': 1,
            };

            this.traslado = {
                'id': '',
                'fecha': '',
                'motivo': '',
                'codigo_modular': '',
                'ie_nombre': '',
                'alumno_id': '',
                'activo': '',
                'borrado': '',
                'created_at': '',
                'updated_at': '',
                'res_traslado': '',
                'resolucion_traslado': '',
                'matricula_id': '',
            };

            this.archivo=null;
            this.uploadReady = false
            this.$nextTick(() => {
                this.uploadReady = true;
                $('#cbuciclo_seccion_id').focus();
            })

        },

        atrasMatricula:function () {
            this.divFormularioMatricula = false;
        },

        procesarMatricula:function () {
            if(this.matricula.type == 'C'){
                this.confirmRegistrarMatricula();
            }
            if(this.matricula.type == 'U'){
                this.confirmActualizarMatricula();
            }
        },

        confirmRegistrarMatricula:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Confirmar el Registro de la Matrícula del Alumno?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.createMatricula();
                }

            }).catch(swal.noop);
        },

        confirmActualizarMatricula:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Confirmar la modificación de la Matrícula del Alumno?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.updateMatricula();
                }

            }).catch(swal.noop);
        },

        createMatricula:function () {
            var url='rematricula';
            $("#btnSaveMatricula").attr('disabled', true);
            $("#btnAtrasMatricula").attr('disabled', true);
            this.divloaderNuevo=true;

            var data = new  FormData();

            data.append('alumno_id', this.alumno.id);
            data.append('matricula', JSON.stringify(this.matricula));
            data.append('traslado', JSON.stringify(this.traslado));
            data.append('archivo', this.archivo);

            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url,data,config).then(response=>{

                $("#btnSaveMatricula").removeAttr("disabled");
                $("#btnAtrasMatricula").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.cerrarFormMatricula();
                    this.buscarMatricula();
                    this.errors=[];
                    //toastr.success(response.data.msj);
                    Swal.fire(
                        'Matriculado',
                        response.data.msj,
                        'success'
                      )
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnSaveMatricula").removeAttr("disabled");
                $("#btnAtrasMatricula").removeAttr("disabled");
            })
        },
        buscarMatricula: function() {
            
            if(this.alumno.id == null || this.alumno.id == 0){
                toastr.error('Vuelva a buscar el alumno');
                return;
            }
            var url = 'rematricula/getmatriculaactiva/' + this.alumno.id;

            axios.get(url).then(response => {
                if(response.data.result=='1'){
                    
                    this.matricula = response.data.matricula;
                    //console.log(this.matricula);

                    if(this.matricula.es_traslado == '1'){
                        this.traslado = response.data.traslado;
                    }
                    
                    this.errors=[];
                    //toastr.success(response.data.msj);
                    this.turnoNivel = response.data.turno;
                    this.divSectionMatricula = true;
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            })
        },
        cerrarFormMatricula:function () {
            this.divFormularioMatricula = false;
        },
        cerrarMatricula:function () {
            this.cerrarFormMatricula();
            this.limpiarFormMatricula();
            this.cancelAlumno();
            this.alumno.num_documento = '';
        },

        imprimirMatricula:function () {
            //console.log("imprimirMatricula");
            url = 'reportepdf/ficha-matricula/'+this.alumno.id;
            console.log(url);
            window.open(url, '_blank').focus();
        },

        editAlumnoGestion:function () {
            this.labelBtnSaveAlumno = 'Editar';
            this.labelFooterAlumno = 'Modificar Alumno';

            this.labelBtnSave = 'Editar';
            this.alumno.type = 'U';

            this.divFormularioGestionAlumno=true;

            this.$nextTick(() => {
                $('#txtapellido_paterno').focus();
                this.stepper = new Stepper(document.querySelector('.bs-stepper'));
                this.renderChecksAlumno();
            });
        },
        cerrarFormAlumnoGestion: function () {
            this.divFormularioGestionAlumno=false;
            this.cancelFormAlumno();
        },
        cerrarFormAlumnoEditGestion:function () {
            this.divFormularioGestionAlumno=false;
            this.alumno = Object.assign({}, this.alumnoBD_BK);

            this.alumnoBD_BK.apoderados.forEach(apoderado => {
                if(apoderado.tipo_apoderado_id == 1){
                    this.apoderadoMadre = Object.assign({}, apoderado);
                }
                if(apoderado.tipo_apoderado_id == 2){
                    this.apoderadoPadre = Object.assign({}, apoderado);
                }
                if(apoderado.tipo_apoderado_id == 3){
                    this.apoderadoOtro = Object.assign({}, apoderado);
                }
            });
        },
        procesarAlumnoGestion: function() {
            /* if(this.alumno.type == 'C'){
                this.confirmRegistrarAlumnoGestion();
            } */
            if(this.alumno.type == 'U'){
                this.confirmActualizarAlumnoGestion();
            }
        },
        confirmActualizarAlumnoGestion:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Confirmar la Modificación del Alumno?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.updateAlumnoGestion();
                }

            }).catch(swal.noop);
        },
        updateAlumnoGestion:function () {
            var url='remalumno/'+this.alumno.id;
            $("#btnSave").attr('disabled', true);
            $("#btnCerrarL").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.put(url, {alumno: this.alumno, apoderadoMadre: this.apoderadoMadre, apoderadoPadre: this.apoderadoPadre , apoderadoOtro: this.apoderadoOtro, matricula_id: this.matricula.id}).then(response=>{

                $("#btnSave").removeAttr("disabled");
                $("#btnCerrarL").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.buscarAlumno(this.thispage);
                    this.errors=[];
                    this.cerrarFormAlumnoEditGestion();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnSave").removeAttr("disabled");
                $("#btnCerrarL").removeAttr("disabled");
            })
        },
        editarMatricula:function () {

            var url = 'rematricula/getCicloSeccion/'+this.alumno.grado_actual;

            axios.get(url).then(response => {
                this.secciones= response.data.secciones;
                this.turnoNivel= response.data.turno;
                this.divFormularioMatricula = true;
                this.labelBtnMatricula = 'Editar Matrícula';
                this.matricula.type = "U";

                this.$nextTick(() => {
                    $('#txtresponsable_matricula_nombres').focus();
                });
            })
            
        },

        updateMatricula:function () {
            var url='rematricula/'+this.matricula.id;
            $("#btnSaveMatricula").attr('disabled', true);
            $("#btnAtrasMatricula").attr('disabled', true);
            this.divloaderNuevo=true;

            var data = new  FormData();

            data.append('alumno_id', this.alumno.id);
            data.append('matricula', JSON.stringify(this.matricula));
            data.append('traslado', JSON.stringify(this.traslado));
            data.append('archivo', this.archivo);

            data.append('_method', 'PUT');

            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url,data,config).then(response=>{

                $("#btnSaveMatricula").removeAttr("disabled");
                $("#btnAtrasMatricula").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.cerrarFormMatricula();
                    this.buscarMatricula();
                    this.errors=[];
                    //toastr.success(response.data.msj);
                    Swal.fire(
                        'Exito',
                        response.data.msj,
                        'success'
                      )
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnSaveMatricula").removeAttr("disabled");
                $("#btnAtrasMatricula").removeAttr("disabled");
            })
        },
        anularMatricula:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Eliminar la Matrícula del Alumno",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    this.delete();
                }

            }).catch(swal.noop);
        },
        delete:function () {
            var url = 'rematricula/'+this.matricula.id;
            axios.delete(url).then(response=>{//eliminamos

                if(response.data.result=='1'){
                    this.buscarAlumno2();
                    this.divSectionMatricula = false;
                    //toastr.success(response.data.msj);//mostramos mensaje
                    Swal.fire(
                        'Matricula Anulada',
                        response.data.msj,
                        'success'
                      )
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            });
        },

        buscarAlumno2: function() {
            
            if(this.alumno.num_documento.trim() == ''){
                toastr.error('Ingrese un número de documento');
                return;
            }
            var url = 'realumnobuscar/buscar/' + this.alumno.tipo_documento_id + '/' + this.alumno.num_documento;

            axios.get(url).then(response => {
                if(response.data.result=='1'){


                    if(response.data.resultFound){
                        this.alumno = response.data.alumno;
                        this.alumnoBD_BK = response.data.alumno;
                        this.errors=[];
                        //toastr.success(response.data.msj);
                        this.divFormularioCabecera = true;

                        this.alumno.apoderados.forEach(apoderado => {
                            if(apoderado.tipo_apoderado_id == 1){
                                this.apoderadoMadre = Object.assign({}, apoderado);
                            }
                            if(apoderado.tipo_apoderado_id == 2){
                                this.apoderadoPadre = Object.assign({}, apoderado);
                            }
                            if(apoderado.tipo_apoderado_id == 3){
                                this.apoderadoOtro = Object.assign({}, apoderado);
                            }
                        });

                        if(this.alumno.estado_grado == "1"){
                            this.datosMatriculaSecciones();
                            this.buscarMatricula();
                        }

                    }else{
                        //toastr.info("Alumno no encontrado en el sistema, ¿Desea registrarlo?");
                        this.confirmRegistrar();
                    }
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            })
        },


      
    }
}).mount('#app')