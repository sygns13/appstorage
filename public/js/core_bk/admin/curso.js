const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Gestión de Cursos",
            subtituloHeader: "Tablas Base",
            subtitulo2Header: "Gestión de Cursos",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            errors: [],

            fillobject: {
                'type':'C',
                'id': '',
                'nombre': '',
                'orden': '',
                'grado_id': '',
                'activo': '1',
            },

            registros2: [],

            fillobject2: {
                'type':'C',
                'id': '',
                'nombre': '',
                'orden': '',
                'cursos_id': '',
                'activo': '1',
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
            divNuevo: false,
            divEdit: false,

            divloaderNuevo: false,
            divloaderEdit: false,

            mostrarPalenIni: true,

            thispage: '1',
            divprincipal: false,

            labelBtnSave: 'Registrar',

            verCompetencias: false,
        }
    },
    created: function() {
        this.getDatos(this.thispage);
        //console.log("created");
    },
    mounted: function() {
        /* $("#divtitulo").show('slow');
        this.divloader0=false;
        this.divprincipal=true; */
        //console.log("mounted");
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
    filters: {
        mostrarNumero(value) {

            if (value != null && value != undefined) {
                value = parseFloat(value).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            return value;
        },
        pasfechaVista: function(date) {
            if (date != null && date.length == 10) {
                date = date.slice(-2) + '/' + date.slice(-5, -3) + '/' + date.slice(0, 4);
            } else {
                return '';
            }

            return date;
        },
        leftpad: function(n, length) {
            var n = n.toString();
            while (n.length < length)
                n = "0" + n;
            return n;
        },
        mescotejar: function(value) {
            if (!value) return ''
            value = parseInt(value.toString());
            switch (value) {
                case 1:
                    return "ENERO";
                    break;
                case 2:
                    return "FEBRERO";
                    break;
                case 3:
                    return "MARZO";
                    break;
                case 4:
                    return "ABRIL";
                    break;
                case 5:
                    return "MAYO";
                    break;
                case 6:
                    return "JUNIO";
                    break;
                case 7:
                    return "JULIO";
                    break;
                case 8:
                    return "AGOSTO";
                    break;
                case 8:
                    return "AGOSTO";
                    break;
                case 9:
                    return "SETIEMBRE";
                    break;
                case 10:
                    return "OCTUBRE";
                    break;
                case 11:
                    return "NOVIEMBRE";
                    break;

                case 12:
                    return "DICIEMBRE";
                    break;

                default:
                    return "";
                    break;
            }

            return value
        },
    },
    methods: {
        getDatos: function(page) {
            var busca = this.buscar;
            var url = 'recursos?page=' + page + '&busca=' + busca;

            axios.get(url).then(response => {
                this.registros = response.data.registros;
            })
        },
        changePage: function(page) {
            this.pagination.current_page = page;
            this.getDatos(page);
            this.thispage = page;
        },
        nuevo:function (idGrado) {
            this.cancelForm();
            this.fillobject.grado_id = idGrado;
            this.labelBtnSave = 'Registrar';
            this.fillobject.type = 'C';

            $("#modalFormulario").modal('show');
            this.$nextTick(() => {
                $('#txtnombre').focus();
            });
        },
        cerrarForm: function () {
            /* this.divNuevo=false; */
            $("#modalFormulario").modal('hide');
            this.cancelForm();
        },
        cancelForm: function () {
            this.verCompetencias = false;
            this.fillobject = {
                                'type':'C',
                                'id': '',
                                'nombre': '',
                                'orden': '',
                                'grado_id': '',
                                'activo': '1'
                            };

            this.$nextTick(() => {
                $('#txtnombre').focus();
            });

            /* this.divEdit=false; */
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
                text: "Desea Confirmar el Registro del Curso",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.create();
                }

            }).catch(swal.noop);
        },
        create:function () {
            var url='recursos';
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
        edit:function (dato) {

            this.cancelForm();
            this.fillobject.id=dato.id;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.orden=dato.orden;
            this.labelBtnSave = 'Modificar';
            this.fillobject.type = 'U';

            $("#modalFormulario").modal('show');
            this.$nextTick(() => {
                $('#txtnombre').focus();
            });

        },
        confirmActualizar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación del Curso",
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

            var url="recursos/"+this.fillobject.id;
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
                text: "Desea Eliminar el registro del Curso",
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
            this.verCompetencias = false;
            var url = 'recursos/'+dato.id;
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

        //Gestion de Competencias
        competencia:function (dato) {

            this.cancelForm();
            this.fillobject.id=dato.id;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.orden=dato.orden;

            this.registros2 = dato.competencias;

            
            this.$nextTick(() => {
                this.verCompetencias = true;
            });
        },

        getDatosC: function(cursos_id) {
            var url = 'recompetencias?cursos_id=' + cursos_id;
            axios.get(url).then(response => {
                this.registros2 = response.data.registros;
            })
        },

        nuevoC:function (idCurso) {
            this.cancelFormC();
            this.fillobject2.cursos_id = idCurso;
            this.labelBtnSave = 'Registrar';
            this.fillobject2.type = 'C';

            $("#modalFormularioC").modal('show');
            this.$nextTick(() => {
                $('#txtnombreC').focus();
            });
        },
        cerrarFormC: function () {
            /* this.divNuevo=false; */
            $("#modalFormularioC").modal('hide');
            this.cancelFormC();
        },
        cancelFormC: function () {
            
            this.fillobject2 = {
                                'type':'C',
                                'id': '',
                                'nombre': '',
                                'orden': '',
                                'cursos_id': '',
                                'activo': '1',
                            };

            this.$nextTick(() => {
                $('#txtnombreC').focus();
            });

            /* this.divEdit=false; */
        },
        procesarC: function() {
            if(this.fillobject2.type == 'C'){
                this.confirmRegistrarC();
            }
            if(this.fillobject2.type == 'U'){
                this.confirmActualizarC();
            }
        },
        confirmRegistrarC:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar el Registro de la Competencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.createC();
                }

            }).catch(swal.noop);
        },
        createC:function () {
            var url='recompetencias';
            $("#btnGuardarC").attr('disabled', true);
            $("#btnCloseC").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, this.fillobject2).then(response=>{

                $("#btnGuardarC").removeAttr("disabled");
                $("#btnCloseC").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.getDatosC(this.fillobject.id);
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarFormC();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardarC").removeAttr("disabled");
                $("#btnCloseC").removeAttr("disabled");
            })
        },
        editC:function (dato) {

            this.cancelFormC();
            this.fillobject2.id=dato.id;
            this.fillobject2.nombre=dato.nombre;
            this.fillobject2.orden=dato.orden;
            this.labelBtnSave = 'Modificar';
            this.fillobject2.type = 'U';

            $("#modalFormularioC").modal('show');
            this.$nextTick(() => {
                $('#txtnombreC').focus();
            });

        },
        confirmActualizarC:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación de la Competencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    console.log("aqui llega");
                    this.updateC();
                }

            }).catch(swal.noop);
        },
        updateC: function () {

            var url="recompetencias/"+this.fillobject2.id;
            $("#btnGuardarC").attr("disabled");
            $("#btnCloseC").attr("disabled");
            this.divloaderEdit=true;

            axios.put(url, this.fillobject2).then(response=>{


                $("#btnGuardarC").removeAttr("disabled");
                $("#btnCloseC").removeAttr("disabled");
                this.divloaderEdit=false;
                
                if(response.data.result=='1'){
                    this.getDatosC(this.fillobject.id);
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarFormC();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }

            }).catch(error=>{
                console.log(error);
                //this.errors=error.response.data;
                $("#btnGuardarC").removeAttr("disabled");
                $("#btnCloseC").removeAttr("disabled");
            })
        },  
        borrarC:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Eliminar el registro de la Competencia",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.value) {
                    this.deleteC(dato);
                }

            }).catch(swal.noop);
        },
        deleteC:function (dato) {
            var url = 'recompetencias/'+dato.id;
            axios.delete(url).then(response=>{//eliminamos

                if(response.data.result=='1'){
                    this.getDatosC(this.fillobject.id);
                    this.getDatos(this.thispage);
                    toastr.success(response.data.msj);//mostramos mensaje
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            });
        },
        cerrarComeptencia:function () {
            this.verCompetencias = false;
        }
    }
}).mount('#app')