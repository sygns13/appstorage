const {
    createApp
} = Vue

createApp({
    data() {
        return {
            tituloHeader: "Gestión del Año Escolar",
            subtituloHeader: "Gestión Académica",
            subtitulo2Header: "Gestión del Año Escolar",

            subtitle2Header: true,

            userPerfil: '{{ Auth::user()->name }}',
            mailPerfil: '{{ Auth::user()->email }}',

            registros: [],
            errors: [],

            fillobject: {
                'type':'C',
                'id': '',
                'year': '',
                'fecha_ini_clases': '',
                'fecha_fin_clases': '',
                'activo': '1',
                'activo_matricula': '0',
                'opcion': '1',
            },
            cicloNivelInicial:{
                'id': '',
                'nivel_id': '1',
                'turno_id': '1',
            },
            cicloNivelPrimaria:{
                'id': '',
                'nivel_id': '2',
                'turno_id': '1',
            },
            cicloNivelSecundaria:{
                'id': '',
                'nivel_id': '3',
                'turno_id': '1',
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

            yearIni: '',

        }
    },
    created: function() {
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
        },
        registrosFilters: function() {
            return this.registros.map(function(registro) {

                if (registro.fecha_ini_clases != null && registro.fecha_ini_clases.length == 10) {
                    registro.fecha_ini = registro.fecha_ini_clases.slice(-2) + '/' + registro.fecha_ini_clases.slice(-5, -3) + '/' + registro.fecha_ini_clases.slice(0, 4);
                } else {
                    registro.fecha_ini = '';
                }

                if (registro.fecha_fin_clases != null && registro.fecha_fin_clases.length == 10) {
                    registro.fecha_fin = registro.fecha_fin_clases.slice(-2) + '/' + registro.fecha_fin_clases.slice(-5, -3) + '/' + registro.fecha_fin_clases.slice(0, 4);
                } else {
                    registro.fecha_fin = '';
                }

                return registro;
            });
        }
    },
    filters: {
        mostrarNumero(value) {

            if (value != null && value != undefined) {
                value = parseFloat(value).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            return value;
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

        pasfechaVista: function(date) {
            if (date != null && date.length == 10) {
                date = date.slice(-2) + '/' + date.slice(-5, -3) + '/' + date.slice(0, 4);
            } else {
                return '';
            }

            return date;
        },

        getDatos: function(page) {
            var busca = this.buscar;
            var url = 'reciclo?page=' + page + '&busca=' + busca;

            axios.get(url).then(response => {

                this.registros= response.data.registros.data;
                this.pagination= response.data.pagination;
                this.yearIni= response.data.year;

                this.fillobject.year = this.yearIni;

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
        nuevo:function () {
            this.cancelForm();
            this.labelBtnSave = 'Registrar';
            this.fillobject.type = 'C';

            this.divFormulario=true;

            this.$nextTick(() => {
                $('#txtyear').focus();
                console.log(this.fillobject);
            });
        },
        cerrarForm: function () {
            this.divFormulario=false;
            this.cancelForm();
        },
        cancelForm: function () {
            this.fillobject = {
                'type':'C',
                'id': '',
                'year': this.yearIni,
                'fecha_ini_clases': '',
                'fecha_fin_clases': '',
                'activo': '1',
                'activo_matricula': '0',
                'opcion': '1',
            };

            this.cicloNivelInicial = {
                'id': '',
                'nivel_id': '1',
                'turno_id': '1',
            };
            this.cicloNivelPrimaria = {
                'id': '',
                'nivel_id': '2',
                'turno_id': '1',
            };
            this.cicloNivelSecundaria = {
                'id': '',
                'nivel_id': '3',
                'turno_id': '1',
            };

            this.$nextTick(() => {
                $('#txtyear').focus();
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
                text: "Desea Confirmar el Registro del Año Escolar",
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
            var url='reciclo';
            $("#btnGuardar").attr('disabled', true);
            $("#btnClose").attr('disabled', true);
            this.divloaderNuevo=true;

            this.fillobject.cicloNivelInicial = this.cicloNivelInicial;
            this.fillobject.cicloNivelPrimaria = this.cicloNivelPrimaria;
            this.fillobject.cicloNivelSecundaria = this.cicloNivelSecundaria;

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
            this.fillobject.year=dato.year;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.fecha_ini_clases=dato.fecha_ini_clases;
            this.fillobject.fecha_fin_clases=dato.fecha_fin_clases;
            this.fillobject.activo=dato.activo;
            this.fillobject.activo_matricula=dato.activo_matricula;
            this.fillobject.opcion=dato.opcion;
            this.labelBtnSave = 'Modificar';
            this.fillobject.type = 'U';

            this.cicloNivelInicial = {
                'id': dato.cicloNivelInicial.id,
                'nivel_id': dato.cicloNivelInicial.nivel_id,
                'turno_id': dato.cicloNivelInicial.turno_id,
            };
            this.cicloNivelPrimaria = {
                'id': dato.cicloNivelPrimaria.id,
                'nivel_id': dato.cicloNivelPrimaria.nivel_id,
                'turno_id': dato.cicloNivelPrimaria.turno_id,
            };
            this.cicloNivelSecundaria = {
                'id': dato.cicloNivelSecundaria.id,
                'nivel_id': dato.cicloNivelSecundaria.nivel_id,
                'turno_id': dato.cicloNivelSecundaria.turno_id,
            };

            this.divFormulario=true;

            this.$nextTick(() => {
                $('#txtyear').focus();
            });

        },
        confirmActualizar:function () {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea Confirmar la Modificación del Año Escolar",
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

            this.fillobject.cicloNivelInicial = this.cicloNivelInicial;
            this.fillobject.cicloNivelPrimaria = this.cicloNivelPrimaria;
            this.fillobject.cicloNivelSecundaria = this.cicloNivelSecundaria;

            var url="reciclo/"+this.fillobject.id;
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
                text: "Desea Eliminar el registro del Año Escolar",
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
            var url = 'reciclo/'+dato.id;
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

        cerrarMatricula:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea cerrar el proceso de matrícula",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {
  
              if (result.value) {
                this.desactivarMatricula(dato.id);
              }
  
          }).catch(swal.noop);
        },
        abrirMatricula:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "Desea activar el proceso de matrícula",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {
  
              if (result.value) {
                this.activarMatricula(dato.id);
              }
          }).catch(swal.noop);
        },

        activarMatricula:function (id) {
            var url = 'reciclo/activarMatricula/'+id;
            axios.get(url).then(response=>{//get
                if(response.data.result=='1'){
                    this.getDatos(this.thispage);//listamos
                    toastr.success(response.data.msj);//mostramos mensaje
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            });
        },

        desactivarMatricula:function (id) {
            var url = 'reciclo/desactivarMatricula/'+id;
            axios.get(url).then(response=>{//get
                if(response.data.result=='1'){
                    this.getDatos(this.thispage);//listamos
                    toastr.success(response.data.msj);//mostramos mensaje
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            });
        },

        cerrarCiclo:function (dato) {
            swal.fire({
                title: '¿Estás seguro?',
                text: "¿Desea Finalizar y Cerrar el Año Escolar?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {
  
              if (result.value) {
                this.cerrarCicloEscolar(dato.id);
              }
          }).catch(swal.noop);
        },

        cerrarCicloEscolar:function (id) {
            var url = 'reciclo/cerrarCicloEscolar/'+id;
            axios.get(url).then(response=>{//get
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