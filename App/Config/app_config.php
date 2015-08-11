<?php

return [
    'default_controller' => 'home',
    'prefixes' => ['admin', 'user'],
    'languages' => ['Fr'],
    'environments_ip' => [
        '192.168.1.5' => 'dev',
        '127.0.0.1' => 'dev',
        '::1' => 'dev',
        'ip_prod' => 'prod'
    ]
];