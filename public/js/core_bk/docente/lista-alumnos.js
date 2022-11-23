const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Lista de Alumnos",
            subtituloHeader: "Docente",
            subtitulo2Header: "Lista de Alumnos",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            matriculas: [],
            errors: [],

            ciclo_id: 0,

            verFormulario: false,

            headerLista: {},
            nivel: {},


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
            var url = 'regetlista-alumnos?ciclo_id=' + ciclo_id;

            axios.get(url).then(response => {
                this.registros = response.data;
                this.verFormulario = true;
            })
        },

        changeCiclo:function() {
            this.getDatos(this.ciclo_id);
        },

        detalles:function(registro, nivel) {

            var url = 'regetlista-alumnos-asignacion?id=' + registro.id;
            this.headerLista = registro;
            this.nivel = nivel;

            axios.get(url).then(response => {
                this.matriculas = response.data;
                $("#modalFormulario").modal('show');
            })
            
        },
        cerrarForm: function () {
            $("#modalFormulario").modal('hide');
        },


        imprimirNomina:function () {
            //console.log("imprimirMatricula");
            url = 'reportepdf/nomina-matricula/'+this.seccionSeleccionada;
            console.log(url);
            window.open(url, '_blank').focus();
        },

      
    }
}).mount('#app')