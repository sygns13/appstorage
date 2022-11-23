const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Gestión de Horarios",
            subtituloHeader: "Gestión Académica",
            subtitulo2Header: "Gestión de Horarios",

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

            labelBtnSave: 'Registrar Horario',

            seccionSeleccionada: 0,

            horario:{
                'lunes': [],
                'martes': [],
                'miercoles': [],
                'jueves': [],
                'viernes': [],
            },

            turnos:[],
            turnoSeleccionado: 0,
            horas:[],
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
            var url = 'rehorario?page=' + page + '&busca=' + busca;

            axios.get(url).then(response => {

                this.registros = response.data.registros;
                this.turnos = response.data.turnos;
                this.horas = response.data.horas;

                this.generarHorario();

            })
        },

        cambioSeccion: function() {

            this.registros.niveles.forEach(nivel => {
                nivel.grados.forEach(grado => {
                    grado.seccions.forEach(seccion => {
                        if(seccion.id==this.seccionSeleccionada){
                            this.turnoSeleccionado = seccion.turno_id;
                            this.cambioTurno();
                        }
                    });
                });
            });   
        },

        cambioTurno: function() {
            this.generarHorario();
        },

        generarHorario: function() {

            this.horario = {
                'lunes': [],
                'martes': [],
                'miercoles': [],
                'jueves': [],
                'viernes': [],
            };

            this.turnos.forEach(turno => {
                this.horas.forEach(hora => {
                    if(turno.id==hora.turno_id && turno.id==this.turnoSeleccionado){

                        let isDataLu = false;
                        let isDataMa = false;
                        let isDataMi = false;
                        let isDataJu = false;
                        let isDataVi = false;

                        this.registros.niveles.forEach(nivel => {
                            nivel.grados.forEach(grado => {
                                grado.seccions.forEach(seccion => {
                                    if(seccion.id==this.seccionSeleccionada){
                                        seccion.horarios.forEach(horario => {
                                            if(hora.id == horario.hora_id){
                                                if(horario.dia_semana==1){
                                                    isDataLu = true;
                                                    this.horario.lunes[hora.id] = horario.ciclo_curso_id;
                                                }
                                                if(horario.dia_semana==2){
                                                    isDataMa = true;
                                                    this.horario.martes[hora.id] = horario.ciclo_curso_id;
                                                }
                                                if(horario.dia_semana==3){
                                                    isDataMi = true;
                                                    this.horario.miercoles[hora.id] = horario.ciclo_curso_id;
                                                }
                                                if(horario.dia_semana==4){
                                                    isDataJu = true;
                                                    this.horario.jueves[hora.id] = horario.ciclo_curso_id;
                                                }
                                                if(horario.dia_semana==5){
                                                    isDataVi = true;
                                                    this.horario.viernes[hora.id] = horario.ciclo_curso_id;
                                                }
                                            }
                                        });
                                    }
                                });
                            });
                        });

                        if(!isDataLu){
                            this.horario.lunes[hora.id] = 0;
                        }
                        if(!isDataMa){
                            this.horario.martes[hora.id] = 0;
                        }
                        if(!isDataMi){
                            this.horario.miercoles[hora.id] = 0;
                        }
                        if(!isDataJu){
                            this.horario.jueves[hora.id] = 0;
                        }
                        if(!isDataVi){
                            this.horario.viernes[hora.id] = 0;
                        }
                    }
                });
            });
        },
        changePage: function(page) {
            this.pagination.current_page = page;
            this.getDatos(page);
            this.thispage = page;
        },

        cerrarHorario: function() {
            this.seccionSeleccionada = 0;
            this.turnoSeleccionado = 0;
            this.generarHorario();
        },
        procesar: function() {
            this.confirmRegistrar();
        },
        confirmRegistrar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Confirmar el Registro del Horario?",
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
            var url='rehorario';
            $("#btnGuardar").attr('disabled', true);
            $("#btnClose").attr('disabled', true);
            this.divloaderNuevo=true;

            axios.post(url, {horario: this.horario, seccionSeleccionada: this.seccionSeleccionada, turnoSeleccionado: this.turnoSeleccionado}).then(response=>{

                $("#btnGuardar").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.getDatos(this.thispage);
                    this.errors=[];
                    //this.cerrarForm();
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





      
    }
}).mount('#app')