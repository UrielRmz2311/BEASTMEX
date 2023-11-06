
use Illuminate\Http\Request;
use App\Http\Requests\Validador;
use Illuminate\Support\Facades\Redirect;
















































































































    public function mostrarFormulario()
    {
        return view('RegistroUsuarios');
    }

    public function guardarUsuario(Validador $req){
        $Usuario=$req->input("txtnombre");
        return redirect("/RegistroUsu")->with("Confirmacion", "El usuario " . $Usuario . " se ha agregado correctamente");
    }
    public function guardarD(Validador $req){
        $Venta=$req->input("txtventa");
        $validatedData = $req->validate($req->rulesModalAgreVen());
    return redirect("/CVG")->with("Confirmacion", "La venta " . $Venta . " se ha guardado correctamente");
    }
    public function modificarD(Validador $req){
        $Venta=$req->input("txtventa");
        $validatedData = $req->validate($req->rulesModalModiVen());
        return redirect("/CVG")->with("Confirmacion", "La venta " . $Venta . " se ha modificado correctamente");
    }
    public function EliminarD(Validador $req){

        return redirect('/CVG')->with('Confirmacion','Venta eliminada correctamente');
    }
    public function mostrarAviso()
    {
        return view('OlvidemiContrasena');
    }
    public function ConsultaCGeren()
    {
        return view('Consulta-Compras-G');
    }
      public function ConsultaVGeren()
    {
        return view('Consulta-Ventas-G');
    }
    public function ReportesCVGeren()
    {
        return view('Reportes-Ven-Com-G');
    }
    public function ConsultaProduA()
    {
        return view('Consulta-Productos-A');
    }
    public function ConsultaProduC()
    {
        return view('Consulta-Productos-C');
    }
    public function mostrarFormularioPro()
    {
        return view('Registro-Producto-A');
    }
    public function rulesFormRegisProd(Validador $req){
        $Producto=$req->input("txtProducto");
        $validatedData = $req->validate($req->rulesFormRegisProd());
        return redirect("/RegistroPro")->with("Confirmacion", "El producto " . $Producto . " se ha agregado correctamente");
    }
    public function guardarP(Validador $req){
        $Producto=$req->input("txtserie");
        $validatedData = $req->validate($req->rulesModalAgrePro());
        return redirect("/CPA")->with("Confirmacion", "El producto " . $Producto . " se ha guardado correctamente");
    }
    public function modificarP(Validador $req){
        $Producto=$req->input("txtnserie");
        $validatedData = $req->validate($req->rulesModalModiPro());
        return redirect("/CPA")->with("Confirmacion", "El producto " . $Producto . " se ha modificado correctamente");
    }
    public function EliminarP(Validador $req){

        return redirect('/CPA')->with('Confirmacion','Producto eliminada correctamente');
    }
    public function guardarC(Validador $req){
        $Compra=$req->input("txtproducto");
        $validatedData = $req->validate($req->rulesModalAgreCom());
        return redirect("/CCG")->with("Confirmacion", "La compra " . $Compra . " se ha guardado correctamente");
    }
    public function modificarC(Validador $req){
        $Compra=$req->input("txtproduct");
        $validatedData = $req->validate($req->rulesModalModiCom());
        return redirect("/CCG")->with("Confirmacion", "La compra " . $Compra . " se ha modificado correctamente");
    }
    public function EliminarC(Validador $req){

        return redirect('/CCG')->with('Confirmacion','Compra eliminada correctamente');
    }

    public function FormularioProveedores(){
        return view ('FormProveedores');
    }
    public function ConUsuarios(){
        return view ('ConsultaUsuarios');
    }
    public function ConProveedores(){
        return view ('ConsultaProveedores');
    }
    public function Conticket(){
        return view ('ConsultaTicket');
    }
    public function Ticketsventa(){
        return view ('TicketsVenta');
    }
    public function ConTickets(){
        return view ('ConsultaTickets');
    }
    public function GananciaVenta(){
        return view ('GananciasVentas');
    }

    public function RegistroProv(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario1());
        $prov = $req->input('txtProveedor');

        return redirect('/prov')->with('confirmacion','Proveedor '. $prov . ' registrado correctamente');
    }

    public function ModificarUsu(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario2());

        return redirect('/conusu')->with('confirmacion2','Usuario modificado correctamente');
    }
    public function EliminarUsu(Validador $req){

        return redirect('/conusu')->with('confirmacion3','Usuario eliminado correctamente');
    }
    public function AgregarUsu(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario3());

        return redirect('/conusu')->with('confirmacion4','Usuario agregado correctamente');
    }
    public function ModificarProv(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario4());

        return redirect('/conusu')->with('confirmacion5','Proveedor modificado correctamente');
    }
    public function EliminarProv(Validador $req){

        return redirect('/conusu')->with('confirmacion6','Usuario eliminado correctamente');
    }
    public function AgregarProv(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario5());

        return redirect('/conusu')->with('confirmacion7','Usuario agregado correctamente');
    }

    public function metodoInicio(){
        return view('Login');
    }

    public function metodoalmacen(){
        return view('almacen');
    }

    
    public function metodogerente(){
        return view('iniciogerente');
    }

    public function metodocompras(){
        return view('iniciocompras');
    }

    public function metodoventass(){
        return view('inicioventas');
    }

    public function metodoLogin(Validador $req){
        $correo = $req->input('txtusuario');
        
        if (strpos($correo, '.gerente') !== false) {
            return view('iniciogerente');
        } elseif (strpos($correo, '.almacen') !== false) {
            return view('inicioalmacen');
        } elseif (strpos($correo, '.compras') !== false) {
            return view('iniciocompras');
        } elseif (strpos($correo, '.ventas') !== false) {
            return view('inicioventas');
        } else {
            // Si no tiene ninguna extensión específica
            return redirect('/')->with('mensaje', 'El usuario no es válido. Favor de inténtalo de nuevo !!!');
        }
    }