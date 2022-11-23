const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Datos de la IE",
            subtituloHeader: "Tablas Base",
            subtitulo2Header: "Datos de la IE",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            errors: [],

            fillobject: {
                'id': '',
                'codigo_modular': '',
                'nombre': '',
                'gestion': '',
                'sigla_gestion': '',
                'resolucion_creacion': '',
                'forma': '',
                'sigla_forma': '',
                'departamento': '',
                'provincia': '',
                'distrito': '',
                'centro_poblado': '',
                'codigo_ugel': '',
                'nombre_ugel': '',
                'caracteristica': '',
                'sigla_caracteristica': '',
                'programa': '',
                'sigla_programa': '',
                'modalidad': '',
                'modalidad_siglas': '',
            },
            fillobjectEdit: {
                'id': '',
                'codigo_modular': '',
                'nombre': '',
                'gestion': '',
                'sigla_gestion': '',
                'resolucion_creacion': '',
                'forma': '',
                'sigla_forma': '',
                'departamento': '',
                'provincia': '',
                'distrito': '',
                'centro_poblado': '',
                'codigo_ugel': '',
                'nombre_ugel': '',
                'caracteristica': '',
                'sigla_caracteristica': '',
                'programa': '',
                'sigla_programa': '',
                'modalidad': '',
                'modalidad_siglas': '',
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
            var url = 'reie?page=' + page + '&busca=' + busca;

            axios.get(url).then(response => {

                this.fillobject = response.data.registro;
                this.fillobjectEdit = response.data.registro;

            })
        },
        confirmUpdate:function (type) {

            let item = '';

            switch (type) {
                case 1:
                    item = 'del Código Modular';
                    break;
                case 2:
                    item = 'del Nombre de la Institución Educativa';
                    break;
                case 3:
                    item = 'de la Resolución de Creación de la Institución Educativa';
                    break;
            
                default:
                    break;
            }

            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación "+item,
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

        update: function (type) {

            switch (type) {
                case 1:
                    this.fillobject.codigo_modular =this.fillobjectEdit.codigo_modular;
                    break;
                case 2:
                    this.fillobject.nombre =this.fillobjectEdit.nombre;
                    break;
                case 3:
                    this.fillobject.resolucion_creacion =this.fillobjectEdit.resolucion_creacion;
                    break;
            
                default:
                    break;
            }

            var url="reie/"+this.fillobject.id;
            $(".editClass").attr("disabled");
            this.divloaderEdit=true;

            axios.put(url, this.fillobject).then(response=>{


                $(".editClass").removeAttr("disabled");
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
                $(".editClass").removeAttr("disabled");
            })
        }, 

    }
}).mount('#app')