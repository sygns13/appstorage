<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\TipoDocumentoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\PlantillaController;


use App\Http\Controllers\Admin\ReportPDFController;
/* Route::get('admin', function () {
        return "Holi boli";
})->name('user');

 */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('admin');
    Route::get('/areas', [AreaController::class, 'index1'])->name('areas');
    Route::get('/tipo-documentos', [TipoDocumentoController::class, 'index1'])->name('tipo-documentos');
    Route::get('/usuarios', [UserController::class, 'index1'])->name('usuarios');
    Route::get('/documentos', [DocumentoController::class, 'index1'])->name('documentos');
    Route::get('/plantillas', [PlantillaController::class, 'index1'])->name('plantillas');
    Route::get('/bandeja-entrada', [AreaController::class, 'index1'])->name('bandeja-entrada');
    Route::get('/vista-documentos', [DocumentoController::class, 'index2'])->name('vista-documentos');
    Route::get('/documentos-historicos', [DocumentoController::class, 'index3'])->name('documentos-historicos');
    Route::get('/lista-maestra', [AreaController::class, 'index1'])->name('lista-maestra');
    Route::get('/matriz-distribucion', [AreaController::class, 'index1'])->name('matriz-distribucion');
    Route::get('/responsabilidades', [AreaController::class, 'index1'])->name('responsabilidades');


    Route::resource('/reareas', AreaController::class);
    Route::resource('/retipo-documentos', TipoDocumentoController::class);
    Route::resource('/reusuarios', UserController::class);
    Route::resource('/redocumentos', DocumentoController::class);
    Route::resource('/replantillas', PlantillaController::class);

    Route::get('/reusuarios/altabaja/{id}/{var}',[UserController::class, 'altabaja'])->name('altabajausuario');

    Route::get('/getrepositorio',[DocumentoController::class, 'getrepositorio'])->name('getrepositorio');
    Route::post('/postVersionDoc',[DocumentoController::class, 'postVersionDoc'])->name('postVersionDoc');

    Route::get('/gethistoricos',[DocumentoController::class, 'gethistoricos'])->name('gethistoricos');


    /* Route::resource('/resecciones', SeccionesController::class);
    Route::resource('/reie', InstitucionEducativaController::class);
    Route::resource('/recursos', CursoController::class);
    Route::resource('/recompetencias', CompetenciaController::class);
    Route::resource('/redocentes', DocenteController::class);
    Route::resource('/reciclo', CicloEscolarController::class);
    Route::resource('/rehorario', HorarioController::class);
    Route::resource('/rehora', HoraController::class);
    Route::resource('/rematricula', MatriculaController::class);
    Route::resource('/remalumno', AlumnoController::class);
    Route::resource('/reasignacion-cursos', AsignacionCursoController::class);
    Route::resource('/redocente-asistencia-dia', DocenteAsistenciaDiaController::class);
    Route::resource('/reasistencia-docente', AsistenciaDocenteController::class);
    Route::resource('/reasistencia', AsistenciaController::class);
    Route::resource('/reasistencia-alumno', AsistenciaAlumnoController::class);

    Route::get('/renominas', [MatriculaController::class, 'indexNomina'])->name('renominas');
    Route::get('/rehorarioget', [HorarioController::class, 'indexReporte'])->name('rehorarioget');


    Route::get('/redocentes/altabajadocente/{id}/{var}',[DocenteController::class, 'altabaja'])->name('altabajadocente');
    Route::get('/reciclo/activarMatricula/{id}',[CicloEscolarController::class, 'activarMatricula'])->name('activarMatricula');
    Route::get('/reciclo/desactivarMatricula/{id}',[CicloEscolarController::class, 'desactivarMatricula'])->name('desactivarMatricula');
    Route::get('/reciclo/cerrarCicloEscolar/{id}',[CicloEscolarController::class, 'cerrarCicloEscolar'])->name('cerrarCicloEscolar');
    Route::get('/rematricula/getCicloSeccion/{gradoMaster_id}',[MatriculaController::class, 'getCicloSeccion'])->name('getCicloSeccion');
    Route::get('/rematricula/getmatriculaactiva/{alumno_id}',[MatriculaController::class, 'getMatriculaActiva'])->name('getMatriculaActiva');
    Route::get('/regetlista-alumnos',[DocenteController::class, 'getListaAlumnos'])->name('getListaAlumnos');
    Route::get('/regetlista-alumnos-asignacion',[DocenteController::class, 'getListaAlumnosAsignacion'])->name('getListaAlumnosAsignacion');

    Route::get('/generate-pdf', [MatriculaController::class, 'generatePDF']);
    Route::get('/ver-pdf', [ReportPDFController::class, 'verPDF']);
    Route::get('/d-pdf', [ReportPDFController::class, 'descargarPDF']);

    Route::get('/realumnobuscar/buscar/{tipo_documento_id}/{num_documento}',[AlumnoController::class, 'buscarAlumno'])->name('buscarAlumno');




    //Reportes PDF
    Route::get('/reportepdf/ficha-matricula/{alumno_id}',[ReportPDFController::class, 'impFichaMatricula'])->name('impFichaMatricula');
    Route::get('/reportepdf/nomina-matricula/{ciclo_seccion_id}',[ReportPDFController::class, 'impNominaMatricula'])->name('impNominaMatricula');
    Route::get('/reportepdf/horario-seccion/{ciclo_seccion_id}',[ReportPDFController::class, 'impHorarioSeccion'])->name('impHorarioSeccion'); */

});
