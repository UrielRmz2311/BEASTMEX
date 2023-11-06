
















































































































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
