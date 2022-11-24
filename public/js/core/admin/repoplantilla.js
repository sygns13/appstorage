const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Plantillas de Documentos de la CSJAN",
            subtituloHeader: "Visualización de Plantillas",
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
            var url = 'getrepoplantillas?page=' + page + '&area_id=' + this.area_id + '&tipo_documento_id=' + this.tipo_documento_id + '&busca=' + this.buscar;

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
    }
}).mount('#app')