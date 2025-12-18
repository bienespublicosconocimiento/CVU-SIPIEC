<?php

return [
    'accepted' => 'El campo :attribute debe ser aceptado.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'required' => 'El campo :attribute es obligatorio.',
    'min' => [
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    // otros mensajes de validación...

    // Personalización de los atributos (nombres de los campos)
    'attributes' => [
        'email' => 'correo electrónico',
        'password' => 'contraseña',
        'name' => 'nombre',
        'username' => 'nombre de usuario',
        // Puedes agregar más atributos según los campos de tu formulario
    ],
];