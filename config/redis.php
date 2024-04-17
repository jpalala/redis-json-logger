<?php

return [
    'host' => env('REDIS_HOST', '127.0.0.1'),
    'scheme' => env('REDIS_SCHEME','tcp'),
    'port'   => env('REDIS_PORT', 6379)
];