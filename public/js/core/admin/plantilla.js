const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Repositorio",
            subtituloHeader: "Gestión de Plantillas de Documentos",
            subtitulo2Header: "",

            subtitle2Header: false,

            registros: [],
            errors: [],

            fillobject: {
                'type':'C',
                'id': '',
                'nombre': '',
                'codigo': '',
                'fecha': '',
                'ubicacion_electronica': 'plantilla',
                'nombre_electronico': '',
                'activo': '1',
                'observacion': '',
                'estado': '1',
                'documento_id': '0',
                'area_id': '0',
                'tipo_documento_id': '0',
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

            labelBtnSave: 'Registrar Plantilla de Documento',

            archivo : null,
            uploadReady: true,

            oldFile:'',
            file:'',

            divFormularioDetalles: false,
            divFormularioRev: false,

        }
    },
    created: function() {
        this.getDatos(this.thispage);
    },
    mounted: function() {
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
        },
        registrosFilters: function() {
            return this.registros.map(function(registro) {

                if (registro.fecha != null && registro.fecha.length == 10) {
                    registro.fecha_ela = registro.fecha.slice(-2) + '/' + registro.fecha.slice(-5, -3) + '/' + registro.fecha.slice(0, 4);
                } else {
                    registro.fecha_ela = '';
                }

                return registro;
            });
        }
    },
    methods: {

        getDatos: function(page) {
            var url = 'replantillas?page=' + page + '&busca=' + this.buscar;

            axios.get(url).then(response => {

                this.registros= response.data.registros.data;
                this.pagination= response.data.pagination;

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
        buscarBtn: function () {
            this.getDatos();
            this.thispage='1';
        },
        nuevo:function () {
            this.cancelForm();
            this.labelBtnSave = 'Registrar Plantilla de Documento';
            this.fillobject.type = 'C';

            this.divFormulario=true;

            this.$nextTick(() => {
                $('#txtnombre').focus();
            });
        },
        cerrarForm: function () {
            this.divFormulario=false;
            this.divFormularioRev=false;
            this.cancelForm();
        },
        cancelForm: function () {
            this.fillobject = {
                'nombre': '',
                'codigo': '',
                'fecha': '',
                'ubicacion_electronica': 'plantilla',
                'nombre_electronico': '',
                'activo': '1',
                'observacion': '',
                'estado': '1',
                'documento_id': '0',
                'area_id': '0',
                'tipo_documento_id': '0',
            };

            this.archivo=null;
            this.uploadReady = false
            this.$nextTick(() => {
                this.uploadReady = true;
                $('#txtnombre').focus();
            })

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
                text: "Desea Confirmar el Registro de la Nueva Plantilla de Documento",
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
            var url='replantillas';
            $("#btnGuardar").attr('disabled', true);
            $("#btnClose").attr('disabled', true);
            this.divloaderNuevo=true;

            var data = new  FormData();

            data.append('type', this.fillobject.type);
            data.append('id', this.fillobject.id);
            data.append('nombre', this.fillobject.nombre);
            data.append('codigo', this.fillobject.codigo);
            data.append('fecha', this.fillobject.fecha);
            data.append('ubicacion_electronica', this.fillobject.ubicacion_electronica);
            data.append('nombre_electronico', this.fillobject.nombre_electronico);
            data.append('activo', this.fillobject.activo);
            data.append('observacion', this.fillobject.observacion);
            data.append('estado', this.fillobject.estado);
            data.append('documento_id', this.fillobject.documento_id);
            data.append('area_id', this.fillobject.area_id);
            data.append('tipo_documento_id', this.fillobject.tipo_documento_id);
            

            data.append('archivo', this.archivo);

            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url,data,config).then(response=>{

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
                //this.errors=error.response.data;
                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
            })
        },
        getArchivo(event){
            if (!event.target.files.length)
            {
              this.archivo=null;
            }
            else{
            this.archivo = event.target.files[0];
            }
        },

        edit:function (dato) {

            this.cancelForm();

            this.divFormularioRev = false;

            this.fillobject.id=dato.id;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.codigo=dato.codigo;
            this.fillobject.fecha=dato.fecha;
            this.fillobject.ubicacion_electronica=dato.ubicacion_electronica;
            this.fillobject.nombre_electronico=dato.nombre_electronico;
            this.fillobject.activo=dato.activo;
            this.fillobject.observacion=dato.observacion;
            this.fillobject.estado=dato.estado;
            this.fillobject.documento_id=dato.documento_id;
            this.fillobject.area_id=dato.area_id;
            this.fillobject.tipo_documento_id=dato.tipo_documento_id;
            

            this.labelBtnSave = 'Modificar Plantilla de Documento';
            this.fillobject.type = 'U';

            this.divFormulario=true;

            this.$nextTick(() => {
                $('#txtnombre').focus();
            });

        },
        confirmActualizar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación de la Plantilla del Documento",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {
                
                if (result.value) {
                    this.update();
                }
                
            }).catch(swal.noop);
        },
        update: function () {
            
            var url="replantillas/"+this.fillobject.id;
            $("#btnGuardar").attr("disabled");
            $("#btnClose").attr("disabled");
            this.divloaderEdit=true;
            
            var data = new  FormData();
            
            data.append('type', this.fillobject.type);
            data.append('id', this.fillobject.id);
            data.append('nombre', this.fillobject.nombre);
            data.append('codigo', this.fillobject.codigo);
            data.append('fecha', this.fillobject.fecha);
            data.append('ubicacion_electronica', this.fillobject.ubicacion_electronica);
            data.append('nombre_electronico', this.fillobject.nombre_electronico);
            data.append('activo', this.fillobject.activo);
            data.append('observacion', this.fillobject.observacion);
            data.append('estado', this.fillobject.estado);
            data.append('documento_id', this.fillobject.documento_id);
            data.append('area_id', this.fillobject.area_id);
            data.append('tipo_documento_id', this.fillobject.tipo_documento_id);


            data.append('archivo', this.archivo);
            
            data.append('_method', 'PUT');
            
            const config = { headers: { 'Content-Type': 'multipart/form-data' } };
            
            axios.post(url, data, config).then(response=>{
                
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
                //this.errors=error.response.data;
                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
            })
        },  
        borrar:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Eliminar el registro de la Plantilla del Documento",
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
            var url = 'replantillas/'+dato.id;
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
        descargar:function (dato) {
            console.log(dato);
        },

    }
}).mount('#app')