
<?php

return [
    'host' => env('REPLICADO_HOST'),
    'port' => env('REPLICADO_PORT'),
    'database' => env('REPLICADO_DATABASE'),
    'username' => env('REPLICADO_USERNAME'),
    'password' => env('REPLICADO_PASSWORD'),
    'codundclg' => env('REPLICADO_CODUNDCLG'),
    'codundclgs' => env('REPLICADO_CODUNDCLGS'),
    'pathlog' => env('REPLICADO_PATHLOG', base_path('/storage/logs/replicado.log')),
    'sybase' => env('REPLICADO_SYBASE', 1),
    'usarCache' => env('REPLICADO_USAR_CACHE', 0),
    'debug' => env('REPLICADO_DEBUG', config('app.debug')),
];
