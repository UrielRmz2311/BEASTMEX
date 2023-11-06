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
    public function rulesFormRegisUsu(): array
    {
        return [
            'txtnombre'=>'required',
            'txtcontraseña'=>'required|max:8',
            'txtcorreo'=>'required|email',
            'puesto'=>'required'
        ];
    }
    public function rulesModalAgreVen(): array
    {
        return [
            'txtventa'=>'required',
            'txtticket'=>'required|numeric',
            'txtpreciot'=>'required|numeric'
        ];
    }
    public function rulesModalModiVen(): array
    {
        return [
            'txtventa'=>'required',
            'txtticket'=>'required|numeric',
            'txtpreciot'=>'required|numeric'
        ];
    }
    public function rulesFormRegisProd(): array
    {
        return [
            'numeroSerie'=>'required|numeric',
            'marca'=>'required',
            'cantidad'=>'required|numeric',
            'costo'=>'required|numeric',
            'fecha'=>'required|date',
            'foto'=>'required'
        ];
    }
    public function rulesModalModiPro(): array
    {
        return [
            'txtnserie'=>'required|numeric',
            'txtmarca'=>'required',
            'txtcantidad'=>'required|numeric',
            'txtcosto'=>'required|numeric',
            'txtprecioV'=>'required|numeric',
            'txtfecha'=>'required|date'      
        ];
    }
    public function rulesModalAgrePro(): array
    {
        return [
            'txtserie'=>'required|numeric',
            'txtmarc'=>'required',
            'txtcantida'=>'required|numeric',
            'txtcost'=>'required|numeric',
            'txtprecio'=>'required|numeric',
            'txtfech'=>'required|date'      
        ];
    }
    public function rulesModalAgreCom(): array
    {
        return [
            'txtproducto'=>'required',
            'txtcantidad'=>'required|numeric',
            'txtprecio'=>'required|numeric',
            'txtserie'=>'required|numeric'      
        ];
    }
    public function rulesModalModiCom(): array
    {
        return [
            'txtproduct'=>'required',
            'txtcantida'=>'required|numeric',
            'txtpreci'=>'required|numeric',
            'txtseri'=>'required|numeric'      
        ];
    }

}
