<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validador extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rulesFormulario1(): array
    {
        return [
            'txtProveedor' => 'required',
            'txtProducto1' => 'required',
            'txtCantidad1' => 'required',
            'txtProducto2' => 'required',
            'txtCantidad2' => 'required',
            'txtProducto3' => 'required',
            'txtCantidad3' => 'required',
            'txtProducto4' => 'required',
            'txtCantidad4' => 'required',
            'elementos1' => 'required|accepted',
            'elementos2' => 'required|accepted',
            'elementos3' => 'required|accepted',
            'elementos4' => 'required|accepted',
            'txtDireccion' => 'required'
        ];
    }
    public function rulesFormulario2(): array
    {
        return [
            'txtNombre' => 'required',
            'txtContra' => 'required',
            'txtCorreo' => 'required',
            'txtPuesto' => 'required'
        ];
    }
    public function rulesFormulario3(): array
    {
        return [
            'txtNom' => 'required',
            'txtCon' => 'required',
            'txtCor' => 'required',
            'txtPue' => 'required'
        ];
    }
    public function rulesFormulario4(): array
    {
        return [
            'txtProv' => 'required',
            'txtDir' => 'required'
        ];
    }
    public function rulesFormulario5(): array
    {
        return [
            'txtProvee' => 'required',
            'txtDirec' => 'required',
            'txtProduc' => 'required',
            'txtCant' => 'required'
        ];
    }
}
