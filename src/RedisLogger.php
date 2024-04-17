<?php

namespace Jpalala\RedisJsonLogger;

use Illuminate\Support\Facades\Redis;
use Exception;

class RedisLogger
{
    public function log(Exception $exception)
    {
        $logData = [
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString(),
            // You can include any additional data you need here
        ];

        $jsonData = json_encode($logData);

        Redis::connection()->rpush('error_logs', $jsonData);
    }
}