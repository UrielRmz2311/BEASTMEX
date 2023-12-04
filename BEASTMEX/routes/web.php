<?php

//Impoortaciones
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ConsultadeticketdeventaController;
use App\Http\Controllers\ConsultadeventaController;
use App\Http\Controllers\GananciapormesController;
use App\Http\Controllers\GananciasdeventaController;
use App\Http\Controllers\OrdendecompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TicketdeventaController;
use App\Http\Controllers\UsuarioController;
use App\Models\producto;
use Barryvdh\DomPDF\Facade\pdf as PDF;




//Fin de importaciones

//Rutas Alan

Route::get('/', [Controlador::class,'metodoInicio']);
Route::get('/InicioGerente', [Controlador::class,'metodogerente']);
Route::get('/InicioAlmacen', [Controlador::class,'metodoinialmacen']);
Route::get('/InicioCompras', [Controlador::class,'metodocompras']);
Route::get('/InicioVentas', [Controlador::class,'metodoventass']);
Route::get('/Almacen', [Controlador::class,'metodoalmacen']);
Route::post('/Inicio', [Controlador::class,'metodoLogin'])->name('Inicio');
























//Fin de rutas Alan

//Rutas Joni
Route::get('/RegistrarUsuario', [UsuarioController::class,'registrousu']);
Route::resource('usuario',UsuarioController::class);
Route::resource('proveedor',ProveedorController::class);
Route::get('Registroproveedor',[ProveedorController::class,'registro']);
Route::resource('ticketventa',TicketdeventaController::class);
Route::resource('consultaventa',ConsultadeventaController::class);
Route::resource('consultatickets',ConsultadeticketdeventaController::class);
Route::resource('gananciasporventa',GananciasdeventaController::class);
Route::resource('gananciaspormes',GananciapormesController::class);
Route::resource('ordendecompra',OrdendecompraController::class);
Route::get('Registrorden',[OrdendecompraController::class,'registro']);
Route::get('/buscarp', [OrdendecompraController::class,'buscar'])->name('buscarp');
Route::get('/buscaru', [UsuarioController::class,'buscar'])->name('buscaru');
Route::get('/buscarpr', [ProveedorController::class,'buscar'])->name('buscarpr');
Route::get('/generar-pdf/{id}',[OrdendecompraController::class,'generarPDF'])->name('generar.pdf');
Route::get('Registroproveedor',[ProveedorController::class,'registroproveedor']);
Route::resource('ticketventa',TicketdeventaController::class);
Route::resource('consultaventa',ConsultadeventaController::class);
Route::resource('consultatickets',ConsultadeticketdeventaController::class);




















//Fin de rutas Joni

//Rutas Jessy
Route::resource('productos',ProductoController::class);
Route::get('/RegistroAlmacen', [ProductoController::class,'Registro']);
//Route::get('/InicioAlmacen', [Controlador::class,'metodoinialmacen']);
Route::get('/RAlmacen', [Controlador::class,'mostrarFormularioProd']);
Route::get('/Cproductos', [ProductoController::class,'ConsultaProduC']);
//Route::get('/producto_individual/{id}', [Controlador::class,'generarPdfProducto']);
//Route::get('/generar-pdf-producto/{id}', [ProductoController::class,'generarPdfProducto'])->name('generar.pdf.producto');
Route::get('/generar-pdf-producto/{id}',function (Request $request, $id)
{
    $allProduct = producto::find($id); // Obtén el producto según el ID proporcionado

    if ('producto') {
        abort(404, 'Producto no encontrado');
    }

    $pdf = PDF::loadView('producto_individual', compact('producto'));

    return $pdf->download('producto_' . $allProduct->noserie . '.pdf');
});




























//Fin de rutas Jessy
