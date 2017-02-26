<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminParcelamentoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cpf' => 'required',
            'produto_id' => 'required',
            'carne_id' => 'required',
            'vencimento' => 'required',
            'quantidade' => 'required',
            'valorUnitario' => 'required',
            'total' => 'required',
            'numParcelas' => 'required',
        ];
    }
}
