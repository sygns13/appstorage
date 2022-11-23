const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Registro de Asistencia de Docentes",
            subtituloHeader: "Módulo de Control",
            subtitulo2Header: "Registro de Asistencia de Docentes",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            tipoDocumentos: [],
            errors: [],

            docentes_asistencias_dia: {
                'type':'C',
                'id': 0,
                'fecha': '',
                'ciclo_escolar_id': '',
                'tipo': '1',
            },
            fillobject: {
                'type':'C',
                'id': '',
                'fecha': '',
                'ciclo_escolar_id': '',
                'estado': '1',
                'observacion': '',
                'docente_id': '',
                'docentes_asistencias_dia_id': '',
                'nombre': '',
                'apellidos': '',
                'codigo_plaza': '',
                'tipo_documentos_sigla': '',
                'num_documento': '',
            },

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
            divFormulario: false,
            divloaderNuevo: false,

            mostrarPalenIni: true,

            thispage: '1',
            divprincipal: false,

            labelBtnSave: 'Registrar',
            turnoNombre : '',

        }
    },
    created: function() {
        this.docentes_asistencias_dia.fecha = fechaHoy;
        this.docentes_asistencias_dia.ciclo_escolar_id = ciclo_escolar_id;
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
            
            if (this.docentes_asistencias_dia.fecha != null && this.docentes_asistencias_dia.fecha != ""){
                this.getDatos(this.thispage);
            }
        },
        getDatos: function(page) {
            let date = this.docentes_asistencias_dia.fecha;
            let url = 'redocente-asistencia-dia?page=' + page + '&date=' + date;
            axios.get(url).then(response => {

                this.docentes_asistencias_dia = response.data.diaAsistencia;

                if(this.docentes_asistencias_dia == null) {
                    this.docentes_asistencias_dia = {
                        'type':'C',
                        'id': 0,
                        'fecha': date,
                        'ciclo_escolar_id': ciclo_escolar_id,
                        'tipo': '1',
                    };
                    return;
                }

                this.registros= response.data.registros.data;
                this.pagination= response.data.pagination;

                //this.mostrarPalenIni=true;

                if(this.registros.length==0 && this.thispage!='1'){
                    var a = parseInt(this.thispage) ;
                    a--;
                    this.thispage=a.toString();
                    this.changePage(this.thispage);
                }
            })
        },
        changePage: function(page) {
            this.pagination.current_page = page;
            this.getDatos(page);
            this.thispage = page;
        },

        nuevoDiaAsistencia:function () {
            this.cancelFormDiaAsistencia();
            this.labelBtnSave = 'Iniciar Día de Asistencia';
            this.docentes_asistencias_dia.type = 'C';

            $("#modalFormularioDiaAsistencia").modal('show');

            this.$nextTick(() => {
                $('#cbutipo').focus();
            });
        },
        cerrarFormDiaAsistencia: function () {
            $("#modalFormularioDiaAsistencia").modal('hide');
            this.cancelFormDiaAsistencia();
        },
        cancelFormDiaAsistencia: function () {
            this.docentes_asistencias_dia.tipo = '1';

            this.$nextTick(() => {
                $('#cbutipo').focus();
            });
        },
        procesarDiaAsistencia: function() {
            if(this.docentes_asistencias_dia.type == 'C'){
                this.confirmRegistrarDiaAsistencia();
            }
            if(this.docentes_asistencias_dia.type == 'U'){
                this.confirmActualizarDiaAsistencia();
            }
        },
        confirmRegistrarDiaAsistencia:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Iniciación del Día Para Registrar Asistencias",
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
            var url='redocente-asistencia-dia';
            $("#btnGuardarDiaAsistencia").attr('disabled', true);
            $("#btnCloseDiaAsistencia").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, this.docentes_asistencias_dia).then(response=>{

                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.thispage = '1';
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarFormDiaAsistencia();
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
        editDiaAsistencia:function (dato) {

            this.labelBtnSave = 'Modificar Día de Asistencia';
            this.docentes_asistencias_dia.type = 'U';

            $("#modalFormularioDiaAsistencia").modal('show');
            this.$nextTick(() => {
                $('#cbutipo').focus();
            });

        },
        confirmActualizarDiaAsistencia:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación del Día de Asistencia",
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

            var url="redocente-asistencia-dia/"+this.docentes_asistencias_dia.id;
            $("#btnGuardarDiaAsistencia").attr("disabled");
            $("#btnCloseDiaAsistencia").attr("disabled");
            this.divloaderEdit=true;

            axios.put(url, this.docentes_asistencias_dia).then(response=>{


                $("#btnGuardarDiaAsistencia").removeAttr("disabled");
                $("#btnCloseDiaAsistencia").removeAttr("disabled");
                this.divloaderEdit=false;
                
                if(response.data.result=='1'){
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarFormDiaAsistencia();
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
                text: "Desea Eliminar el registro del Día de Asistencia. Nota: Se eliminarán todas las asistencias de Docentes registradas en este Día",
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
            var url = 'redocente-asistencia-dia/'+dato.id;
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



        nuevo:function (type, docente) {
            this.cancelForm();

            this.fillobject.estado = type;
            this.fillobject.docente_id = docente.id;
            this.fillobject.nombre = docente.nombre;
            this.fillobject.apellidos = docente.apellidos;
            this.fillobject.codigo_plaza = docente.codigo_plaza;
            this.fillobject.tipo_documentos_sigla = docente.tipo_documentos_sigla;
            this.fillobject.num_documento = docente.num_documento;

            if(type == '0'){
                this.labelBtnSave = 'Registrar Falta de Docente';
            }
            if(type == '1'){
                this.labelBtnSave = 'Registrar Asistencia de Docente';
            }
            if(type == '2'){
                this.labelBtnSave = 'Registrar Tardanza de Docente';
            }
            
            this.fillobject.type = 'C';

            $("#modalFormulario").modal('show');
            this.$nextTick(() => {
                $('#txtobservacion').focus();
            });
        },
        cerrarForm: function () {
            $("#modalFormulario").modal('hide');
            this.cancelForm();
        },
        cancelForm: function () {
            this.fillobject.type = 'C';
            this.fillobject.id = '';
            this.fillobject.fecha = this.docentes_asistencias_dia.fecha;
            this.fillobject.ciclo_escolar_id = ciclo_escolar_id;
            this.fillobject.estado = '1';
            this.fillobject.observacion = '';
            this.fillobject.docentes_asistencias_dia_id = this.docentes_asistencias_dia.id;
            this.fillobject.docente_id = '';
            this.fillobject.nombre = '';
            this.fillobject.apellidos = '';
            this.fillobject.codigo_plaza = '';
            this.fillobject.tipo_documentos_sigla = '';
            this.fillobject.num_documento = '';

            this.$nextTick(() => {
                $('#txtobservacion').focus();
            });
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
                    this.create();
                }

            }).catch(swal.noop);
        },
        create:function () {
            var url='reasistencia-docente';
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
        edit:function (type, docente) {

            this.cancelForm();

            this.fillobject.estado = type;
            this.fillobject.docente_id = docente.id;
            this.fillobject.id=docente.id_asistencia;
            this.fillobject.nombre = docente.nombre;
            this.fillobject.apellidos = docente.apellidos;
            this.fillobject.codigo_plaza = docente.codigo_plaza;
            this.fillobject.tipo_documentos_sigla = docente.tipo_documentos_sigla;
            this.fillobject.num_documento = docente.num_documento;

            if(type == '0'){
                this.labelBtnSave = 'Registrar Falta de Docente';
            }
            if(type == '1'){
                this.labelBtnSave = 'Registrar Asistencia de Docente';
            }
            if(type == '2'){
                this.labelBtnSave = 'Registrar Tardanza de Docente';
            }

            this.fillobject.type = 'U';

            $("#modalFormulario").modal('show');
            this.$nextTick(() => {
                $('#txtobservacion').focus();
            });

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

            var url="reasistencia-docente/"+this.fillobject.id;
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
                text: "Desea Eliminar el registro de Asistencia del Docente",
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
            var url = 'reasistencia-docente/'+dato.id;
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