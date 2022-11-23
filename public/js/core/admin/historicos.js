const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Versiones Históricas de Documentos de la CSJAN",
            subtituloHeader: "Visualización de Versiones",
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
                'area_id': '0',
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

            area_id: '0',
            tipo_documento_id: '0',

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

                registro.historicos.forEach(version => {
                    if (version.fecha_elaboracion != null && version.fecha_elaboracion.length == 10) {
                        version.fecha_ela = version.fecha_elaboracion.slice(-2) + '/' + version.fecha_elaboracion.slice(-5, -3) + '/' + version.fecha_elaboracion.slice(0, 4);
                    } else {
                        version.fecha_ela = '';
                    }
    
                    if (version.fecha_revision != null && version.fecha_revision.length == 10) {
                        version.fecha_rev = version.fecha_revision.slice(-2) + '/' + version.fecha_revision.slice(-5, -3) + '/' + version.fecha_revision.slice(0, 4);
                    } else {
                        version.fecha_rev = '';
                    }
    
                    if (version.fecha_aprobacion != null && version.fecha_aprobacion.length == 10) {
                        version.fecha_apr = version.fecha_aprobacion.slice(-2) + '/' + version.fecha_aprobacion.slice(-5, -3) + '/' + version.fecha_aprobacion.slice(0, 4);
                    } else {
                        version.fecha_apr = '';
                    }
                });

                return registro;
            });
        }
    },
    methods: {

        getDatos: function(page) {
            var url = 'gethistoricos?page=' + page + '&area_id=' + this.area_id + '&tipo_documento_id=' + this.tipo_documento_id + '&busca=' + this.buscar;

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

        detalles:function (dato) {
        
            this.cancelForm();
        
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

        detallesV:function (dato, version) {
        
            this.cancelForm();
        
            this.fillobject.id=version.id;
            this.fillobject.nombre=version.nombre;
            this.fillobject.codigo=version.codigo;
            this.fillobject.documento_relacionado_id=version.documento_relacionado_id;
            this.fillobject.tipo_documento_id=version.tipo_documento_id;
            this.fillobject.fecha_elaboracion=version.fecha_elaboracion;
            this.fillobject.fecha_revision=version.fecha_revision;
            this.fillobject.fecha_aprobacion=version.fecha_aprobacion;
            this.fillobject.obs_elaboracion=version.obs_elaboracion;
            this.fillobject.nombre_electronico=version.nombre_electronico;
            this.fillobject.area_id=version.area_id;
            this.fillobject.area_revision_id=version.area_revision_id;
            this.fillobject.area_aprobacion_id=version.area_aprobacion_id;
            this.fillobject.version_actual=version.version_actual;
            this.fillobject.ubicacion_electronica=version.ubicacion_electronica;
            this.fillobject.revision=version.revision;
            this.fillobject.activo=version.activo;
            this.fillobject.obs_revision=version.obs_revision;
            this.fillobject.obs_aprobacion=version.obs_aprobacion;
            this.fillobject.estado=version.estado;
            this.fillobject.fecha_ela=version.fecha_ela;
            this.fillobject.fecha_rev=version.fecha_rev;
            this.fillobject.fecha_apr=version.fecha_apr;

            this.$nextTick(() => {
                this.divFormularioDetalles = true;
            });
        },

        cerrarModal:function(){
            this.divFormularioDetalles = false;
        }
    }
}).mount('#app')