const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Repositorio",
            subtituloHeader: "Gestión de Documentos",
            subtitulo2Header: "",

            subtitle2Header: false,

            registros: [],
            errors: [],

            fillobject: {
                'type':'C',
                'id': '',
                'nombre': '',
                'codigo': '',
                'documento_relacionado_id': '0',
                'area_id': id_area,
                'area_revision_id': '0',
                'area_aprobacion_id': '0',
                'version_actual': '1',
                'ubicacion_electronica': '',
                'nombre_electronico': '',
                'revision': '1',
                'activo': '1',
                'obs_elaboracion': '',
                'obs_revision': '',
                'obs_aprobacion': '',
                'estado': '9',
                'tipo_documento_id': '0',
                'fecha_elaboracion': '',
                'fecha_revision': '',
                'fecha_aprobacion': '',
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

            labelBtnSave: 'Registrar Documento',

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

                if (registro.fecha_elaboracion != null && registro.fecha_elaboracion.length == 10) {
                    registro.fecha_ela = registro.fecha_elaboracion.slice(-2) + '/' + registro.fecha_elaboracion.slice(-5, -3) + '/' + registro.fecha_elaboracion.slice(0, 4);
                } else {
                    registro.fecha_ela = '';
                }

                if (registro.fecha_revision != null && registro.fecha_revision.length == 10) {
                    registro.fecha_rev = registro.fecha_revision.slice(-2) + '/' + registro.fecha_revision.slice(-5, -3) + '/' + registro.fecha_revision.slice(0, 4);
                } else {
                    registro.fecha_rev = '';
                }

                if (registro.fecha_aprobacion != null && registro.fecha_aprobacion.length == 10) {
                    registro.fecha_apr = registro.fecha_aprobacion.slice(-2) + '/' + registro.fecha_aprobacion.slice(-5, -3) + '/' + registro.fecha_aprobacion.slice(0, 4);
                } else {
                    registro.fecha_apr = '';
                }

                return registro;
            });
        }
    },
    methods: {

        getDatos: function(page) {
            var url = 'redocumentos?page=' + page + '&busca=' + this.buscar;

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
            this.labelBtnSave = 'Registrar Documento';
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
                'type':'C',
                'id': '',
                'nombre': '',
                'codigo': '',
                'documento_relacionado_id': '0',
                'area_id': '0',
                'area_revision_id': '0',
                'area_aprobacion_id': '0',
                'version_actual': '',
                'ubicacion_electronica': 'documento',
                'nombre_electronico': '',
                'revision': '',
                'activo': '1',
                'obs_elaboracion': '',
                'obs_revision': '',
                'obs_aprobacion': '',
                'estado': '9',
                'tipo_documento_id': '0',
                'fecha_elaboracion': '',
                'fecha_revision': '',
                'fecha_aprobacion': '',
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
                text: "Desea Confirmar el Registro del Nuevo Documento",
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
            var url='redocumentos';
            $("#btnGuardar").attr('disabled', true);
            $("#btnClose").attr('disabled', true);
            this.divloaderNuevo=true;

            var data = new  FormData();

            data.append('type', this.fillobject.type);
            data.append('id', this.fillobject.id);
            data.append('nombre', this.fillobject.nombre);
            data.append('codigo', this.fillobject.codigo);
            data.append('documento_relacionado_id', this.fillobject.documento_relacionado_id);
            data.append('area_id', this.fillobject.area_id);
            data.append('area_revision_id', this.fillobject.area_revision_id);
            data.append('area_aprobacion_id', this.fillobject.area_aprobacion_id);
            data.append('version_actual', this.fillobject.version_actual);
            data.append('ubicacion_electronica', this.fillobject.ubicacion_electronica);
            data.append('nombre_electronico', this.fillobject.nombre_electronico);
            data.append('revision', this.fillobject.revision);
            data.append('activo', this.fillobject.activo);
            data.append('obs_elaboracion', this.fillobject.obs_elaboracion);
            data.append('obs_revision', this.fillobject.obs_revision);
            data.append('obs_aprobacion', this.fillobject.obs_aprobacion);
            data.append('estado', this.fillobject.estado);
            data.append('tipo_documento_id', this.fillobject.tipo_documento_id);
            data.append('fecha_elaboracion', this.fillobject.fecha_elaboracion);
            data.append('fecha_revision', this.fillobject.fecha_revision);
            data.append('fecha_aprobacion', this.fillobject.fecha_aprobacion);

            

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
            this.fillobject.documento_relacionado_id=dato.documento_relacionado_id;
            this.fillobject.tipo_documento_id=dato.tipo_documento_id;
            this.fillobject.fecha_elaboracion=dato.fecha_elaboracion;
            this.fillobject.fecha_revision=dato.fecha_revision;
            this.fillobject.fecha_aprobacion=dato.fecha_aprobacion;

            this.fillobject.obs_elaboracion=dato.obs_elaboracion;
            this.fillobject.nombre_electronico=dato.nombre_electronico;
            this.fillobject.area_id=dato.area_id;
            this.fillobject.area_revision_id=dato.area_revision_id;
            this.fillobject.area_aprobacion_id=dato.area_aprobacion_id;
            this.fillobject.version_actual=dato.version_actual;
            this.fillobject.ubicacion_electronica=dato.ubicacion_electronica;
            this.fillobject.revision=dato.revision;
            this.fillobject.activo=dato.activo;
            this.fillobject.obs_revision=dato.obs_revision;
            this.fillobject.obs_aprobacion=dato.obs_aprobacion;
            this.fillobject.estado=dato.estado;

            

            this.labelBtnSave = 'Modificar Documento';
            this.fillobject.type = 'U';

            this.divFormulario=true;

            this.$nextTick(() => {
                $('#txtnombre').focus();
            });

        },
        confirmActualizar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación del Documento",
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
            
            var url="redocumentos/"+this.fillobject.id;
            $("#btnGuardar").attr("disabled");
            $("#btnClose").attr("disabled");
            this.divloaderEdit=true;
            
            var data = new  FormData();
            
            data.append('type', this.fillobject.type);
            data.append('id', this.fillobject.id);
            data.append('nombre', this.fillobject.nombre);
            data.append('codigo', this.fillobject.codigo);
            data.append('documento_relacionado_id', this.fillobject.documento_relacionado_id);
            data.append('area_id', this.fillobject.area_id);
            data.append('area_revision_id', this.fillobject.area_revision_id);
            data.append('area_aprobacion_id', this.fillobject.area_aprobacion_id);
            data.append('version_actual', this.fillobject.version_actual);
            data.append('ubicacion_electronica', this.fillobject.ubicacion_electronica);
            data.append('nombre_electronico', this.fillobject.nombre_electronico);
            data.append('revision', this.fillobject.revision);
            data.append('activo', this.fillobject.activo);
            data.append('obs_elaboracion', this.fillobject.obs_elaboracion);
            data.append('obs_revision', this.fillobject.obs_revision);
            data.append('obs_aprobacion', this.fillobject.obs_aprobacion);
            data.append('estado', this.fillobject.estado);
            data.append('tipo_documento_id', this.fillobject.tipo_documento_id);
            data.append('fecha_elaboracion', this.fillobject.fecha_elaboracion);
            data.append('fecha_revision', this.fillobject.fecha_revision);
            data.append('fecha_aprobacion', this.fillobject.fecha_aprobacion);


            
            
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
                text: "Desea Eliminar el registro del Documento",
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
            var url = 'redocumentos/'+dato.id;
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

        detalles:function (dato) {
        
            this.cancelForm();

            this.divFormularioRev = false;
        
            this.fillobject.id=dato.id;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.codigo=dato.codigo;
            this.fillobject.documento_relacionado_id=dato.documento_relacionado_id;
            this.fillobject.tipo_documento_id=dato.tipo_documento_id;
            this.fillobject.fecha_elaboracion=dato.fecha_elaboracion;
            this.fillobject.fecha_revision=dato.fecha_revision;
            this.fillobject.fecha_aprobacion=dato.fecha_aprobacion;
            this.fillobject.obs_elaboracion=dato.obs_elaboracion;
            this.fillobject.nombre_electronico=dato.nombre_electronico;
            this.fillobject.area_id=dato.area_id;
            this.fillobject.area_revision_id=dato.area_revision_id;
            this.fillobject.area_aprobacion_id=dato.area_aprobacion_id;
            this.fillobject.version_actual=dato.version_actual;
            this.fillobject.ubicacion_electronica=dato.ubicacion_electronica;
            this.fillobject.revision=dato.revision;
            this.fillobject.activo=dato.activo;
            this.fillobject.obs_revision=dato.obs_revision;
            this.fillobject.obs_aprobacion=dato.obs_aprobacion;
            this.fillobject.estado=dato.estado;
            this.fillobject.fecha_ela=dato.fecha_ela;
            this.fillobject.fecha_rev=dato.fecha_rev;
            this.fillobject.fecha_apr=dato.fecha_apr;

            this.$nextTick(() => {
                this.divFormularioDetalles = true;
            });
        },



        up:function (dato) {
        
            this.cancelForm();

            this.divFormularioDetalles = false;
        
            this.fillobject.id=dato.id;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.codigo=dato.codigo;
            this.fillobject.documento_relacionado_id=dato.documento_relacionado_id;
            this.fillobject.tipo_documento_id=dato.tipo_documento_id;
            this.fillobject.fecha_elaboracion=dato.fecha_elaboracion;
            this.fillobject.fecha_revision=dato.fecha_revision;
            this.fillobject.fecha_aprobacion=dato.fecha_aprobacion;
            this.fillobject.obs_elaboracion="";
            this.fillobject.nombre_electronico=dato.nombre_electronico;
            this.fillobject.area_id=dato.area_id;
            this.fillobject.area_revision_id=dato.area_revision_id;
            this.fillobject.area_aprobacion_id=dato.area_aprobacion_id;
            this.fillobject.version_actual=dato.version_actual;
            this.fillobject.ubicacion_electronica=dato.ubicacion_electronica;
            this.fillobject.revision=dato.revision;
            this.fillobject.activo=dato.activo;
            this.fillobject.obs_revision=dato.obs_revision;
            this.fillobject.obs_aprobacion=dato.obs_aprobacion;
            this.fillobject.estado=dato.estado;
            this.fillobject.fecha_ela=dato.fecha_ela;
            this.fillobject.fecha_rev=dato.fecha_rev;
            this.fillobject.fecha_apr=dato.fecha_apr;

            this.$nextTick(() => {
                $("#txtfecha_elaboracion").focus();
                this.divFormularioRev = true;
            });
        },

        cerrarModal:function(){
            this.divFormularioDetalles = false;
        },

        cerrarModal2:function(){
            this.divFormularioRev = false;
        },

        confirmNuevaVersion:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar el registro de la Nueva Versión o Revisión del Documento",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {
                
                if (result.value) {
                    this.procesarVersion();
                }
                
            }).catch(swal.noop);
        },

        procesarVersion:function() {
            var url="postVersionDoc"
            $("#btnGuardar").attr("disabled");
            $("#btnClose").attr("disabled");
            this.divloaderEdit=true;
            
            var data = new  FormData();
            
            data.append('type', this.fillobject.type);
            data.append('id', this.fillobject.id);
            data.append('nombre', this.fillobject.nombre);
            data.append('codigo', this.fillobject.codigo);
            data.append('documento_relacionado_id', this.fillobject.documento_relacionado_id);
            data.append('area_id', this.fillobject.area_id);
            data.append('area_revision_id', this.fillobject.area_revision_id);
            data.append('area_aprobacion_id', this.fillobject.area_aprobacion_id);
            data.append('version_actual', this.fillobject.version_actual);
            data.append('ubicacion_electronica', this.fillobject.ubicacion_electronica);
            data.append('nombre_electronico', this.fillobject.nombre_electronico);
            data.append('revision', this.fillobject.revision);
            data.append('activo', this.fillobject.activo);
            data.append('obs_elaboracion', this.fillobject.obs_elaboracion);
            data.append('obs_revision', this.fillobject.obs_revision);
            data.append('obs_aprobacion', this.fillobject.obs_aprobacion);
            data.append('estado', this.fillobject.estado);
            data.append('tipo_documento_id', this.fillobject.tipo_documento_id);
            data.append('fecha_elaboracion', this.fillobject.fecha_elaboracion);
            data.append('fecha_revision', this.fillobject.fecha_revision);
            data.append('fecha_aprobacion', this.fillobject.fecha_aprobacion);
            
            data.append('archivo', this.archivo);
            
            
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
        }
    }
}).mount('#app')