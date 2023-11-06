














































<<<<<<< HEAD
Route::get('/RegistroUsu', [Controlador::class, 'mostrarFormulario'])->name('formulario');
Route::post('/guardarUsuario', [Controlador::class, 'guardarUsuario'])->name('guardar');
Route::get('/Olvide', [Controlador::class, 'mostrarAviso'])->name('AVISO');
Route::get('/', function () {
    return view('Login'); 
})->name('Login');
Route::get('/CCG', [Controlador::class, 'ConsultaCGeren'])->name('CCG');
Route::get('/CVG', [Controlador::class, 'ConsultaVGeren'])->name('CVG');
Route::get('/RCVG', [Controlador::class, 'ReportesCVGeren'])->name('RCVG');
Route::get('/CPA', [Controlador::class, 'ConsultaProduA'])->name('CPA');
Route::get('/CPC', [Controlador::class, 'ConsultaProduC'])->name('CPC');
Route::post('/guardarD', [Controlador::class,'guardarD'])->name('rulesModalAgreVen');
Route::post('/modificarD', [Controlador::class,'modificarD'])->name('rulesModalModiVen');
Route::get('/RegistroPro', [Controlador::class, 'mostrarFormularioPro'])->name('formularioPro');
Route::post('/EliminarD',[Controlador::class,'EliminarD'])->name('eliminarD');
Route::post('/rulesFormRegisProd', [Controlador::class,'rulesFormRegisProd'])->name('rulesFormRegisProd');
Route::post('/guardarP', [Controlador::class,'guardarP'])->name('rulesModalAgrePro');
Route::post('/modificarP', [Controlador::class,'modificarP'])->name('rulesModalModiPro');
Route::post('/EliminarP',[Controlador::class,'EliminarP'])->name('eliminarP');
Route::post('/guardarC', [Controlador::class,'guardarC'])->name('rulesModalAgreCom');
Route::post('/modificarC', [Controlador::class,'modificarC'])->name('rulesModalModiCom');
Route::post('/EliminarC',[Controlador::class,'EliminarC'])->name('eliminarC');
=======

Route::get('/', function () {
    return view('Login');
});

Route::get('/prov', [Controlador::class,'FormularioProveedores'])->name('RutaProv');
Route::get('/conusu', [Controlador::class,'ConUsuarios'])->name('RutaConUsu');
Route::get('/conprov', [Controlador::class,'ConProveedores'])->name('RutaConProv');
Route::get('/tickven', [Controlador::class,'Ticketsventa'])->name('RutaTicketVen');
Route::get('/conti', [Controlador::class,'Conticket'])->name('RutaContick');
Route::get('/conticks', [Controlador::class,'ConTickets'])->name('RutaConTickets');
Route::get('/gananven', [Controlador::class,'GananciaVenta'])->name('RutaGanancias');

Route::post('/RegistroProv',[Controlador::class,'RegistroProv'])->name('registrar');
Route::post('/ModificarUsu',[Controlador::class,'ModificarUsu'])->name('modificar');
Route::post('/EliminarUsu',[Controlador::class,'EliminarUsu'])->name('eliminar');
Route::post('/AgregarUsu',[Controlador::class,'AgregarUsu'])->name('agregar');
Route::post('/ModificarProv',[Controlador::class,'ModificarProv'])->name('modificar2');
Route::post('/EliminarProv',[Controlador::class,'EliminarProv'])->name('eliminar2');
Route::post('/AgregarProv',[Controlador::class,'AgregarProv'])->name('agregar2');

Route::get('/', [Controlador::class,'metodoInicio'])->name('Iniciodesesion');
Route::get('/almacen', [Controlador::class,'metodoalmacen'])->name('Inicioalmacen');
Route::get('/gerente', [Controlador::class,'metodogerente']);
Route::get('/compras', [Controlador::class,'metodocompras']);
Route::get('/ventas', [Controlador::class,'metodoventass']);

Route::post('/metodologin', [Controlador::class, 'metodoLogin']);
>>>>>>> main

