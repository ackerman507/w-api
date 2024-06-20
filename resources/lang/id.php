<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => ':email o :password incorrecta.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'año(s)',
        'm' => 'mes(es)',
        'd' => 'día(s)',
        'h' => 'hora(s)',
        'i' => 'minuto(s)',
        's' => 'segundo(s)',

        'ago' => 'atrás.',
        'recently' => 'Recientemente',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [

        'request' => [
            'required' => ':field requerido!.',
            'email' => ':field no válido!.',
            'dns' => ':field no válido!.',
            'url' => ':field no válido!.',
            'uuid' => ':field no es uuid!.',
            'int' => ':field debe ser un número!.',
            'float' => ':field debe ser un decimal!.',
            'min' => ':field longitud mínima: :attribute',
            'max' => ':field longitud máxima: :attribute',
            'sama' => ':field no es lo mismo :attribute',
            'unik' => ':field ya existe!.',
        ],

        'file' => [
            'required' => ':field requerido!.',
            'min' => ':field longitud mínima: :attribute',
            'max' => ':field longitud máxima: :attribute',
            'mimetypes' => ':field permitido: :attribute',
            'mimes' => ':field permitido: :attribute',
            'unsafe' => ':field indicado como inseguro!.',
            'corrupt' => ':field no se cargó correctamente!.',
        ],
    ]
];
