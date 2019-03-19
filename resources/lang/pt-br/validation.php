<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O :attribute deve ser aceito.',
    'active_url'           => 'O :attribute não é uma URL válida.',
    'after'                => 'O :attribute deve ser uma data após :date.',
    'alpha'                => 'O :attribute deve conter apenas letras.',
    'alpha_dash'           => 'O :attribute deve conter apenas letras, números, e traços.',
    'alpha_num'            => 'O :attribute deve conter apenas letras e números.',
    'array'                => 'O :attribute must be an array.',
    'before'               => 'O :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file'    => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'O :attribute deve estar entre :min e :max caracteres.',
        'array'   => 'O :attribute deve estar entre :min e :max itens.',
    ],
    'boolean'              => 'O :attribute campo deve ser verdadeiro ou falso.',
    'confirmed'            => 'O :attribute não pode ser confirmado.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não segue o formato:format.',
    'different'            => 'O :attribute e :other devem ser diferentes.',
    'digits'               => 'O :attribute deve conter :digits digitos.',
    'digits_between'       => 'O :attribute deve estar entre :min e :max digitos.',
    'dimensions'           => 'O :attribute possui dimensoes de imagem invalida.',
    'distinct'             => 'O :attribute campo contém valor duplicado.',
    'email'                => 'O :attribute deve conter um endereço de email valido.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'file'                 => 'O :attribute deve conter um arquivo.',
    'filled'               => 'O :attribute campo é obrigatório.',
    'image'                => 'O :attribute deve conter uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O :attribute campo não existe no :other.',
    'integer'              => 'O :attribute deve conter um numero inteiro.',
    'ip'                   => 'O :attribute deve conter um endereço de IP valido.',
    'json'                 => 'O :attribute deve conter uma string JSON valida.',
    'max'                  => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file'    => 'O :attribute não deve ser maior que :max kilobytes.',
        'string'  => 'O :attribute não deve ser maior que :max caracteres.',
        'array'   => 'O :attribute não deve conter mais que :max itens.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O :attribute deve ter no mínimo :min.',
        'file'    => 'O :attribute deve ter no mínimo :min kilobytes.',
        'string'  => 'O :attribute deve ter no mínimo :min caracteres.',
        'array'   => 'O :attribute deve conter no mínimo :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => 'O :attribute deve conter um numero.',
    'present'              => 'O :attribute campo deve estar presente.',
    'regex'                => 'O :attribute está com formato inválido.',
    'required'             => 'O :attribute campo é obrigatório.',
    'required_if'          => 'O :attribute campo é obrigatório quando :other é :value.',
    'required_unless'      => 'O :attribute campo é obrigatório a menos que :other é :values.',
    'required_with'        => 'O :attribute campo é obrigatório quando :values existe.',
    'required_with_all'    => 'O :attribute campo é obrigatório quando :values existe.',
    'required_without'     => 'O :attribute campo é obrigatório quando :values não existe.',
    'required_without_all' => 'O :attribute campo é obrigatório quando nenhum :values existe.',
    'same'                 => 'O :attribute e :other precisam ser iguais.',
    'size'                 => [
        'numeric' => 'O :attribute deve conter :size.',
        'file'    => 'O :attribute deve conter :size kilobytes.',
        'string'  => 'O :attribute deve conter :size characters.',
        'array'   => 'O :attribute deve conter :size itens.',
    ],
    'string'               => 'O :attribute deve conter um texto.',
    'timezone'             => 'O :attribute deve conter um timezone válido.',
    'unique'               => 'O :attribute já existe.',
    'url'                  => 'O :attribute possui formato invalido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
