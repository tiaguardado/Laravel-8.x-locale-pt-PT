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

    'accepted' => ':attribute deve ser aceite.',
    'active_url' => ':attribute não tem um URL válido.',
    'after' => ':attribute deve ser uma data depois de :date.',
    'after_or_equal' => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => ':attribute deve conter apenas letras.',
    'alpha_dash' => ':attribute deve conter apenas letras, números, hífens e sublinhados.',
    'alpha_num' => ':attribute deve conter apenas letras e números.',
    'array' => ':attribute deve ser um array.',
    'before' => ':attribute deve ser uma data antes de :date.',
    'before_or_equal' => ':attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file' => ':attribute deve estar entre :min e :max kilobytes.',
        'string' => ':attribute deve estar entre :min e :max.',
        'array' => ':attribute deve estar entre :min and :max itens.',
    ],
    'boolean' => ':attribute campo deve ser verdadeiro ou falso.',
    'confirmed' => ':attribute a confirmação não corresponde.',
    'date' => ':attribute não é uma data válida.',
    'date_equals' => ':attribute deve ser uma data igual a :date.',
    'date_format' => ':attribute não corresponde ao formato :format.',
    'different' => ':attribute e :other são diferentes.',
    'digits' => ':attribute devem ser :digits dígitos.',
    'digits_between' => ':attribute deve estar entre :min e :max dígitos.',
    'dimensions' => ':attribute tem dimensões de imagem inválidas.',
    'distinct' => ':attribute tem um valor duplicado.',
    'email' => 'O :attribute eve ser um endereço de email válido.',
    'ends_with' => ':attribute deve terminar com um dos seguintes: :values.',
    'exists' => 'O item selecionado :attribute é inválido.',
    'file' => ':attribute tem de ser um ficheiro.',
    'filled' => ':attribute deve ter um valor.',
    'gt' => [
        'numeric' => ':attribute deve ser maior que :value.',
        'file' => ':attribute deve ser maior que :value kilobytes.',
        'string' => ':attribute deve ser maior que :value.',
        'array' => ':attribute deve ser maior que :value itens.',
    ],
    'gte' => [
        'numeric' => ':attribute deve ser maior ou igual :value.',
        'file' => ':attribute deve ser maior ou igual :value kilobytes.',
        'string' => ':attribute deve ser maior ou igual :value.',
        'array' => ':attribute deve ter :value itens ou mais.',
    ],
    'image' => ':attribute deve ser uma imagem.',
    'in' => ':attribute é inválido.',
    'in_array' => ':attribute não existe em :other.',
    'integer' => ':attribute deve ser um inteiro.',
    'ip' => ':attribute deve ser um endereço IP válido.',
    'ipv4' => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6' => ':attribute deve ser um endereço IPv6 válido.',
    'json' => ':attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => ':attribute deve ser menor que :value.',
        'file' => ':attribute deve ser menor que :value kilobytes.',
        'string' => ':attribute deve ser menor que :value.',
        'array' => ':attribute deve ser menor que :value itens.',
    ],
    'lte' => [
        'numeric' => ':attribute deve ser menor ou igual :value.',
        'file' => ':attribute deve ser menor ou igual :value kilobytes.',
        'string' => ':attribute deve ser menor ou igual :value.',
        'array' => ':attribute deve ser menor ou igual :value itens.',
    ],
    'max' => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file' => ':attribute não deve ser maior que :max kilobytes.',
        'string' => ':attribute não deve ser maior que :max.',
        'array' => ':attribute não deve ser maior que :max itens.',
    ],
    'mimes' => ':attribute deve ser um ficheiro do tipo: :values.',
    'mimetypes' => ':attribute deve ser um ficheiro do tipo: :values.',
    'min' => [
        'numeric' => ':attribute deve ter pelo menos :min.',
        'file' => ':attribute deve ter pelo menos :min kilobytes.',
        'string' => ':attribute deve ter pelo menos :min.',
        'array' => ':attribute deve ter pelo menos :min itens.',
    ],
    'multiple_of' => ':attribute deve ser um múltiplo de :value.',
    'not_in' => ':attribute é inválido.',
    'not_regex' => ':attribute tem um formato inválido.',
    'numeric' => ':attribute deve ser um número.',
    'password' => 'A Palavra-chave está incorreta',
    'present' => ':attribute deve estar presente.',
    'regex' => ':attribute tem um formato inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório a não ser que :other é em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a não ser :other é em :values.',
    'same' => 'O :attribute e :other não combinam.',
    'size' => [
        'numeric' => ':attribute deve ter :size.',
        'file' => ':attribute deve ter :size kilobytes.',
        'string' => ':attribute deve ter :size.',
        'array' => ':attribute deve conter :size itens.',
    ],
    'starts_with' => ':attribute deve começar com: :values.',
    'string' => ':attribute deve ser uma string.',
    'timezone' => ':attribute deve ser uma zona válida.',
    'unique' => 'Este :attribute já foi usado.',
    'uploaded' => ':attribute, upload falhou.',
    'url' => 'O :attribute é inválido.',
    'uuid' => ':attribute deve ser um válido UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
