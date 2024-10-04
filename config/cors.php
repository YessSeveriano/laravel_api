<?php

return [
    'paths' => ['api/*'], // Permite CORS solo para las rutas de la API
    'allowed_methods' => ['*'], // Permite todos los métodos HTTP (GET, POST, etc.)
    'allowed_origins' => ['http://localhost:8001'], // Cambia esto al puerto de tu frontend
    'allowed_headers' => ['*'], // Permite todos los encabezados
    'supports_credentials' => true, // Permite credenciales si es necesario
];
