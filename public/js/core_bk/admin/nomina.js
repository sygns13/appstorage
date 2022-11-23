const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Nóminas de Matrículas",
            subtituloHeader: "Gestión Académica",
            subtitulo2Header: "Nóminas de Matrículas",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            matriculas: [],
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

            labelBtnSave: 'Registrar Horario',

            seccionSeleccionada: 0,

            seccion:{},
            grado:{},
            nivel:{},

            ciclo_id: 0,

            ciclo: {
                'id': '',
                'year': '',
                'fecha_ini_clases': '',
                'fecha_fin_clases': '',
                'activo': '1',
                'activo_matricula': '0',
                'opcion': '1',
            },

            verFormulario: false,


        }
    },
    created: function() {
/*         this.getDatos(this.thispage);
        console.log("created"); */
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
        getDatos: function(ciclo_id) {
            var url = 'renominas?ciclo_id=' + ciclo_id;

            axios.get(url).then(response => {
                this.registros = response.data.registros;
                this.verFormulario = true;
            })
        },

        changeCiclo:function() {
            this.getDatos(this.ciclo_id);
        },

        cambioSeccion: function() {
            
            this.registros.niveles.forEach(nivel => {
                nivel.grados.forEach(grado => {
                    grado.seccions.forEach(seccion => {
                        if(seccion.id==this.seccionSeleccionada){
                            this.matriculas = seccion.matriculas;
                            this.seccion = seccion;
                            this.grado = grado;
                            this.nivel = nivel;
                        }
                    });
                });
            });   
        },

        cerrarSeccion: function() {
            this.seccionSeleccionada = 0;
            /* this.turnoSeleccionado = 0;
            this.generarSeccion(); */
        },
        imprimirNomina:function () {
            //console.log("imprimirMatricula");
            url = 'reportepdf/nomina-matricula/'+this.seccionSeleccionada;
            console.log(url);
            window.open(url, '_blank').focus();
        },

      
    }
}).mount('#app')